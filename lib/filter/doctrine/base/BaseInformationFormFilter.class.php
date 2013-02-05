<?php

/**
 * Information filter form base class.
 *
 * @package    mgto
 * @subpackage filter
 * @author     Jeremy and Andy
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseInformationFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'realtime_temp' => new sfWidgetFormFilterInput(),
      'humidity'      => new sfWidgetFormFilterInput(),
      'high_temp'     => new sfWidgetFormFilterInput(),
      'low_temp'      => new sfWidgetFormFilterInput(),
      'weather_info'  => new sfWidgetFormFilterInput(),
      'wind_level'    => new sfWidgetFormFilterInput(),
      'edu_youth'     => new sfWidgetFormFilterInput(),
      'approve'       => new sfWidgetFormFilterInput(),
      'publish'       => new sfWidgetFormFilterInput(),
      'is_hidden'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'start_date'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'end_date'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'parent_id'     => new sfWidgetFormFilterInput(),
      'last_modifier' => new sfWidgetFormFilterInput(),
      'created_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'realtime_temp' => new sfValidatorPass(array('required' => false)),
      'humidity'      => new sfValidatorPass(array('required' => false)),
      'high_temp'     => new sfValidatorPass(array('required' => false)),
      'low_temp'      => new sfValidatorPass(array('required' => false)),
      'weather_info'  => new sfValidatorPass(array('required' => false)),
      'wind_level'    => new sfValidatorPass(array('required' => false)),
      'edu_youth'     => new sfValidatorPass(array('required' => false)),
      'approve'       => new sfValidatorPass(array('required' => false)),
      'publish'       => new sfValidatorPass(array('required' => false)),
      'is_hidden'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'start_date'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'end_date'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'parent_id'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'last_modifier' => new sfValidatorPass(array('required' => false)),
      'created_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('information_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Information';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'realtime_temp' => 'Text',
      'humidity'      => 'Text',
      'high_temp'     => 'Text',
      'low_temp'      => 'Text',
      'weather_info'  => 'Text',
      'wind_level'    => 'Text',
      'edu_youth'     => 'Text',
      'approve'       => 'Text',
      'publish'       => 'Text',
      'is_hidden'     => 'Boolean',
      'start_date'    => 'Date',
      'end_date'      => 'Date',
      'parent_id'     => 'Number',
      'last_modifier' => 'Text',
      'created_at'    => 'Date',
      'updated_at'    => 'Date',
    );
  }
}
