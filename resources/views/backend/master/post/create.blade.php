@extends('backend.layouts.app')
@section('content')
    <div class="hk-pg-header">
        <h4 class="hk-pg-title">
            <span class="pg-title-icon"><i class="fa fa-stethoscope"></i></span> Create Post
        </h4>
    </div>

    <section class="hk-sec-wrapper">
        <div class="row">
            <div class="col-sm">
                {{ Form::open(['route' => ['backend.master.post.store'], 'files' => true]) }}
                <div class="form-group">
                    <label>Title<span class="text-danger">*</span></label>
                    {!! Form::text('title', null, ["class" => "form-control"]) !!}
                </div>
                <div class="form-group">
                    <label>Short Description<span class="text-danger">*</span></label>
                    {!! Form::textarea('short_description', null, ["class" => "form-control"]) !!}
                </div>
                <div class="form-group">
                    <label>Description<span class="text-danger">*</span></label>
                    {!! Form::textarea('description', null, ["class" => "form-control"]) !!}
                </div>
                <div class="form-group">
                    <label>Status<span class="text-danger">*</span></label>
                    {!! Form::select('status', ['active' => 'Active', 'deactive' => 'Deactive'], false, ["class" => "form-control select2"]) !!}
                </div>
                <div class="form-group">
                    <label>Tags</label>
                    {!! Form::text('tags', null, ["class" => "form-control"]) !!}
                </div>
                <div class="form-group">
                    <label>Image
                    <br>
                    {!! Form::file('file', null, ["class" => "form-control"]) !!}
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <a href="{{ route('backend.master.post.index') }}" class="btn btn-secondary btn-rounded">Cancel</a>
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
