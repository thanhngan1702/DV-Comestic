
<?php $__env->startSection('content'); ?>
<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active"> Thanh toán giỏ hàng</li>
				</ol>
			</div><!--/breadcrums-->
			
			<div class="review-payment" style="text-align: center;">
				<h2>Xem lại giỏ hàng</h2>
			</div>
			<div class="table-reponsive cart_info">
      <?php
      $content = Cart::content();
      ?>
      <table class="table table-condensed">
        <thread>
          <tr class="cart_menu">
            <td class="image">Hình ảnh</td>
            <td class="description">sản phẩm</td>
            <td class="price">Giá</td>
            <td class="quantity">Số lượng</td>
            <td class="total">Thành tiền</td>
            <td></td>
          </tr>
        </thread>
        <tbody>
          <?php $__currentLoopData = $content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v_content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td class="cart_product">
              <a href=""><img src="<?php echo e(URL::to('public/uploads/product/'.$v_content->options->image)); ?>" width="100" alt="<?php echo e($v_content->name); ?>"></a>
            </td>
            <td class="cart_description">
              <h4><a href=""><?php echo e($v_content->name); ?></a></h4>
              <p>Mã sản phẩm:<?php echo e($v_content->id); ?> </p>
            </td>
            <td class="cart_price">
              <p><?php echo e(number_format($v_content->price).' '.'đ'); ?></p>
            </td>
            <td class="cart_quantity">
              <div class="cart_quantity_button">
                <form action="<?php echo e(URL::to('/update-cart-quantity')); ?>" method="post">
                  <?php echo e(csrf_field()); ?>

                <input class="cart_quantity_input" type="number" min="1" name="cart_quantity" value="<?php echo e($v_content->qty); ?>" autocomplete="off" size="5">
                <input class="cart_quantity_input" name="rowId_cart" type="hidden" value="<?php echo e($v_content->rowId); ?>" >
                <input class="cart_quantity_input" name="update_qty" type="submit" value="cập nhật">
                </form>
              </div>
            </td>
            <td class="cart_total">
              <p class="cart_total_price">
                <?php
                $subtotal = $v_content->price*$v_content->qty;
                echo number_format($subtotal).' '.'đ'; 
                ?>
              </p>
            </td>
            <td class="cart_delete">
              <a class="cart_quantity_delete" href="<?php echo e(URL::to('/delete-to-cart/'.$v_content->rowId)); ?>"><i class="fa fa-times"></i></a>
            </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
    </div>
    <h4>Chọn hình thức thanh toán</h4>
    <form action="<?php echo e(URL::to('/order-place')); ?>" method="post">
    	<?php echo e(csrf_field()); ?>

			<div class="payment-options">
				<span>
					<label><input name="payment_option" value="1" type="checkbox"> Thanh toán bằng thẻ ATM</label>
				</span>
				<span>
					<label><input name="payment_option" value="2" type="checkbox"> Thanh toán sau khi nhận hàng</label>
				</span>
				<span>
					<label><input name="payment_option" value="3" type="checkbox"> Thanh toán bằng thẻ ghi nợ</label>
				</span>	
				<input class="min_cart_checkout" name="send_order_place" type="submit" value="Đặt hàng">
			</div>
			</form>
		</div>
	</section> <!--/#cart_items-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DACS2\resources\views/pages/checkout/payment.blade.php ENDPATH**/ ?>