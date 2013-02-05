<?php

/**
 * StaticContentTranslation filter form base class.
 *
 * @package    mgto
 * @subpackage filter
 * @author     Jeremy and Andy
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseStaticContentTranslationFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'title'           => new sfWidgetFormFilterInput(),
      'content'         => new sfWidgetFormFilterInput(),
      'is_hidden'       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'parent_language' => new sfWidgetFormFilterInput(),
      'is_link'         => new sfWidgetFormFilterInput(),
      'link_target'     => new sfWidgetFormFilterInput(),
      'approve'         => new sfWidgetFormFilterInput(),
      'publish'         => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'title'           => new sfValidatorPass(array('required' => false)),
      'content'         => new sfValidatorPass(array('required' => false)),
      'is_hidden'       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'parent_language' => new sfValidatorPass(array('required' => false)),
      'is_link'         => new sfValidatorPass(array('required' => false)),
      'link_target'     => new sfValidatorPass(array('required' => false)),
      'approve'         => new sfValidatorPass(array('required' => false)),
      'publish'         => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('static_content_translation_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'StaticContentTranslation';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'title'           => 'Text',
      'content'         => 'Text',
      'is_hidden'       => 'Boolean',
      'parent_language' => 'Text',
      'is_link'         => 'Text',
      'link_target'     => 'Text',
      'approve'         => 'Text',
      'publish'         => 'Text',
      'lang'            => 'Text',
    );
  }
}
