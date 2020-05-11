<?php if($project && $currantWorkspace): ?>
    <form class="pl-3 pr-3" method="post" action="<?php echo e(route('projects.timesheet.store',[$currantWorkspace->slug,$project->id])); ?>">
        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="task_id"><?php echo e(__('Task')); ?></label>
                    <select class="form-control form-control-light" name="task_id" id="task_id" required>
                        <option value=""><?php echo e(__('Select Task')); ?></option>
                        <?php if(!empty($project->tasks())): ?>
                            <?php $__currentLoopData = $project->tasks(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($task->id); ?>"><?php echo e($task->title); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="date"><?php echo e(__('Date')); ?></label>
            <input type="date" class="form-control form-control-light date" id="date" placeholder="<?php echo e(__('Date')); ?>" name="date" required>
        </div>
        <div class="form-group">
            <label for="time"><?php echo e(__('Time')); ?></label>
            <input type="time" class="form-control form-control-light" id="time" placeholder="<?php echo e(__('Time')); ?>" name="time" required>
        </div>
        <div class="form-group">
            <label for="description"><?php echo e(__('Description')); ?></label>
            <textarea class="form-control form-control-light" id="description" rows="3" name="description"></textarea>
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
<?php endif; ?>
<?php /**PATH /var/www/html/Taskly2/site/resources/views/projects/timesheetCreate.blade.php ENDPATH**/ ?>