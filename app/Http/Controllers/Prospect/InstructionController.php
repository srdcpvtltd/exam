<?php

namespace App\Http\Controllers\Prospect;

use App\Http\Controllers\Controller;
use App\Models\Instruction;
use Illuminate\Http\Request;

class InstructionController extends Controller
{
    public function list()
    {
        $all_instruction = Instruction::orderBy('id','desc')->get ();
        return view('prospect.instruction.list', compact('all_instruction'));
    }
    public function view($id)
{
    $instructions = Instruction::find($id);
    return view('instruction.partials.view', compact('instructions'));
}
}
