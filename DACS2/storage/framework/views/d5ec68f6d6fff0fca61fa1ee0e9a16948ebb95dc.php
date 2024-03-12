
<?php $__env->startSection('content'); ?>
<div class="breadcrumbs">
			<ol class="breadcrumb">
			<li><a href="<?php echo e(URL::to('/')); ?>"> <b>Trang chủ  > </b></a></li>
			<li class="active"> >  Giỏ hàng </li>
			</ol>
		</div>
<table class="table table-striped b-t b-light">
	<?php
	content = Cart::content();
	?>
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th></th>
            <th>Tên sản phẩm</th>
            <th>Giá sản phẩm</th>
            <th>Số lượng</th>
            <th>Tổng tiền</th>
            
           
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          <?php $__currentLoopData = $content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v_content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td><img src="" height="100" width="100"> </td>
            <td>tên</td>
            <td>giá</td>
            
            <td class="quickview_plus_minus_inner">
            	<div class="cart-plus-minus">
            		<input name="qty" type="text" value="1"  class="cart-plus-minus-box">
            		<input name="productid_hidden" type="hidden" value="" class="cart-plus-minus-box">
                </div>
            </td>
            <td></td>
            <td><span class="text-ellipsis">
              
            </span></td>
            
            <td>
              <a href="" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i></a>
              <a href="" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-times text-danger text"></i></a>
            </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DACS2\resources\views/pages/cart.blade.php ENDPATH**/ ?>