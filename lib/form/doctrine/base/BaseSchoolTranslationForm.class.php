<?php

/**
 * SchoolTranslation form base class.
 *
 * @method SchoolTranslation getObject() Returns the current form's model object
 *
 * @package    mgto
 * @subpackage form
 * @author     Jeremy and Andy
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSchoolTranslationForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'name'               => new sfWidgetFormInputText(),
      'address'            => new sfWidgetFormInputText(),
      'pedagogical_system' => new sfWidgetFormInputText(),
      'property'           => new sfWidgetFormInputText(),
      'school_system'      => new sfWidgetFormTextarea(),
      'open_stage'         => new sfWidgetFormTextarea(),
      'characterstics'     => new sfWidgetFormTextarea(),
      'honor_roll'         => new sfWidgetFormTextarea(),
      'facilities'         => new sfWidgetFormTextarea(),
      'mission'            => new sfWidgetFormTextarea(),
      'remark'             => new sfWidgetFormTextarea(),
      'introduction'       => new sfWidgetFormInputText(),
      'approve'            => new sfWidgetFormInputText(),
      'publish'            => new sfWidgetFormInputText(),
      'is_hidden'          => new sfWidgetFormInputCheckbox(),
      'parent_language'    => new sfWidgetFormInputText(),
      'lang'               => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'address'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'pedagogical_system' => new sfValidatorString(array('max_length' => 245, 'required' => false)),
      'property'           => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'school_system'      => new sfValidatorString(array('max_length' => 500, 'required' => false)),
      'open_stage'         => new sfValidatorString(array('max_length' => 500, 'required' => false)),
      'characterstics'     => new sfValidatorString(array('max_length' => 500, 'required' => false)),
      'honor_roll'         => new sfValidatorString(array('max_length' => 600, 'required' => false)),
      'facilities'         => new sfValidatorString(array('max_length' => 600, 'required' => false)),
      'mission'            => new sfValidatorString(array('max_length' => 500, 'required' => false)),
      'remark'             => new sfValidatorString(array('max_length' => 500, 'required' => false)),
      'introduction'       => new sfValidatorPass(array('required' => false)),
      'approve'            => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'publish'            => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'is_hidden'          => new sfValidatorBoolean(array('required' => false)),
      'parent_language'    => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'lang'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('lang')), 'empty_value' => $this->getObject()->get('lang'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('school_translation[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SchoolTranslation';
  }

}
