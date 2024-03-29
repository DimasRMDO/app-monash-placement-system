<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PlacementMember[]|\Cake\Collection\CollectionInterface $placementMember
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
<!--**********************************
    Content body start
***********************************-->
<div class="content-body" style="margin-left:0px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Placement Members</h4>
                        <div class="table-responsive">

                            <?php
                            echo $this->Html->script('custom');
                            ?>

                            <table id="example" class="table table-striped table-bordered zero-configuration" style="width:100%; left:0;" >
                                <thead>
                                <tr>
                                    <th>Member ID</th>
                                    <th>Name</th>
                                    <th>Email Address</th>
                                    <th>Department</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>

                                <?php foreach($placementMember as $placementMember): ?>
                                    <tr>
                                        <td><?= $this->Number->format($placementMember->member_id) ?></td>
                                        <td><?= h($placementMember->name) ?></td>
                                        <td><?= h($placementMember->email_address) ?></td>
                                        <td><?= $placementMember->has('department') ? $this->Html->link($placementMember->department->name, ['controller' => 'Department', 'action' => 'view', $placementMember->department->department_id]) : '' ?></td>

                                        <td class="actions">
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i class="fa fa-eye color-muted m-r-5"></i>
                                                <?= $this->Html->link(__('View'), ['action' => 'view', $placementMember->member_id]) ?>
                                            </a>

                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Close">
                                                <i class="fa fa-pencil color-muted m-r-5"></i>
                                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $placementMember->member_id]) ?>
                                            </a>

                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Close">
                                                <i class="fa fa-close color-danger"></i>
                                                <?= $this->Html->link(__('Delete'), ['action' => 'delete', $placementMember->member_id], ['confirm' => __('Are you sure you want to delete # {0}?', $placementMember->name)]) ?>
                                            </a>
                                        </td>

                                    </tr>
                                <?php endforeach; ?>
                                <tfoot>
                                <tr>
                                    <th>Member ID</th>
                                    <th>Name</th>
                                    <th>Email Address</th>
                                    <th>Department</th>
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
    <!-- #/ container -->
</div>
<!--**********************************
    Content body end
***********************************-->
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
