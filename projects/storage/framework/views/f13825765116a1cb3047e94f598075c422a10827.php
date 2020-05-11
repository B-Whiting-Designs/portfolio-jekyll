<form  method="post" action="<?php echo e(route('projects.client.permission.store',[$currantWorkspace->slug,$project->id,$client->id])); ?>">
    <?php echo csrf_field(); ?>
    <table class="table table-striped mb-0" id="dataTable-1">
        <thead>
        <tr>
            <th><?php echo e(__('Module')); ?></th>
            <th><?php echo e(__('Permissions')); ?></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><?php echo e(__('Milestone')); ?></td>
            <td>
                <div class="row cust-checkbox-row">
                    <div class="col custom-control custom-checkbox">
                        <input class="custom-control-input" id="permission3" <?php if(in_array('create milestone',$permissions)): ?> checked="checked" <?php endif; ?> name="permissions[]" type="checkbox" value="create milestone">
                        <label for="permission3" class="custom-control-label"><?php echo e(__('Create')); ?></label><br>
                    </div>
                    <div class="col custom-control custom-checkbox">
                        <input class="custom-control-input" id="permission4" <?php if(in_array('edit milestone',$permissions)): ?> checked="checked" <?php endif; ?> name="permissions[]" type="checkbox" value="edit milestone">
                        <label for="permission4" class="custom-control-label"><?php echo e(__('Edit')); ?></label><br>
                    </div>
                    <div class="col custom-control custom-checkbox">
                        <input class="custom-control-input" id="permission5" <?php if(in_array('delete milestone',$permissions)): ?> checked="checked" <?php endif; ?> name="permissions[]" type="checkbox" value="delete milestone">
                        <label for="permission5" class="custom-control-label"><?php echo e(__('Delete')); ?></label><br>
                    </div>
                    <div class="col custom-control custom-checkbox">
                        <input class="custom-control-input" id="permission2" <?php if(in_array('show milestone',$permissions)): ?> checked="checked" <?php endif; ?> name="permissions[]" type="checkbox" value="show milestone">
                        <label for="permission2" class="custom-control-label"><?php echo e(__('Show')); ?></label><br>
                    </div>
                    <div class="col"></div>
                </div>
            </td>
        </tr>
        <tr>
            <td><?php echo e(__('Task')); ?></td>
            <td>
                <div class="row cust-checkbox-row">
                    <div class="col custom-control custom-checkbox">
                        <input class="custom-control-input" id="permission7" <?php if(in_array('create task',$permissions)): ?> checked="checked" <?php endif; ?> name="permissions[]" type="checkbox" value="create task">
                        <label for="permission7" class="custom-control-label"><?php echo e(__('Create')); ?></label><br>
                    </div>
                    <div class="col custom-control custom-checkbox">
                        <input class="custom-control-input" id="permission8" <?php if(in_array('edit task',$permissions)): ?> checked="checked" <?php endif; ?> name="permissions[]" type="checkbox" value="edit task">
                        <label for="permission8" class="custom-control-label"><?php echo e(__('Edit')); ?></label><br>
                    </div>
                    <div class="col custom-control custom-checkbox">
                        <input class="custom-control-input" id="permission9" <?php if(in_array('delete task',$permissions)): ?> checked="checked" <?php endif; ?> name="permissions[]" type="checkbox" value="delete task">
                        <label for="permission9" class="custom-control-label"><?php echo e(__('Delete')); ?></label><br>
                    </div>
                    <div class="col custom-control custom-checkbox">
                        <input class="custom-control-input" id="permission6" <?php if(in_array('show task',$permissions)): ?> checked="checked" <?php endif; ?> name="permissions[]" type="checkbox" value="show task">
                        <label for="permission6" class="custom-control-label"><?php echo e(__('Show')); ?></label><br>
                    </div>
                    <div class="col custom-control custom-checkbox">
                        <input class="custom-control-input" id="permission10" <?php if(in_array('move task',$permissions)): ?> checked="checked" <?php endif; ?> name="permissions[]" type="checkbox" value="move task">
                        <label for="permission10" class="custom-control-label"><?php echo e(__('Move')); ?></label><br>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td><?php echo e(__('Bug Report')); ?></td>
            <td>
                <div class="row cust-checkbox-row">
                    <div class="col custom-control custom-checkbox">
                        <input class="custom-control-input" id="permission17" <?php if(in_array('create bug report',$permissions)): ?> checked="checked" <?php endif; ?> name="permissions[]" type="checkbox" value="create bug report">
                        <label for="permission17" class="custom-control-label"><?php echo e(__('Create')); ?></label><br>
                    </div>
                    <div class="col custom-control custom-checkbox">
                        <input class="custom-control-input" id="permission18" <?php if(in_array('edit bug report',$permissions)): ?> checked="checked" <?php endif; ?> name="permissions[]" type="checkbox" value="edit bug report">
                        <label for="permission18" class="custom-control-label"><?php echo e(__('Edit')); ?></label><br>
                    </div>
                    <div class="col custom-control custom-checkbox">
                        <input class="custom-control-input" id="permission19" <?php if(in_array('delete bug report',$permissions)): ?> checked="checked" <?php endif; ?> name="permissions[]" type="checkbox" value="delete bug report">
                        <label for="permission19" class="custom-control-label"><?php echo e(__('Delete')); ?></label><br>
                    </div>
                    <div class="col custom-control custom-checkbox">
                        <input class="custom-control-input" id="permission20" <?php if(in_array('show bug report',$permissions)): ?> checked="checked" <?php endif; ?> name="permissions[]" type="checkbox" value="show bug report">
                        <label for="permission20" class="custom-control-label"><?php echo e(__('Show')); ?></label><br>
                    </div>
                    <div class="col custom-control custom-checkbox">
                        <input class="custom-control-input" id="permission21" <?php if(in_array('move bug report',$permissions)): ?> checked="checked" <?php endif; ?> name="permissions[]" type="checkbox" value="move bug report">
                        <label for="permission21" class="custom-control-label"><?php echo e(__('Move')); ?></label><br>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td><?php echo e(__('Checklist')); ?></td>
            <td>
                <div class="row cust-checkbox-row">
                    <div class="col custom-control custom-checkbox">
                        <input class="custom-control-input" id="permission11" <?php if(in_array('create checklist',$permissions)): ?> checked="checked" <?php endif; ?> name="permissions[]" type="checkbox" value="create checklist">
                        <label for="permission11" class="custom-control-label"><?php echo e(__('Create')); ?></label><br>
                    </div>
                    <div class="col custom-control custom-checkbox">
                        <input class="custom-control-input" id="permission12" <?php if(in_array('edit checklist',$permissions)): ?> checked="checked" <?php endif; ?> name="permissions[]" type="checkbox" value="edit checklist">
                        <label for="permission12" class="custom-control-label"><?php echo e(__('Edit')); ?></label><br>
                    </div>
                    <div class="col custom-control custom-checkbox">
                        <input class="custom-control-input" id="permission13" <?php if(in_array('delete checklist',$permissions)): ?> checked="checked" <?php endif; ?> name="permissions[]" type="checkbox" value="delete checklist">
                        <label for="permission13" class="custom-control-label"><?php echo e(__('Delete')); ?></label><br>
                    </div>
                    <div class="col custom-control custom-checkbox">
                        <input class="custom-control-input" id="permission14" <?php if(in_array('show checklist',$permissions)): ?> checked="checked" <?php endif; ?> name="permissions[]" type="checkbox" value="show checklist">
                        <label for="permission14" class="custom-control-label"><?php echo e(__('Show')); ?></label><br>
                    </div>
                    <div class="col"></div>
                </div>
            </td>
        </tr>
        <tr>
            <td><?php echo e(__('Activity')); ?></td>
            <td>
                <div class="row cust-checkbox-row">
                    <div class="col custom-control custom-checkbox">
                        <input class="custom-control-input" id="permission1" <?php if(in_array('show activity',$permissions)): ?> checked="checked" <?php endif; ?> name="permissions[]" type="checkbox" value="show activity">
                        <label for="permission1" class="custom-control-label"><?php echo e(__('Show')); ?></label><br>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td><?php echo e(__('Time Sheet')); ?></td>
            <td>
                <div class="row cust-checkbox-row">
                    <div class="col custom-control custom-checkbox">
                        <input class="custom-control-input" id="permission16" <?php if(in_array('show timesheet',$permissions)): ?> checked="checked" <?php endif; ?> name="permissions[]" type="checkbox" value="show timesheet">
                        <label for="permission16" class="custom-control-label"><?php echo e(__('Show')); ?></label><br>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td><?php echo e(__('Uploading')); ?></td>
            <td>
                <div class="row cust-checkbox-row">
                    <div class="col custom-control custom-checkbox">
                        <input class="custom-control-input" id="permission15" <?php if(in_array('show uploading',$permissions)): ?> checked="checked" <?php endif; ?> name="permissions[]" type="checkbox" value="show uploading">
                        <label for="permission15" class="custom-control-label"><?php echo e(__('Show')); ?></label><br>
                    </div>
                </div>
            </td>
        </tr>
        </tbody>
    </table>
    <div class="form-group mt-3">
        <button class="btn btn-primary" type="submit"><?php echo e(__('Update Permission')); ?></button>
    </div>
</form><?php /**PATH /var/www/html/Taskly2/site/resources/views/projects/client_permission.blade.php ENDPATH**/ ?>