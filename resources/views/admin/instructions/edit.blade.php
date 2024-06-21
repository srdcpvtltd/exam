@extends('admin.layout.index')

@section('title')
    INSTRUCTION
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Edit Instruction</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{route('admin.Instruction.update')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <input type="hidden" name="id" value="{{$edit_instruction->id}}">
                        <label for="notice_type" class="form-label">Title<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="title" value="{{$edit_instruction->title}}" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="notice_type" class="form-label">Details<span style="color: red">*</span></label>
                    {{-- <input type="text" class="form-control" name="title" placeholder="Enter Title" required> --}}
                    <textarea class="form-control texteditor" name="description"cols="30" rows="4" placeholder="Enter description" required> {{$edit_instruction->description}} </textarea>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
