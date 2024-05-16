
@extends('prospect.layout.index')

@section('title')
    Dashboard
@endsection
@section('styles')
    <style>
        .response_error{
            color : red;
        }
        .response_success{
            color : green;
        }
    </style>
@endsection

@section('content')


<div class="row">
    <div class="col-md-12">
            <div class="card card-body">
                <div class="media mb-0">
                    <div class="media-body">
                        <h6 class="font-weight-semibold mb-0 text-center">
                            Welcome To Prospect Panel!
                        </h6>
                    </div>
                </div>
            </div>
            
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        
        <div class="card">
            <div class="card-header header-elements-inline">
                <h6 class="card-title">Addmission Form For {{Auth::user()->entrance_fee?Auth::user()->entrance_fee->exam_name.' (Fee '.Auth::user()->entrance_fee->exam_fee.' )':''}}</h6>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>
            @if(Auth::user()->studentProfile)
            <div class="card-body">
                <div class="media mb-0">
                    <div class="media-body">
                        <h6 class="font-weight-semibold mb-0 text-center">
                            Your application is submitted!
                        </h6>
                        <a href="{{route('prospect.dashboard.generate_pdf')}}" class="btn btn-primary text-right">Download PDF</a>
                        @include('prospect.application.partials.profile_detail')
                    </div>
                </div>
            </div>
            @else
            <div class="card-body" id="applicationFields">
                @if(!request()->session()->has('application_process') || request()->session()->has('application_process') && request()->session()->get('application_process')->step == 1)
                    @include('prospect.dashboard.ajax_partials.new_registration')
                @endif
                @if(request()->session()->has('application_process') && request()->session()->get('application_process')->step == 2)
                @include('prospect.dashboard.ajax_partials.new_basic_information')
                @endif
                @if(request()->session()->has('application_process') && request()->session()->get('application_process')->step == 3)
                @include('prospect.dashboard.ajax_partials.academic_qualification')
                @endif
                @if(request()->session()->has('application_process') && request()->session()->get('application_process')->step == 4)
                @include('prospect.dashboard.ajax_partials.documents_uploaded')
                @endif
            </div>
                {{-- 
                <h6>Documents Uploaded</h6>
                <fieldset>
                    @include('prospect.dashboard.partials.documents_uploaded')
                </fieldset>
                <h6>Payment Of Fees</h6>
                <fieldset>
                    @include('prospect.dashboard.partials.payment_of_fees')
                </fieldset> --}}
            </form>
            @endif
        </div>
    </div>
</div>
@endsection
@section('scripts')
@include('prospect.dashboard.ajax_partials.js')
@include('prospect.dashboard.partials.js')
@endsection