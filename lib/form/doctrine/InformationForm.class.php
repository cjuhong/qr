<?php

/**
 * Information form.
 *
 * @package    mgto
 * @subpackage form
 * @author     Jeremy and Andy
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class InformationForm extends BaseInformationForm
{
  public function configure()
  {
    unset(
      $this['created_at'],
      $this['updated_at'],
      $this['parent_id']
    );
    $this->widgetSchema['last_modifier']= new sfWidgetFormInputHidden(array('label' => 'Last modifier'), array('size' => '100'));


    $this->widgetSchema['realtime_temp'] = new sfWidgetFormInputText(array('label' => 'Realtime temp'), array('size' => '100'));
    $this->widgetSchema['humidity'] = new sfWidgetFormInputText(array('label' => 'Humidity'), array('size' => '100'));
    $this->widgetSchema['high_temp'] = new sfWidgetFormInputText(array('label' => 'High temp'), array('size' => '100'));
    $this->widgetSchema['low_temp'] = new sfWidgetFormInputText(array('label' => 'Low temp'), array('size' => '100'));
    $this->widgetSchema['wind_level'] = new sfWidgetFormInputText(array('label' => 'Wind level'), array('size' => '100'));
    $this->widgetSchema['edu_youth'] = new sfWidgetFormInputText(array('label' => 'Edu youth'), array('size' => '100'));
    $this->widgetSchema['weather_info'] = new sfWidgetFormTextareaTinyMce(array('label' => 'Weather info'), array('rows' => '25', 'cols' =>'100'));

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
