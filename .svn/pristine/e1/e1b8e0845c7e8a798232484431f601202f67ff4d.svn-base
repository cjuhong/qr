<?php

/**
 * VoteOptions form base class.
 *
 * @method VoteOptions getObject() Returns the current form's model object
 *
 * @package    mgto
 * @subpackage form
 * @author     Jeremy and Andy
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseVoteOptionsForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'vote_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Vote'), 'add_empty' => true)),
      'user_id'       => new sfWidgetFormInputText(),
      'start_date'    => new sfWidgetFormDateTime(),
      'end_date'      => new sfWidgetFormDateTime(),
      'last_modifier' => new sfWidgetFormInputText(),
      'created_at'    => new sfWidgetFormDateTime(),
      'updated_at'    => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'vote_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Vote'), 'required' => false)),
      'user_id'       => new sfValidatorInteger(array('required' => false)),
      'start_date'    => new sfValidatorDateTime(array('required' => false)),
      'end_date'      => new sfValidatorDateTime(array('required' => false)),
      'last_modifier' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'    => new sfValidatorDateTime(),
      'updated_at'    => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('vote_options[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VoteOptions';
  }

}
