@extends('layouts.app',['pageTitle' => __(' Treatment Information Add')])
@section('content')

@component('layouts.parts.breadcrumb')
    @slot('title')
        {{ __(' Treatment Information') }}
    @endslot
@endcomponent

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Edit  Treatment Information') }}</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/treatment-information') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="feather-16" data-feather="arrow-left"></i> Back</button></a>
                        <br />
                        <br />
                        <form method="POST" id="oneTimeSubmit" action="{{ url('/admin/treatment-information/' . $treatmentinformation->id) }}" accept-charset="UTF-8" class="form-horizontal needs-validation" novalidate=""  enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('admin.treatment-information.form', ['formMode' => 'edit'])

                        </form>

                    </div>
                </div>
            </div>

@endsection
