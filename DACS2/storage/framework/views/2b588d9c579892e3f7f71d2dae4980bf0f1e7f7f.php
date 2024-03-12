
<?php $__env->startSection('content'); ?>
<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active"> Thanh toán</li>
				</ol>
			</div><!--/breadcrums-->
			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-12 clearfix">
						<div class="bill-to">
							<p>Điền thông tin gửi hàng</p>
							<div class="form-one">
								<form action="<?php echo e(URL::to('/save-checkout-customer')); ?>" method="post">
									<?php echo e(csrf_field()); ?>

									<input type="text" name="shipping_name" placeholder="Họ và tên">
									<input type="text" name="shipping_email" placeholder="Email*">
									<input type="text" name="shipping_phone" placeholder="Số điện thoại">
									<input type="text" name="shipping_address" placeholder="Địa chỉ nhận hàng">
									<textarea name="shipping_notes"  placeholder="Ghi chú đơn hàng của bạn" rows="12"></textarea>
									<input class="btn btn-primary btn-sm" name="send_order" type="submit" value="Gửi">
								</form>
							</div>
						</div>
					</div>		
				</div>
			</div>
	</section> <!--/#cart_items-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DACS2\resources\views/pages/checkout/show_checkout.blade.php ENDPATH**/ ?>