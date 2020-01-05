<div class="tile">
    {{ Form::open(['route' => ['backend.master.setting.store'], 'files' => true]) }}
        <h3 class="tile-title">Kontak</h3>
        <hr>
        {!! Form::hidden('id', $setting->id ?? null) !!}
        <div class="tile-body">
            <div class="form-group">
                <label class="control-label" for="contact_phone">Phone</label>
                {!! Form::text('phone', $setting->phone ?? null, ["class" => "form-control", "placeholder" => "Phone"]) !!}
            </div>
            <div class="form-group">
                <label class="control-label" for="contact_email">Email</label>
                {!! Form::email('email', $setting->email ?? null, ["class" => "form-control", "placeholder" => "Email"]) !!}
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
