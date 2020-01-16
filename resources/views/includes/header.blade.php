<header class="header-one">
    <div id="header-main-menu" class="header-main-menu header-sticky">
        <div class="container">                    
            <div class="row">
                <div class="col-lg-8 col-md-3 col-sm-4 col-4 possition-static">
                    <div class="site-logo-mobile">
                        <a href="index.html" class="sticky-logo-light"><img src="{{ asset('frontend/img/logo-light.png') }}" alt="Site Logo"></a>
                        <a href="index.html" class="sticky-logo-dark"><img src="{{ asset('frontend/img/logo-dark.png') }}" alt="Site Logo"></a>
                    </div>
                    <nav class="site-nav">
                        <ul id="site-menu" class="site-menu">
                            <li><a href="{{ route('frontend.home') }}">Home</a></li>
                            <li><a href="{{ route('frontend.category') }}">Category</a></li>
                            <li><a href="{{ route('frontend.recipe.index') }}">Recipes</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 d-none d-lg-block"></div>
                <div class="col-lg-4 d-none d-lg-block">
                    <div class="site-logo-desktop">
                        <a href="{{ route('frontend.home') }}" class="main-logo"><img src="{{ asset('frontend/img/logo-dark.png') }}" alt="Site Logo"></a>
                    </div>
                </div>
                <div class="col-lg-4 d-none d-lg-block"></div>
            </div>
        </div>
    </div>
</header>
