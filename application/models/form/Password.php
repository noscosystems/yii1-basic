<?php

    namespace application\models\form;

    use \Yii;
    use \CException;
    use \application\components\form\Model as FormModel;

    class Password extends FormModel
    {

        /**
         * @var string $password
         */
        public $old;

        /**
         * @var string $new
         */
        public $new;

        /**
         * @var string $confirm
         */
        public $confirm;

        /**
         * Validation Rules
         *
         * @access public
         * @return array
         */
        public function rules()
        {
            return array(
                array('old, new, confirm', 'required'),
                array('old', 'validatePassword'),
                array('new', 'length', 'min' => 5, 'max' => 30),
                array('new', 'match', 'pattern' => '/^\S*(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/', 'message' => 'Your password must contain a lowercase letter, an uppercase letter and a digit.'),
                array('confirm', 'compare', 'compareAttribute' => 'new'),
            );
        }

        /**
         * Attribute Labels
         *
         * @access public
         * @return void
         */
        public function attributeLabels()
        {
            return array(
                'old'       => Yii::t('application', 'Old Password'),
                'new'       => Yii::t('application', 'New Password'),
                'confirm'   => Yii::t('application', 'Confirm Password'),
            );
        }

        /**
         * Validator: Password
         *
         * @access public
         * @param string $attribute
         * @param array $params
         * @return boolean
         */
        public function validatePassword($attribute, $params)
        {
            // Grab the model for the currently-logged in user.
            $model = Yii::app()->user->model();
            // Check that a valid model was returned (no object is returned if the user is not logged in).
            if(!is_object($model)) {
                $this->addError($attribute, Yii::t('application', 'Cannot detemine the validity of the password supplied; please make sure you are logged in first.'));
            }
            // Check that the password supplied is correct.
            elseif(!$model->verifyPassword($this->$attribute)) {
                $this->addError($attribute, Yii::t('application', 'The password supplied does not match your current password.'));
            }
        }

    }
