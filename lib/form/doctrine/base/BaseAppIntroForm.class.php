<?php

/**
 * AppIntro form base class.
 *
 * @method AppIntro getObject() Returns the current form's model object
 *
 * @package    mgto
 * @subpackage form
 * @author     Jeremy and Andy
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAppIntroForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'company_name'  => new sfWidgetFormInputText(),
      'app_logo'      => new sfWidgetFormInputText(),
      'app_capture'   => new sfWidgetFormInputText(),
      'link'          => new sfWidgetFormInputText(),
      'app_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('App'), 'add_empty' => true)),
      'start_date'    => new sfWidgetFormDateTime(),
      'end_date'      => new sfWidgetFormDateTime(),
      'parent_id'     => new sfWidgetFormInputText(),
      'last_modifier' => new sfWidgetFormInputText(),
      'created_at'    => new sfWidgetFormDateTime(),
      'updated_at'    => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'company_name'  => new sfValidatorString(array('max_length' => 145, 'required' => false)),
      'app_logo'      => new sfValidatorString(array('max_length' => 245, 'required' => false)),
      'app_capture'   => new sfValidatorString(array('max_length' => 245, 'required' => false)),
      'link'          => new sfValidatorString(array('max_length' => 245, 'required' => false)),
      'app_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('App'), 'required' => false)),
      'start_date'    => new sfValidatorDateTime(array('required' => false)),
      'end_date'      => new sfValidatorDateTime(array('required' => false)),
      'parent_id'     => new sfValidatorInteger(array('required' => false)),
      'last_modifier' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'    => new sfValidatorDateTime(),
      'updated_at'    => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('app_intro[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AppIntro';
  }

}
