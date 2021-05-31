<?php

use Cake\I18n\Time; ?>
<html>

<head>

    <?= $this->Html->css('bootstrap-material-datetimepicker.css') ?>
    <!-- Page plugins css -->
    <?= $this->Html->css('jquery-clockpicker.min.css') ?>
    <!-- Color picker plugins css -->
    <?= $this->Html->css('asColorPicker.css') ?>
    <!-- Date picker plugins css -->
    <?= $this->Html->css('bootstrap-datepicker.min.css') ?>
    <!-- Daterange picker plugins css -->
    <?= $this->Html->css('bootstrap-timepicker.min.css') ?>
    <?= $this->Html->css('daterangepicker.css') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style2.css') ?>
</head>

<body>



    <div class="content-body">
        <!-- row -->

        <?= $this->Form->create($user) ?>


        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-validation">
                            <legend><?= __('Edit User') ?></legend>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" style="padding-top: 30px;" for="val-member">Email <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <?php echo $this->Form->control('email', ['label'=>'','class' => 'form-control','style'=>'width:400px']);?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" style="padding-top: 30px;" for="val-member">password <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <?php echo $this->Form->control('password', ['label'=>'','class' => 'form-control','style'=>'width:400px']);?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" style="padding-top: 30px;" for="val-member">Role <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <?php echo $this->Form->control('role', ['options' => ['user'=>'user','admin'=>'admin'],'label'=>'','class' => 'form-control','style'=>'width:400px']);?>
                                </div>
                            </div>
                            </div>
                            <?= $this->Form->button('Submit',['class'=>'btn btn-primary']) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <?= $this->Form->end() ?>
    </div>