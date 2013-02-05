<?php

/**
 * Book filter form base class.
 *
 * @package    mgto
 * @subpackage filter
 * @author     Jeremy and Andy
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseBookFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cover'           => new sfWidgetFormFilterInput(),
      'publisher'       => new sfWidgetFormFilterInput(),
      'translator'      => new sfWidgetFormFilterInput(),
      'recommended_age' => new sfWidgetFormFilterInput(),
      'daybook'         => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'author'          => new sfWidgetFormFilterInput(),
      'drawer'          => new sfWidgetFormFilterInput(),
      'isbn'            => new sfWidgetFormFilterInput(),
      'price'           => new sfWidgetFormFilterInput(),
      'buy_url'         => new sfWidgetFormFilterInput(),
      'start_date'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'end_date'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'parent_id'       => new sfWidgetFormFilterInput(),
      'last_modifier'   => new sfWidgetFormFilterInput(),
      'created_at'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'cover'           => new sfValidatorPass(array('required' => false)),
      'publisher'       => new sfValidatorPass(array('required' => false)),
      'translator'      => new sfValidatorPass(array('required' => false)),
      'recommended_age' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'daybook'         => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'author'          => new sfValidatorPass(array('required' => false)),
      'drawer'          => new sfValidatorPass(array('required' => false)),
      'isbn'            => new sfValidatorPass(array('required' => false)),
      'price'           => new sfValidatorPass(array('required' => false)),
      'buy_url'         => new sfValidatorPass(array('required' => false)),
      'start_date'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'end_date'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'parent_id'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'last_modifier'   => new sfValidatorPass(array('required' => false)),
      'created_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('book_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Book';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'cover'           => 'Text',
      'publisher'       => 'Text',
      'translator'      => 'Text',
      'recommended_age' => 'Number',
      'daybook'         => 'Boolean',
      'author'          => 'Text',
      'drawer'          => 'Text',
      'isbn'            => 'Text',
      'price'           => 'Text',
      'buy_url'         => 'Text',
      'start_date'      => 'Date',
      'end_date'        => 'Date',
      'parent_id'       => 'Number',
      'last_modifier'   => 'Text',
      'created_at'      => 'Date',
      'updated_at'      => 'Date',
    );
  }
}
