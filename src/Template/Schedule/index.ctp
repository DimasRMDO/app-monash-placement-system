<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Schedule[]|\Cake\Collection\CollectionInterface $schedule
 */
use Cake\I18n\Time; 
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
                        <h4 class="card-title">Schedule</h4>
                        <div class="table-responsive">

                            <?php
                            echo $this->Html->script('custom');
                            ?>

                            <table id="example" class="table table-striped table-bordered zero-configuration" style="width:100%; left:0;" >
                                <thead>
                                <tr>
                                    <th>Schedule ID</th>
                                    <th>Provider</th>
                                    <th>Status</th>
                                    <th>End Date</th>
                                    <th>Department</th>
                                    <th>Member</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>

                                <?php foreach($schedule as $schedule): ?>
                                    <tr>
                                        <td><?= h($schedule->schedule_id) ?></td>
                                        <td><?= $schedule->has('provider') ? $this->Html->link($schedule->provider->name, ['controller' => 'Provider', 'action' => 'view', $schedule->provider->provider_id]) : '' ?></td>
                                        <td><?= h($schedule->status) ?></td>
                                        <td><?= h($schedule->end_date->i18nFormat('dd/MM/yyyy')) ?></td>
                                        <td><?= $schedule->has('department') ? $this->Html->link($schedule->department->name, ['controller' => 'Department', 'action' => 'view', $schedule->department->department_id]) : '' ?></td>
                                        <td><?= $schedule->has('placement_member') ? $this->Html->link($schedule->placement_member->name, ['controller' => 'PlacementMember', 'action' => 'view', $schedule->placement_member->member_id]) : '' ?></td>

                                        <td class="actions">
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i class="fa fa-eye color-muted m-r-5"></i>
                                                <?= $this->Html->link(__('View'), ['action' => 'view', $schedule->schedule_id]) ?>
                                            </a>

                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Close">
                                                <i class="fa fa-pencil color-muted m-r-5"></i>
                                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $schedule->schedule_id]) ?>
                                            </a>

                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Close">
                                                <i class="fa fa-close color-danger"></i>
                                                <?= $this->Html->link(__('Delete'), ['action' => 'delete', $schedule->schedule_id], ['confirm' => __('Are you sure you want to delete this schedule?')]) ?>
                                            </a>
                                        </td>

                                    </tr>
                                <?php endforeach; ?>
                                <tfoot>
                                <tr>
                                    <th>Schedule ID</th>
                                    <th>Provider</th>
                                    <th>Status</th>
                                    <th>End Date</th>
                                    <th>Department</th>
                                    <th>Member</th>
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
