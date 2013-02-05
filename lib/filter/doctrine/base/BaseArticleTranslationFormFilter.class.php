<?php

/**
 * ArticleTranslation filter form base class.
 *
 * @package    mgto
 * @subpackage filter
 * @author     Jeremy and Andy
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseArticleTranslationFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'title'     => new sfWidgetFormFilterInput(),
      'content'   => new sfWidgetFormFilterInput(),
      'keyword'   => new sfWidgetFormFilterInput(),
      'approve'   => new sfWidgetFormFilterInput(),
      'publish'   => new sfWidgetFormFilterInput(),
      'is_hidden' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'title'     => new sfValidatorPass(array('required' => false)),
      'content'   => new sfValidatorPass(array('required' => false)),
      'keyword'   => new sfValidatorPass(array('required' => false)),
      'approve'   => new sfValidatorPass(array('required' => false)),
      'publish'   => new sfValidatorPass(array('required' => false)),
      'is_hidden' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('article_translation_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ArticleTranslation';
  }

  public function getFields()
  {
    return array(
      'id'        => 'Number',
      'title'     => 'Text',
      'content'   => 'Text',
      'keyword'   => 'Text',
      'approve'   => 'Text',
      'publish'   => 'Text',
      'is_hidden' => 'Boolean',
      'lang'      => 'Text',
    );
  }
}
