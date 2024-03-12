
<?php $__env->startSection('content'); ?>
<section id="cart_items">
  <div class="container">
    <div class="breadcrumbs">
      <ol class="breadcrumb">
      <li class="active">GIỎ HÀNG</li>
      </ol>
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
  </div>
</section>
<section id="do_action"> 
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="total_area">
          <ul>
            <li>Tổng <span><?php echo e(Cart::total(0).' '.'đ'); ?></span></li>
            <li>Thuế <span><?php echo e(Cart::tax(0).' '.'đ'); ?></span></li>
            <li>Phí vận chuyển <span>Free</span></li>
            <li>Thành tiền <span><?php echo e(Cart::total(0).' '.'đ'); ?></span></li>
        </ul>
        <?php
        $customer_id = Session::get('customer_id');
        if($customer_id!=NULL){
          ?>
          <div class="min_cart_checkout"><a class="" href="<?php echo e(URL::to('/checkout')); ?>">Thanh toán</a></div>
          <?php
        } else {
          ?>
        <div class="min_cart_checkout"><a class="" href="<?php echo e(URL::to('/login-checkout')); ?>">Thanh toán</a></div>
        <?php 
      }
      ?>
      </div>
    </div>
  </div>
</div>
</section>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DACS2\resources\views/pages/cart/show_cart.blade.php ENDPATH**/ ?>