<?php

/**
 * Api form base class.
 *
 * @method Api getObject() Returns the current form's model object
 *
 * @package    mgto
 * @subpackage form
 * @author     Jeremy and Andy
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseApiForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'public_key'    => new sfWidgetFormInputText(),
      'private_key'   => new sfWidgetFormInputText(),
      'client'        => new sfWidgetFormInputText(),
      'is_approved'   => new sfWidgetFormInputCheckbox(),
      'is_published'  => new sfWidgetFormInputCheckbox(),
      'is_hidden'     => new sfWidgetFormInputCheckbox(),
      'last_modifier' => new sfWidgetFormInputText(),
      'created_at'    => new sfWidgetFormDateTime(),
      'updated_at'    => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'public_key'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'private_key'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'client'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'is_approved'   => new sfValidatorBoolean(array('required' => false)),
      'is_published'  => new sfValidatorBoolean(array('required' => false)),
      'is_hidden'     => new sfValidatorBoolean(array('required' => false)),
      'last_modifier' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'    => new sfValidatorDateTime(),
      'updated_at'    => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('api[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Api';
  }

}
