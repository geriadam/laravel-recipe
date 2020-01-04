@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @foreach($favorites as $favorite)
            <div class="col-md-4">
                <a href="{{ route('frontend.recipe.show', $favorite->recipe->slug) }}" style="text-decoration: none;">
                    <div class="card" style="color: black">
                        <div class="card-header">{{ $favorite->recipe->title }}</div>
                        <div class="card-body">
                            <img src="{{ url($favorite->recipe->image_url) }}" width="100%" height="auto"> <br> <br>
                            Category : {{ $favorite->recipe->category->name }} <br>
                            Time Estimation : {{ $favorite->recipe->time }}

                        </div>
                        <div class="card-footer">
                            @if(\Auth::check())
                                <a href="{{ route('frontend.favorite.recipe.destroy', $favorite) }}" style="text-decoration: none;">Delete</a>
                            @endif
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
        {{ $favorites->links() }}
    </div>
</div>
@endsection
