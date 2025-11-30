<?php if (isset($component)) { $__componentOriginal7e574ae613b9c7a71481c42282e2125e07f655dc = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Admin\Layout\Terminal::class, ['title' => 'Admin | Data Poli']); ?>
<?php $component->withName('admin.layout.terminal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>

    <div class="container-xxl flex-grow-1 container-p-y mt-4">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="pasien-bpjs">
                    <div class="card-title">
                        <h5 style="margin-bottom: 20px"><strong>Data Poli</strong></h5>
                        <button type="button" class="btn btn-primary rounded-pill" data-bs-toggle="modal"
                            data-bs-target="#tambahpoli"><i class="bi bi-plus-lg"></i>Tambah Poli</button>
                    </div>
                    <div class="tb-umum">
                        <table id="example" class="table table-striped table-bordered text-center">
                            <thead class="table-primary text-center">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Poli</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $poli; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($item->namapoli); ?></td>
                                        <td>
                                            <div class="aksi d-flex align-items-center justify-content-center">
                                                <button class="btn btn-primary"
                                                    data-bs-target="#editpoli<?php echo e($item->KdPoli); ?>"
                                                    data-bs-toggle="modal"><i class="fas fa-pen"></i> Edit</button>
                                                <button type="button" class="btn btn-danger mx-2"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#hapuspoli<?php echo e($item->KdPoli); ?>"><i
                                                        class="fas fa-trash"></i> Hapus</button>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo $__env->make('admin.master.datapoli.modaltambah', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.master.datapoli.modaledit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.master.datapoli.modalhapus', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php $__env->startPush('style'); ?>
        <link rel="stylesheet" href="https://cdn.datatables.net/2.0.1/css/dataTables.bootstrap4.css">
    <?php $__env->stopPush(); ?>
    <?php $__env->startPush('script'); ?>
        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/2.0.1/js/dataTables.js"></script>
        <script src="https://cdn.datatables.net/2.0.1/js/dataTables.bootstrap4.js"></script>
        <script>
            new DataTable('#example');
        </script>
    <?php $__env->stopPush(); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7e574ae613b9c7a71481c42282e2125e07f655dc)): ?>
<?php $component = $__componentOriginal7e574ae613b9c7a71481c42282e2125e07f655dc; ?>
<?php unset($__componentOriginal7e574ae613b9c7a71481c42282e2125e07f655dc); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\Klinik\resources\views/admin/master/datapoli/index.blade.php ENDPATH**/ ?>