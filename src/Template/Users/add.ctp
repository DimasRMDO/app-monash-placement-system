<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
//?>
<html>
<head>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style2.css') ?>
</head>
<body>


<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user,['onsubmit'=>'return checkEmail();']) ?>
<h1>Add New User</h1>

    <div class="content-body">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                                    <div class="form-group">

                                        <a class="text-center" onclick="document.location.href='https://monashplacementsystem.u20s2129.monash-ie.me'"> <h3 style="padding-bottom: 30px;">Monash Placement System</h3> </a>

                                        <?php echo $this->Form->text('email', ['id' => 'email','class'=>'form-control', 'type'=>'email', 'placeholder'=>'Email']);?>
                                    </div>

                                    <div class="form-group">
                                        <?php echo $this->Form->text('password1', ['class'=>'form-control', 'type'=>'password', 'placeholder'=>'Your Password']);?>
                                    </div>
                                    <div class="form-group">
                                        <?php echo $this->Form->text('password2', ['class'=>'form-control', 'type'=>'password', 'placeholder'=>'Confirm Your Password']);?>
                                    </div>
                                    <?= $this->Form->button(__('Submit'), ['class' =>'btn login-form__btn submit w-100', 'style' => 'margin-bottom: 30px;']) ?>
                            </div>


                                <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>

<script>
    function checkEmail(){
        let email=document.getElementById("email").value;
        if(email.endsWith('monash.edu')){
            return true;
        }else{
            alert("the email must end with 'monash.edu'");
            return false;
        }
    }
</script>
