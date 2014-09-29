<?php
    /**
     * @var HomeController $this
     */
    $this->pageTitle = false;
?>

<h1><?php echo Yii::t('application', 'Welcome to <i>{name}</i>', array('{name}' => CHtml::encode(Yii::app()->name))); ?></h1>

<p><?php echo Yii::t('application', 'Congratulations! You have successfully created your Yii application.'); ?></p>
<p><?php echo Yii::t('application', 'You may change the content of this page by modifying the following two files:'); ?></p>
<ul>
	<li><?php echo Yii::t('application', 'View file: <code>{file}</code>', array('{file}' => __FILE__)); ?></li>
	<li><?php echo Yii::t('application', 'Layout file: <code>{file}</code>', array('{file}' => $this->getLayoutFile('main'))); ?></li>
</ul>

<p>
    <?php
        echo Yii::t(
            'application',
            'For more details on how to further develop this application, please read the {documentation}.',
            array(
                '{documentation}' => CHtml::link(
                    Yii::t('application', 'documentation'),
                    'http://www.yiiframework.com/doc/'
                ),
            )
        );
        echo "\n";
        echo Yii::t(
            'application',
            'Feel free to ask in the {forum}, should you have any questions.',
            array(
                '{forum}' => CHtml::link(
                    Yii::t('application', 'forum'),
                    'http://www.yiiframework.com/forum/'
                ),
            )
        );
    ?>
</p>

<h1><?php echo Yii::t('application', 'Restricted Area'); ?></h1>

<p>
    <?php
        echo Yii::t(
            'application',
            'This project now has {rbac} set up. According to your current permissions you:',
            array(
                '{rbac}' => CHtml::tag(
                    'abbr',
                    array(
                        'title' => Yii::t('application', 'Role-based Access Control'),
                    ),
                    Yii::t('application', 'RBAC')
                ),
            )
        );
    ?>
</p>
<ul>
    <?php if(Yii::app()->user->checkAccess('admin')): ?>
        <li>
            <?php
                echo Yii::t(
                    'application',
                    '<strong>can</strong> access the {restrictedarea}.',
                    array(
                        '{restrictedarea}' => CHtml::link(Yii::t('application', 'restricted area'), array('/home/restricted')),
                    )
                );
            ?>
        </li>
    <?php else: ?>
        <li>
            <?php
                echo Yii::t(
                    'application',
                    '<strong>can\'t</strong> access the restricted area. Sorry.'
                );
            ?>
        </li>
    <?php endif; ?>
</ul>
