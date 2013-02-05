<?php

/**
 * App filter form base class.
 *
 * @package    mgto
 * @subpackage filter
 * @author     Jeremy and Andy
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAppFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'url'                  => new sfWidgetFormFilterInput(),
      'os_type'              => new sfWidgetFormFilterInput(),
      'logo'                 => new sfWidgetFormFilterInput(),
      'screen_capture_one'   => new sfWidgetFormFilterInput(),
      'screen_capture_two'   => new sfWidgetFormFilterInput(),
      'screen_capture_three' => new sfWidgetFormFilterInput(),
      'screen_capture_four'  => new sfWidgetFormFilterInput(),
      'start_date'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'end_date'             => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'parent_id'            => new sfWidgetFormFilterInput(),
      'last_modifier'        => new sfWidgetFormFilterInput(),
      'created_at'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'url'                  => new sfValidatorPass(array('required' => false)),
      'os_type'              => new sfValidatorPass(array('required' => false)),
      'logo'                 => new sfValidatorPass(array('required' => false)),
      'screen_capture_one'   => new sfValidatorPass(array('required' => false)),
      'screen_capture_two'   => new sfValidatorPass(array('required' => false)),
      'screen_capture_three' => new sfValidatorPass(array('required' => false)),
      'screen_capture_four'  => new sfValidatorPass(array('required' => false)),
      'start_date'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'end_date'             => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'parent_id'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'last_modifier'        => new sfValidatorPass(array('required' => false)),
      'created_at'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('app_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'App';
  }

  public function getFields()
  {
    return array(
      'id'                   => 'Number',
      'url'                  => 'Text',
      'os_type'              => 'Text',
      'logo'                 => 'Text',
      'screen_capture_one'   => 'Text',
      'screen_capture_two'   => 'Text',
      'screen_capture_three' => 'Text',
      'screen_capture_four'  => 'Text',
      'start_date'           => 'Date',
      'end_date'             => 'Date',
      'parent_id'            => 'Number',
      'last_modifier'        => 'Text',
      'created_at'           => 'Date',
      'updated_at'           => 'Date',
    );
  }
}
