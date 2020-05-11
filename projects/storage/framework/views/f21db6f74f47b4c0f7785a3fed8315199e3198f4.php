<?php $__env->startComponent('mail::message'); ?>
#  <?php echo e(__('Hello')); ?>, <?php echo e($client->name); ?>


<?php echo e(__('You invite in new project')); ?> <b> <?php echo e($project->name); ?></b> <?php echo e(__('by')); ?> <?php echo e($project->creater->name); ?>


<?php $__env->startComponent('mail::button', ['url' => route('projects.client.task.board',[$project->workspaceData->slug,\Illuminate\Support\Facades\Crypt::encrypt(['client_id'=>$client->id,'project_id'=>$project->id])])]); ?>
<?php echo e(__('Open Project')); ?>

<?php echo $__env->renderComponent(); ?>

<?php echo e(__('Thanks')); ?>,<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH /home/bwhitwbh/public_html/projects/resources/views/email/share.blade.php ENDPATH**/ ?>