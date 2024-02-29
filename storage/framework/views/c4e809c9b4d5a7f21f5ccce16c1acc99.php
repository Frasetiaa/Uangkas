<?php $__env->startSection('title', 'Data Jurusan'); ?>

<?php $__env->startSection('page-heading'); ?>
<div class="page-heading">
	<div class="page-title">
		<div class="row">
			<div class="col-12 col-md-6 order-md-1 order-last">
				<h3>Data Jurusan</h3>
				<p class="text-subtitle text-muted">Halaman untuk manajemen data jurusan seperti melihat, mengubah dan
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
							Data Jurusan
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
								<span class="badge">0</span> Histori Data Jurusan
							</a>
							<button type="button" class="btn btn-primary icon icon-left" data-bs-toggle="modal"
								data-bs-target="#createModal">
								<i class="bi bi-plus-circle"></i> Tambah Data Jurusan
							</button>
						</div>
					</div>

					<div class="table-responsive">
						<table class="table w-100 table-hover" id="table">
							<thead>
								<tr>
									<th>#</th>
									<th>Nama</th>
									<th>Singkatan</th>
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

<?php if (! $__env->hasRenderedOnce('c9bbd1d5-c91d-4f3e-b4d1-d6760e1f52b9')): $__env->markAsRenderedOnce('c9bbd1d5-c91d-4f3e-b4d1-d6760e1f52b9');
$__env->startPush('modal'); ?>
<?php echo $__env->make('school_majors.modal.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('school_majors.modal.show', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('school_majors.modal.edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); endif; ?>

<?php if (! $__env->hasRenderedOnce('9774477d-a1ab-4e3c-8e16-6be9a22b7c0a')): $__env->markAsRenderedOnce('9774477d-a1ab-4e3c-8e16-6be9a22b7c0a');
$__env->startPush('scripts'); ?>
<?php echo $__env->make('school_majors.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); endif; ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\OneDrive\Desktop\uangkas\resources\views/school_majors/index.blade.php ENDPATH**/ ?>