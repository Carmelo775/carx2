<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from www.grehon.com/mimity/v2.3/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jan 2017 13:15:02 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Plugins -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/bootstrap-select.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.default.css" rel="stylesheet">
    <link href="css/style.teal.flat.css" rel="stylesheet" id="theme">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <!-- Top Header -->
    <div class="top-header">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <ul class="list-inline pull-left">
              <li>
                <select class="selectpicker" data-width="95px" data-style="btn-default">
                  <option value="English" data-content="<img alt='English' src='images/en.jpg'> English">English</option>
                  <option value="French" data-content="<img alt='French' src='images/fr.jpg'> French">French</option>
                </select>
              </li>
              <li>
                <select class="selectpicker" data-width="70px" data-style="btn-default">
                  <option value="USD">$ USD</option>
                  <option value="EUR">€ EUR</option>
                </select>
              </li>
              <li class="hidden-xs"><a href="#"><i class="fa fa-phone"></i> +123-456-789</a></li>
              <li class="hidden-xs"><a href="mailto:cs@domain.tld"><i class="fa fa-envelope"></i> cs@domain.tld</a></li>
            </ul>
            <ul class="list-inline pull-right">
              <li class="hidden-xs"><a href="wishlist.html"><i class="fa fa-heart"></i> Wishlist (3)</a></li>
              <li class="hidden-xs"><a href="compare.html"><i class="fa fa-align-left"></i> Compare (4)</a></li>
              <li>
                <div class="dropdown">
                  <a class="btn dropdown-toggle"  href="{{ url('/login') }}">
                    Login 
                  </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-login" aria-labelledby="dropdownLogin" data-dropdown-in="zoomIn" data-dropdown-out="fadeOut">
                    <form>
                      <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Username">
                      </div>
                      <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password">
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"><span> Remember me</span>
                        </label>
                      </div>
                      <button type="submit" class="btn btn-default btn-sm"><i class="fa fa-long-arrow-right"></i> Login</button>
                      <a class="btn btn-default btn-sm pull-right" href="{{url('/register')}}" role="button">I Want to Register</a>
                    </form>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End Top Header -->

    <!-- Middle Header -->
    <div class="middle-header">
      <div class="container">
        <div class="row">
          <div class="col-md-3 logo">
            <a href="index-2.html"><img alt="Logo" src="images/logo-teal.png" class="img-responsive" /></a>
          </div>
          <div class="col-sm-8 col-md-6 search-box m-t-2">
            <div class="input-group">
              <input type="text" class="form-control" aria-label="Search here..." placeholder="Search here...">
              <div class="input-group-btn">
                <select class="selectpicker hidden-xs" data-width="150px">
                  <option value="0">All Categories</option>
                  <option value="1">Dresses</option>
                  <option value="2">Tops</option>
                  <option value="3">Bottoms</option>
                  <option value="4">Jackets / Coats</option>
                  <option value="5">Sweaters</option>
                  <option value="6">Gym Wear</option>
                  <option value="7">Others</option>
                </select>
                <button type="button" class="btn btn-default btn-search"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-md-3 cart-btn hidden-xs m-t-2">
            <a type="button" class="btn btn-default dropdown-toggle" id="dropdown-cart" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="{{url('ItemsCart')}}">
              <i class="fa fa-shopping-cart"></i> Shopping Cart:
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-cart">
              <div class="media">
                <div class="media-left">
                  <a href="detail.html"><img class="media-object img-thumbnail" src="images/demo/p1-small-1.jpg" width="50" alt="product"></a>
                </div>
                <div class="media-body">
                  <a href="detail.html" class="media-heading">WranglerGrey Printed Slim Fit Round Neck T-Shirt</a>
                  <div>x 1 $13.50</div>
                </div>
                <div class="media-right"><a href="#" data-toggle="tooltip" title="Remove"><i class="fa fa-remove"></i></a></div>
              </div>
              <div class="media">
                <div class="media-left">
                  <a href="detail.html"><img class="media-object img-thumbnail" src="images/demo/p2-small-1.jpg" width="50" alt="product"></a>
                </div>
                <div class="media-body">
                  <a href="detail.html" class="media-heading">CelioKhaki Printed Round Neck T-Shirt</a>
                  <div>x 1 $13.50</div>
                </div>
                <div class="media-right"><a href="#" data-toggle="tooltip" title="Remove"><i class="fa fa-remove"></i></a></div>
              </div>
              <div class="media">
                <div class="media-left">
                  <a href="detail.html"><img class="media-object img-thumbnail" src="images/demo/p3-small-1.jpg" width="50" alt="product"></a>
                </div>
                <div class="media-body">
                  <a href="detail.html" class="media-heading">CelioOff White Printed Round Neck T-Shirt</a>
                  <div>x 1 $13.50</div>
                </div>
                <div class="media-right"><a href="#" data-toggle="tooltip" title="Remove"><i class="fa fa-remove"></i></a></div>
              </div>
              <div class="media">
                <div class="media-left">
                  <a href="detail.html"><img class="media-object img-thumbnail" src="images/demo/p4-small-1.jpg" width="50" alt="product"></a>
                </div>
                <div class="media-body">
                  <a href="detail.html" class="media-heading">Levi'sNavy Blue Printed Round Neck T-Shirt</a>
                  <div>x 1 $13.50</div>
                </div>
                <div class="media-right"><a href="#" data-toggle="tooltip" title="Remove"><i class="fa fa-remove"></i></a></div>
              </div>
              <div class="subtotal-cart">Subtotal: <span>$54.00</span></div>
              <div class="text-center">
                  <div class="btn-group" role="group" aria-label="View Cart and Checkout Button">
                    <button class="btn btn-default btn-sm" type="button"><i class="fa fa-shopping-cart"></i> View Cart</button>
                    <button class="btn btn-default btn-sm" type="button"><i class="fa fa-check"></i> Checkout</button>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Middle Header -->

    <!-- Navigation Bar -->
    <nav class="navbar navbar-default shadow-navbar" role="navigation">
      <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="cart.html" class="btn btn-default btn-cart-xs visible-xs pull-right">
              <i class="fa fa-shopping-cart"></i> Cart : 4 items
            </a>
          </div>
          <div class="collapse navbar-collapse" id="navbar-ex1-collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="{{url('/')}}">Home</a></li>
              <li><a href="products.html">Products</a></li>
              <li><a href="cart.html">Shopping Cart</a></li>
              <li><a href="checkout.html">Checkout</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  Pages <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="about.html">About Us</a></li>
                  <li><a href="blog.html">Blog</a></li>
                  <li><a href="blog-detail.html">Blog Detail</a></li>
                  <li><a href="checkout2.html">Checkout v2</a></li>
                  <li><a href="compare.html">Compare</a></li>
                  <li><a href="contact.html">Contact Us</a></li>
                  <li><a href="{{ url('/login') }}">Login</a></li>
                  <li><a href="detail.html">Product Detail</a></li>
                  <li><a href="{{url('/register')}}">Register</a></li>
                  <li><a href="typography.html">Typography</a></li>
                  <li><a href="wishlist.html">Wishlist</a></li>
                  <li class="dropdown dropdown-submenu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Submenu</a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Submenu Link 1</a></li>
                      <li><a href="#">Submenu Link 2</a></li>
                      <li><a href="#">Submenu Link 3</a></li>
                      <li><a href="#">Submenu Link 4</a></li>
                      <li class="dropdown dropdown-submenu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sub Submenu</a>
                        <ul class="dropdown-menu">
                          <li><a href="#">Sub Submenu Link 1</a></li>
                          <li><a href="#">Sub Submenu Link 2</a></li>
                          <li><a href="#">Sub Submenu Link 3</a></li>
                          <li><a href="#">Sub Submenu Link 4</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown dropdown-submenu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account</a>
                    <ul class="dropdown-menu">
                      <li><a href="account-profile.html">My Profile</a></li>
                      <li><a href="account-address.html">My Address</a></li>
                      <li><a href="account-history.html">Order History</a></li>
                      <li><a href="account-password.html">Change Password</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="dropdown mega-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  Mega Menu <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <div class="mega-menu-content">
                      <div class="row">
                        <div class="col-sm-3">
                          <ul class="list-unstyled">
                            <li><p><strong>Menu Title</strong></p></li>
                            <li><a href="#"> Link Item </a></li>
                            <li><a href="#"> Link Item </a></li>
                            <li><a href="#"> Link Item </a></li>
                            <li><a href="#"> Link Item </a></li>
                          </ul>
                        </div>
                        <div class="col-sm-3">
                          <ul class="list-unstyled">
                            <li><p><strong>Menu Title</strong></p></li>
                            <li><a href="#"> Link Item </a></li>
                            <li><a href="#"> Link Item </a></li>
                            <li><a href="#"> Link Item </a></li>
                            <li><a href="#"> Link Item </a></li>
                          </ul>
                        </div>
                        <div class="col-sm-3">
                          <ul class="list-unstyled">
                            <li><p><strong>Menu Title</strong></p></li>
                            <li><a href="#"> Link Item </a></li>
                            <li><a href="#"> Link Item </a></li>
                            <li><a href="#"> Link Item </a></li>
                            <li><a href="#"> Link Item </a></li>
                          </ul>
                        </div>
                        <div class="col-sm-3">
                          <ul class="list-unstyled">
                            <li><p><strong>Menu Title</strong></p></li>
                            <li><a href="#"> Link Item </a></li>
                            <li><a href="#"> Link Item </a></li>
                            <li><a href="#"> Link Item </a></li>
                            <li><a href="#"> Link Item </a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
      </div>
    </nav>
    <!-- End Navigation Bar -->

   @yield('ct')

    <!-- Footer -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="title-footer"><span>About Us</span></div>
            <ul>
              <li>
                Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et doloremmagna aliqua. Ut enim ad minim... <a href="#">Read More</a>
              </li>
            </ul>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="title-footer"><span>Information</span></div>
            <ul>
              <li><i class="fa fa-angle-double-right"></i> <a href="#">FAQ</a></li>
              <li><i class="fa fa-angle-double-right"></i> <a href="#">Policy Privacy</a></li>
              <li><i class="fa fa-angle-double-right"></i> <a href="#">Terms and Conditions</a></li>
              <li><i class="fa fa-angle-double-right"></i> <a href="#">Shipping Methods</a></li>
            </ul>
          </div>
          <div class="clearfix visible-sm-block"></div>
          <div class="col-md-3 col-sm-6">
            <div class="title-footer"><span>Categories</span></div>
            <ul>
              <li><i class="fa fa-angle-double-right"></i> <a href="#">Cras justo odio</a></li>
              <li><i class="fa fa-angle-double-right"></i> <a href="#">Dapibus ac facilisis in</a></li>
              <li><i class="fa fa-angle-double-right"></i> <a href="#">Morbi leo risus</a></li>
              <li><i class="fa fa-angle-double-right"></i> <a href="#">Porta ac consectetur ac</a></li>
            </ul>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="title-footer"><span>Newsletter</span></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, soluta, tempora, ipsa voluptatibus porro vel laboriosam</p>
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Email Address">
              <span class="input-group-btn">
                <button class="btn btn-default subscribe-button" type="button">Subscribe</button>
              </span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="title-footer"><span>Our Store</span></div>
            <ul class="footer-icon">
              <li><span><i class="fa fa-map-marker"></i></span> 212 Lorem Ipsum. Dolor Sit, Amet</li>
              <li><span><i class="fa fa-phone"></i></span> +123-456-789</li>
              <li><span><i class="fa fa-envelope"></i></span> <a href="mailto:cs@domain.tld">cs@domain.tld</a></li>
            </ul>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="title-footer"><span>Follow Us</span></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum</p>
            <ul class="follow-us">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa fa-rss"></i></a></li>
            </ul>
          </div>
          <div class="clearfix visible-sm-block"></div>
          <div class="col-md-3 col-sm-6">
            <div class="title-footer"><span>Payment Method</span></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, soluta, tempora, ipsa voluptatibus porro vel laboriosam</p>
            <img src="images/payment-1.png" alt="Payment-1">
            <img src="images/payment-2.png" alt="Payment-2">
            <img src="images/payment-3.png" alt="Payment-3">
            <img src="images/payment-4.png" alt="Payment-4">
            <img src="images/payment-5.png" alt="Payment-5">
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="title-footer"><span>My Account</span></div>
            <ul>
              <li><i class="fa fa-angle-double-right"></i> <a href="#">Orders</a></li>
              <li><i class="fa fa-angle-double-right"></i> <a href="#">Vouchers</a></li>
              <li><i class="fa fa-angle-double-right"></i> <a href="#">Points</a></li>
              <li><i class="fa fa-angle-double-right"></i> <a href="#">Logout</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="text-center copyright">
        Copyright &copy; 2016 Mimity All right reserved
      </div>
    </div>
    <!-- End Footer -->

    <a href="#top" class="back-top text-center" onclick="$('body,html').animate({scrollTop:0},500); return false">
      <i class="fa fa-angle-double-up"></i>
    </a>

    <div class="chooser chooser-hide">
      <div class="chooser-toggle"><button class="btn btn-warning" type="button"><i class="fa fa-paint-brush bigger-130"></i></button></div>
      <div class="chooser-content">
        <label>Color</label>
        <select name="color-chooser" id="color-chooser" class="form-control input-sm selectpicker">
          <option value="indigo">Indigo</option>
          <option value="red">Red</option>
          <option value="teal">Teal</option>
          <option value="brown">Brown</option>
        </select>
        <label class="m-t-1">Style</label>
        <select name="style-chooser" id="style-chooser" class="form-control input-sm selectpicker">
          <option value="flat">Flat</option>
          <option value="rounded">Rounded</option>
        </select>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.js"></script>
    <!-- Plugins -->
    <script src="js/bootstrap-select.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/mimity.js"></script>
  </body>

<!-- Mirrored from www.grehon.com/mimity/v2.3/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jan 2017 13:15:48 GMT -->
</html>