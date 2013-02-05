<?php

/**
 * Book form base class.
 *
 * @method Book getObject() Returns the current form's model object
 *
 * @package    mgto
 * @subpackage form
 * @author     Jeremy and Andy
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseBookForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'cover'           => new sfWidgetFormInputText(),
      'publisher'       => new sfWidgetFormInputText(),
      'translator'      => new sfWidgetFormInputText(),
      'recommended_age' => new sfWidgetFormInputText(),
      'daybook'         => new sfWidgetFormInputCheckbox(),
      'author'          => new sfWidgetFormInputText(),
      'drawer'          => new sfWidgetFormInputText(),
      'isbn'            => new sfWidgetFormInputText(),
      'price'           => new sfWidgetFormInputText(),
      'buy_url'         => new sfWidgetFormInputText(),
      'start_date'      => new sfWidgetFormDateTime(),
      'end_date'        => new sfWidgetFormDateTime(),
      'parent_id'       => new sfWidgetFormInputText(),
      'last_modifier'   => new sfWidgetFormInputText(),
      'created_at'      => new sfWidgetFormDateTime(),
      'updated_at'      => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'cover'           => new sfValidatorString(array('max_length' => 245, 'required' => false)),
      'publisher'       => new sfValidatorString(array('max_length' => 245, 'required' => false)),
      'translator'      => new sfValidatorString(array('max_length' => 245, 'required' => false)),
      'recommended_age' => new sfValidatorInteger(array('required' => false)),
      'daybook'         => new sfValidatorBoolean(array('required' => false)),
      'author'          => new sfValidatorString(array('max_length' => 245, 'required' => false)),
      'drawer'          => new sfValidatorString(array('max_length' => 245, 'required' => false)),
      'isbn'            => new sfValidatorString(array('max_length' => 245, 'required' => false)),
      'price'           => new sfValidatorString(array('max_length' => 245, 'required' => false)),
      'buy_url'         => new sfValidatorString(array('max_length' => 245, 'required' => false)),
      'start_date'      => new sfValidatorDateTime(array('required' => false)),
      'end_date'        => new sfValidatorDateTime(array('required' => false)),
      'parent_id'       => new sfValidatorInteger(array('required' => false)),
      'last_modifier'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'      => new sfValidatorDateTime(),
      'updated_at'      => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('book[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Book';
  }

}
