
<?php if($project && $currantWorkspace): ?>

    <form class="pl-3 pr-3" method="post" action="<?php if(auth()->guard('web')->check()): ?><?php echo e(route('projects.bug.report.store',[$currantWorkspace->slug,$project->id])); ?><?php elseif(auth()->guard()->check()): ?><?php echo e(route('client.projects.bug.report.store',[$currantWorkspace->slug,$project->id])); ?><?php endif; ?>">
        <?php echo csrf_field(); ?>

        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="task-title"><?php echo e(__('Title')); ?></label>
                    <input type="text" class="form-control form-control-light" id="task-title"
                           placeholder="<?php echo e(__('Enter Title')); ?>" name="title" required>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="task-priority"><?php echo e(__('Priority')); ?></label>
                    <select class="form-control form-control-light" name="priority" id="task-priority" required>
                        <option value="Low"><?php echo e(__('Low')); ?></option>
                        <option value="Medium"><?php echo e(__('Medium')); ?></option>
                        <option value="High"><?php echo e(__('High')); ?></option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="assign_to"><?php echo e(__('Assign To')); ?></label>
                    <select class="form-control form-control-light" id="assign_to" name="assign_to" required>
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($u->id); ?>"><?php echo e($u->name); ?> - <?php echo e($u->email); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="status"><?php echo e(__('Status')); ?></label>
                    <select class="form-control form-control-light" id="status" name="status" required>
                        <?php $__currentLoopData = $arrStatus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($status); ?>"><?php echo e(__(ucfirst($status))); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="task-description"><?php echo e(__('Description')); ?></label>
            <textarea class="form-control form-control-light" id="task-description" rows="3" name="description"></textarea>
        </div>



        <div class="text-right">
            <button type="button" class="btn btn-light" data-dismiss="modal"><?php echo e(__('Cancel')); ?></button>
            <button type="submit" class="btn btn-primary"><?php echo e(__('Create')); ?></button>
        </div>

    </form>

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
<?php endif; ?><?php /**PATH /var/www/html/Taskly2/site/resources/views/projects/bug_report_create.blade.php ENDPATH**/ ?>