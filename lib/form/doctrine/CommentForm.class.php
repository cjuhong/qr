<?php

/**
 * Comment form.
 *
 * @package    mgto
 * @subpackage form
 * @author     Jeremy and Andy
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class CommentForm extends BaseCommentForm
{
  public function configure()
  {

    unset(
      $this['created_at'],
      $this['updated_at'],
      $this['parent_id']
    );
    $this->widgetSchema['last_modifier']= new sfWidgetFormInputHidden(array('label' => 'Last modifier'), array('size' => '100'));


    $this->widgetSchema['name'] = new sfWidgetFormInputText(array('label' => 'Name'), array('size' => '100'));
    $this->widgetSchema['comment_id'] = new sfWidgetFormInputText(array('label' => 'Comment id'), array('size' => '100'));
    $this->widgetSchema['comment'] = new sfWidgetFormTextareaTinyMce(array('label' => 'Comment'), array('rows' => '25', 'cols' =>'100'));

/******************************************************************/
    $this->widgetSchema['start_date']= new sfWidgetFormInputText();
    $this->widgetSchema['end_date']= new sfWidgetFormInputText();
    $this->widgetSchema->setHelp('start_date', 'Date Format:YYYY-MM-DD HH:MM:SS (for example:2012-11-01 15:30:00)');
    $this->widgetSchema->setHelp('end_date', 'Date Format:YYYY-MM-DD HH:MM:SS (for example:2012-11-01 18:30:00) ');		
    $this->validatorSchema->setPostValidator(
      new sfValidatorSchemaCompare('start_date', sfValidatorSchemaCompare::LESS_THAN_EQUAL, 'end_date',
                                   array(),
                                   array('invalid' => 'The start date ("%left_field%") must be before the end date ("%right_field%")')
      ));


/********************************************************************/


    $this->widgetSchema['approve'] = new sfWidgetFormChoice(array('choices'  => array('Yes' =>'Yes','No'=>'No'),'expanded' => true,));
    $this->widgetSchema['publish'] = new sfWidgetFormChoice(array('choices'  => array('Yes' =>'Yes','No'=>'No'),'expanded' => true,));

    $currentUser = sfContext::getInstance()->getUser()->getGuardUser();

    if($currentUser->hasGroup('content_managers'))
      {
        // 		$this->widgetSchema['approve'] = new sfWidgetFormInputText(array('label' => 'Approve'), array('size' => '100','readonly'=>'true'));
        $this->widgetSchema['approve'] = new sfWidgetFormInputText(array('label' => 'Approve'), array('size' => '10','readonly'=>'true'));
        $this->widgetSchema['publish'] = new sfWidgetFormInputText(array('label' => 'Publish'), array('size' => '10','readonly'=>'true'));

      }




  }
}
