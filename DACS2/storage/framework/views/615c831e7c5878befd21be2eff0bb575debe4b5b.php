
<?php $__env->startSection('content'); ?>
  <!--- shop_wrapper area  -->
      <div class="container-fluid">
        <div class="row">
          
          <!--menu trái start-->
          <div class="col-lg-3 col-md-8 col-12">
            <div class="shop_sidebar">
              <!--Thể loại sản phẩm start-->
              <div class="block_categories">
                <div class="category_top_menu widget">
                  <div class="widget_title"><h3>Danh mục sản phẩm</h3></div>
                  <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <ul class="page_list_clearfix">
                    <li class="has-sub"><a href="<?php echo e(URL::to('/danh-muc-san-pham/'.$cate->category_id)); ?>"><?php echo e($cate->category_name); ?></a></li>
                  </ul>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div> 
              </div>
              <!--Thể loại sản phẩm end-->
              <!--Lọc start-->
              <div class="search_filters_wrapper">
                <!--Lọc theo thương hiệu-->
                <div class="Compositions widget mb-30">
                  <div class="category_top_menu widget">
                  <div class="widget_title"><h3>Thương hiệu</h3></div>
                  <?php $__currentLoopData = $brand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                  <ul class="page_list_clearfix">
                    <li class="has-sub"><a href="<?php echo e(URL::to('/thuong-hieu-san-pham/'.$brand->brand_id)); ?>"><?php echo e($brand->brand_name); ?></a></li>
                  </ul>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                </div>
                <!--Lọc theo thương hiệu end-->
              <!--Lọc theo giá start--> 
                <div class="price_filter widget">
                  <div class="widget_title"><h3>Lọc theo giá</h3></div>
                  <div class="search_filters widget">
                    <div id="slider-range"></div>
                    <input type="text" name="text" id="amount" />
                  </div>
                </div>
                <!--Lọc theo giá end-->
                <!--Lọc theo màu sắc-->
                <div class="color_clearfix widget mb-30">
                  <div class="widget_title"><h3>color</h3></div>
                  <ul>
                    <li><input id="balck" checked="checked" class="input_color" name="color1"  type="radio"><label for="balck" class="color_btns"></label><a href="#"> Beige(5)</a></li>
                  </ul>    
                </div>
                <!--Lọc theo giá end-->
              </div>
              <!--Lọc end-->
            </div>
          </div>
          <!--menu trái end-->
          <div class="col-lg-9 col-md-12 col-12">
            <!--banner shop-->
            <div class="categories_banner">
              <div class="categories_banner_inner"><img src="<?php echo e(asset('public/frontend/images/banner/shop.jpg')); ?>" alt=""></div>
              <h3>SHOP</h3>
            </div>
            <!--banner shop end-->
            <!--menu giữa start-->
            <div class="tav_menu_wrapper">
              <div class="row align-items-center">
                <div class="col-lg-6 col-md-7 col-sm-6">
                  <div class="tab_menu shop_menu">
                    <div class="tab_menu_inner">
                      <ul class="nav" role="tablist">
                        <li><a class="active" data-toggle="tab" href="#shop_active" role="tab" aria-controls="shop_active" aria-selected="true"><i class="fa fa-th" aria-hidden="true"></i></a></li>
                        <li><a data-toggle="tab" href="#featured_active" role="tab" aria-controls="featured_active" aria-selected="false"><i class="fa fa-list" aria-hidden="true"></i></a></li>
                      </ul>
                    </div>
                    <div class="tab_menu_right"><p>Có 14 sản phẩm..</p></div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-5 col-sm-6">
                  <div class="Relevance"><span>Sắp xếp theo:</span>
                    <div class="dropdown dropdown-shop">
                    <select name="drop" id="dropdown">
                      <option value="1">Relevance</option>
                      <option value="2">Tên, A to Z</option>
                      <option value="2">Tên, Z to A</option>
                      <option value="2">Giá, thấp đến cao</option>
                      <option value="2">Giá từ cao đến thấp</option>
                    </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--menu giữa end-->
            <!--sản phẩm start-->
            
            <div class="tab_product_wrapper">
              <?php echo $__env->yieldContent('content1'); ?>
            </div> 
            <!--sản phẩm end-->   
            <!--menu dưới start-->
            <div class="shop_pagination">
              <div class="row align-items-center">
                <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="total_item_shop">Hiển thị 13-14 của 14 sản phẩm</div>
                </div>
                <div class="col-lg-6 offset-lg-2 col-md-6 col-sm-6">
                  <div class="page_list_clearfix text-center">
                    <ul>
                      <li class="prev"><a href="#"><i class="zmdi zmdi-chevron-left"></i> Previous</a></li>
                      <li><a href="#">1</a></li>
                      <li class="current_page"><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li class="next"><a href="#"> Next <i class="zmdi zmdi-chevron-right"></i></a></li>
                    </ul> 
                  </div>
                </div>
              </div>
            </div>
            <!--menu dưới end-->
          </div>
        </div>
      </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DACS2\resources\views/pages/products.blade.php ENDPATH**/ ?>