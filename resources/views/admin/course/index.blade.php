@extends('admin.layout.index')

@section('title')
Manage Course
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
        <!-- Basic layout-->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Add New Course</h5>
                <div class="header-elements">
                </div>
            </div>

            <div class="card-body">
                <form action="{{route('admin.course.store')}}" method="post" enctype="multipart/form-data" >
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Course Name</label>
                            <input name="name" type="text" class="form-control" placeholder="Enter Course Name" required>
                        </div>
                        <div class="text-right" style="margin-top:28px;">
                        <button type="submit" class="btn btn-primary">Add Course <i class="icon-paperplane ml-2"></i></button>
                    </div>
                    </div>

                    
                </form>
            </div>
        </div>
        <!-- /basic layout -->

    </div>
</div>

<div class="card">

    <table class="table datatable-save-state">
        <thead>
            <tr>
                <th>#</th>
                <th>Course Name</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach (App\Models\Web\Course::all()  as $key => $course)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$course->title}}</td>
                
                <td>
                    <button data-toggle="modal" data-target="#edit_modal" name="{{$course->title}}" 
                    id="{{$course->id}}" class="edit-btn btn btn-primary">Edit</button>
                </td>
                <td>
                    <form action="{{route('admin.course.destroy',$course->id)}}" method="POST">
                        @method('DELETE')
                        @csrf
                    <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div id="edit_modal" class="modal fade">
    <div class="modal-dialog">
        <form id="updateForm" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Update Course</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Course Name</label>
                        <input class="form-control" type="text" id="name" name="name" placeholder="Enter name" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function(){
        $('.edit-btn').click(function(){
            let name = this.name;
            let id = $(this).attr('id');
            $('#name').val(name);
            $('#id').val(id);
            $('#updateForm').attr('action','{{route('admin.course.update','')}}' +'/'+id);
        });
    });
</script>
@endsection