<?php

namespace App\Http\Controllers\Prospect;

use App\Http\Controllers\Controller;
use App\Models\MockResult;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Result;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnswerController extends Controller
{
    public function store(Request $request)
    {

        if (Carbon::now() > Carbon::parse($request->start_time)->addMinute(Quiz::where('id', $request->quiz_id)->value('duration'))) {
            return redirect()->back()->with('error', 'Time is Over');
        }
        $i = 1;
        $db_answers = Question::where('quiz_id', $request->quiz_id)->get();
        $correct = 0;
        $total = 0;
        foreach ($db_answers as $db_answer) {
            if ($db_answer->correct_option == $request->answer[$i]) {
                $correct++;
            } else {
            }
            $i++;
            $total++;
        }
        $quiz = Quiz::where('id', $request->quiz_id)->first();
        // dd($request->all());
        if ($quiz->quiz_type == 'mock') {
            MockResult::create([
                'user_id' => Auth::user()->id,
                'quiz_id' => $request->quiz_id,
                'quiz_score' => $total,
                'achieved_score' => $correct
            ]);
        } else {
            Result::create([
                'user_id' => Auth::user()->id,
                'quiz_id' => $request->quiz_id,
                'quiz_score' => $total,
                'achieved_score' => $correct
            ]);
        }


        return redirect()->route('prospect.results')->with('success', 'Quiz done and result published');
    }

//     public function store(Request $request)
// {
//     // Validate the form submission time
//     if (Carbon::now() > Carbon::parse($request->start_time)->addMinute(Quiz::where('id', $request->quiz_id)->value('duration'))) {
//         return redirect()->back()->with('error', 'Time is Over');
//     }

//     $db_answers = Question::where('quiz_id', $request->quiz_id)->get();
//     $correct = 0;
//     $total = 0;

//     // Ensure we initialize i from 1 to match the form's answer indices
//     $i = 1;

//     foreach ($db_answers as $db_answer) {
//         // Check if the answer for the current question exists in the request
//         if (isset($request->answer[$i]) && $db_answer->correct_option == $request->answer[$i]) {
//             $correct++;
//         }
//         $i++;
//         $total++;
//     }

//     // Fetch the quiz details
//     $quiz = Quiz::where('id', $request->quiz_id)->first();

//     // Create result based on quiz type
//     if ($quiz->quiz_type == 'mock') {
//         MockResult::create([
//             'user_id' => Auth::user()->id,
//             'quiz_id' => $request->quiz_id,
//             'quiz_score' => $total,
//             'achieved_score' => $correct
//         ]);
//     } else {
//         Result::create([
//             'user_id' => Auth::user()->id,
//             'quiz_id' => $request->quiz_id,
//             'quiz_score' => $total,
//             'achieved_score' => $correct
//         ]);
//     }

//     // Redirect to results page with success message
//     return redirect()->route('prospect.results')->with('success', 'Quiz done and result published');
// }

}
