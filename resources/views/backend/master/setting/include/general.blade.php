<div class="tile">
    {{ Form::open(['route' => ['backend.master.setting.store'], 'files' => true]) }}
        <h3 class="tile-title">General Settings</h3>
        <hr>
        {!! Form::hidden('id', $setting->id ?? null) !!}
        <div class="tile-body">
            <div class="form-group">
                <label class="control-label" for="website_tittle">Title</label>
                {!! Form::text('title', $setting->title ?? null, ["class" => "form-control", "title" => "Website Title"]) !!}
            </div>
            <div class="form-group">
                <label class="control-label" for="meta_keyword">Keyword</label>
                {!! Form::textarea('meta_keyword', $setting->meta_keyword ?? null, ["class" => "form-control", "placeholder" => "Meta Keyword"]) !!}
            </div>
            <div class="form-group">
                <label class="control-label" for="description">Description</label>
                {!! Form::textarea('description', $setting->description ?? null, ["class" => "form-control", "placeholder" => "Website Description"]) !!}
            </div>
        </div>
        <div class="tile-footer">
            <div class="row d-print-none mt-2">
                <div class="col-12 text-right">
                    <button class="btn btn-success" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update</button>
                </div>
            </div>
        </div>
    {!! Form::close() !!}
</div>
