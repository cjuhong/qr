<?php

/**
 * Theme form base class.
 *
 * @method Theme getObject() Returns the current form's model object
 *
 * @package    mgto
 * @subpackage form
 * @author     Jeremy and Andy
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseThemeForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'article_link'   => new sfWidgetFormInputText(),
      'publish_date'   => new sfWidgetFormDateTime(),
      'module_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ModuleCategory'), 'add_empty' => true)),
      'photo_album_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PhotoAlbum'), 'add_empty' => true)),
      'start_date'     => new sfWidgetFormDateTime(),
      'end_date'       => new sfWidgetFormDateTime(),
      'parent_id'      => new sfWidgetFormInputText(),
      'last_modifier'  => new sfWidgetFormInputText(),
      'created_at'     => new sfWidgetFormDateTime(),
      'updated_at'     => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'article_link'   => new sfValidatorString(array('max_length' => 145, 'required' => false)),
      'publish_date'   => new sfValidatorDateTime(array('required' => false)),
      'module_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ModuleCategory'), 'required' => false)),
      'photo_album_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('PhotoAlbum'), 'required' => false)),
      'start_date'     => new sfValidatorDateTime(array('required' => false)),
      'end_date'       => new sfValidatorDateTime(array('required' => false)),
      'parent_id'      => new sfValidatorInteger(array('required' => false)),
      'last_modifier'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'     => new sfValidatorDateTime(),
      'updated_at'     => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('theme[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Theme';
  }

}
