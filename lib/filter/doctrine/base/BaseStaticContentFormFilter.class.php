<?php

/**
 * StaticContent filter form base class.
 *
 * @package    mgto
 * @subpackage filter
 * @author     Jeremy and Andy
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseStaticContentFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'category_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('StaticContentCategory'), 'add_empty' => true)),
      'page_name'     => new sfWidgetFormFilterInput(),
      'image'         => new sfWidgetFormFilterInput(),
      'doc'           => new sfWidgetFormFilterInput(),
      'start_date'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'end_date'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'orders'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'last_modifier' => new sfWidgetFormFilterInput(),
      'created_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'category_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('StaticContentCategory'), 'column' => 'id')),
      'page_name'     => new sfValidatorPass(array('required' => false)),
      'image'         => new sfValidatorPass(array('required' => false)),
      'doc'           => new sfValidatorPass(array('required' => false)),
      'start_date'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'end_date'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'orders'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'last_modifier' => new sfValidatorPass(array('required' => false)),
      'created_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('static_content_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'StaticContent';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'category_id'   => 'ForeignKey',
      'page_name'     => 'Text',
      'image'         => 'Text',
      'doc'           => 'Text',
      'start_date'    => 'Date',
      'end_date'      => 'Date',
      'orders'        => 'Number',
      'last_modifier' => 'Text',
      'created_at'    => 'Date',
      'updated_at'    => 'Date',
    );
  }
}
