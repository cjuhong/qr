<?php

/**
 * StatisticalMonth form base class.
 *
 * @method StatisticalMonth getObject() Returns the current form's model object
 *
 * @package    mgto
 * @subpackage form
 * @author     Jeremy and Andy
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseStatisticalMonthForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'module'        => new sfWidgetFormInputText(),
      'sub_id'        => new sfWidgetFormInputText(),
      'ip_count'      => new sfWidgetFormInputText(),
      'user_count'    => new sfWidgetFormInputText(),
      'visitor_count' => new sfWidgetFormInputText(),
      'last_modifier' => new sfWidgetFormInputText(),
      'created_at'    => new sfWidgetFormDateTime(),
      'updated_at'    => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'module'        => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'sub_id'        => new sfValidatorInteger(array('required' => false)),
      'ip_count'      => new sfValidatorInteger(array('required' => false)),
      'user_count'    => new sfValidatorInteger(array('required' => false)),
      'visitor_count' => new sfValidatorInteger(array('required' => false)),
      'last_modifier' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'    => new sfValidatorDateTime(),
      'updated_at'    => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('statistical_month[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'StatisticalMonth';
  }

}
