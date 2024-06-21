@extends('admin.layout.index')

@section('title')
INSTRUCTION
@endsection

@section('content')

<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">Manage Instruction</h5>
        <div class="header-elements">
            <div class="list-icons">
                <a class="btn btn-primary" href="{{route('admin.Instruction.add')}}">Add New Instruction</a>

            </div>
        </div>
    </div>
    <table class="table datatable-save-state">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Description</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 1;
            @endphp
            @foreach ($all_instruction as $instruction)

            <tr>
                <td>{{$i}}</td>
                <td>{{$instruction->title}}</td>
                <td>{!!$instruction->description!!}</td>
                <td>
                    <a class="btn btn-icon btn-primary btn-sm" href="{{route('admin.Instruction.edit',$instruction->id)}}"><i class="far fa-edit"></i></a>
                </td>
                <td>
                    <a class="btn btn-icon btn-danger btn-sm" onclick="confirmDelete('{{route('admin.Instruction.delete',$instruction->id)}}')"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
            @php
                $i++;
            @endphp
            @endforeach
        </tbody>
    </table>
</div>

<script>
    function confirmDelete(deleteUrl) {
         var isConfirmed =confirm("Are you sure you want to delete this item?");
          if (isConfirmed) {
              window.location.href = deleteUrl;
          } else {

              alert("Deletion canceled");
          }
       }
  </script>
@endsection

