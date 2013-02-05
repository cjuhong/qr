<?php

/**
 * BannerTranslation form base class.
 *
 * @method BannerTranslation getObject() Returns the current form's model object
 *
 * @package    mgto
 * @subpackage form
 * @author     Jeremy and Andy
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseBannerTranslationForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'name'            => new sfWidgetFormInputText(),
      'image'           => new sfWidgetFormInputText(),
      'start_date'      => new sfWidgetFormDateTime(),
      'end_date'        => new sfWidgetFormDateTime(),
      'orders'          => new sfWidgetFormInputText(),
      'link_url'        => new sfWidgetFormInputText(),
      'link_target'     => new sfWidgetFormInputText(),
      'is_hidden'       => new sfWidgetFormInputCheckbox(),
      'parent_language' => new sfWidgetFormInputText(),
      'approve'         => new sfWidgetFormInputText(),
      'publish'         => new sfWidgetFormInputText(),
      'lang'            => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'image'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'start_date'      => new sfValidatorDateTime(array('required' => false)),
      'end_date'        => new sfValidatorDateTime(array('required' => false)),
      'orders'          => new sfValidatorInteger(array('required' => false)),
      'link_url'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'link_target'     => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'is_hidden'       => new sfValidatorBoolean(array('required' => false)),
      'parent_language' => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'approve'         => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'publish'         => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'lang'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('lang')), 'empty_value' => $this->getObject()->get('lang'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('banner_translation[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'BannerTranslation';
  }

}
