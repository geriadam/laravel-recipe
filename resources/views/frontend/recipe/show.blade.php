@extends('layouts.template')
@section('content')
<!-- Inne Page Banner Area Start Here -->
<section class="inner-page-banner bg-common" data-bg-image="img/figure/inner-page-banner1.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs-area">
                    <h1>Details</h1>
                    <ul>
                        <li>
                            <a href="{{ route('frontend.home') }}">Home</a>
                        </li>
                        <li>Recipe Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Inne Page Banner Area End Here -->
<!-- Single Recipe With Sidebar Area Start Here -->
<section class="single-recipe-wrap-layout1 padding-top-74 padding-bottom-50">
    <div class="container">
        <div class="row gutters-60">
            <div class="col-lg-12">
                <div class="single-recipe-layout1">
                    <div class="ctg-name">{{ $recipe->category->name }}</div>
                    <h2 class="item-title">{{ $recipe->title }}</h2>
                    <div class="row mb-4">
                        <div class="col-xl-9 col-12">
                            <ul class="entry-meta">
                                <li class="single-meta"><a href="#"><i class="far fa-calendar-alt"></i>{{ $recipe->created_at->format('F, d Y') }}Nov 14,2018</a></li>
                                <li class="single-meta"><a href="#"><i class="fas fa-user"></i>by <span>{{ $recipe->user->name }}</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item-figure" style="text-align: center;">
                        <img src="{{ asset($recipe->image_url) }}" alt="{{ $recipe->title }}">
                    </div>
                    <div class="item-feature">
                        <ul>
                            <li>
                                <div class="feature-wrap">
                                    <div class="media">
                                        <div class="feature-icon">
                                            <i class="far fa-clock"></i>
                                        </div>
                                        <div class="media-body space-sm">
                                            <div class="feature-title">PREP TIME</div>
                                            <div class="feature-sub-title">{{ $recipe->prepare_time }}</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="feature-wrap">
                                    <div class="media">
                                        <div class="feature-icon">
                                            <i class="fas fa-utensils"></i>
                                        </div>
                                        <div class="media-body space-sm">
                                            <div class="feature-title">COOK TIME</div>
                                            <div class="feature-sub-title">{{ $recipe->cooking_time }}</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="feature-wrap">
                                    <div class="media">
                                        <div class="feature-icon">
                                            <i class="fas fa-users"></i>
                                        </div>
                                        <div class="media-body space-sm">
                                            <div class="feature-title">SERVING</div>
                                            <div class="feature-sub-title">{{ $recipe->serves }}</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="feature-wrap">
                                    <div class="media">
                                        <div class="feature-icon">
                                            <i class="far fa-eye"></i>
                                        </div>
                                        <div class="media-body space-sm">
                                            <div class="feature-title">VIEWS</div>
                                            <div class="feature-sub-title">3,450</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <p class="item-description">{!! $recipe->description !!}</p>
                    <div class="making-elements-wrap">
                        <div class="row">
                            <div class="col-xl-12 col-12">
                                <div class="ingridients-wrap">
                                    <h3 class="item-title"><i class="fas fa-list-ul"></i>Ingridients</h3>
                                    @foreach($recipe->ingredients_label as $i => $ingredients_label)
                                        @if($ingredients_label != "")
                                            <div class="checkbox checkbox-primary">
                                                <input id="checkbox-{{ $i }}" type="checkbox">
                                                <label for="checkbox-{{ $i }}">{{ $ingredients_label }}</label>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="direction-wrap-layout1">
                        <div class="section-heading heading-dark">
                            <h2 class="item-heading">DIRECTIONS</h2>
                        </div>
                        <p class="section-paragraph">Salamander lied porpoise much over tightly circa horse
                            taped so innocuously side crudey mightily rigorous plot life. New homes in
                            particular are subject. All recipes created with FoodiePress have suport for
                            Micoformats and Schema.org is a collaboration byo improve convallis.</p>
                        @foreach($recipe->direction_label as $key => $direction_label)
                            @if($direction_label != "")
                                <div class="direction-box-layout1">
                                    <div class="item-content">
                                        <div class="serial-number">{{ $key }} Step</div>
                                        <p>{!! $direction_label !!}</p>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Single Recipe With Sidebar Area End Here -->
@endsection
