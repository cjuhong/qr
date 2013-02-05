<?php

/**
 * Comment form base class.
 *
 * @method Comment getObject() Returns the current form's model object
 *
 * @package    mgto
 * @subpackage form
 * @author     Jeremy and Andy
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCommentForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'name'            => new sfWidgetFormInputText(),
      'comment_id'      => new sfWidgetFormInputText(),
      'comment'         => new sfWidgetFormInputText(),
      'module_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ModuleCategory'), 'add_empty' => true)),
      'article_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Article'), 'add_empty' => true)),
      'article_type_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ArticleType'), 'add_empty' => true)),
      'book_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Book'), 'add_empty' => true)),
      'app_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('App'), 'add_empty' => true)),
      'theme_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Theme'), 'add_empty' => true)),
      'vote_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Vote'), 'add_empty' => true)),
      'user_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => true)),
      'approve'         => new sfWidgetFormInputText(),
      'publish'         => new sfWidgetFormInputText(),
      'is_hidden'       => new sfWidgetFormInputCheckbox(),
      'start_date'      => new sfWidgetFormDateTime(),
      'end_date'        => new sfWidgetFormDateTime(),
      'parent_id'       => new sfWidgetFormInputText(),
      'last_modifier'   => new sfWidgetFormInputText(),
      'created_at'      => new sfWidgetFormDateTime(),
      'updated_at'      => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'            => new sfValidatorString(array('max_length' => 245, 'required' => false)),
      'comment_id'      => new sfValidatorInteger(array('required' => false)),
      'comment'         => new sfValidatorPass(array('required' => false)),
      'module_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ModuleCategory'), 'required' => false)),
      'article_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Article'), 'required' => false)),
      'article_type_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ArticleType'), 'required' => false)),
      'book_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Book'), 'required' => false)),
      'app_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('App'), 'required' => false)),
      'theme_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Theme'), 'required' => false)),
      'vote_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Vote'), 'required' => false)),
      'user_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'required' => false)),
      'approve'         => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'publish'         => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'is_hidden'       => new sfValidatorBoolean(array('required' => false)),
      'start_date'      => new sfValidatorDateTime(array('required' => false)),
      'end_date'        => new sfValidatorDateTime(array('required' => false)),
      'parent_id'       => new sfValidatorInteger(array('required' => false)),
      'last_modifier'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'      => new sfValidatorDateTime(),
      'updated_at'      => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('comment[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Comment';
  }

}
