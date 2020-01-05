<div class="tile">
    {{ Form::open(['route' => ['backend.master.setting.store'], 'files' => true]) }}
        <h3 class="tile-title">Logo Website</h3>
        <hr>
        {!! Form::hidden('id', $setting->id ?? null) !!}
        <div class="tile-body">
            <div class="form-group">
                <label class="control-label" for="logo">Site Logo</label>
                <br>
                @if (isset($setting->logo) && $setting->logo != null)
                    <img src="{{ asset($setting->logo_url) }}" id="logoImg" style="width: 80px; height: auto;">
                @else
                    <img src="https://via.placeholder.com/80x80?text=Placeholder+Image" id="logoImg" style="width: 80px; height: auto;">
                @endif
                <br>
                {!! Form::file('file_logo', null, ["class" => "form-control"]) !!}
            </div>
            <div class="form-group">
                <label class="control-label" for="favicon">Site Favicon</label>
                <br>
                @if (isset($setting->favicon) && $setting->favicon != null)
                    <img src="{{ asset($setting->favicon_url) }}" id="logoImg" style="width: 80px; height: auto;">
                @else
                    <img src="https://via.placeholder.com/80x80?text=Placeholder+Image" id="logoImg" style="width: 80px; height: auto;">
                @endif
                <br>
                {!! Form::file('file_favicon', null, ["class" => "form-control"]) !!}
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
