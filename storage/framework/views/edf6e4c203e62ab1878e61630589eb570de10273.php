<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">My Users</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
		<div id="perf_div"></div>
			<?= Lava::render('ColumnChart', 'Finances', 'perf_div') ?>
			<?php echo \Lava::render('ColumnChart', 'Finances', 'perf_div'); ?>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('theme.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/administrador/git/x-finances/x-finances/resources/views/income/index.blade.php ENDPATH**/ ?>