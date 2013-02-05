<?php

/**
 * PhotoAlbumTranslation form base class.
 *
 * @method PhotoAlbumTranslation getObject() Returns the current form's model object
 *
 * @package    mgto
 * @subpackage form
 * @author     Jeremy and Andy
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePhotoAlbumTranslationForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                      => new sfWidgetFormInputHidden(),
      'name'                    => new sfWidgetFormInputText(),
      'image_one_description'   => new sfWidgetFormTextarea(),
      'image_two_description'   => new sfWidgetFormTextarea(),
      'image_three_description' => new sfWidgetFormTextarea(),
      'approve'                 => new sfWidgetFormInputText(),
      'publish'                 => new sfWidgetFormInputText(),
      'is_hidden'               => new sfWidgetFormInputCheckbox(),
      'lang'                    => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'id'                      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'                    => new sfValidatorString(array('max_length' => 245, 'required' => false)),
      'image_one_description'   => new sfValidatorString(array('max_length' => 500, 'required' => false)),
      'image_two_description'   => new sfValidatorString(array('max_length' => 500, 'required' => false)),
      'image_three_description' => new sfValidatorString(array('max_length' => 500, 'required' => false)),
      'approve'                 => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'publish'                 => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'is_hidden'               => new sfValidatorBoolean(array('required' => false)),
      'lang'                    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('lang')), 'empty_value' => $this->getObject()->get('lang'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('photo_album_translation[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PhotoAlbumTranslation';
  }

}
