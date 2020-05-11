
<?php if($currantWorkspace && $bug): ?>

    <div class="p-2">
        <div class="font-weight-bold"><?php echo e(__('Description')); ?>:</div>

        <p class="text-muted mb-4">
            <?php echo e($bug->description); ?>

        </p>

        <div class="row mb-4">
            <div class="col-md-4">
                <div>
                    <div class="font-weight-bold"><?php echo e(__('Create Date')); ?></div>
                    <p class="mt-1"><?php echo e(date('d M Y',strtotime($bug->created_at))); ?></p>
                </div>
            </div>

            <div class="col-md-4">
                <div>
                    <div class="font-weight-bold"><?php echo e(__('Asigned')); ?></div>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="<?php echo e($bug->user->name); ?>" data-original-title="<?php echo e($bug->user->name); ?>" class="d-inline-block mt-1">
                        <img <?php if($bug->user->avatar): ?> src="<?php echo e(asset('/storage/avatars/'.$bug->user->avatar)); ?>" <?php else: ?> avatar="<?php echo e($bug->user->name); ?>" <?php endif; ?> class="rounded-circle avatar-xs" width="30" alt="<?php echo e($bug->user->name); ?>">
                    </a>
                </div>
            </div>
        </div>

        <ul class="nav nav-tabs nav-bordered mb-3">
            <li class="nav-item">
                <a href="#home-b1" data-toggle="tab" aria-expanded="false" class="nav-link active">
                    <?php echo e(__('Comments')); ?>

                </a>
            </li>
            <li class="nav-item">
                <a href="#profile-b1" data-toggle="tab" aria-expanded="true" class="nav-link">
                    <?php echo e(__('Files')); ?>

                </a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane show active" id="home-b1">
                <form method="post" id="form-comment" data-action="<?php echo e(route('bug.comment.store',[$currantWorkspace->slug,$bug->project_id,$bug->id,$clientID])); ?>">
                    <textarea class="form-control form-control-light mb-2" name="comment" placeholder="<?php echo e(__('Write message')); ?>" id="example-textarea" rows="3" required></textarea>
                    <div class="text-right">
                        <div class="btn-group mb-2 ml-2 d-sm-inline-block">
                            <button type="button" class="btn btn-primary"><?php echo e(__('Submit')); ?></button>
                        </div>
                    </div>
                </form>

                <div class="card-body">
                    <ul class="list-unstyled list-unstyled-border" id="comments">

                        <?php $__currentLoopData = $bug->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="media">
                                <img class="mr-3 avatar-sm rounded-circle img-thumbnail" width="60"
                                     <?php if($comment->user_type!='Client'): ?>
                                     <?php if($comment->user->avatar): ?> src="<?php echo e(asset('/storage/avatars/'.$comment->user->avatar)); ?>" <?php else: ?> avatar="<?php echo e($comment->user->name); ?>" <?php endif; ?> alt="<?php echo e($comment->user->name); ?>"
                                     <?php else: ?>
                                     avatar="<?php echo e($comment->client->name); ?>" alt="<?php echo e($comment->client->name); ?>"
                                        <?php endif; ?>
                                />
                                <div class="media-body">
                                    <h5 class="mt-0 mb-1 font-weight-bold"><?php if($comment->user_type!='Client'): ?><?php echo e($comment->user->name); ?><?php else: ?> <?php echo e($comment->client->name); ?> <?php endif; ?></h5>
                                    <?php echo e($comment->comment); ?>

                                    <?php if(auth()->guard('web')->check()): ?>
                                        <div class="float-right">
                                            <a href="#" class="text-danger text-muted delete-comment" data-url="<?php echo e(route('bug.comment.destroy',[$currantWorkspace->slug,$bug->project_id,$bug->id,$comment->id])); ?>">
                                                <i class="dripicons-trash"></i>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
            <div class="tab-pane" id="profile-b1">
                <form method="post" id="form-file" enctype="multipart/form-data" data-action="<?php echo e(route('bug.comment.store.file',[$currantWorkspace->slug,$bug->project_id,$bug->id,$clientID])); ?>">
                    <?php echo csrf_field(); ?>
                    <input type="file" class="form-control mb-2" name="file" id="file">
                    <span class="invalid-feedback" id="file-error" role="alert">
                        <strong></strong>
                    </span>
                    <div class="text-right">
                        <div class="btn-group mb-2 ml-2 d-sm-inline-block">
                            <button type="submit" class="btn btn-primary"><?php echo e(__('Upload')); ?></button>
                        </div>
                    </div>
                </form>
                <div id="comments-file" class="mt-2">
                    <?php $__currentLoopData = $bug->bugFiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card mb-1 shadow-none border">
                        <div class="card-body pt-2 pb-2">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <div class="avatar-sm">
                                        <span class="avatar-title rounded text-uppercase">
                                            <?php echo e($file->extension); ?>

                                        </span>
                                    </div>
                                </div>
                                <div class="col pl-0">
                                    <a href="#" class="text-muted font-weight-bold"><?php echo e($file->name); ?></a>
                                    <p class="mb-0"><?php echo e($file->file_size); ?></p>
                                </div>
                                <div class="col-auto">
                                    <!-- Button -->
                                    <a download href="<?php echo e(asset('/storage/tasks/'.$file->file)); ?>" class="btn btn-link text-muted">
                                        <i class="dripicons-download"></i>
                                    </a>
                                    <?php if(auth()->guard('web')->check()): ?>
                                        <a href="#" class="text-danger text-muted delete-comment-file" data-url="<?php echo e(route('bug.comment.destroy.file',[$currantWorkspace->slug,$bug->project_id,$bug->id,$file->id])); ?>">
                                            <i class="dripicons-trash"></i>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php /**PATH /var/www/html/Taskly2/site/resources/views/projects/bug_report_show.blade.php ENDPATH**/ ?>