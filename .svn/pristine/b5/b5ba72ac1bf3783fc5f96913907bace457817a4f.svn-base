<?php

/**
 * PhotoAlbum form base class.
 *
 * @method PhotoAlbum getObject() Returns the current form's model object
 *
 * @package    mgto
 * @subpackage form
 * @author     Jeremy and Andy
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePhotoAlbumForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'image_one'     => new sfWidgetFormInputText(),
      'image_two'     => new sfWidgetFormInputText(),
      'image_three'   => new sfWidgetFormInputText(),
      'start_date'    => new sfWidgetFormDateTime(),
      'end_date'      => new sfWidgetFormDateTime(),
      'parent_id'     => new sfWidgetFormInputText(),
      'last_modifier' => new sfWidgetFormInputText(),
      'created_at'    => new sfWidgetFormDateTime(),
      'updated_at'    => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'image_one'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'image_two'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'image_three'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'start_date'    => new sfValidatorDateTime(array('required' => false)),
      'end_date'      => new sfValidatorDateTime(array('required' => false)),
      'parent_id'     => new sfValidatorInteger(array('required' => false)),
      'last_modifier' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'    => new sfValidatorDateTime(),
      'updated_at'    => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('photo_album[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PhotoAlbum';
  }

}
