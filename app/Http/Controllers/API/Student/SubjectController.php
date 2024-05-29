<?php

namespace App\Http\Controllers\API\Student;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class SubjectController extends Controller
{
    public function get_subject(Request $request)
    {
        $search_text = $request->search_text;
        $limit = $request->limit > 0 ? $request->limit : 10;
        $index = $request->index > 0 ? $request->index : 0;
        $q = Subject::where('course_id', Auth::user()->studentProfile->course_id)
            ->where('semester_id', Auth::user()->studentProfile->semester_id)
            ->with(['course', 'semester'])
            ->limit($limit)
            ->offSet($index);
        // dd($subjects->course);
        if ($search_text) {
            $q->where(function ($query) use ($search_text) {
                $query->where('name', 'like', "%{$search_text}%")
                    ->orWhereHas('course', function ($query) use ($search_text) {
                        $query->where('title', 'like', "%{$search_text}%");
                    });
            });
        }

        $subjects = $q->get();
        foreach ($subjects as $subject) {

            // Log::info();
            $subject->course_name = $subject->course->title;
            $subject->semester_name = $subject->semester->name;
            $subject->unsetRelation('course');
            $subject->unsetRelation('semester');
        }

        if ($subjects) {
            return response()->json([
                'data' => $subjects,
                'code' => 200
            ]);
        }else{
            return response()->json([
                'message' => "No subject found with the specified criteria.",
                'code' => 500
            ]);
        }
    }
}
