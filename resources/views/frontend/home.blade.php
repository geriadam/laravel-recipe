@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @foreach($recipes as $recipe)
            <div class="col-md-4">
                <a href="{{ route('frontend.recipe.show', $recipe->slug) }}" style="text-decoration: none;">
                    <div class="card" style="color: black">
                        <div class="card-header">{{ $recipe->title }}</div>
                        <div class="card-body">
                            <img src="{{ url($recipe->image_url) }}" width="100%" height="auto"> <br> <br>
                            Category : {{ $recipe->category->name }} <br>
                            Time Estimation : {{ $recipe->time }}
                        </div>
                        <div class="card-footer">
                            @if(\Auth::check())
                                <a href="{{ route('frontend.recipe.favorite', $recipe) }}" style="text-decoration: none;">Add to Favorite</a>
                            @endif
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
        {{ $recipes->links() }}
    </div>
</div>
@endsection
