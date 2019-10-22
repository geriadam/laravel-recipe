@extends('backend.layouts.app')

@section('content')
    <div class="hk-pg-header">
        <h4 class="hk-pg-title"><span class="pg-title-icon"><i class="fa fa-users"></i></span></span>Edit Ingrendient</h4>
    </div>

    <section class="hk-sec-wrapper">
        <div class="row">
            <div class="col-sm">
                {{ Form::open(['route' => ['backend.master.ingrendient.update', $ingrendient->id], 'files' => true, 'method' => 'PUT']) }}
                <div class="form-group">
                    <label>Name<span class="text-danger">*</span></label>
                    {!! Form::text('name', $ingrendient->name, ["class" => "form-control"]) !!}
                </div>
                <div class="form-group">
                    <label>Description<span class="text-danger">*</span></label>
                    {!! Form::textarea('description', $ingrendient->description, ["class" => "form-control tinymce"]) !!}
                </div>
                <div class="form-group">
                    <label>Image
                    <br>
                    {!! Form::file('file', null, ["class" => "form-control"]) !!}
                </div>
                <hr>

                <div class="row">
                    <div class="col-sm-6">
                        <a href="{{ route('backend.master.ingrendient.index') }}" class="btn btn-secondary btn-rounded">Cancel</a>
                        <button class="btn btn-primary btn-rounded" type="submit">Save</button>
                    </div>
                    <div class="col-sm-6">
                        <span class="pull-right"><span class="text-danger">*</span>required</span>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </section>
@endsection
