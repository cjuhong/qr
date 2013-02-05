<?php

/**
 * AppIntroTranslation filter form base class.
 *
 * @package    mgto
 * @subpackage filter
 * @author     Jeremy and Andy
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAppIntroTranslationFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'company_logo'  => new sfWidgetFormFilterInput(),
      'company_intro' => new sfWidgetFormFilterInput(),
      'app_name'      => new sfWidgetFormFilterInput(),
      'app_intro'     => new sfWidgetFormFilterInput(),
      'approve'       => new sfWidgetFormFilterInput(),
      'publish'       => new sfWidgetFormFilterInput(),
      'is_hidden'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'company_logo'  => new sfValidatorPass(array('required' => false)),
      'company_intro' => new sfValidatorPass(array('required' => false)),
      'app_name'      => new sfValidatorPass(array('required' => false)),
      'app_intro'     => new sfValidatorPass(array('required' => false)),
      'approve'       => new sfValidatorPass(array('required' => false)),
      'publish'       => new sfValidatorPass(array('required' => false)),
      'is_hidden'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('app_intro_translation_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AppIntroTranslation';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'company_logo'  => 'Text',
      'company_intro' => 'Text',
      'app_name'      => 'Text',
      'app_intro'     => 'Text',
      'approve'       => 'Text',
      'publish'       => 'Text',
      'is_hidden'     => 'Boolean',
      'lang'          => 'Text',
    );
  }
}
