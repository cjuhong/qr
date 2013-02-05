<?php

/**
 * Favorite form base class.
 *
 * @method Favorite getObject() Returns the current form's model object
 *
 * @package    mgto
 * @subpackage form
 * @author     Jeremy and Andy
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseFavoriteForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'article_type_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ArticleType'), 'add_empty' => true)),
      'article_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Article'), 'add_empty' => true)),
      'module_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ModuleCategory'), 'add_empty' => true)),
      'user_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => true)),
      'is_favorite'     => new sfWidgetFormInputCheckbox(),
      'opinion'         => new sfWidgetFormInputText(),
      'created_at'      => new sfWidgetFormDateTime(),
      'updated_at'      => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'article_type_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ArticleType'), 'required' => false)),
      'article_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Article'), 'required' => false)),
      'module_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ModuleCategory'), 'required' => false)),
      'user_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'required' => false)),
      'is_favorite'     => new sfValidatorBoolean(array('required' => false)),
      'opinion'         => new sfValidatorString(array('max_length' => 245, 'required' => false)),
      'created_at'      => new sfValidatorDateTime(),
      'updated_at'      => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('favorite[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Favorite';
  }

}
