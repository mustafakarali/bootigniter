

<section id="main">
    <div class="container-fluid">
        <div class="page-header page-header-block">
            <div class="row-fluid">
                <div class="col-xs-10">
                    <h4 class="title">
                        <i class="fa fa-folder-open"></i>
                        <?php __('Field Set'); ?>
                    </h4>
                </div>
                <div class="col-xs-2">
                    <a href="<?php _u('admin/contents/edit_fieldset/-1'); ?>" class="btn btn-primary btn-sm pull-right" id="createFieldSet" data-target="#fieldsetFormModel">
                        <i class="fa fa-plus"></i>
                    </a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <?php AZ::block('system-message'); ?>
        <div class="row-fluid">
            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">
                    <?php __('Field Set Group'); ?>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                    <div class="table">
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <th  class="hidden-xs" ><?php __('ID'); ?></th>
                                    <th><?php __('Name'); ?></th>
                                    <th class="text-right"><span class="glyphicon glyphicon-edit"></span></th>
                                </tr>
                            </thead>
                            <?php
                            if (count($fieldsets)) {
                                foreach ($fieldsets as $fieldset) {
                                    ?>
                                    <tr class="<?php echo ($fieldset->system) ? 'active' : ''; ?>">
                                        <td class="hidden-xs"><?php echo $fieldset->id; ?></td>
                                        <td><?php echo $fieldset->name; ?></td>
                                        <td class="small">
                                            <?php if ((have_permission('contents/edit_fieldset') || have_permission('contents/remove_fieldset')) && !$fieldset->system) : ?>

                                                <div class="dropdown pull-right text-left">
                                                    <a data-toggle="dropdown" class="dropdown-toggle cp">
                                                        <span class="glyphicon glyphicon-pencil"></span>
                                                    </a>
                                                    <ul role="menu" class="dropdown-menu dropdown-menu-right">
                                                        <?php if (have_permission('contents/edit_fieldset')) : ?>
                                                            <li>

                                                                <a href="<?php _u('admin/contents/edit_fieldset/' . $fieldset->id); ?>">
                                                                    <span class="glyphicon glyphicon-edit"></span>
                                                                    <?php __('Edit'); ?>
                                                                </a>
                                                            </li>
                                                        <?php endif; ?>
                                                        <?php if (have_permission('contents/remove_fieldset')) : ?>
                                                            <li>

                                                                <a href="<?php _u('admin/contents/remove_fieldset/' . $fieldset->id); ?>" class="remove-box">
                                                                    <span class="glyphicon glyphicon-trash"></span>
                                                                    <?php __('Remove'); ?>
                                                                </a>
                                                            </li>
                                                        <?php endif; ?>
                                                    </ul>

                                                </div>
                                                <?php
                                            endif;
                                            ?>
                                            
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>
                        </table>
                    </div>
                </div>

            </div>
        </div>        
    </div>
</section>

<div class="modal fade" id="fieldsetFormModel" tabindex="-1" role="dialog" aria-labelledby="fieldsetFormModel" aria-hidden="true">
    <div class="modal-dialog modal-sm"><div class="modal-content"></div></div>
</div>
