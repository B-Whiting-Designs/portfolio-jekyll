<form class="pl-3 pr-3" method="post" action="<?php echo e(route('update_workspace',[$workspace->id])); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <div class="form-group">
        <label for="name"><?php echo e(__('Name')); ?></label>
        <input type="text" class="form-control" id="name" name="name" value="<?php echo e($workspace->name); ?>"/>
    </div>
    <div class="form-group">
        <button class="btn btn-primary" type="submit"><?php echo e(__('Rename Workspace')); ?></button>
    </div>
</form>
<?php /**PATH /var/www/html/Taskly2/site/resources/views/users/rename_workspace.blade.php ENDPATH**/ ?>