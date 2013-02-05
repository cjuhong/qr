<?php

/**
 * StatisticalMonth filter form base class.
 *
 * @package    mgto
 * @subpackage filter
 * @author     Jeremy and Andy
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseStatisticalMonthFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'module'        => new sfWidgetFormFilterInput(),
      'sub_id'        => new sfWidgetFormFilterInput(),
      'ip_count'      => new sfWidgetFormFilterInput(),
      'user_count'    => new sfWidgetFormFilterInput(),
      'visitor_count' => new sfWidgetFormFilterInput(),
      'last_modifier' => new sfWidgetFormFilterInput(),
      'created_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'module'        => new sfValidatorPass(array('required' => false)),
      'sub_id'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'ip_count'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'user_count'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'visitor_count' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'last_modifier' => new sfValidatorPass(array('required' => false)),
      'created_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('statistical_month_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'StatisticalMonth';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'module'        => 'Text',
      'sub_id'        => 'Number',
      'ip_count'      => 'Number',
      'user_count'    => 'Number',
      'visitor_count' => 'Number',
      'last_modifier' => 'Text',
      'created_at'    => 'Date',
      'updated_at'    => 'Date',
    );
  }
}
