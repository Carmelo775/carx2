@extends('layouts.master')

@section('title') Home -  @stop

@section('ct')

 <!-- Full Slider -->
    <div class="container-fluid">
      <div class="row">
        <div class="home-slider">
          <div class="item">
            <a href="products.html"><img src="images/demo/slide-1-full.jpg" alt="Slider"></a>
          </div>
          <div class="item">
            <a href="products.html"><img src="images/demo/slide-2-full.jpg" alt="Slider"></a>
          </div>
          <div class="item">
            <a href="products.html"><img src="images/demo/slide-3-full.jpg" alt="Slider"></a>
          </div>
        </div>
      </div>
    </div>
    <!-- End Full Slider -->

    <!-- Main Content -->
    <div class="container m-t-2">
      <div class="row">

        <!-- New Arrivals & Best Selling -->
   <!--     <div class="col-md-3 m-b-1">
          <div class="title"><span><a href="products.html">New Arrivals <i class="fa fa-chevron-circle-right"></i></a></span></div>
          <div class="widget-slider owl-controls-top-offset m-b-2">
            <div class="box-product-outer">
              <div class="box-product">
                <div class="img-wrapper">
                  <a href="detail.html">
                    <img alt="Product" src="images/demo/p1-1.jpg">
                  </a>
                  <div class="tags tags-left">
                    <span class="label-tags"><a href="products.html"><span class="label label-success arrowed-right">New Arrivals</span></a></span>
                  </div>
                  <div class="option">
                    <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                    <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-align-left"></i></a>
                    <a href="#" data-toggle="tooltip" title="Add to Wishlist" class="wishlist"><i class="fa fa-heart"></i></a>
                  </div>
                </div>
                <h6><a href="detail.html">WranglerGrey Printed Slim Fit Round Neck T-Shirt</a></h6>
                <div class="price">
                  <div>$15.00</div>
                </div>
              </div>
            </div>
            <div class="box-product-outer">
              <div class="box-product">
                <div class="img-wrapper">
                  <a href="detail.html">
                    <img alt="Product" src="images/demo/p2-1.jpg">
                  </a>
                  <div class="tags tags-left">
                    <span class="label-tags"><a href="products.html"><span class="label label-success arrowed-right">New Arrivals</span></a></span>
                  </div>
                  <div class="option">
                    <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                    <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-align-left"></i></a>
                    <a href="#" data-toggle="tooltip" title="Add to Wishlist" class="wishlist"><i class="fa fa-heart"></i></a>
                  </div>
                </div>
                <h6><a href="detail.html">CelioKhaki Printed Round Neck T-Shirt</a></h6>
                <div class="price">
                  <div>$15.00</div>
                </div>
              </div>
            </div>
            <div class="box-product-outer">
              <div class="box-product">
                <div class="img-wrapper">
                  <a href="detail.html">
                    <img alt="Product" src="images/demo/p3-1.jpg">
                  </a>
                  <div class="tags tags-left">
                    <span class="label-tags"><a href="products.html"><span class="label label-success arrowed-right">New Arrivals</span></a></span>
                  </div>
                  <div class="option">
                    <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                    <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-align-left"></i></a>
                    <a href="#" data-toggle="tooltip" title="Add to Wishlist" class="wishlist"><i class="fa fa-heart"></i></a>
                  </div>
                </div>
                <h6><a href="detail.html">CelioOff White Printed Round Neck T-Shirt</a></h6>
                <div class="price">
                  <div>$15.00</div>
                </div>
              </div>
            </div>
            <div class="box-product-outer">
              <div class="box-product">
                <div class="img-wrapper">
                  <a href="detail.html">
                    <img alt="Product" src="images/demo/p4-1.jpg">
                  </a>
                  <div class="tags tags-left">
                    <span class="label-tags"><a href="products.html"><span class="label label-success arrowed-right">New Arrivals</span></a></span>
                  </div>
                  <div class="option">
                    <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                    <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-align-left"></i></a>
                    <a href="#" data-toggle="tooltip" title="Add to Wishlist" class="wishlist"><i class="fa fa-heart"></i></a>
                  </div>
                </div>
                <h6><a href="detail.html">Levi'sNavy Blue Printed Round Neck T-Shirt</a></h6>
                <div class="price">
                  <div>$15.00</div>
                </div>
              </div>
            </div>
          </div>
          <div class="title"><span><a href="products.html">Best Selling <i class="fa fa-chevron-circle-right"></i></a></span></div>
          <div class="widget-slider owl-controls-top-offset">
            <div class="box-product-outer">
              <div class="box-product">
                <div class="img-wrapper">
                  <a href="detail.html">
                    <img alt="Product" src="images/demo/p5-1.jpg">
                  </a>
                  <div class="tags tags-left">
                    <span class="label-tags"><span class="label label-primary arrowed-right">Popular</span></span>
                    <span class="label-tags"><span class="label label-default arrowed-right">Top Week</span></span>
                  </div>
                  <div class="option">
                    <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                    <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-align-left"></i></a>
                    <a href="#" data-toggle="tooltip" title="Add to Wishlist" class="wishlist"><i class="fa fa-heart"></i></a>
                  </div>
                </div>
                <h6><a href="detail.html">IncultAcid Wash Raglan Crew Neck T-Shirt</a></h6>
                <div class="price">
                  <div>$13.50 <span class="label-tags"><span class="label label-danger arrowed">-10%</span></span></div>
                  <span class="price-old">$15.00</span>
                </div>
                <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-half-o"></i>
                  <a href="#">(5 reviews)</a>
                </div>
              </div>
            </div>
            <div class="box-product-outer">
              <div class="box-product">
                <div class="img-wrapper">
                  <a href="detail.html">
                    <img alt="Product" src="images/demo/p6-1.jpg">
                  </a>
                  <div class="tags tags-left">
                    <span class="label-tags"><span class="label label-primary arrowed-right">Popular</span></span>
                    <span class="label-tags"><span class="label label-default arrowed-right">Top Week</span></span>
                  </div>
                  <div class="option">
                    <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                    <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-align-left"></i></a>
                    <a href="#" data-toggle="tooltip" title="Add to Wishlist" class="wishlist"><i class="fa fa-heart"></i></a>
                  </div>
                </div>
                <h6><a href="detail.html">Avoir EnvieOlive Printed Round Neck T-Shirt</a></h6>
                <div class="price">
                  <div>$13.50 <span class="label-tags"><span class="label label-danger arrowed">-10%</span></span></div>
                  <span class="price-old">$15.00</span>
                </div>
                <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-half-o"></i>
                  <a href="#">(5 reviews)</a>
                </div>
              </div>
            </div>
            <div class="box-product-outer">
              <div class="box-product">
                <div class="img-wrapper">
                  <a href="detail.html">
                    <img alt="Product" src="images/demo/p7-1.jpg">
                  </a>
                  <div class="tags tags-left">
                    <span class="label-tags"><span class="label label-primary arrowed-right">Popular</span></span>
                    <span class="label-tags"><span class="label label-default arrowed-right">Top Week</span></span>
                  </div>
                  <div class="option">
                    <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                    <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-align-left"></i></a>
                    <a href="#" data-toggle="tooltip" title="Add to Wishlist" class="wishlist"><i class="fa fa-heart"></i></a>
                  </div>
                </div>
                <h6><a href="detail.html">ElaboradoBrown Printed Round Neck T-Shirt</a></h6>
                <div class="price">
                  <div>$13.50 <span class="label-tags"><span class="label label-danger arrowed">-10%</span></span></div>
                  <span class="price-old">$15.00</span>
                </div>
                <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-half-o"></i>
                  <a href="#">(5 reviews)</a>
                </div>
              </div>
            </div>
            <div class="box-product-outer">
              <div class="box-product">
                <div class="img-wrapper">
                  <a href="detail.html">
                    <img alt="Product" src="images/demo/p4-1.jpg">
                  </a>
                  <div class="tags tags-left">
                    <span class="label-tags"><span class="label label-primary arrowed-right">Popular</span></span>
                    <span class="label-tags"><span class="label label-default arrowed-right">Top Week</span></span>
                  </div>
                  <div class="option">
                    <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                    <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-align-left"></i></a>
                    <a href="#" data-toggle="tooltip" title="Add to Wishlist" class="wishlist"><i class="fa fa-heart"></i></a>
                  </div>
                </div>
                <h6><a href="detail.html">Levi'sNavy Blue Printed Round Neck T-Shirt</a></h6>
                <div class="price">
                  <div>$13.50 <span class="label-tags"><span class="label label-danger arrowed">-10%</span></span></div>
                  <span class="price-old">$15.00</span>
                </div>
                <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-half-o"></i>
                  <a href="#">(5 reviews)</a>
                </div>
              </div>
            </div>
          </div>
        </div> -->
        <!-- End New Arrivals & Best Selling -->

        <div class="clearfix visible-sm visible-xs"></div>

        <div class="col-md-9">

          <!-- Featured -->
         <div class="title"><span>Productos</span></div>
          <div class="col-sm-4 col-lg-3 box-product-outer">
          @foreach($products as $p)
            <div class="box-product">
              <div class="img-wrapper">
                <a href="detail.html">
                  <img alt="Product" src="files/{{$p->photo}}">
                </a>
                <div class="tags">
                  <span class="label-tags"><span class="label label-default arrowed">Producto</span></span>
                </div>
                <div class="tags tags-left">
                  <span class="label-tags"><span class="label label-danger arrowed-right">En venta</span></span>
                </div>
                <div class="option">
                  <a href="cart/{{$p->id}}/addItem" data-toggle="tooltip" title="Añadir al Carrito"><i class="fa fa-shopping-cart"></i></a>
                  <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-align-left"></i></a>
                  <a href="#" data-toggle="tooltip" title="Add to Wishlist" class="wishlist"><i class="fa fa-heart"></i></a>
                </div>
              </div>
              <h6><a href="detail.html">{{$p->title}}</a></h6>
              <div class="price">
                <div>${{$p->price}} <span class="label-tags"><span class="label label-default">-10%</span></span></div>
                <span class="price-old">{{$p->points}} Puntos</span>
              </div>
               <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <a href="#">(5 reviews)</a>
              </div>
            </div>
            @endforeach
          </div>
         <!-- <div class="col-sm-4 col-lg-3 hidden-xs box-product-outer">
            <div class="box-product">
              <div class="img-wrapper">
                <a href="detail.html">
                  <img alt="Product" src="images/demo/polo2.jpg">
                </a>
                <div class="tags">
                  <span class="label-tags"><span class="label label-default arrowed">Featured</span></span>
                </div>
                <div class="tags tags-left">
                  <span class="label-tags"><span class="label label-success arrowed-right">Sale</span></span>
                </div>
                <div class="option">
                  <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                  <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-align-left"></i></a>
                  <a href="#" data-toggle="tooltip" title="Add to Wishlist" class="wishlist"><i class="fa fa-heart"></i></a>
                </div>
              </div>
              <h6><a href="detail.html">Tommy HilfigerNavy Blue Printed Polo T-Shirt</a></h6>
              <div class="price">
                <div>$13.50 <span class="label-tags"><span class="label label-primary">-10%</span></span></div>
                <span class="price-old">$15.00</span>
              </div>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <a href="#">(5 reviews)</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-lg-3 hidden-xs box-product-outer">
            <div class="box-product">
              <div class="img-wrapper">
                <a href="detail.html">
                  <img alt="Product" src="images/demo/polo3.jpg">
                </a>
                <div class="tags">
                  <span class="label-tags"><span class="label label-default arrowed">Featured</span></span>
                </div>
                <div class="tags tags-left">
                  <span class="label-tags"><span class="label label-primary arrowed-right">Sale</span></span>
                </div>
                <div class="option">
                  <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                  <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-align-left"></i></a>
                  <a href="#" data-toggle="tooltip" title="Add to Wishlist" class="wishlist"><i class="fa fa-heart"></i></a>
                </div>
              </div>
              <h6><a href="detail.html">WranglerNavy Blue Solid Polo T-Shirt</a></h6>
              <div class="price">
                <div>$13.50 <span class="label-tags"><span class="label label-success">-10%</span></span></div>
                <span class="price-old">$15.00</span>
              </div>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <a href="#">(5 reviews)</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-lg-3 visible-lg box-product-outer">
            <div class="box-product">
              <div class="img-wrapper">
                <a href="detail.html">
                  <img alt="Product" src="images/demo/polo4.jpg">
                </a>
                <div class="tags">
                  <span class="label-tags"><span class="label label-default arrowed">Featured</span></span>
                </div>
                <div class="tags tags-left">
                  <span class="label-tags"><span class="label label-danger arrowed-right">Sale</span></span>
                </div>
                <div class="option">
                  <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                  <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-align-left"></i></a>
                  <a href="#" data-toggle="tooltip" title="Add to Wishlist" class="wishlist"><i class="fa fa-heart"></i></a>
                </div>
              </div>
              <h6><a href="detail.html">NikeAs Matchup -Pq Grey Polo T-Shirt</a></h6>
              <div class="price">
                <div>$13.50 <span class="label-tags"><span class="label label-danger">-10%</span></span></div>
                <span class="price-old">$15.00</span>
              </div>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <a href="#">(5 reviews)</a>
              </div>
            </div>
          </div> -->
          <!-- End Featured -->

          <div class="clearfix visible-sm visible-xs"></div>

          <!-- Collection -->
        <!--  <div class="title m-t-2"><span>V-Neck Collection</span></div>
          <div class="product-slider owl-controls-top-offset">
            <div class="box-product-outer">
              <div class="box-product">
                <div class="img-wrapper">
                  <a href="detail.html">
                    <img alt="Product" src="images/demo/vneck1.jpg">
                  </a>
                  <div class="tags">
                    <span class="label-tags"><span class="label label-danger arrowed">Sale</span></span>
                    <span class="label-tags"><span class="label label-default arrowed">Collection</span></span>
                  </div>
                  <div class="option">
                    <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                    <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-align-left"></i></a>
                    <a href="#" data-toggle="tooltip" title="Add to Wishlist" class="wishlist"><i class="fa fa-heart"></i></a>
                  </div>
                </div>
                <h6><a href="detail.html">PhosphorusGrey Melange Printed V Neck T-Shirt</a></h6>
                <div class="price">
                  <div>$13.50 <span class="label-tags"><span class="label label-danger arrowed">-10%</span></span></div>
                  <span class="price-old">$15.00</span>
                </div>
                <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-half-o"></i>
                  <i class="fa fa-star-o"></i>
                  <a href="#">(5 reviews)</a>
                </div>
              </div>
            </div>
            <div class="box-product-outer">
              <div class="box-product">
                <div class="img-wrapper">
                  <a href="detail.html">
                    <img alt="Product" src="images/demo/vneck2.jpg">
                  </a>
                  <div class="tags">
                    <span class="label-tags"><span class="label label-danger arrowed">Sale</span></span>
                    <span class="label-tags"><span class="label label-primary arrowed">Collection</span></span>
                  </div>
                  <div class="option">
                    <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                    <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-align-left"></i></a>
                    <a href="#" data-toggle="tooltip" title="Add to Wishlist" class="wishlist"><i class="fa fa-heart"></i></a>
                  </div>
                </div>
                <h6><a href="detail.html">United Colors of BenettonNavy Blue Solid V Neck T Shirt</a></h6>
                <div class="price">
                  <div>$13.50 <span class="label-tags"><span class="label label-success arrowed">-10%</span></span></div>
                  <span class="price-old">$15.00</span>
                </div>
                <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-half-o"></i>
                  <i class="fa fa-star-o"></i>
                  <a href="#">(5 reviews)</a>
                </div>
              </div>
            </div>
            <div class="box-product-outer">
              <div class="box-product">
                <div class="img-wrapper">
                  <a href="detail.html">
                    <img alt="Product" src="images/demo/vneck3.jpg">
                  </a>
                  <div class="tags">
                    <span class="label-tags"><span class="label label-danger arrowed">Sale</span></span>
                    <span class="label-tags"><span class="label label-success arrowed">Collection</span></span>
                  </div>
                  <div class="option">
                    <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                    <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-align-left"></i></a>
                    <a href="#" data-toggle="tooltip" title="Add to Wishlist" class="wishlist"><i class="fa fa-heart"></i></a>
                  </div>
                </div>
                <h6><a href="detail.html">WranglerBlack V Neck T Shirt</a></h6>
                <div class="price">
                  <div>$13.50 <span class="label-tags"><span class="label label-primary arrowed">-10%</span></span></div>
                  <span class="price-old">$15.00</span>
                </div>
                <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-half-o"></i>
                  <i class="fa fa-star-o"></i>
                  <a href="#">(5 reviews)</a>
                </div>
              </div>
            </div>
            <div class="box-product-outer">
              <div class="box-product">
                <div class="img-wrapper">
                  <a href="detail.html">
                    <img alt="Product" src="images/demo/vneck4.jpg">
                  </a>
                  <div class="tags">
                    <span class="label-tags"><span class="label label-danger arrowed">Sale</span></span>
                    <span class="label-tags"><span class="label label-info arrowed">Collection</span></span>
                  </div>
                  <div class="option">
                    <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                    <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-align-left"></i></a>
                    <a href="#" data-toggle="tooltip" title="Add to Wishlist" class="wishlist"><i class="fa fa-heart"></i></a>
                  </div>
                </div>
                <h6><a href="detail.html">Tagd New YorkGrey Printed V Neck T-Shirts</a></h6>
                <div class="price">
                  <div>$13.50 <span class="label-tags"><span class="label label-default arrowed">-10%</span></span></div>
                  <span class="price-old">$15.00</span>
                </div>
                <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-half-o"></i>
                  <i class="fa fa-star-o"></i>
                  <a href="#">(5 reviews)</a>
                </div>
              </div>
            </div>
            <div class="box-product-outer">
              <div class="box-product">
                <div class="img-wrapper">
                  <a href="detail.html">
                    <img alt="Product" src="images/demo/vneck1.jpg">
                  </a>
                  <div class="tags">
                    <span class="label-tags"><span class="label label-danger arrowed">Sale</span></span>
                    <span class="label-tags"><span class="label label-default arrowed">Collection</span></span>
                  </div>
                  <div class="option">
                    <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                    <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-align-left"></i></a>
                    <a href="#" data-toggle="tooltip" title="Add to Wishlist" class="wishlist"><i class="fa fa-heart"></i></a>
                  </div>
                </div>
                <h6><a href="detail.html">PhosphorusGrey Melange Printed V Neck T-Shirt</a></h6>
                <div class="price">
                  <div>$13.50 <span class="label-tags"><span class="label label-danger arrowed">-10%</span></span></div>
                  <span class="price-old">$15.00</span>
                </div>
                <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-half-o"></i>
                  <i class="fa fa-star-o"></i>
                  <a href="#">(5 reviews)</a>
                </div>
              </div>
            </div>
            <div class="box-product-outer">
              <div class="box-product">
                <div class="img-wrapper">
                  <a href="detail.html">
                    <img alt="Product" src="images/demo/vneck2.jpg">
                  </a>
                  <div class="tags">
                    <span class="label-tags"><span class="label label-danger arrowed">Sale</span></span>
                    <span class="label-tags"><span class="label label-primary arrowed">Collection</span></span>
                  </div>
                  <div class="option">
                    <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                    <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-align-left"></i></a>
                    <a href="#" data-toggle="tooltip" title="Add to Wishlist" class="wishlist"><i class="fa fa-heart"></i></a>
                  </div>
                </div>
                <h6><a href="detail.html">United Colors of BenettonNavy Blue Solid V Neck T Shirt</a></h6>
                <div class="price">
                  <div>$13.50 <span class="label-tags"><span class="label label-success arrowed">-10%</span></span></div>
                  <span class="price-old">$15.00</span>
                </div>
                <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-half-o"></i>
                  <i class="fa fa-star-o"></i>
                  <a href="#">(5 reviews)</a>
                </div>
              </div>
            </div>
          </div> -->
          <!-- End Collection -->

        </div>

      </div>

      <!-- Brand & Clients -->
      <div class="row">
        <div class="col-xs-12 m-t-1">
          <div class="title text-center"><span>Brand & Clients</span></div>
          <div class="brand-slider owl-controls-top-offset">
            <div class="brand">
              <a href="#"><img src="images/demo/brand1.png" alt=""></a>
            </div>
            <div class="brand">
              <a href="#"><img src="images/demo/brand2.png" alt=""></a>
            </div>
            <div class="brand">
              <a href="#"><img src="images/demo/brand3.png" alt=""></a>
            </div>
            <div class="brand">
              <a href="#"><img src="images/demo/brand4.png" alt=""></a>
            </div>
            <div class="brand">
              <a href="#"><img src="images/demo/brand5.png" alt=""></a>
            </div>
            <div class="brand">
              <a href="#"><img src="images/demo/brand1.png" alt=""></a>
            </div>
            <div class="brand">
              <a href="#"><img src="images/demo/brand2.png" alt=""></a>
            </div>
            <div class="brand">
              <a href="#"><img src="images/demo/brand3.png" alt=""></a>
            </div>
            <div class="brand">
              <a href="#"><img src="images/demo/brand4.png" alt=""></a>
            </div>
            <div class="brand">
              <a href="#"><img src="images/demo/brand5.png" alt=""></a>
            </div>
          </div>
        </div>
      </div>
      <!-- End Brand & Clients -->

    </div>
    <!-- End Main Content -->

    @stop