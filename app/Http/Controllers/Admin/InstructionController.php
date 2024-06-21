<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Instruction;
use Illuminate\Http\Request;

class InstructionController extends Controller
{
    public function list()
    {
        $all_instruction = Instruction::all();
        return view('admin.instructions.list', compact('all_instruction'));
    }
    public function add()
    {
        return view('admin.instructions.add');
    }
    public function store(Request $request)
    {
        $store_instruction = new Instruction;
        $store_instruction->title = $request->title;
        $store_instruction->description = $request->description;

        $store_instruction->save();
        toastr()->success('Instruction Added Successfully!');
        return redirect()->route('admin.Instruction.list');
    }
    public function edit($id)
    {
        $edit_instruction = Instruction::find($id);
        return view('admin.instructions.edit', compact('edit_instruction'));
    }
    public function update(Request $request)
    {
        $update_instruction = Instruction::find($request->id);
        $update_instruction->title = $request->title;
        $update_instruction->description = $request->description;

        $update_instruction->save();
        toastr()->success('Instruction Updated Successfully!');
        return redirect()->route('admin.Instruction.list');
    }
    public function delete($id)
    {
        $delete_instruction = Instruction::find($id);
        if ($delete_instruction) {
            $delete_instruction->delete();
            toastr()->success('Deleted Successfully!');
            return redirect()->back();
        }
        toastr()->error('Something Went Wrong');
        return redirect()->back();
    }
}
