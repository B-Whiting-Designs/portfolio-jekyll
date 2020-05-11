<?php $__env->startSection('content'); ?>
    <section class="section">
        <?php if($currantWorkspace && $project): ?>
            <div class="row mb-2">
                <div class="col-sm-4">
                    <h2 class="section-title"><?php echo e(__('Timesheet Detail')); ?></h2>
                </div>
                <?php if(auth()->guard('web')->check()): ?>
                <div class="col-sm-8">
                    <div class="text-sm-right">
                        <div class="btn-group mt-4">
                            <a href="#" class="btn btn-sm btn-primary" data-ajax-popup="true" data-title="<?php echo e(__('Create Timesheet')); ?>" data-url="<?php echo e(route('projects.timesheet.create',[$currantWorkspace->slug,$project->id])); ?>"><?php echo e(__('Create Timesheet')); ?></a>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
            <div class="row">
                <div class="col-md-12 animated">
                    <div class="card author-box card-primary">
                        <div class="card-body">
                            <table id="selection-datatable" class="table" width="100%">
                                <thead>
                                <tr>
                                    <th><?php echo e(__('#')); ?></th>
                                    <th><?php echo e(__('Task')); ?></th>
                                    <th><?php echo e(__('Date')); ?></th>
                                    <th><?php echo e(__('Time')); ?></th>
                                    <?php if(auth()->guard('web')->check()): ?>
                                    <th><?php echo e(__('Action')); ?></th>
                                    <?php endif; ?>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $project->timesheet(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $timesheet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($key+1); ?></td>
                                        <td><?php echo e($timesheet->task->title); ?></td>
                                        <td><?php echo e($timesheet->date); ?></td>
                                        <td><?php echo e($timesheet->time); ?></td>
                                        <?php if(auth()->guard('web')->check()): ?>
                                        <td>
                                            
                                            <small>
                                                <a href="#" class="btn btn-sm btn-outline-primary" data-ajax-popup="true" data-title="<?php echo e(__('Edit Milestone')); ?>" data-url="<?php echo e(route('projects.timesheet.edit',[$currantWorkspace->slug,$timesheet->id])); ?>"><i class="mdi mdi-pencil"></i></a>
                                                <a href="#" class="btn btn-sm btn-outline-danger" onclick="(confirm('Are you sure ?')?document.getElementById('delete-form1-<?php echo e($timesheet->id); ?>').submit(): '');"><i class="mdi mdi-delete"></i></a>
                                                <form id="delete-form1-<?php echo e($timesheet->id); ?>" action="<?php echo e(route('projects.timesheet.destroy',[$currantWorkspace->slug,$timesheet->id])); ?>" method="POST" style="display: none;">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                </form>
                                            </small>
                                        </td>
                                        <?php endif; ?>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <div class="container mt-5">
                <div class="page-error">
                    <div class="page-inner">
                        <h1>404</h1>
                        <div class="page-description">
                            <?php echo e(__('Page Not Found')); ?>

                        </div>
                        <div class="page-search">
                            <p class="text-muted mt-3"><?php echo e(__('It\'s looking like you may have taken a wrong turn. Don\'t worry... it happens to the best of us. Here\'s a little tip that might help you get back on track.')); ?></p>
                            <div class="mt-3">
                                <a class="btn btn-info mt-3" href="<?php echo e(route('home')); ?>"><i class="mdi mdi-reply"></i> <?php echo e(__('Return Home')); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('style'); ?>
    <link href="<?php echo e(asset('assets/css/vendor/dataTables.bootstrap4.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(asset('assets/css/vendor/responsive.bootstrap4.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(asset('assets/css/vendor/buttons.bootstrap4.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(asset('assets/css/vendor/select.bootstrap4.css')); ?>" rel="stylesheet" type="text/css"/>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(asset('assets/js/vendor/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/vendor/dataTables.bootstrap4.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/vendor/dataTables.responsive.min.js')); ?>"></script>
    <script>
        $(document).ready(function () {
            $("#selection-datatable").DataTable({
                order: [],
                select: {style: "multi"},
                language: {paginate: {previous: "<i class='mdi mdi-chevron-left'>", next: "<i class='mdi mdi-chevron-right'>"}},
                drawCallback: function () {
                    $(".dataTables_paginate > .pagination").addClass("pagination-rounded")
                }
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bwhitwbh/public_html/projects/resources/views/projects/timesheet.blade.php ENDPATH**/ ?>