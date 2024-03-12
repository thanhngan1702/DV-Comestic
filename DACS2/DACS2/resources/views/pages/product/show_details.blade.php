@extends('welcome')
@section('content')
@foreach($product_details as $key => $value)
<div class="table_primary_block pt-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <div class="product-flags">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tabone" role="tabpanel" >
                            <div class="product_tab_img">
                                <a href="#"><img src="{{URL::to('/public/uploads/product/'.$value->product_image)}}" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="products_tab_button">
                        <ul class="nav product_navactive" role="tablist">
                            <li  class="product_button_one">
                                <a class="nav-link active"  data-toggle="tab" href="#tabone" role="tab" aria-controls="imgeone" aria-selected="false"><img src="{{URL::to('public/frontend/images/cart/nav.jpg')}}" alt=""></a>
                            </li>
                            <li>
                                <a class="nav-link" data-toggle="tab" href="#tabtwo" role="tab" aria-controls="imgetwo" aria-selected="false"><img src="{{URL::to('public/frontend/images/cart/nav1.jpg')}}" alt=""></a>
                            </li>
                            <li>
                                <a class="nav-link" data-toggle="tab" href="#tabthree" role="tab" aria-controls="imgethree" aria-selected="false"><img src="{{URL::to('public/frontend/images/cart/nav2.jpg')}}" alt=""></a>
                            </li>
                        </ul>
                    </div>    
                </div>  
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12">
                <div class="product__details_content">
                    <div class="demo_product">
                        <h2>{{ $value->product_name }}</h2> 
                    </div>
                        <p><b>Mã ID:</b> {{ $value -> product_id }}</p>
                    <div class="current_price">
                        <span>{{number_format($value->product_price).' '.'đ'}}</span>  
                    </div>
                    <form action="{{URL::to('/save-cart/')}}" method="POST" >
                        {{ csrf_field() }}
                    
                    <div class="product_information">
                        <div id="product_description_short">
                            <p><b>Thương hiệu: </b> {{ $value -> brand_name }} </p>
                            <p><b>Danh mục:    </b> {{ $value -> category_name }}</p>
                            <p><b>Tình trạng:    </b> Còn hàng </p>   
                        </div>
                        <div class="product_variants"> 
                            <div class="quickview_plus_minus">
                                <span class="control_label">Số lượng</span>
                                <div class="quickview_plus_minus_inner">
                                    <div class="cart-plus-minus">
                                        <input name="qty" type="text" value="1"  class="cart-plus-minus-box">
                                        <input name="productid_hidden" type="hidden" value="{{ $value -> product_id }}" class="cart-plus-minus-box">
                                    </div>
                                    <div class="add_button">
                                        <button type="submit">Thêm vào giỏ hàng</button> 
                                    </div>
                                </div>  
                            </div> 
                        </div>
                    </div>
                    </form> 
                </div>
            </div> 
        </div>
    </div>  
</div>
    <!-- primary block end -->
    <!-- product page tab -->
    <div class="product_page_tab ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product_tab_button">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li><a class=" tav_past active" id="home-tab" data-toggle="tab" href="#Description" role="tab" aria-controls="Description" aria-selected="true">Mô tả</a></li>
                            <li><a class=" tav_past"  id="contact-tab" data-toggle="tab" href="#Reviews" role="tab" aria-controls="Reviews" aria-selected="false">Đánh giá</a></li>
                        </ul>
                    </div> 
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="Description" role="tabpanel" >
                            <div class="product-description">
                                <p>{!!$value -> product_desc!!}</p>  
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Reviews" role="tabpanel">
                            <div class="product_comments_block_tab">
                                <div class="comment_clearfix">
                                    <div class="comment_author">
                                        <span>Grade </span>
                                        <div class="star_content clearfix">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>    
                                        </div> 
                                    </div> 
                                    <div class="comment_author_infos">
                                        <strong>posthemes </strong><br>
                                        <em>25/05/2021</em>
                                    </div>
                                    <div class="comment_details">
                                        <h4>Nội dung</h4>
                                        <p>{!!$value -> product_content!!}</p>    
                                    </div>
                                </div>  
                            </div> 
                        </div>
                    </div>
                </div>   
            </div>  
        </div>  
    </div>
    <!-- product page tab end-->
        @endforeach
    <!--Features product start-->
    <div class="features_product pt-90">
                      <div class="container-fluid">
                          <div class="row">
                              <div class="col-12">
                                  <div class="section_title text-center">
                                      <h3> Sản phẩm liên quan </h3>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="features_product_active owl-carousel">
                                @foreach($related as $key => $lienquan)

                                  <div class="col-lg-2">
                                      <div class="single__product">
                                          <div class="single_product__inner">
                                              <span class="new_badge">new</span>
                                              <span class="discount_price">-5%</span>
                                              <div class="product_img">
                                              <a href="#">
                                                  <img src="{{URL::to('public/uploads/product/'.$lienquan->product_image)}}" alt="">
                                                  </a>
                                              </div>
                                              <div class="product__content text-center">
                                                  <div class="produc_desc_info">
                                                      <div class="product_title">
                                                          <h4><a href="#">{{$lienquan->product_name}}</a></h4>
                                                      </div>
                                                      <div class="product_price">
                                                          <p>{{$lienquan->product_price}}</p><del>200,000₫</del>
                                                      </div>
                                                  </div>
                                                  <div class="product__hover">
                                                      <ul>
                                                          <li><a href="#"><i class="ion-android-cart"></i></a></li>
                                                          <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal"  title="Quick View" ><i class="ion-android-open"></i></a></li>
                                                          <li><a href="#"><i class="ion-clipboard"></i></a></li>
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
@endsection