<form class="pl-3 pr-3" method="post" action="<?php echo e(route('clients.update',[$currantWorkspace->slug,$client->id])); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <div class="form-group">
        <label for="name"><?php echo e(__('Name')); ?></label>
        <input type="text" class="form-control" id="name" name="name" value="<?php echo e($client->name); ?>" required/>
    </div>
    <div class="form-group">
        <label for="password"><?php echo e(__('Password')); ?></label>
        <input type="password" class="form-control" id="password" name="password"/>
    </div>

    <div class="form-group">
        <button class="btn btn-primary" type="submit"><?php echo e(__('Update Client')); ?></button>
    </div>
</form><?php /**PATH /var/www/html/Taskly2/site/resources/views/clients/edit.blade.php ENDPATH**/ ?>