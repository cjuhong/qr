<?php

/**
 * Languages form base class.
 *
 * @method Languages getObject() Returns the current form's model object
 *
 * @package    mgto
 * @subpackage form
 * @author     Jeremy and Andy
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseLanguagesForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'code'            => new sfWidgetFormInputText(),
      'name'            => new sfWidgetFormInputText(),
      'link_url'        => new sfWidgetFormInputText(),
      'link_target'     => new sfWidgetFormInputText(),
      'is_approved'     => new sfWidgetFormInputCheckbox(),
      'is_published'    => new sfWidgetFormInputCheckbox(),
      'is_hidden'       => new sfWidgetFormInputCheckbox(),
      'parent_language' => new sfWidgetFormInputText(),
      'parent_id'       => new sfWidgetFormInputText(),
      'last_modifier'   => new sfWidgetFormInputText(),
      'created_at'      => new sfWidgetFormDateTime(),
      'updated_at'      => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'code'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'name'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'link_url'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'link_target'     => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'is_approved'     => new sfValidatorBoolean(array('required' => false)),
      'is_published'    => new sfValidatorBoolean(array('required' => false)),
      'is_hidden'       => new sfValidatorBoolean(array('required' => false)),
      'parent_language' => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'parent_id'       => new sfValidatorInteger(array('required' => false)),
      'last_modifier'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'      => new sfValidatorDateTime(),
      'updated_at'      => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('languages[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Languages';
  }

}
