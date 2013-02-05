<?php

/**
 * PhotoAlbumTranslation filter form base class.
 *
 * @package    mgto
 * @subpackage filter
 * @author     Jeremy and Andy
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePhotoAlbumTranslationFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'                    => new sfWidgetFormFilterInput(),
      'image_one_description'   => new sfWidgetFormFilterInput(),
      'image_two_description'   => new sfWidgetFormFilterInput(),
      'image_three_description' => new sfWidgetFormFilterInput(),
      'approve'                 => new sfWidgetFormFilterInput(),
      'publish'                 => new sfWidgetFormFilterInput(),
      'is_hidden'               => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'name'                    => new sfValidatorPass(array('required' => false)),
      'image_one_description'   => new sfValidatorPass(array('required' => false)),
      'image_two_description'   => new sfValidatorPass(array('required' => false)),
      'image_three_description' => new sfValidatorPass(array('required' => false)),
      'approve'                 => new sfValidatorPass(array('required' => false)),
      'publish'                 => new sfValidatorPass(array('required' => false)),
      'is_hidden'               => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('photo_album_translation_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PhotoAlbumTranslation';
  }

  public function getFields()
  {
    return array(
      'id'                      => 'Number',
      'name'                    => 'Text',
      'image_one_description'   => 'Text',
      'image_two_description'   => 'Text',
      'image_three_description' => 'Text',
      'approve'                 => 'Text',
      'publish'                 => 'Text',
      'is_hidden'               => 'Boolean',
      'lang'                    => 'Text',
    );
  }
}
