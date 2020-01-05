@extends('backend.layouts.app')

@section('content')
    <div class="hk-pg-header">
        <h4 class="hk-pg-title"><span class="pg-title-icon"><i class="fa fa-users"></i></span></span>Setting</h4>
    </div>

    <section class="hk-sec-wrapper">
        <div class="row">
            <div class="col-md-3">
                <ul class="nav flex-column nav-tabs user-tabs">
                    <li class="nav-item"><a class="nav-link active" href="#general" data-toggle="tab">General</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact" data-toggle="tab">Kontak</a></li>
                    <li class="nav-item"><a class="nav-link" href="#site-logo" data-toggle="tab">Logo Website</a></li>
                    <li class="nav-item"><a class="nav-link" href="#social-links" data-toggle="tab">Social Media</a></li>
                </ul>
            </div>
            <div class="col-md-9">
                <div class="tab-content">
                    <div class="tab-pane active" id="general">
                        @include('backend.master.setting.include.general', ['setting' => $setting])
                    </div>
                    <div class="tab-pane" id="contact">
                        @include('backend.master.setting.include.contact', ['setting' => $setting])
                    </div>
                    <div class="tab-pane fade" id="site-logo">
                        @include('backend.master.setting.include.logo', ['setting' => $setting])
                    </div>
                    <div class="tab-pane fade" id="social-links">
                        @include('backend.master.setting.include.social_links', ['setting' => $setting])
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
