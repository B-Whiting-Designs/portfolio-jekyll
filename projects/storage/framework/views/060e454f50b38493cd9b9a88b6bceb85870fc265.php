<form class="pl-3 pr-3" method="post" action="<?php echo e(route('clients.store',[$currantWorkspace->slug])); ?>">
    <?php echo csrf_field(); ?>
    <div class="form-group">
        <label for="name"><?php echo e(__('Name')); ?></label>
        <input type="text" class="form-control" id="name" name="name" required/>
    </div>
    <div class="form-group">
        <label for="email"><?php echo e(__('Email')); ?></label>
        <input type="email" class="form-control" id="email" name="email" required/>
    </div>
    <div class="form-group">
        <label for="password"><?php echo e(__('Password')); ?></label>
        <input type="password" class="form-control" id="password" name="password" required/>
    </div>
    <div class="form-group">
        <button class="btn btn-primary" type="submit"><?php echo e(__('Create Client')); ?></button>
    </div>
</form><?php /**PATH /var/www/html/Taskly2/site/resources/views/clients/create.blade.php ENDPATH**/ ?>