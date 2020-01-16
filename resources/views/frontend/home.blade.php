@extends('layouts.template')
@section('content')
<section class="ranna-slider-area">
    <div class="container">
        <div class="rc-carousel nav-control-layout2" data-loop="true" data-items="30" data-margin="5"
            data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="700" data-dots="false"
            data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true"
            data-r-x-small-dots="false" data-r-x-medium="1" data-r-x-medium-nav="true" data-r-x-medium-dots="false"
            data-r-small="1" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="1"
            data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="1" data-r-large-nav="true"
            data-r-large-dots="false" data-r-extra-large="1" data-r-extra-large-nav="true"
            data-r-extra-large-dots="false">
            @foreach($randoms as $j => $random)
                <div class="ranna-slider-content-layout1">
                    <figure class="item-figure"><a href="single-recipe1.html"><img src="{{ asset($random->image_url) }}" alt="Product"></a></figure>
                    <div class="item-content">
                        <span class="sub-title">{{ $random->category->name }}</span>
                        <h3 class="item-title"><a href="{{ route('frontend.recipe.show', ["slug" => $random->slug]) }}">{{ $random->title }}</a></h3>
                        {!! \Str::words($random->description, 18,'....')  !!}
                        <ul class="entry-meta">
                            <li><a href="#"><i class="fas fa-clock"></i>{{ $random->cooking_time }}</a></li>
                            <li><a href="#"><i class="fas fa-user"></i>by <span>{{ $random->user->name }}</span></a></li>
                            <li><a href="#"><i class="fas fa-heart"></i>{{ ucfirst($random->difficulty) }}</a></li>
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Slider Area End Here -->
<!-- Trending Recipe Start Here -->
<section class="padding-bottom-45">
    <div class="container">
        <div class="row gutters-60">
            <div class="col-lg-12">
                <div class="section-heading heading-dark">
                    <h2 class="item-heading">TRENDING RECIPES</h2>
                </div>
                <div class="row">
                    @foreach($recipes as $recipe)
                        <div class="col-md-6 col-sm-6 col-12">
                            <div class="product-box-layout1">
                                <figure class="item-figure"><a href="{{ route('frontend.recipe.show', ['slug' => $recipe->slug]) }}"><img src="{{ asset($recipe->image_url) }}" alt="Product"></a></figure>
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
        </div>
    </div>
