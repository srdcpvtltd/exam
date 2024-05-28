<?php

namespace App\Http\Controllers\API\Student;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubjectController extends Controller
{
    public function get_subject(){
        $subjects = Subject::where('course_id',Auth::user()->studentProfile->course_id)
        ->where('semester_id',Auth::user()->studentProfile->semester_id)
        ->get();
        dd($subjects->toArray());
    }
}
