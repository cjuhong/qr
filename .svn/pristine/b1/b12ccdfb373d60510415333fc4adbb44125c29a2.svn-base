<?php

/**
 * Languages filter form base class.
 *
 * @package    mgto
 * @subpackage filter
 * @author     Jeremy and Andy
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseLanguagesFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'code'            => new sfWidgetFormFilterInput(),
      'name'            => new sfWidgetFormFilterInput(),
      'link_url'        => new sfWidgetFormFilterInput(),
      'link_target'     => new sfWidgetFormFilterInput(),
      'is_approved'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_published'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_hidden'       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'parent_language' => new sfWidgetFormFilterInput(),
      'parent_id'       => new sfWidgetFormFilterInput(),
      'last_modifier'   => new sfWidgetFormFilterInput(),
      'created_at'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'code'            => new sfValidatorPass(array('required' => false)),
      'name'            => new sfValidatorPass(array('required' => false)),
      'link_url'        => new sfValidatorPass(array('required' => false)),
      'link_target'     => new sfValidatorPass(array('required' => false)),
      'is_approved'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_published'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_hidden'       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'parent_language' => new sfValidatorPass(array('required' => false)),
      'parent_id'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'last_modifier'   => new sfValidatorPass(array('required' => false)),
      'created_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('languages_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Languages';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'code'            => 'Text',
      'name'            => 'Text',
      'link_url'        => 'Text',
      'link_target'     => 'Text',
      'is_approved'     => 'Boolean',
      'is_published'    => 'Boolean',
      'is_hidden'       => 'Boolean',
      'parent_language' => 'Text',
      'parent_id'       => 'Number',
      'last_modifier'   => 'Text',
      'created_at'      => 'Date',
      'updated_at'      => 'Date',
    );
  }
}
