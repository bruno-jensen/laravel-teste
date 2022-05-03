<?php $__env->startSection('content'); ?>

<body>

<h3>Show contact page</h3>

<p></p>

<div class="container">
  

  <div class="row">
    <div class="col-sm" style="text-align: center;">
      <h4>Id</h4>
    </div>
    <div class="col-sm" style="text-align: center;">
      <h4>Name</h4>
    </div>
    <div class="col-sm" style="text-align: center;">
      <h4>Contact</h4>
    </div>
    <div class="col-sm" style="text-align: center;">
      <h4>E-mail</h4>
    </div>
    <div class="col-sm" style="text-align: center;">
      <h4>Action</h4>
    </div>
  </div>
  
  <div class="row">
    <div class="col-sm" style="text-align: center;">
      <?php echo e(@$ID); ?>

    </div>
    <div class="col-sm" style="text-align: center;">
      <?php echo e(@$Name); ?>

    </div>
    <div class="col-sm" style="text-align: center;">
      <?php echo e(@$Contact); ?>

    </div>
    <div class="col-sm" style="text-align: center;">
      <?php echo e(@$email); ?>

    </div>
    <div class="col-sm" style="text-align: center;">
    	<form action="<?php echo e(url('contact/destroy')); ?>/<?php echo e(@$ID); ?>" method="POST">
			<?php echo csrf_field(); ?>
  			<input type="hidden" name="id" value=<?php echo e(@$ID); ?> />
  			<button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
		</form>
		<div class="space"></div>	
		<a href="<?php echo e(url('contact/')); ?>" title="Back">
			<i class="fas fa-arrow-circle-left"></i>
		</a>		
		<div class="space"></div>
		<a href="<?php echo e(url('contact/')); ?>/<?php echo e(@$ID); ?>/edit" title="Edit contact">
			<i class="far fa-edit"></i>
		</a>
    </div>
  </div>
  
</div>
</body>

<style>

.space {
    width: 4px;
    height: auto;
    display: inline-block;

}

</style>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('theme.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/administrador/git/teste-alosoft/teste-app/resources/views/contact/show.blade.php ENDPATH**/ ?>