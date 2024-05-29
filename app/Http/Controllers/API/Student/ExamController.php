<?php

namespace App\Http\Controllers\API\Student;

use App\Http\Controllers\Controller;
use App\Models\Exam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExamController extends Controller
{
    public function get_exams(Request $request)
    {
        $search_text = $request->search_text;
        $limit = $request->limit > 0 ? $request->limit : 10;
        $index = $request->index > 0 ? $request->index : 0;
        $q = Exam::where('course_id', Auth::user()->studentProfile->course_id)
            ->where('semester_id', Auth::user()->studentProfile->semester_id)
            ->whereDate('form_start_date', '<=', date('Y-m-d'))
            ->whereDate('form_last_date', '>=', date('Y-m-d'))
            ->with(['course', 'semester'])
            ->limit($limit)
            ->offSet($index);

        if ($search_text) {
            $q->where(function ($query) use ($search_text) {
                $query->where('name', 'like', "%{$search_text}%")
                    ->orWhereHas('course', function ($query) use ($search_text) {
                        $query->where('title', 'like', "%{$search_text}%");
                    });
            });
        }

        $exams_data = $q->get();
        foreach ($exams_data as $exam) {

            // Log::info();
            $exam->course_name = $exam->course->title;
            $exam->semester_name = $exam->semester->name;
            $exam->unsetRelation('course');
            $exam->unsetRelation('semester');
        }

        if ($exams_data->toArray() != []) {
            return response()->json([
                'data' => $exams_data,
                'code' => 200
            ]);
        }else{
            return response()->json([
                'message' => "No exam details found.",
                'code' => 500
            ]);
        }

    }
}
