<?php $__env->startSection('title', 'Data Administrator'); ?>

<?php $__env->startSection('page-heading'); ?>
<div class="page-heading">
	<div class="page-title">
		<div class="row">
			<div class="col-12 col-md-6 order-md-1 order-last">
				<h3>Data Administrator</h3>
				<p class="text-subtitle text-muted">Halaman untuk manajemen data administrator seperti melihat, mengubah dan
					menghapus.
				</p>
			</div>
			<div class="col-12 col-md-6 order-md-2 order-first">
				<nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="<?php echo e(route('dashboard')); ?>">Dashboard</a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">
							Data Administrator
						</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<div class="col card">
					<div class="d-flex justify-content-end pb-3">
						<div class="btn-group gap gap-2">
							<a href="#" class="btn btn-secondary">
								<span class="badge">0</span> Histori Data Administrator
							</a>
							<button type="button" class="btn btn-primary icon icon-left" data-bs-toggle="modal"
								data-bs-target="#createModal">
								<i class="bi bi-plus-circle"></i> Tambah Data Administrator
							</button>
						</div>
					</div>

					<div class="table-responsive">
						<table class="table w-100 table-hover" id="table">
							<thead>
								<tr>
									<th>#</th>
									<th>Nama</th>
									<th>Email</th>
									<th>Tanggal Ditambahkan</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php if (! $__env->hasRenderedOnce('18f24543-62ad-4efe-8a59-beeb40038e44')): $__env->markAsRenderedOnce('18f24543-62ad-4efe-8a59-beeb40038e44');
$__env->startPush('modal'); ?>
<?php echo $__env->make('administrators.modal.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('administrators.modal.show', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); endif; ?>

<?php if (! $__env->hasRenderedOnce('4dbcd775-1ff6-4f6e-8265-487925e370ef')): $__env->markAsRenderedOnce('4dbcd775-1ff6-4f6e-8265-487925e370ef');
$__env->startPush('scripts'); ?>
<?php echo $__env->make('administrators.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); endif; ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\OneDrive\Desktop\uangkas\resources\views/administrators/index.blade.php ENDPATH**/ ?>