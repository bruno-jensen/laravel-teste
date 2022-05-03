<?php $__env->startSection('content'); ?>

<body>

<h3>Contacts List page</h3>

<p></p>

<div class="container">
  <div class="row">
    <div class="col-sm">      
    </div>
    <div class="col-sm">      
    </div>
    <div class="col-sm">      
    </div>
    <div class="col-sm">      
    </div>
    <div class="col-sm" style="text-align: right;">
		<a href="<?php echo e(url('contact/create/')); ?>" title="Add new contact">
			<i class="fas fa-plus"></i>
		</a>			
    </div>
  </div> 

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
  
  <?php $__currentLoopData = $contactList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
	<div class="row">
		<div class="col-sm" style="text-align: center;">
			<?php echo e($contact->ID); ?>

		</div>
		<div class="col-sm" style="text-align: center;">
			<?php echo e($contact->Name); ?>

		</div>
		<div class="col-sm" style="text-align: center;">
			<?php echo e($contact->Contact); ?>

		</div>
		<div class="col-sm" style="text-align: center;">
			<?php echo e($contact->email); ?>

		</div>
		<div class="col-sm" style="text-align: center;">
			<div class="space"></div>			
			<form action="<?php echo e(url('contact/destroy')); ?>/<?php echo e($contact->ID); ?>" method="POST">
				<?php echo csrf_field(); ?>
  				<input type="hidden" name="id" value=<?php echo e($contact->ID); ?> />
  				<button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
			</form>
			<div class="space"></div>
			<a href="<?php echo e(url('contact/')); ?>/<?php echo e($contact->ID); ?>/edit" title="Edit contact">
				<i class="far fa-edit"></i>
			</a>
			<div class="space"></div>						
			<a href="<?php echo e(url('contact/details')); ?>/<?php echo e($contact->ID); ?>" title="Details">
				<i class="fas fa-search-plus"></i>
			</a>			
		</div>
	</div>

	<form method='POST' id='formgeral' action="<?php echo e(url('contact/delete')); ?>/<?php echo e(@$ID); ?>" enctype="multipart/form-data">
		<?php echo csrf_field(); ?>
		<input type="hidden" id="ID" name="ID" value="<?php echo e(@$ID); ?>">
	</form>

  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
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
<?php echo $__env->make('theme.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/administrador/git/teste-alosoft/teste-app/resources/views/contact/index.blade.php ENDPATH**/ ?>