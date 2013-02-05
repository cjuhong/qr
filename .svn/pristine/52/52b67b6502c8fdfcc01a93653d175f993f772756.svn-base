<?php

/**
 * VoteOptionsTranslation filter form base class.
 *
 * @package    mgto
 * @subpackage filter
 * @author     Jeremy and Andy
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseVoteOptionsTranslationFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'vote_option' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'vote_option' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('vote_options_translation_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VoteOptionsTranslation';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'vote_option' => 'Text',
      'lang'        => 'Text',
    );
  }
}
