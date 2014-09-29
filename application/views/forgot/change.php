<fieldset>
    <legend>Forgotten Password</legend>

    <?php if(Yii::app()->user->hasFlash("Forgot-error")): ?>
    <div class="alert alert-danger">
        <?php echo Yii::app()->user->getFlash("Forgot-error"); ?>
    </div>
    <?php endif; ?>

    <?php if(Yii::app()->user->hasFlash("Forgot-success")): ?>
        <div class="alert alert-success">
            <?php echo Yii::app()->user->getFlash("Forgot-success"); ?>
        </div>
    <?php endif; ?>

    Please enter your new password, <strong><?php echo ucwords(CHtml::encode($forgot->User->username)); ?></strong>.
    <br /><br />

    <?php
    $form->attributes = array('class' => 'form-horizontal');
    echo $form->renderBegin();
    $widget = $form->activeFormWidget;
    ?>

    <div class="alert alert-info">
        Your password must be at least 5 characters long, have a lowercase and an uppercase letter. Also a digit.
    </div>

    <?php if($widget->errorSummary($form)): ?>
    <div class="alert alert-danger">
        <?php echo $widget->errorSummary($form); ?>
    </div>
    <?php endif; ?>

    <div class="form-group">
        <div class="col-sm-6 <?php echo $widget->error($form, 'password') ? 'has-error' : ''; ?>">
            <?php echo $widget->input($form,'password', array('id' => 'password', 'placeholder' => 'Password', 'class' => 'form-control') ) ?>
        </div>
    </div>

    <?php echo $widget->button($form, 'submit', array( 'class' => 'btn btn-primary' ) ); ?>

    <?php echo $form->renderEnd(); ?>

</fieldset>
