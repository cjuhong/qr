<?php

/**
 * School filter form base class.
 *
 * @package    mgto
 * @subpackage filter
 * @author     Jeremy and Andy
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSchoolFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'icon'          => new sfWidgetFormFilterInput(),
      'tel'           => new sfWidgetFormFilterInput(),
      'fax'           => new sfWidgetFormFilterInput(),
      'website'       => new sfWidgetFormFilterInput(),
      'latitude'      => new sfWidgetFormFilterInput(),
      'longitude'     => new sfWidgetFormFilterInput(),
      'image_one'     => new sfWidgetFormFilterInput(),
      'image_two'     => new sfWidgetFormFilterInput(),
      'image_three'   => new sfWidgetFormFilterInput(),
      'start_date'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'end_date'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'parent_id'     => new sfWidgetFormFilterInput(),
      'last_modifier' => new sfWidgetFormFilterInput(),
      'created_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'icon'          => new sfValidatorPass(array('required' => false)),
      'tel'           => new sfValidatorPass(array('required' => false)),
      'fax'           => new sfValidatorPass(array('required' => false)),
      'website'       => new sfValidatorPass(array('required' => false)),
      'latitude'      => new sfValidatorPass(array('required' => false)),
      'longitude'     => new sfValidatorPass(array('required' => false)),
      'image_one'     => new sfValidatorPass(array('required' => false)),
      'image_two'     => new sfValidatorPass(array('required' => false)),
      'image_three'   => new sfValidatorPass(array('required' => false)),
      'start_date'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'end_date'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'parent_id'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'last_modifier' => new sfValidatorPass(array('required' => false)),
      'created_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('school_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'School';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'icon'          => 'Text',
      'tel'           => 'Text',
      'fax'           => 'Text',
      'website'       => 'Text',
      'latitude'      => 'Text',
      'longitude'     => 'Text',
      'image_one'     => 'Text',
      'image_two'     => 'Text',
      'image_three'   => 'Text',
      'start_date'    => 'Date',
      'end_date'      => 'Date',
      'parent_id'     => 'Number',
      'last_modifier' => 'Text',
      'created_at'    => 'Date',
      'updated_at'    => 'Date',
    );
  }
}
