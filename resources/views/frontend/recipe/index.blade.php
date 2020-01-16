@extends('layouts.template')
@section('content')
<section class="recipe-without-sidebar-wrap padding-top-80 padding-bottom-22">
    <div class="container">
        {{ Form::open(['route' => 'frontend.recipe.index', 'method' => 'GET']) }}
            <div class="adv-search-wrap">
                <div class="input-group">
                    <input name="title" type="text" class="form-control" placeholder="Recipe Search . . ." value="{{ old('title') }}" />
                    <div class="btn-group">
                        <div class="input-group-btn">
                            <button type="submit" class="btn-search"><i class="flaticon-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        {!! Form::close() !!}
        <div class="row">
            @foreach($recipes as $recipe)
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="product-box-layout1">
                        <figure class="item-figure"><a href="single-recipe1.html"><img src="{{ asset($recipe->image_url) }}" alt="Product"></a></figure>
                        <div class="item-content">
                            <span class="sub-title">{{ $recipe->category->name }}</span>
                            <h3 class="item-title"><a href="{{ route('frontend.recipe.show', ["slug" => $recipe->slug]) }}">{{ $recipe->title }}</a></h3>
                            {!! \Str::words($recipe->description, 18,'....')  !!}
                            <ul class="entry-meta">
                                <li><a href="#"><i class="fas fa-clock"></i>{{ $recipe->cooking_time }}</a></li>
                                <li><a href="#"><i class="fas fa-user"></i>by <span>{{ $recipe->user->name }}</span></a></li>
                                <li><a href="#"><i class="fas fa-heart"></i>{{ ucfirst($recipe->difficulty) }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
