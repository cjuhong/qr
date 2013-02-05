<?php

/**
 * BannerTranslation filter form base class.
 *
 * @package    mgto
 * @subpackage filter
 * @author     Jeremy and Andy
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseBannerTranslationFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'            => new sfWidgetFormFilterInput(),
      'image'           => new sfWidgetFormFilterInput(),
      'start_date'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'end_date'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'orders'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'link_url'        => new sfWidgetFormFilterInput(),
      'link_target'     => new sfWidgetFormFilterInput(),
      'is_hidden'       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'parent_language' => new sfWidgetFormFilterInput(),
      'approve'         => new sfWidgetFormFilterInput(),
      'publish'         => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'name'            => new sfValidatorPass(array('required' => false)),
      'image'           => new sfValidatorPass(array('required' => false)),
      'start_date'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'end_date'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'orders'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'link_url'        => new sfValidatorPass(array('required' => false)),
      'link_target'     => new sfValidatorPass(array('required' => false)),
      'is_hidden'       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'parent_language' => new sfValidatorPass(array('required' => false)),
      'approve'         => new sfValidatorPass(array('required' => false)),
      'publish'         => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('banner_translation_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'BannerTranslation';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'name'            => 'Text',
      'image'           => 'Text',
      'start_date'      => 'Date',
      'end_date'        => 'Date',
      'orders'          => 'Number',
      'link_url'        => 'Text',
      'link_target'     => 'Text',
      'is_hidden'       => 'Boolean',
      'parent_language' => 'Text',
      'approve'         => 'Text',
      'publish'         => 'Text',
      'lang'            => 'Text',
    );
  }
}
