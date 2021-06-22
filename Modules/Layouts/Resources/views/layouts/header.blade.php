<!-- Start Header Area -->
<header class="header_area sticky-header">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light main_box">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="/"><img src="/img/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        @auth()
                            <li class="nav-item"><a class="nav-link" href="/">{{auth()->user()->name}}</a></li>
                        @endauth
                        <li class="nav-item active"><a class="nav-link" href="/">Главная</a></li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                               aria-expanded="false">Магазин</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="{{route('shop.category')}}">Категории</a></li>
                                <li class="nav-item"><a class="nav-link" href="shop/single-product.blade.php">Product Details</a></li>
                                <li class="nav-item"><a class="nav-link" href="shop/checkout.blade.php">Product Checkout</a></li>
                                <li class="nav-item"><a class="nav-link" href="shop/cart.blade.php">Shopping Cart</a></li>
                                <li class="nav-item"><a class="nav-link" href="shop/confirmation.blade.php">Confirmation</a></li>
                            </ul>
                        </li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                               aria-expanded="false">Блог</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('blog')}}">Blog</a>
                                </li>
                                @auth()
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('blog.post.create')}}">Создать пост</a>
                                </li>
                                @endauth
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="contact.blade.php">Контакты</a></li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                               aria-expanded="false">Профиль</a>
                            <ul class="dropdown-menu">
                                @guest()
                                    <li class="nav-item"><a class="nav-link" href="{{route('loginAuth')}}">Войти</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{route('registerUser')
                                    }}">Регистрация</a></li>
                                @endguest
                                @auth()
                                    <li class="nav-item"><a class="nav-link" href="user/tracking.blade.php">Tracking</a></li>
                                    <li class="nav-item"><a class="nav-link" href="user/elements.blade.php">Elements</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{route('logout')}}">Выйти</a></li>
                                @endauth
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item"><a href="#" class="cart"><span class="ti-bag"></span></a></li>
                        <li class="nav-item">
                            <button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="search_input" id="search_input_box">
        <div class="container">
            <form class="d-flex justify-content-between">
                <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                <button type="submit" class="btn"></button>
                <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
            </form>
        </div>
    </div>
</header>
<!-- End Header Area -->
