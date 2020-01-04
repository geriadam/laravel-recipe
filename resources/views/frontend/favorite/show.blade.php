@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="color: black">
                <div class="card-header">{{ $recipe->title }}</div>
                <div class="card-body">
                    <img src="{{ url($recipe->image_url) }}" width="100%" height="auto"> <br> <br>
                    Category : {{ $recipe->category->name }} <br>
                    Time Estimation : {{ $recipe->time }} <br> <br>
                    {!! $recipe->description !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
