<link href="<?php echo e(asset('css/vendor/bootstrap-tagsinput.css')); ?>" rel="stylesheet">
<form class="pl-3 pr-3" method="post" action="<?php echo e(route('projects.share',[$currantWorkspace->slug,$project->id])); ?>">
    <?php echo csrf_field(); ?>
    <div class="form-group">
        <label for="users_list"><?php echo e(__('Clients')); ?></label>

        <select class="select2 form-control select2-multiple" data-toggle="select2" name="clients[]" multiple="multiple" data-placeholder="<?php echo e(__('Select Clients ...')); ?>">
            <?php $__currentLoopData = $currantWorkspace->clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <option value="<?php echo e($client->id); ?>"><?php echo e($client->name); ?> - <?php echo e($client->email); ?></option>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
    <div class="form-group">
        <button class="btn btn-primary" type="submit"><?php echo e(__('Share To Clients')); ?></button>
    </div>
</form>
<script>
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>
<?php /**PATH /home/bwhitwbh/public_html/projects/resources/views/projects/share.blade.php ENDPATH**/ ?>