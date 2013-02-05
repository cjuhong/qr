<?php

/**
 * StaticContent form base class.
 *
 * @method StaticContent getObject() Returns the current form's model object
 *
 * @package    mgto
 * @subpackage form
 * @author     Jeremy and Andy
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseStaticContentForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'category_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('StaticContentCategory'), 'add_empty' => true)),
      'page_name'     => new sfWidgetFormTextarea(),
      'image'         => new sfWidgetFormInputText(),
      'doc'           => new sfWidgetFormInputText(),
      'start_date'    => new sfWidgetFormDateTime(),
      'end_date'      => new sfWidgetFormDateTime(),
      'orders'        => new sfWidgetFormInputText(),
      'last_modifier' => new sfWidgetFormInputText(),
      'created_at'    => new sfWidgetFormDateTime(),
      'updated_at'    => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'category_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('StaticContentCategory'), 'required' => false)),
      'page_name'     => new sfValidatorString(array('max_length' => 500, 'required' => false)),
      'image'         => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'doc'           => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'start_date'    => new sfValidatorDateTime(array('required' => false)),
      'end_date'      => new sfValidatorDateTime(array('required' => false)),
      'orders'        => new sfValidatorInteger(array('required' => false)),
      'last_modifier' => new sfValidatorString(array('max_length' => 55, 'required' => false)),
      'created_at'    => new sfValidatorDateTime(),
      'updated_at'    => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('static_content[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'StaticContent';
  }

}