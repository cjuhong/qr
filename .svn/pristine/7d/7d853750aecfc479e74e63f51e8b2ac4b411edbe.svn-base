<?php

/**
 * FileUpload form base class.
 *
 * @method FileUpload getObject() Returns the current form's model object
 *
 * @package    mgto
 * @subpackage form
 * @author     Jeremy and Andy
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseFileUploadForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'file_name'     => new sfWidgetFormInputText(),
      'file_size'     => new sfWidgetFormInputText(),
      'last_modifier' => new sfWidgetFormInputText(),
      'date'          => new sfWidgetFormDate(),
      'remark'        => new sfWidgetFormInputText(),
      'path'          => new sfWidgetFormInputText(),
      'module'        => new sfWidgetFormInputText(),
      'parent_id'     => new sfWidgetFormInputText(),
      'start_date'    => new sfWidgetFormDateTime(),
      'end_date'      => new sfWidgetFormDateTime(),
      'created_at'    => new sfWidgetFormDateTime(),
      'updated_at'    => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'file_name'     => new sfValidatorString(array('max_length' => 245, 'required' => false)),
      'file_size'     => new sfValidatorString(array('max_length' => 245, 'required' => false)),
      'last_modifier' => new sfValidatorString(array('max_length' => 55, 'required' => false)),
      'date'          => new sfValidatorDate(array('required' => false)),
      'remark'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'path'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'module'        => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'parent_id'     => new sfValidatorInteger(array('required' => false)),
      'start_date'    => new sfValidatorDateTime(array('required' => false)),
      'end_date'      => new sfValidatorDateTime(array('required' => false)),
      'created_at'    => new sfValidatorDateTime(),
      'updated_at'    => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('file_upload[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'FileUpload';
  }

}
