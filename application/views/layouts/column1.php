<?php
    /**
     * @var \application\components\Controller $this
     */
    $this->beginContent('//layouts/main');
?>

    <?php if(isset($this->menu) && is_array($this->menu) && !empty($this->menu)): ?>
        <div class="row">
            <div class="col-xs-12 col-sm-3 pull-right" id="sidebar">
                <div class="panel panel-default">
                    <div class="panel-heading">Options</div>
                    <div class="panel-body">
                        <?php
                            $this->widget('zii.widgets.CMenu', array(
                                'items' => $this->menu,
                                'htmlOptions' => array(
                                    'class' => 'nav nav-pills nav-stacked',
                                ),
                            ));
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-9 pull-left">
                <?php echo $content; ?>
            </div>
        </div>
    <?php else: ?>
        <?php echo $content; ?>
    <?php endif; ?>

<?php $this->endContent(); ?>
