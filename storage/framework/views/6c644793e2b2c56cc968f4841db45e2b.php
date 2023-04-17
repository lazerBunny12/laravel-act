


<?php $__env->startSection('content'); ?>
<h1><?php echo e($title); ?></h1>

<table class="table table-striped">
	<tr>
	<th>No.</th>
	<th>Name</th>
	<th>Unit</th>
	<th>Unit Price</th>
	<th>Category</th>
	<th>Description</th>
	<th>View Detail</th>
	</tr>

<?php
$counter = 0;
?>

<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<tr>
		<td><?php echo e(++$counter); ?></td>
		<td><?php echo e($product->name); ?></td>
		<td><?php echo e($product->unit); ?></td>
		<td><?php echo e($product->unit_price); ?></td>
		<td><?php echo e($product->category); ?></td>
		<td><?php echo e($product->description); ?></td>
		<td><a href="/products/<?php echo e($product->id); ?>">View</a></td>

	</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Desktop\Lara\laravel\resources\views/product.blade.php ENDPATH**/ ?>