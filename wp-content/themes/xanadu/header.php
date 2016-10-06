<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo wp_title(''); ?></title>
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="icon" type="image/x-icon">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header>
        <ul class="contact">
            <li>Call us for free <a href="tel: 1800-888-999">1800-888-999</a> </li>
            <li><a href="mailto:support@yourdomain.com">Support@yourdomain.com</a></li>
        </ul>

        <ul class="user">
            <li><a href="">USD</a></li>
            <li><a href="">EN</a></li>
            <li><a href="">MY ACCOUNT</a></li>
            <li><a href="">WISHLIST</a></li>
        </ul>

        <div class="nav">
            <a href=""><div class="title">
                <h1>XANADU</h1>
                <span>FURNITURE STORE</span>
            </div></a>

            <div class="cart">
                <input class='search-input' type="text" name="search">
                <img class="search-icon" src="http://localhost/xanadu/inc/uploads/2016/10/search_icon.png" alt="search icon">
                <a href=""><div class="cart-details">
                    <img class="cart-icon" src="http://localhost/xanadu/inc/uploads/2016/10/cart_icon.png" alt="cart-icon">
                    <p>MY CART</p>
                    <span class="inline quantity">03 Items - <span class="inline price">$450</span></span>
                </div></a>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="">HOME</a></li>
                    <li><a href="">SHOP</a></li>
                    <li><a href="">CATEGORIES</a></li>
                    <li><a href="">PRESS</a></li>
                    <li>
                        <div class="dropdown">
                            <a class="dropbtn">PAGE</a>
                            <div id="dropdown-btn" class="dropdown-content">
                                <a href="#">Page 1</a>
                                <a href="#">Page 2</a>
                                <a href="#">Page 3</a>
                            </div>
                        </div>
                    </li>
                    <li><a href="">CONTACT US</a></li>
                </ul>
            </div>
            <div class="dropdown-m">
                <button class="drop-menu-btn">MENU</button>
                <div id="dropdown-menu-btn" class="dropdown-menu-content">
                    <a href="#">HOME</a>
                    <a href="#">SHOP</a>
                    <a href="#">CATEGORIES</a>
                    <a href="#">PRESS</a>
                    <div class="dropdown2">
                        <a class="dropbtn-menu">PAGE</a>
                        <div id="dropdown-btn2" class="dropdown-content2">
                            <a href="#">Page 1</a>
                            <a href="#">Page 2</a>
                            <a href="#">Page 3</a>
                        </div>
                    </div>
                    <a href="#">CONTACT US</a>
                </div>
            </div>

        </div>

    </header>