</section>
<!-- Trending Recipe End Here -->
<!-- Editor’s Choice Start Here -->
<!-- <section class="padding-bottom-45">
    <div class="container">
        <div class="section-heading heading-dark">
            <h2 class="item-heading">EDITOR'S CHOICE</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="product-box-layout2">
                    <figure class="item-figure"><a href="single-recipe1.html"><img src="{{ asset('frontend/img/product/product11.jpg') }}"
                                alt="Product"></a></figure>
                    <div class="item-content">
                        <span class="sub-title">BREAKFAST</span>
                        <h3 class="item-title"><a href="single-recipe1.html">Tomatoes Stuffed with Foie and
                                Chanterelles</a></h3>
                        <ul class="item-rating">
                            <li class="star-fill"><i class="fas fa-star"></i></li>
                            <li class="star-fill"><i class="fas fa-star"></i></li>
                            <li class="star-fill"><i class="fas fa-star"></i></li>
                            <li class="star-fill"><i class="fas fa-star"></i></li>
                            <li class="star-empty"><i class="fas fa-star"></i></li>
                            <li><span>9<span> / 10</span></span> </li>
                        </ul>
                        <ul class="entry-meta">
                            <li><a href="#"><i class="fas fa-clock"></i>15 Mins</a></li>
                            <li><a href="#"><i class="fas fa-user"></i>by <span>John Martin</span></a></li>
                            <li><a href="#"><i class="fas fa-heart"></i><span>02</span> Likes</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="product-box-layout2">
                    <figure class="item-figure"><a href="single-recipe1.html"><img src="{{ asset('frontend/img/product/product12.jpg') }}"
                                alt="Product"></a></figure>
                    <div class="item-content">
                        <span class="sub-title">DESERT</span>
                        <h3 class="item-title"><a href="single-recipe1.html">Pumpkin Cheesecake With
                                GingersnapCrust</a></h3>
                        <ul class="item-rating">
                            <li class="star-fill"><i class="fas fa-star"></i></li>
                            <li class="star-fill"><i class="fas fa-star"></i></li>
                            <li class="star-fill"><i class="fas fa-star"></i></li>
                            <li class="star-fill"><i class="fas fa-star"></i></li>
                            <li class="star-empty"><i class="fas fa-star"></i></li>
                            <li><span>9<span> / 10</span></span> </li>
                        </ul>
                        <ul class="entry-meta">
                            <li><a href="#"><i class="fas fa-clock"></i>15 Mins</a></li>
                            <li><a href="#"><i class="fas fa-user"></i>by <span>John Martin</span></a></li>
                            <li><a href="#"><i class="fas fa-heart"></i><span>02</span> Likes</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-block d-md-none d-lg-block col-sm-12 col-12">
                <div class="product-box-layout2">
                    <figure class="item-figure"><a href="single-recipe1.html"><img src="{{ asset('frontend/img/product/product13.jpg') }}"
                                alt="Product"></a></figure>
                    <div class="item-content">
                        <span class="sub-title">JUICE</span>
                        <h3 class="item-title"><a href="single-recipe1.html">Blueberry Juice with Lemon Crema</a></h3>
                        <ul class="item-rating">
                            <li class="star-fill"><i class="fas fa-star"></i></li>
                            <li class="star-fill"><i class="fas fa-star"></i></li>
                            <li class="star-fill"><i class="fas fa-star"></i></li>
                            <li class="star-fill"><i class="fas fa-star"></i></li>
                            <li class="star-empty"><i class="fas fa-star"></i></li>
                            <li><span>9<span> / 10</span></span> </li>
                        </ul>
                        <ul class="entry-meta">
                            <li><a href="#"><i class="fas fa-clock"></i>15 Mins</a></li>
                            <li><a href="#"><i class="fas fa-user"></i>by <span>John Martin</span></a></li>
                            <li><a href="#"><i class="fas fa-heart"></i><span>02</span> Likes</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- Editor’s Choice End Here -->
<!-- Instagram Start Here -->
<section class="instagram-feed-wrap">
    <div class="instagram-feed-title"><a href="#"><i class="fab fa-instagram"></i>Follow On Instagram</a></div>
    <ul class="instagram-feed-figure">
        <li>
            <a href="single-recipe1.html"><img src="{{ asset('frontend/img/social-figure/socia') }}l-figure1.jpg" alt="Social"></a>
        </li>
        <li>
            <a href="single-recipe1.html"><img src="{{ asset('frontend/img/social-figure/socia') }}l-figure2.jpg" alt="Social"></a>
        </li>
        <li>
            <a href="single-recipe1.html"><img src="{{ asset('frontend/img/social-figure/socia') }}l-figure3.jpg" alt="Social"></a>
        </li>
        <li>
            <a href="single-recipe1.html"><img src="{{ asset('frontend/img/social-figure/socia') }}l-figure4.jpg" alt="Social"></a>
        </li>
        <li>
            <a href="single-recipe1.html"><img src="{{ asset('frontend/img/social-figure/socia') }}l-figure5.jpg" alt="Social"></a>
        </li>
        <li>
            <a href="single-recipe1.html"><img src="{{ asset('frontend/img/social-figure/socia') }}l-figure6.jpg" alt="Social"></a>
        </li>
        <li>
            <a href="single-recipe1.html"><img src="{{ asset('frontend/img/social-figure/socia') }}l-figure7.jpg" alt="Social"></a>
        </li>
        <li>
            <a href="single-recipe1.html"><img src="{{ asset('frontend/img/social-figure/socia') }}l-figure8.jpg" alt="Social"></a>
        </li>
    </ul>
</section>
@endsection
