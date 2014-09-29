<?php

    namespace application\models\form;

    use \Yii;
    use \CException;
    use \application\components\form\Model as FormModel;

    class ForgotChange extends FormModel
    {

        public $password;


        /**
         * Validation Rules
         *
         * @access public
         * @return array
         */
        public function rules()
        {
            return array(
                array('password', 'required'),
                array('password', 'length', 'min' => 5, 'max' => 30),
                array('password', 'match', 'pattern' => '/^\S*(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/', 'message' => 'Your password must contain a lowercase letter, an uppercase letter and a digit.'),
            );
        }
    }
