<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>

<html>

<head>
    <?= $this->Html->css('style2.css') ?>

    <?= $this->Html->script('common.min.js'); ?>
    <?= $this->Html->script('custom.min.js'); ?>
    <?= $this->Html->script('settings.js'); ?>
    <?= $this->Html->script('gleek.js'); ?>
    <?= $this->Html->script('styleSwitcher.js'); ?>
</head>

<body>
    <div class="content-body" style="margin-left:0px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Users</h4>
                            

                            <table id="example" class="table table-striped table-bordered zero-configuration" style="width:100%; left:0;">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>email</th>
                                        <th>password</th>
                                        <th>created</th>
                                        <th>modified</th>
                                        <th>role</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($users as $user) : ?>
                                        <tr>
                                            <td><?= $this->Number->format($user->id) ?></td>
                                            <td><?= h($user->email) ?></td>
                                            <td><?= h($user->password) ?></td>
                                            <td><?= h($user->created) ?></td>
                                            <td><?= h($user->modified) ?></td>
                                            <td><?= h($user->role) ?></td>
                                            <td class="actions">
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Edit">
                                                
                                                <?= $this->Html->link(__('<i class="fa fa-eye color-muted m-r-5"></i>View'), ['action' => 'view', $user->id],['class'=>'btn btn-info','escape'=>false]) ?>
                                            </a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Close">
                                                
                                                <?= $this->Html->link(__('<i class="fa fa-pencil color-muted m-r-5"></i>Edit'), ['action' => 'edit',  $user->id],['class'=>'btn btn-primary','escape'=>false]) ?>
                                            </a>

                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Close">
                                
                                                <?= $this->Html->link(__(' <i class="fa fa-close color-danger"></i>Delete'), ['action' => 'delete',  $user->id], ['confirm' => __('Are you sure you want to delete this user?'),'class'=>'btn btn-danger','escape'=>false]) ?>
                                            </a>
                                            <?php if($user["role"]=="user" && $user["isApproved"] !=1){ ?>
                                                <?= $this->Html->link(__('Approve'), ['action' => 'approve',  $user->id], ['confirm' => __('Are you sure you want to delete this user?'),'class'=>'btn btn-success']) ?>
                                                <?= $this->Html->link(__('Reject'), ['action' => 'reject',  $user->id], ['confirm' => __('Are you sure you want to reject this user?'),'class'=>'btn btn-warning']) ?>
                                            <?php } ?>
                                              
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                <th>id</th>
                                        <th>email</th>
                                        <th>password</th>
                                        <th>created</th>
                                        <th>modified</th>
                                        <th>role</th>
                                        <th>Actions</th>
                                </tr>
                                </tfoot>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    $(document).ready(function() {
        $('#example').DataTable({
            columnDefs: [
                { orderable: false, targets: -1 }
            ]
        });
    } );

</script>
</html>