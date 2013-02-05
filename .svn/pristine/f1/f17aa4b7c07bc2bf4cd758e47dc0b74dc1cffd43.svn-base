<?php

/**
 * SchoolTranslation filter form base class.
 *
 * @package    mgto
 * @subpackage filter
 * @author     Jeremy and Andy
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSchoolTranslationFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'               => new sfWidgetFormFilterInput(),
      'address'            => new sfWidgetFormFilterInput(),
      'pedagogical_system' => new sfWidgetFormFilterInput(),
      'property'           => new sfWidgetFormFilterInput(),
      'school_system'      => new sfWidgetFormFilterInput(),
      'open_stage'         => new sfWidgetFormFilterInput(),
      'characterstics'     => new sfWidgetFormFilterInput(),
      'honor_roll'         => new sfWidgetFormFilterInput(),
      'facilities'         => new sfWidgetFormFilterInput(),
      'mission'            => new sfWidgetFormFilterInput(),
      'remark'             => new sfWidgetFormFilterInput(),
      'introduction'       => new sfWidgetFormFilterInput(),
      'approve'            => new sfWidgetFormFilterInput(),
      'publish'            => new sfWidgetFormFilterInput(),
      'is_hidden'          => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'parent_language'    => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'name'               => new sfValidatorPass(array('required' => false)),
      'address'            => new sfValidatorPass(array('required' => false)),
      'pedagogical_system' => new sfValidatorPass(array('required' => false)),
      'property'           => new sfValidatorPass(array('required' => false)),
      'school_system'      => new sfValidatorPass(array('required' => false)),
      'open_stage'         => new sfValidatorPass(array('required' => false)),
      'characterstics'     => new sfValidatorPass(array('required' => false)),
      'honor_roll'         => new sfValidatorPass(array('required' => false)),
      'facilities'         => new sfValidatorPass(array('required' => false)),
      'mission'            => new sfValidatorPass(array('required' => false)),
      'remark'             => new sfValidatorPass(array('required' => false)),
      'introduction'       => new sfValidatorPass(array('required' => false)),
      'approve'            => new sfValidatorPass(array('required' => false)),
      'publish'            => new sfValidatorPass(array('required' => false)),
      'is_hidden'          => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'parent_language'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('school_translation_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SchoolTranslation';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'name'               => 'Text',
      'address'            => 'Text',
      'pedagogical_system' => 'Text',
      'property'           => 'Text',
      'school_system'      => 'Text',
      'open_stage'         => 'Text',
      'characterstics'     => 'Text',
      'honor_roll'         => 'Text',
      'facilities'         => 'Text',
      'mission'            => 'Text',
      'remark'             => 'Text',
      'introduction'       => 'Text',
      'approve'            => 'Text',
      'publish'            => 'Text',
      'is_hidden'          => 'Boolean',
      'parent_language'    => 'Text',
      'lang'               => 'Text',
    );
  }
}
