<?php

/**
 * UserLoginHistory form base class.
 *
 * @method UserLoginHistory getObject() Returns the current form's model object
 *
 * @package    mgto
 * @subpackage form
 * @author     Jeremy and Andy
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUserLoginHistoryForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'ip'         => new sfWidgetFormInputText(),
      'state'      => new sfWidgetFormInputText(),
      'user_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => true)),
      'username'   => new sfWidgetFormInputText(),
      'operations' => new sfWidgetFormInputText(),
      'record_id'  => new sfWidgetFormInputText(),
      'position'   => new sfWidgetFormInputText(),
      'created_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'ip'         => new sfValidatorString(array('max_length' => 16, 'required' => false)),
      'state'      => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'user_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'required' => false)),
      'username'   => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'operations' => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'record_id'  => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'position'   => new sfValidatorInteger(array('required' => false)),
      'created_at' => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'UserLoginHistory', 'column' => array('position', 'id')))
    );

    $this->widgetSchema->setNameFormat('user_login_history[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'UserLoginHistory';
  }

}
