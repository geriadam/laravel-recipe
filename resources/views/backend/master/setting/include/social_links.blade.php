<div class="tile">
    {{ Form::open(['route' => ['backend.master.setting.store'], 'files' => true]) }}
        <h3 class="tile-title">Social Media</h3>
        <hr>
        {!! Form::hidden('id', $setting->id ?? null) !!}
        <div class="tile-body">
            <div class="form-group">
                <label class="control-label" for="facebook_url">Facebook</label>
                {!! Form::text('facebook_url', $setting->facebook_url ?? null, ["class" => "form-control", "placeholder" => "http://facebook.com"]) !!}
            </div>
            <div class="form-group">
                <label class="control-label" for="twitter_url">Twitter</label>
                {!! Form::text('twitter_url', $setting->twitter_url ?? null, ["class" => "form-control", "placeholder" => "http://twitter.com"]) !!}
            </div>
            <div class="form-group">
                <label class="control-label" for="instagram_url">Instagram</label>
                {!! Form::text('instagram_url', $setting->instagram_url ?? null, ["class" => "form-control", "placeholder" => "http://instagram.com"]) !!}
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
