@extends('prospect.layout.index')
@section('title')
    INSTRUCTION
@endsection
@section('content')
    <style>
        body {
            background: #eee;
            margin-top: 20px;
        }

        .rounded {
            -webkit-border-radius: 3px !important;
            -moz-border-radius: 3px !important;
            border-radius: 3px !important;
        }

        .mini-stat {
            padding: 15px;
            margin-bottom: 20px;
        }

        .mini-stat-icon {
            width: 60px;
            height: 60px;
            display: inline-block;
            line-height: 60px;
            text-align: center;
            font-size: 30px;
            background: none repeat scroll 0% 0% #EEE;
            border-radius: 100%;
            float: left;
            margin-right: 10px;
            color: #FFF;
        }

        .mini-stat-info {
            font-size: 12px;
            padding-top: 2px;
        }

        /* span,
                p {
                    color: white;
                } */

        .mini-stat-info span {
            display: block;
            font-size: 30px;
            font-weight: 600;
            margin-bottom: 5px;
            margin-top: 7px;
        }

        /* ================ colors =====================*/
        .bg-facebook {
            background-color: #125875 !important;
            border: 1px solid #125875;
            color: white;
        }

        .fg-facebook {
            color: #3b5998 !important;
        }
    </style>
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Manage Instruction</h5>
        </div>
        {{-- <table class="table datatable-save-state">
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
        </table> --}}

        <div class="container bootstrap snippets bootdey">
            <div class="row">
                @php
                    $i = 1;
                @endphp
                @foreach ($all_instruction as $instruction)
                    <div class="col-md-4 col-sm-6 col-xs-12">

                        {{-- <a href="#" class="small-box-footer" data-toggle="modal"
                            data-target="#viewModal{{ $instruction->id }}"> --}}
                            <div class="mini-stat clearfix bg-facebook rounded">
                                <div class="mini-stat-info">
                                    <h6>{{ $instruction->title }}</h6>
                                </div>

                                <a href="#" class="small-box-footer" data-toggle="modal"
                                    data-target="#viewModal{{ $instruction->id }}">More info <i
                                        class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        {{-- </a> --}}

                    </div>


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
            </div>
        </div>
    </div>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">




    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
@endsection
