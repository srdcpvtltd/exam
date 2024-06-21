@extends('admin.layout.index')

@section('title')
    INSTRUCTION
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Add Instruction</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{route('admin.Instruction.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <label for="notice_type" class="form-label">Title<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="title" placeholder="Enter Title" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="notice_type" class="form-label">Details<span style="color: red">*</span></label>
                    {{-- <input type="text" class="form-control" name="title" placeholder="Enter Title" required> --}}
                    <textarea class="form-control texteditor" name="description"cols="30" rows="4" placeholder="Enter description" required></textarea>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
