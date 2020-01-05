@extends('backend.layouts.app')

@section('content')
    <div class="hk-pg-header">
        <h4 class="hk-pg-title">
            <span class="pg-title-icon"><i class="fa fa-stethoscope"></i></span> Edit Recipe
        </h4>
    </div>

    <section class="hk-sec-wrapper">
        <div class="row">
            <div class="col-sm">
                {{ Form::open(['route' => ['backend.master.post.update', $post], 'files' => true, 'method' => 'PUT']) }}
                <div class="form-group">
                    <label>Title<span class="text-danger">*</span></label>
                    {!! Form::text('title', $post->title, ["class" => "form-control"]) !!}
                </div>
                <div class="form-group">
                    <label>Short Description<span class="text-danger">*</span></label>
                    {!! Form::textarea('short_description', $post->short_description, ["class" => "form-control"]) !!}
                </div>
                <div class="form-group">
                    <label>Description<span class="text-danger">*</span></label>
                    {!! Form::textarea('description', $post->description, ["class" => "form-control"]) !!}
                </div>
                <div class="form-group">
                    <label>Status<span class="text-danger">*</span></label>
                    {!! Form::select('status', ['active' => 'Active', 'deactive' => 'Deactive'], $post->status, ["class" => "form-control select2"]) !!}
                </div>
                <div class="form-group">
                    <label>Tags</label>
                    {!! Form::text('tags', $post->Tags, ["class" => "form-control"]) !!}
                </div>
                <div class="form-group">
                    <label>Image
                    <br>
                    {!! Form::file('file', null, ["class" => "form-control"]) !!}
                    <br>
                    <img src="{{ asset($post->image_url) }}" width="400" height="300">
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
