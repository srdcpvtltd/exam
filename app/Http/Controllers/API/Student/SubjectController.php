<?php

namespace App\Http\Controllers\API\Student;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class SubjectController extends Controller
{
    public function get_subject()
    {
        $subjects = Subject::where('course_id', Auth::user()->studentProfile->course_id)
            ->where('semester_id', Auth::user()->studentProfile->semester_id)
            ->with(['course', 'semester'])
            ->get();
        // dd($subjects->course);
        foreach ($subjects as $subject) {

            // Log::info();
            $subject->course_name = $subject->course->title;
            $subject->semester_name = $subject->semester->name;
            $subject->unsetRelation('course');
            $subject->unsetRelation('semester');
        }

        return response()->json([
            'data' => $subjects
        ]);
    }
}
