<?php

/**
 * VoteTranslation filter form base class.
 *
 * @package    mgto
 * @subpackage filter
 * @author     Jeremy and Andy
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseVoteTranslationFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'question'    => new sfWidgetFormFilterInput(),
      'is_multiple' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'approve'     => new sfWidgetFormFilterInput(),
      'publish'     => new sfWidgetFormFilterInput(),
      'is_hidden'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'question'    => new sfValidatorPass(array('required' => false)),
      'is_multiple' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'approve'     => new sfValidatorPass(array('required' => false)),
      'publish'     => new sfValidatorPass(array('required' => false)),
      'is_hidden'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('vote_translation_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VoteTranslation';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'question'    => 'Text',
      'is_multiple' => 'Boolean',
      'approve'     => 'Text',
      'publish'     => 'Text',
      'is_hidden'   => 'Boolean',
      'lang'        => 'Text',
    );
  }
}
