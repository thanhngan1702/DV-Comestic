@extends('welcome')
@section('content')
<!--breadcrumb area end--> 
                  <!--Slider start-->
                  <div class="slider_area">
                      <div class="slider_list  owl-carousel">
                          <div class="single_slide" style="background-image: url(public/frontend/images/slider/b.jpg);">
                          </div>
                          <div class="single_slide" style="background-image: url(public/frontend/images/slider/a.jpg);">
                          </div>
                          <div class="single_slide" style="background-image: url(public/frontend/images/slider/c.jpg);">
                          </div>
                      </div>
                  </div>
                  <!--Slider end-->
                  
                  <!--Banner area start-->
                  <div class="banner_area home1_banner mt-30">
                      <div class="container-fluid">
                          <div class="row">
                              <div class="col-lg-4 col-md-6">
                                  <div class="single_banner">
                                      <a href="#">
                                          <img src="{{('public/frontend/images/banner/a.jpg')}}" alt="">
                                      </a>
                                  </div>
                              </div>
                              <div class="col-lg-4 col-md-6">
                                  <div class="single_banner">
                                      <a href="#">
                                          <img src="{{('public/frontend/images/banner/b.jpg')}}" alt="">
                                      </a>
                                  </div>
                              </div>
                              <div class="col-lg-4 col-md-6">
                                  <div class="single_banner banner_three">
                                      <a href="#">
                                          <img src="{{('public/frontend/images/banner/c.jpg')}}" alt="">
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!--Banner area end-->
<!--Features product area-->
                  <div class="features_product pt-90">
                      <div class="container-fluid">
                          <div class="row">
                              <div class="col-12">
                                  <div class="section_title text-center">
                                      <h3> Ưu đãi & Giảm Giá </h3>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                            
                              <div class="features_product_active owl-carousel">
                                @foreach($all_product as $key => $product)

                                  <div class="col-lg-2">
                                      <div class="single__product">
                                          <div class="single_product__inner">
                                              <span class="new_badge">new</span>
                                              <span class="discount_price">-5%</span>
                                              <div class="product_img">
                                              <a href="#">
                                                  <img src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt="">
                                                  </a>
                                              </div>
                                              <div class="product__content text-center">
                                                <div class="produc_desc_info">
                                                      <div class="product_title">
                                                          <h4><a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}">{{$product->product_name}}</a></h4>
                                                      </div>
                                                      <div class="product_price">
                                                          <p>{{number_format($product->product_price).' '.'đ'}}</p><del>200,000₫</del>
                                                      </div>
                                                  </div>
                                                  <div class="product__hover">
                                                      <ul>
                                                          <li><a href="#"><i class="ion-android-cart" data-id_product="{{$product->product_id}}"></i></a></li>
                                                         
                                                          <li><a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}"><i class="ion-clipboard"></i></a></li>
                                                      </ul>
                                                  </div>
                                               
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  @endforeach
                              </div>
                              
                          </div>
                      </div>
                  </div>
                  <!--Features product end-->
                  
                  <!--Shipping area start-->
                  <div class="shipping_area">
                      <div class="container-fluid">
                          <div class="row">
                              <div class="col-12">
                                  <div class="shipping_list d-flex justify-content-between flex-xs-column">
                                      <div class="single_shipping_box d-flex">
                                          <div class="shipping_icon">
                                              <img src="{{('public/frontend/images/ship/1.png')}}" alt="shipping icon">
                                          </div>
                                          <div class="shipping_content">
                                              <h6>Giao hàng miễn phí cho đơn hàng trên 199k</h6>
                                              <p>Miễn phí vận chuyển trên tất cả các đơn đặt hàng</p>
                                          </div>
                                      </div>
                                      <div class="single_shipping_box one d-flex">
                                          <div class="shipping_icon">
                                              <img src="{{('public/frontend/images/ship/2.png')}}" alt="shipping icon">
                                          </div>
                                          <div class="shipping_content">
                                              <h6>Hoàn trả lại tiền</h6>
                                              <p>Trong vòng 7 ngày</p>
                                          </div>
                                      </div>
                                      <div class="single_shipping_box two d-flex">
                                          <div class="shipping_icon">
                                              <img src="{{('public/frontend/images/ship/3.png')}}" alt="shipping icon">
                                          </div>
                                          <div class="shipping_content">
                                              <h6>Giảm giá thành viên</h6>
                                              <p>Hỗ trợ trực tuyến 24 giờ một ngày</p>
                                          </div>
                                      </div>
                                      <div class="single_shipping_box three d-flex">
                                          <div class="shipping_icon">
                                              <img src="{{('public/frontend/images/ship/4.png')}}" alt="shipping icon">
                                          </div>
                                          <div class="shipping_content">
                                              <h6>Hỗ trợ trực tuyến 24/7</h6>
                                              <p>Miễn phí vận chuyển</p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!--Shipping area end-->
                  
                  
                  <!--shop product area start-->
                  <div class="features_product pt-90">
                      <div class="container-fluid">
                          <div class="row">
                              <div class="col-12">
                                  <div class="section_title text-center">
                                      <h3> Sản phẩm mới </h3>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                            
                              <div class="features_product_active owl-carousel">
                                @foreach($all_product as $key => $product)

                                  <div class="col-lg-2">
                                      <div class="single__product">
                                          <div class="single_product__inner">
                                              <span class="new_badge">new</span>
                                              <div class="product_img">
                                              <a href="#">
                                                  <img src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt="">
                                                  </a>
                                              </div>
                                              <div class="product__content text-center">
                                              
                                                  <div class="produc_desc_info">
                                                      <div class="product_title">
                                                          <h4><a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}">{{$product->product_name}}</a></h4>
                                                      </div>
                                                      <div class="product_price">
                                                          <p>{{number_format($product->product_price).' '.'đ'}}</p><del>200,000₫</del>
                                                      </div>
                                                  </div>
                                                  <div class="product__hover">
                                                      <ul>
                                                          <li><a href="#"><i class="ion-android-cart" data-id_product="{{$product->product_id}}"></i></a></li>
                                                         
                                                          <li><a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}"><i class="ion-clipboard"></i></a></li>
                                                      </ul>
                                                  </div>
                                               
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  @endforeach
                              </div>
                              
                          </div>
                      </div>
                  </div>
                  <!--shop product area end-->
                  
                
                  <!--Best seller product -->
                  <div class="features_product pt-90">
                      <div class="container-fluid">
                          <div class="row">
                              <div class="col-12">
                                  <div class="section_title text-center">
                                      <h3> Sản Phẩm Bán Chạy </h3>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="features_product_active owl-carousel">
                                @foreach($all_product as $key => $product)

                                  <div class="col-lg-2">
                                      <div class="single__product">
                                          <div class="single_product__inner">
                                              <span class="new_badge">Best Seller</span>
                                              <div class="product_img">
                                              <a href="#">
                                                  <img src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt="">
                                                  </a>
                                              </div>
                                              <div class="product__content text-center">
                                                     
                                                  <div class="produc_desc_info">
                                                      <div class="product_title">
                                                          <h4><a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}">{{$product->product_name}}</a></h4>
                                                      </div>
                                                      <div class="product_price">
                                                          <p>{{number_format($product->product_price).' '.'đ'}}</p>
                                                      </div>
                                                  </div>
                                                  <div class="product__hover">
                                                      <ul>
                                                          <li><a href="#"><i class="ion-android-cart" data-id_product="{{$product->product_id}}"></i></a></li>
                                                          
                                                          <li><a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}"><i class="ion-clipboard"></i></a></li>
                                                      </ul>
                                                      
                                                  </div>
                                        
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  @endforeach
                              </div>
                          </div>
                      </div>
                  </div>
                  <!--Best seller product  end-->
@endsection