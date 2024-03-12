<!doctype html>
  <html class="no-js" lang="zxx">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Seo -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="robots" content="INDEX,FOLLOW">
    <link rel="canonical" href="">
    <meta name="author" content="">
    <link rel="icon" href="">
    <title>DV Cosmetics</title>
    <!-- Favicon -->
    <!-- all css here -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/chosen.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/meanmenu.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/bundle.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/ionicons.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/prettyPhoto.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/price-range.css')}}" >
    <link rel="stylesheet" href="{{asset('public/frontend/css/animate.css')}}" >
    <link rel="stylesheet" href="{{asset('public/frontend/css/main.css')}}" >
    <link rel="stylesheet" href="{{asset('public/frontend/css/responsive.css')}}">    

  </head>
  <body>
  <!-- wrapper start--> 
  <div class="organic_food_wrapper">
    <!--Header start-->
    <header class="header sticky-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="header_wrapper_inner">
              <div class="logo col-xs-12">
                <a href="index.html"><img src="{{asset('public/frontend/images/logo/eva.jpg')}}" alt=""></a>
              </div>
              <div class="header_right_info d-flex">
                <div class="mini__cart">
                  <div class="cart_icon">
                    <a href="{{URL::to('/login-checkout')}}"><i class="fa fa-user"> Tài khoản</i></a>
                  </div>
                </div>
                <div class="content-setting-dropdown"></div>
                  <div class="mini__cart">
                    <div class="cart_icon">
                      <a href="{{URL::to('/show-cart')}}"><i class="fa fa-shopping-cart"> Giỏ hàng</i></a>
                    </div>
                  </div>
                  <?php
                  $customer_id = Session::get('customer_id');
                  if($customer_id!=NULL){
                  ?>
                  <div class="mini__cart">
                  <div class="cart_icon">
                    <a href="{{URL::to('/logout-checkout')}}"><i class="fa fa-lock"> Đăng xuất</i></a>
                  </div>
                </div>
                <?php
              }else{
              ?>
              <div class="mini__cart">
                  <div class="cart_icon">
                    <a href="{{URL::to('/logout-checkout')}}"><i class="fa fa-lock"> Đăng nhập</i></a>
                  </div>
                </div>
              <?php
            }
              ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
      <!--Header end-->
