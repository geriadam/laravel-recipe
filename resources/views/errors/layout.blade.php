@extends('layouts.app')
@php
  $title = 'Error '.$error_number;
@endphp

@push('after_styles')
    <style>
        .error_number {
            font-size: 156px;
            font-weight: 600;
            line-height: 100px;
        }
        .error_number small {
            font-size: 56px;
            font-weight: 700;
        }

        .error_number hr {
            margin-top: 60px;
            margin-bottom: 0;
            width: 50px;
        }

        .error_title {
            margin-top: 40px;
            font-size: 36px;
            font-weight: 400;
        }

        .error_description {
            font-size: 24px;
            font-weight: 400;
        }
    </style>
@endpush

@section('content')
<div class="container">
    <div class="col-md-12 text-center">
        <div class="card">
            <div class="card-body">
                <div class="error_number">
                    {{ $error_number }}
                    <hr>
                </div><br>
                <div class="error_title text-muted">
                    @yield('title')
                </div>
                <div class="error_description text-muted">
                    <small>
                        @yield('description')
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
