@extends('backend.layouts.app')

@push('after_styles')
    <link href="{{ asset('vendors/bootstrap-file-input/fileinput.css') }}" rel="stylesheet" type="text/css">
@endpush

@section('content')
    <div class="hk-pg-header">
        <h4 class="hk-pg-title">
            <span class="pg-title-icon"><i class="fa fa-stethoscope"></i></span> Create Recipe
        </h4>
    </div>

    <section class="hk-sec-wrapper">
        <div class="row">
            <div class="col-sm">
                {{ Form::open(['route' => ['backend.master.recipe.store'], 'files' => true]) }}
                <div class="form-group">
                    <label>Category<span class="text-danger">*</span></label>
                    {!! Form::select('category_id', $categories, false, ["class" => "form-control select2"]) !!}
                </div>
                <div class="form-group">
                    <label>Title<span class="text-danger">*</span></label>
                    {!! Form::text('title', null, ["class" => "form-control"]) !!}
                </div>
                <div class="form-group">
                    <label>Difficulty<span class="text-danger">*</span></label> <br>
                    {!! Form::radio('difficulty', 'easy', false) !!} easy <br>
                    {!! Form::radio('difficulty', 'medium', false) !!} Medium <br>
                    {!! Form::radio('difficulty', 'hard', false) !!} Hard
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Prepare Time<span class="text-danger">*</span></label>
                            {!! Form::text('prepare_time', null, ["class" => "form-control"]) !!}
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Cooking Time<span class="text-danger">*</span></label>
                            {!! Form::text('cooking_time', null, ["class" => "form-control"]) !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Serves<span class="text-danger">*</span></label>
                            {!! Form::text('serves', null, ["class" => "form-control"]) !!}
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Calories</label>
                            {!! Form::text('calories', null, ["class" => "form-control"]) !!}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    {!! Form::textarea('description', null, ["class" => "form-control tinymce"]) !!}
                </div>
                <div class="form-group">
                    <label>Direction</label>
                    {!! Form::textarea('directions', null, ["class" => "form-control tinymce"]) !!}
                </div>
                <div class="form-group">
                    <label>Ingredients</label>
                    {!! Form::textarea('ingredients', null, ["class" => "form-control tinymce"]) !!}
                    <small>New line for ingredients</small>
                </div>
                <div class="form-group">
                    <label>Status<span class="text-danger">*</span></label>
                    {!! Form::select('status', ['active' => 'Active', 'deactive' => 'Deactive'], false, ["class" => "form-control select2"]) !!}
                </div>
                <div class="form-group">
                    <label>Video Link</label>
                    {!! Form::text('video_link', null, ["class" => "form-control"]) !!}
                </div>
                <div class="form-group">
                    <label>Image
                    <br>
                    {!! Form::file('file', null, ["class" => "form-control"]) !!}
                </div>
                <div class="form-group">
                    <label>Image Gallery<span class="text-danger">*</span></label>
                    <div class="file-loading">
                        <input
                            id="file-1"
                            type="file"
                            name="files[]"
                            class="file"
                            data-show-upload="false"
                            data-overwrite-initial="false"
                            data-browse-on-zone-click="true"
                            data-show-preview="true" multiple>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <a href="{{ route('backend.master.recipe.index') }}" class="btn btn-secondary btn-rounded">Cancel</a>
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
    @push('after_scripts')
        <script src="{{ asset('vendors/bootstrap-file-input/fileinput.js') }}"></script>
        <script src="{{ asset('vendors/bootstrap-file-input/theme.js') }}"></script>
        <script src="{{ asset('vendors/bootstrap-file-input/popper.min.js') }}"></script>
        <script>
            $("#uploadImage").fileinput({
                theme: 'fa',
                allowedFileExtensions: ['jpg', 'png', 'gif'],
                overwriteInitial: false,
                dropZoneEnabled: true,
                maxFileSize: 2000,
                maxFilesNum: 10,
                uploadExtraData: function () {
                    return {
                        _token: $("input[name='_token']").val(),
                    };
                },
                slugCallback: function (filename) {
                    console.log(filename);
                    return filename.replace('(', '_').replace(']', '_');
                }
            });
        </script>
    @endpush
@endsection
