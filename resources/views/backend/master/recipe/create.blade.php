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
                    <label>Title<span class="text-danger">*</span></label>
                    {!! Form::text('title', null, ["class" => "form-control"]) !!}
                </div>
                <div class="form-group">
                    <label>Time<span class="text-danger">*</span></label>
                    {!! Form::text('time', null, ["class" => "form-control"]) !!}
                </div>
                <div class="form-group">
                    <label>Category<span class="text-danger">*</span></label>
                    {!! Form::select('category_id', $categories, false, ["class" => "form-control select2"]) !!}
                </div>
                <div class="form-group">
                    <label>Description<span class="text-danger">*</span></label>
                    {!! Form::textarea('description', null, ["class" => "form-control tinymce"]) !!}
                </div>

                <!-- Dinamik Form -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="row-template" style="display: none">
                                <table class="table-template">
                                    <tr id="row-{index}" class="row-item">
                                        <td class="row-number">{indexNo}</td>
                                        <td>
                                            {!! Form::select('ingrendients_id[{index}]', $ingrendients, null, ["class" => "form-control"]) !!}
                                        </td>
                                        <td>
                                            {!! Form::textarea('ingrendient_description[{index}]', null, ["class" => "form-control gejala", "rows" => 3]) !!}
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-danger btn-sm button-remove">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-stripped table-item">
                                    <thead>
                                    <tr class="row-header">
                                        <th>No</th>
                                        <th class="w-25">Ingrendient</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody id="container">
                                    <tr id="row-0" class="row-item">
                                        <td class="row-number">1</td>
                                        <td>
                                            {!! Form::select('ingrendients_id[0]', $ingrendients, null, ["class" => "form-control"]) !!}
                                        </td>
                                        <td>
                                            {!! Form::textarea('ingrendient_description[0]', null, ["class" => "form-control gejala", "rows" => 3]) !!}
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="m-3">
                                <button type="button" class="btn btn-primary btn-block btn-clone">
                                    <i class="fa fa-plus"></i> Add
                                </button>
                            </div>
                        </div>
                    </div>
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
            var index = 0;

            function rearrangeRowNumber() {
                $('.row-number').each(function (index) {
                    $(this).html(parseInt(index));
                });
            }

            $('.btn-clone').click(function () {
                if (typeof $('.table-item .row-item').first().attr('id') != 'undefined')
                    index += parseInt($('.table-item .row-item').first().attr('id').split('-')[1]) + 1;

                var clone = $('.table-template .row-item').clone().attr('id', 'row-' + index);

                clone.html(function (i, oldTr) {
                    return oldTr.replace(/\{index}/g, index);
                });
                clone.html(function (i, oldTr) {
                    return oldTr.replace(/\{indexNo}/g, parseInt(index) + 1);
                });

                $('#container').append(clone);
                rearrangeRowNumber();
            });

            $(document).on('click', '.button-remove', function (e) {
                var tr = $(this).parent().parent();
                tr.remove();
                rearrangeRowNumber();
            });

        </script>
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
