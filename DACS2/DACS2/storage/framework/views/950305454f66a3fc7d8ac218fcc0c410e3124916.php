
<?php $__env->startSection('content'); ?>
<div class="breadcrumbs">
			<ol class="breadcrumb">
			<li><a href="<?php echo e(URL::to('/')); ?>"> <b>Trang chủ  > </b></a></li>
			<li class="active"> >  Giỏ hàng </li>
			</ol>
		</div>

<table class="table table-striped b-t b-light">

        <thead>
          <tr>
            <th style="width:30px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th class="image"></th>
            <th class="name">Tên sản phẩm</th>
            <th class="price">Giá sản phẩm</th>
            <th class="quantity">Số lượng</th>
            <th class="subtotal">Thành tiền</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          
         <?php $__currentLoopData = Session::get('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td><img src="<?php echo e(asset('public/uploads/product/'.$cart['product_image'])); ?>"  height="100" width="100" alt="<?php echo e($cart['product_name']); ?>"></td>
            <td><?php echo e($cart['product_name']); ?></td>
            <td><p><?php echo e($cart['product_price']); ?></p></td>
            <td class="quantity">
            	<form action="" method="POST">
                <div class="cart-plus-minus">
                  <input class="cart-plus-minus-box" type="text" name="cart_qty[<?php echo e($cart['session_id']); ?>]" value="<?php echo e($cart['product_qty']); ?>">
                  <input name="productid_hidden" type="hidden" value="<?php echo e($cart['product_qty']); ?>" class="cart-plus-minus-box">
                </div>
              </form>
            </td>
            <td></td>
            <td><span class="text-ellipsis"></span>
            </td>
            <td>
              <a href="" class="active styling-edit" ui-toggle-class=""><i class="fa fa-trash" aria-hidden="true" style="font-size: 25px; color: #78a206;"></i></a>
                
            </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>

      <div class="contact-message" style="padding: 5px 500px 5px 500px ;">
        <div class="contact_title">
          <h4>Thông tin đặt hàng</h4> 
        </div>
        <form id="contact-form" method="post"  action="http://d29u17ylf1ylz9.cloudfront.net/organicfood-v1/assets/mail.php">
          <div class="row">
            <div class="col-lg-6">
              <label for="contact_n">Họ và tên<span>*</span></label>
              <input name="name" id="contact_n" type="text">    
            </div>
            <div class="col-lg-6">
              <label for="contact_n3">Số điện thoại</label>
              <input name="phone" id="contact_n2" type="text">    
            </div>
            <div class="col-lg-6">
              <label for="contact_n3">Số điện thoại</label>
              <input name="phone" id="contact_n3" type="text">    
            </div>
            <div class="col-lg-6">
              <label for="contact_n4">Địa chỉ</label>
              <input name="subject" id="contact_n4" type="text">  
            </div>
            <div class="col-12" style="text-align: center;">
              <button type="submit">Đặt hàng</button> 
            </div> 
          </div>
          <p class="form-messege"></p>
        </form>    
      </div>    


<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DACS2\resources\views/pages/cart/cart_ajax.blade.php ENDPATH**/ ?>