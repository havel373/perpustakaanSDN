<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<?php echo $__env->make('theme.auth.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="bg-body">
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Authentication - Sign-in -->
				<!--begin::Body-->
				<div class="d-flex flex-column flex-lg-row-fluid py-10">
					<!--begin::Content-->
					<div class="d-flex flex-center flex-column flex-column-fluid">
						<!--begin::Wrapper-->
						<?php echo e($slot); ?>

						<!--end::Wrapper-->
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
					<!--end::Footer-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::Authentication - Sign-in-->
		</div>
		<!--end::Main-->
		<!--begin::Javascript-->
		<?php echo $__env->make('theme.auth.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php echo $__env->yieldContent('custom_js'); ?>
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html><?php /**PATH D:\KULIAH\DICODING\laragon\www\perpustakaanSDN\resources\views/theme/auth/main.blade.php ENDPATH**/ ?>