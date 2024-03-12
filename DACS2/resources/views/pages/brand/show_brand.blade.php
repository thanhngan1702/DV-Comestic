@extends('pages.products')
@section('content1')
<div class="tab-content">
                <!--menu dạng lưới start-->
                <div class="tab-pane fade show active" id="shop_active" >
                <div class="row">
                      <!--sản phẩm 1 start-->
                      @foreach($brand_by_id as $key => $product)
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                      <div class="single__product">
                        <div class="single_product__inner"><span class="new_badge">new</span><span class="discount_price">-5%</span>
                          <div class="product_img"><a href="#"><img src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt=""></a></div>
                          <div class="product__content text-center">
                            <div class="produc_desc_info">
                              <div class="product_title"><h4><a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}">{{ $product->product_name}}</a></h4></div>
                              <div class="product_price"><p>{{ $product->product_price}}</p></div>
                            </div>
                          <div class="product__hover">
                            <ul>
                              <li><a href="#"><i class="ion-android-cart"></i></a></li>
                              <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal"  title="Quick View" ><i class="ion-android-open"></i></a></li>
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
                <!--menu dạng lưới end-->
                <!--menu dạng danh sách-->
                <div class="tab-pane fade" id="featured_active" role="tabpanel">
                  <!--sản phẩm 1 start-->
                  @foreach($brand_by_id as $key => $product)
                  <div class="tab_product_bottom_wrapper">
                    <div class="row">
                      <div class="col-lg-4 col-md-5 col-sm-5">
                        <div class="single_product__inner inner_shop"><span class="new_badge">new</span><span class="discount_price">-5%</span>
                          <div class="product_img"><a href="#"><img src="{{asset('public/fontend/images/product/sale/e.jpg')}}" alt=""></a></div>
                        </div> 
                      </div>
                      <div class="col-lg-8 col-md-7 col-sm-7">
                        <div class="product__content text-left">
                          <div class="produc_desc_info">
                            <div class="product_title title_shop"><h4><a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}">Cheese Butter Burger</a></h4></div>
                            <div class="product_price price_shop"><p class="regular_price">250,000₫</p><p>350,000₫</p></div>
                            <div class="product_content_shop">
                              <p>Bạn đang sở hữu một làn da không đẹp, dễ bắt nắng, nhợt nhạt, thiếu sức sống,… bạn có một nhu cầu trang điểm cao trong giao tiếp, trong công việc nhưng lại lo lắng da bị tổn thương vì việc trang điểm nhiều...</p>
                            </div>
                          </div>
                          <div class="product__hover hover_shop">
                            <div class="product_addto_cart"><button type="submit">ADD TO CART</button></div>
                            <div class="product_cart_icone">
                              <ul>
                                <li><a href="#"><i class="ion-android-cart"></i></a></li>
                                <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal"  title="Quick View" ><i class="ion-android-open"></i></a></li>
                                <li><a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}"><i class="ion-clipboard"></i></a></li>
                              </ul>
                            </div>    
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                    <!--sản phẩm 1 end-->
                </div>
              </div> 
@endsection