<div id="forgotArea">
    <fieldset>

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

        <div class="jumbotron">
            <div class="container">
                <h1>Forgotten Password</h1>
                <p>
                    You should have been sent a 6 digit code which you can enter in the box below to change your password. Alternatively, you can click the link that was sent to you to bypass this process.
                </p>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Six Digit Code</label>
            <div class="col-sm-2">
                <input type="text" name="smallcode" id="inputSmallcode" class="form-control" value="" required="required" pattern="/^[0-9]{5}$/" title="">
            </div>
            <div class="col-sm-2">
                <button type="submit" id="inputSubmit" class="btn btn-primary">Submit Code</button>
            </div>
        </div>

    </fieldset>
</div>

<script>
$(document).ready( function(){
    $("#inputSubmit").click( function( event ){
        event.preventDefault();
        var val = $("#inputSmallcode").val();
        $("#forgotArea").load( baseUrl + "/forgot/change?code=" + val);
    });
    $("#inputSmallcode").keydown(function( event ) {
        if(event.which == 13){
            var val = $("#inputSmallcode").val();
            $("#forgotArea").load( baseUrl + "/forgot/change?code=" + val);
        }
    });
});
</script>
