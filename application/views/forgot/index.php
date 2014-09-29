<div class="jumbotron">
    <div class="container">
        <h1>Forgotten your Password?</h1>
        <p>
            No worries, enter your username below and an email will be sent to the address you supplied.<br />
            If you did not supply an email address then details will be sent to the mobile number you supplied.<br />
        </p>
    </div>
</div>

<fieldset>
    <?php if(Yii::app()->user->hasFlash("Forgot-error")): ?>
    <div class="alert alert-danger">
        <?php echo Yii::app()->user->getFlash("Forgot-error"); ?>
    </div>
    <?php endif; ?>

    <?php
    $form->attributes = array('class' => 'form-horizontal');
    echo $form->renderBegin();
    $widget = $form->activeFormWidget;
    ?>

    <div class="form-group">
        <div class="col-xs-4 <?php echo $widget->error($form, 'username') ? 'has-error' : ''; ?>">
            <?php echo $widget->input($form,'username', array('id' => 'username', 'placeholder' => 'Enter your Username...', 'class' => 'form-control') ) ?>
        </div>
    </div>

    <?php echo $widget->button($form, 'submit', array( 'class' => 'btn btn-primary' ) ); ?>

    <?php echo $form->renderEnd(); ?>

</fieldset>
