<?php

    namespace application\models\form;

    use \Yii;
    use \CException;
    use \application\components\form\Model as FormModel;

    class Forgot extends FormModel
    {

        public $username;

        /**
         * Validation Rules
         *
         * @access public
         * @return array
         */
        public function rules()
        {
            return array(
                array('username', 'required'),
                array('username', 'length', 'min' => 1, 'max' => 64),
            );
        }
    }
