<nav class="hk-nav navbar-dark">
    <a href="javascript:void(0);" id="hk_nav_close" class="hk-nav-close"><span class="feather-icon"><i
                data-feather="x"></i></span></a>
    <div class="nicescroll-bar">
        <div class="navbar-nav-wrap">

            <div class="nav-header">
                <span>Beranda</span>
                <span>BE</span>
            </div>

            <ul class="navbar-nav flex-column">
                <li class="nav-item">
                    <a class="nav-link"
                       href="#">
                        <i class="fa fa-user"></i>
                        <span class="nav-link-text">Home</span>
                    </a>
                </li>
            </ul>

            <hr class="nav-separator">
            <div class="nav-header">
                <span>MANAGE CMS</span>
                <span>CMS</span>
            </div>

            <ul class="navbar-nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" data-toggle="collapse"
                       data-target="#master-category">
                        <i class="fa fa-user-secret"></i>
                        <span class="nav-link-text">Categories</span>
                    </a>
                    <ul id="master-category" class="nav flex-column collapse collapse-level-1">
                        <li class="nav-item">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link {{ Route::currentRouteName() == 'backend.master.category.index' ? "active" : "" }}"
                                       href="{{ route('backend.master.category.index') }}">List Category</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Route::currentRouteName() == 'backend.master.category.create' ? "active" : "" }}"
                                       href="{{ route('backend.master.category.create') }}">Create Category</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>

            <hr class="nav-separator">
            <ul class="navbar-nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                            class="fa fa-power-off"></i><span>Log out</span></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>

@push('after_scripts')
    <script type="text/javascript">
        // Set active state on menu element
        var full_url = "{{ Request::fullUrl() }}";
        var $navLinks = $("ul.nav li a");
        // First look for an exact match including the search string
        var $curentPageLink = $navLinks.filter(
            function () {
                return $(this).attr('href') === full_url;
            }
        );
        // If not found, look for the link that starts with the url
        if (!$curentPageLink.length > 0) {
            $curentPageLink = $navLinks.filter(
                function () {
                    return $(this).attr('href').startsWith(full_url) || full_url.startsWith($(this).attr('href'));
                }
            );
        }
        $curentPageLink.parents('ul').addClass('show');
    </script>
@endpush