</div>
 <!--breadcrumb area start-->

    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="header_wrapper_inner">
            <div class="logo col-xs-12"></div>
            <div class="main_menu_inner">
              <div class="menu">
                <nav>
                  <ul>
                    <li class="active"><a href="{{URL::to('/trang-chu')}}">Trang chủ <i class="fa fa-angle-down"></i></a></li>
                    <li class="active"><a href="{{URL::to('/bo-suu-tap')}}">Bộ sưu tập</a></li>
                    <li class="active"><a href="{{URL::to('/gioi-thieu')}}">Giới thiệu </a> </li>
                    <li class="active"><a href="{{URL::to('/lien-he')}}">Liên hệ</a></li>
                  </ul>
                </nav>
              </div>
            </div>
            <div class="header_right_info d-flex">
              <div class="search_box">
                <div class="search_inner">
                  <form action="{{URL::to('/tim-kiem')}}" method="post">
                    {{ csrf_field()}}
                    <input type="text" name="keywords_submit" placeholder="Tìm kiếm sản phẩm">
                    <button type="submit" name="search_items"><i class="ion-ios-search"></i></button>
                  </form>
                </div>
              </div>
              <div class="header_account">
                <div class="account_inner">
                  <a href="#"></a>
                </div>
                <div class="content-setting-dropdown"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>  
     @yield('content')
     <!--Brand logo start-->  
                  <div class="brand_logo">
                      <div class="container-fluid">
                          <div class="row">
                              <div class="col-12">
                                  <div class="brand_list_carousel owl-carousel">
                                      <div class="single_brand_logo">
                                          <a href="#">
                                              <img src="{{asset('public/frontend/images/brand/1.jpg')}}" alt="brand logo">
                                          </a>
                                      </div>
                                      <div class="single_brand_logo">
                                          <a href="#">
                                              <img src="{{asset('public/frontend/images/brand/2.jpg')}}" alt="brand logo">
                                          </a>
                                      </div>
                                      <div class="single_brand_logo">
                                          <a href="#">
                                              <img src="{{asset('public/frontend/images/brand/3.jpg')}}" alt="brand logo">
                                          </a>
                                      </div>
                                      <div class="single_brand_logo">
                                          <a href="#">
                                              <img src="{{asset('public/frontend/images/brand/4.jpg')}}" alt="brand logo">
                                          </a>
                                      </div>
                                      <div class="single_brand_logo">
                                          <a href="#">
                                              <img src="{{asset('public/frontend/images/brand/5.jpg')}}" alt="brand logo">
                                          </a>
                                      </div>
                                      <div class="single_brand_logo">
                                          <a href="#">
                                              <img src="{{asset('public/frontend/images/brand/1.jpg')}}" alt="brand logo">
                                          </a>
                                      </div>
                                      <div class="single_brand_logo">
                                          <a href="#">
                                              <img src="{{asset('public/frontend/images/brand/2.jpg')}}" alt="brand logo">
                                          </a>
                                      </div>
                                      <div class="single_brand_logo">
                                          <a href="#">
                                              <img src="{{asset('public/frontend/images/brand/3.jpg')}}" alt="brand logo">
                                          </a>
                                      </div>
                                      <div class="single_brand_logo">
                                          <a href="#">
                                              <img src="{{asset('public/frontend/images/brand/4.jpg')}}" alt="brand logo">
                                          </a>
                                      </div>
                                      <div class="single_brand_logo">
                                          <a href="#">
                                              <img src="{{asset('public/frontend/images/brand/5.jpg')}}" alt="brand logo">
                                          </a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div> 
                  <!--Brand logo end-->   
                  
                  <!-- footer start -->
                  <footer class="footer pt-90">
                      <div class="container-fluid">
                          <div class="row">
                              <div class="col-lg-3 col-md-12 col-xs-12">
                                  <!--Single Footer-->
                                  <div class="single_footer widget">
                                      <div class="single_footer_widget_inner">
                                          <div class="footer_logo">
                                              <a href="#"><img src="{{asset('public/frontend/images/logo/eva.jpg')}}" alt=""></a>
                                          </div>
                                          <div class="footer_content">
                                              <p>Địa chỉ: 470 Trần Đại Nghĩa - Ngũ Hành Sơn - Đà Nẵng.</p>
                                              <p>Điện thoại: +(84) 0837.463.402</p>
                                              <p>Email: hthvan.20it2@vku.udn.vn</p>
                                          </div>
                                          <div class="footer_social">
                                              <h4>Liên hệ:</h4>
                                              <div class="footer_social_icon">
                                                  <a href="#"><i class="fa fa-twitter"></i></a>
                                                  <a href="#"><i class="fa fa-google-plus"></i></a>
                                                  <a href="#"><i class="fa fa-facebook"></i></a>
                                                  <a href="#"><i class="fa fa-youtube"></i></a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <!--Single Footer-->
                              </div>
                              <div class="col-lg-6 col-md-12 col-xs-12">
                                  <div class="footer_menu_list d-flex justify-content-between">
                                      <!--Single Footer-->
                                      <div class="single_footer widget">
                                          <div class="single_footer_widget_inner">   
                                              <div class="footer_title">
                                                  <h2>Sản phẩm</h2>
                                              </div>
                                              <div class="footer_menu">
                                                  <ul>
                                                      <li><a href="#">Giá giảm</a></li>
                                                      <li><a href="#"> Sản phẩm mới</a></li>
                                                      <li><a href="#"> Liên hệ chúng tôi</a></li>
                                                  </ul>
                                              </div>
                                          </div>
                                      </div>
                                      <!--Single footer end-->   
                                      <!--Single footer start-->   
                                      <div class="single_footer widget">
                                          <div class="single_footer_widget_inner">   
                                              <div class="footer_title">
                                                  <h2>Hỗ trợ</h2>
                                              </div>
                                              <div class="footer_menu">
                                                  <ul>
                                                      <li><a href="#">Tìm kiếm</a></li>
                                                      <li><a href="#"> Giới thiệu</a></li>
                                                      <li><a href="#"> Chính sách đổi trả</a></li>
                                                      <li><a href="#"> Chính sách bảo mật</a></li>
                                                      <li><a href="#"> Điều khoản dịch vụ</a></li>
                                                  </ul>
                                              </div>
                                          </div>
                                      </div>
                                      <!--Single Footer end-->
                                      <!--Single footer start-->   
                                      <div class="single_footer widget">
                                          <div class="single_footer_widget_inner">   
                                              <div class="footer_title">
                                                  <h2> Tài khoản của bạn </h2>
                                              </div>
                                              <div class="footer_menu">
                                                  <ul>
                                                      <li><a href="#">Thông tin cá nhân</a></li>
                                                      <li><a href="#"> Đơn hàng</a></li>
                                                      <li><a href="#"> Phiếu tín dụng</a></li>
                                                  </ul> 
                                              </div>
                                          </div>
                                      </div>
                                      <!--Single Footer end-->
                                  </div>
                              </div>
                              <div class="col-lg-3 col-md-12 col-xs-12">
                                  <div class="footer_title">
                                      <h2> Giới thiệu </h2>
                                  </div>
                                  <div class="footer_news_letter">
                                      <p>DV Cosmetic trang mua sắm trực tuyến của các thương hiệu mỹ phẩm, giúp bạn tiếp cận xu hướng làm đẹp mới nhất..</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="copyright">
                          <div class="container-fluid">
                              <div class="row">
                                  <div class="col-lg-12 col-md-12 col-xs-12">
                                      <div class="copyright_text">
                                          <p style="text-align: center;">Copyright © 2021 <a href="#">DV Cosmetic</a>.By Vân</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </footer>
                  <!-- footer end -->
              </div>
            <!-- all js here -->
          <script src="{{asset('public/frontend/js/vendor/jquery-1.12.0.min.js')}}"></script>
          <script src="{{asset('public/frontend/js/vendor/modernizr-2.8.3.min.js')}}"></script>
          <script src="{{asset('public/frontend/js/popper.js')}}"></script>
          <script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
          <script src="{{asset('public/frontend/js/jquery.meanmenu.min.js')}}"></script>
          <script src="{{asset('public/frontend/js/jquery-ui.js')}}"></script>
          <script src="{{asset('public/frontend/js/isotope.pkgd.min.js')}}"></script>
          <script src="{{asset('public/frontend/js/imagesloaded.pkgd.min.js')}}"></script>
          <script src="{{asset('public/frontend/js/jquery.counterup.min.js')}}"></script>
          <script src="{{asset('public/frontend/js/jquery.countdown.min.js')}}"></script>
          <script src="{{asset('public/frontend/js/waypoints.min.js')}}"></script>
          <script src="{{asset('public/frontend/js/ajax-mail.js')}}"></script>
          <script src="{{asset('public/frontend/js/owl.carousel.min.js')}}"></script>
          <script src="{{asset('public/frontend/js/plugins.js')}}"></script>
          <script src="{{asset('public/frontend/js/main.js')}}"></script>
          <script src="{{asset('public/frontend/js/map.js')}}"></script>
          <script src="http://itexpress.vn/API/files/it.snow.js"></script>
      </body>
  </html>
