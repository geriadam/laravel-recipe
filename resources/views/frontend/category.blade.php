@extends('layouts.template')
@section('content')
<section class="category-page-wrap padding-top-80 padding-bottom-50">
    <div class="container">
        <div class="row">
            @foreach($categories as $category)
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="category-box-layout1">
                        <figure class="item-figure"><a href="{{ route('frontend.recipe.category', ['slug' => $category->slug]) }}"><img src="{{ asset($category->image_url) }}" alt="Product"></a></figure>
                        <div class="item-content">
                            <h3 class="item-title"><a href="{{ route('frontend.recipe.category', ['slug' => $category->slug]) }}">{{ $category->name }}</a></h3>
                            <span class="sub-title"> {{ $category->recipe->count() }} Recipes</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
