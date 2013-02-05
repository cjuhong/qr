<?php

/**
 * Api filter form base class.
 *
 * @package    mgto
 * @subpackage filter
 * @author     Jeremy and Andy
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseApiFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'public_key'    => new sfWidgetFormFilterInput(),
      'private_key'   => new sfWidgetFormFilterInput(),
      'client'        => new sfWidgetFormFilterInput(),
      'is_approved'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_published'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_hidden'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'last_modifier' => new sfWidgetFormFilterInput(),
      'created_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'public_key'    => new sfValidatorPass(array('required' => false)),
      'private_key'   => new sfValidatorPass(array('required' => false)),
      'client'        => new sfValidatorPass(array('required' => false)),
      'is_approved'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_published'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_hidden'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'last_modifier' => new sfValidatorPass(array('required' => false)),
      'created_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('api_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Api';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'public_key'    => 'Text',
      'private_key'   => 'Text',
      'client'        => 'Text',
      'is_approved'   => 'Boolean',
      'is_published'  => 'Boolean',
      'is_hidden'     => 'Boolean',
      'last_modifier' => 'Text',
      'created_at'    => 'Date',
      'updated_at'    => 'Date',
    );
  }
}
