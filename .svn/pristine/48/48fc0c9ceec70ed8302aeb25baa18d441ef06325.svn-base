<?php

/**
 * VoteTranslation form base class.
 *
 * @method VoteTranslation getObject() Returns the current form's model object
 *
 * @package    mgto
 * @subpackage form
 * @author     Jeremy and Andy
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseVoteTranslationForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'question'    => new sfWidgetFormInputText(),
      'is_multiple' => new sfWidgetFormInputCheckbox(),
      'approve'     => new sfWidgetFormInputText(),
      'publish'     => new sfWidgetFormInputText(),
      'is_hidden'   => new sfWidgetFormInputCheckbox(),
      'lang'        => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'question'    => new sfValidatorPass(array('required' => false)),
      'is_multiple' => new sfValidatorBoolean(array('required' => false)),
      'approve'     => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'publish'     => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'is_hidden'   => new sfValidatorBoolean(array('required' => false)),
      'lang'        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('lang')), 'empty_value' => $this->getObject()->get('lang'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('vote_translation[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VoteTranslation';
  }

}
