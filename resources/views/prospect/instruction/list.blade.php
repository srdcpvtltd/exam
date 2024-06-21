@extends('prospect.layout.index')
@section('title')
    INSTRUCTION
@endsection
@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Manage Instruction</h5>
        </div>
        <table class="table datatable-save-state">
            <thead>
                <tr>
                    <th>#</th>
                    <th style="text-align: center">Title</th>
                    <th style="text-align: right">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($all_instruction as $instruction)
                    <tr>
                        <td>{{ $i }}</td>
                        <td style="text-align: center">{{ $instruction->title }}</td>
                        <td style="text-align: right">
                            <button class="btn btn-icon btn-primary btn-sm" data-toggle="modal"
                                data-target="#viewModal{{ $instruction->id }}">
                                <i class="fas fa-eye"></i>
                            </button>
                        </td>
                    </tr>

                    <!-- Modal -->
                    <div class="modal fade" id="viewModal{{ $instruction->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="instructionModalLabel{{ $instruction->id }}" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="instructionModalLabel{{ $instruction->id }}">Instruction
                                        Details</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p><strong>Title: <br> </strong> {{ $instruction->title }}</p>
                                    <p><strong>Description:</strong> {!! $instruction->description !!}</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    @php
                        $i++;
                    @endphp
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
@endsection
