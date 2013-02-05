<?php

/**
 * School form.
 *
 * @package    mgto
 * @subpackage form
 * @author     Jeremy and Andy
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class SchoolForm extends BaseSchoolForm
{
  public function configure()
  {
    unset(
      $this['created_at'],
      $this['updated_at'],
      $this['parent_id']
    );
    $this->widgetSchema['last_modifier']= new sfWidgetFormInputHidden(array('label' => 'Last modifier'), array('size' => '100'));



    /***********************************************************************/
    $maxSize = sfConfig::get('sf_uploads_maxSize',5);
    $icon =$this->getObject()->getIcon();
    $imageOne =$this->getObject()->getImageOne();
    $imageTwo =$this->getObject()->getImageTwo();
    $imageThree =$this->getObject()->getImageThree();
    $path = sfConfig::get('app_upload_path_school');
    $path_dir = sfConfig::get('sf_upload_dir').'/school/';

/****************************************************************************/
    if($icon){
      $this->widgetSchema['icon'] = new sfWidgetFormInputFileEditable(array(
        'label' => 'Icon',
        'file_src'  => ($path.$icon),
        'is_image'  => true,
        'edit_mode' => !$this->isNew(),
        'template'  => '<div style="float: left;">%file%<br/>%filepath%<br />%input% <br /> Tick to remove the existing image: %delete% </div><div class="ff"></div>',
      ));
    }else{
      $this->widgetSchema['icon'] = new sfWidgetFormInputFile(array(
        'label' => 'Icon',
      ));
    }
    $this->validatorSchema['icon'] = new sfValidatorFile(array(
      'max_size'   => $maxSize*1024*1024,
      'required'   => false,
      'path'       => $path_dir,
      'mime_types' => 'web_images',
    ));
/*********************************************************************************/
/****************************************************************************/
    if($imageOne){
      $this->widgetSchema['image_one'] = new sfWidgetFormInputFileEditable(array(
        'label' => 'Image One',
        'file_src'  => ($path.$imageOne),
        'is_image'  => true,
        'edit_mode' => !$this->isNew(),
        'template'  => '<div style="float: left;">%file%<br/>%filepath%<br />%input% <br /> Tick to remove the existing image: %delete% </div><div class="ff"></div>',
      ));
    }else{
      $this->widgetSchema['image_one'] = new sfWidgetFormInputFile(array(
        'label' => 'Image One',
      ));
    }
    $this->validatorSchema['image_one'] = new sfValidatorFile(array(
      'max_size'   => $maxSize*1024*1024,
      'required'   => false,
      'path'       => $path_dir,
      'mime_types' => 'web_images',
    ));
/*********************************************************************************/

/****************************************************************************/
    if($imageTwo){
      $this->widgetSchema['image_two'] = new sfWidgetFormInputFileEditable(array(
        'label' => 'Image Two',
        'file_src'  => ($path.$imageTwo),
        'is_image'  => true,
        'edit_mode' => !$this->isNew(),
        'template'  => '<div style="float: left;">%file%<br/>%filepath%<br />%input% <br /> Tick to remove the existing image: %delete% </div><div class="ff"></div>',
      ));
    }else{
      $this->widgetSchema['image_two'] = new sfWidgetFormInputFile(array(
        'label' => 'Image Two',
      ));
    }
    $this->validatorSchema['image_two'] = new sfValidatorFile(array(
      'max_size'   => $maxSize*1024*1024,
      'required'   => false,
      'path'       => $path_dir,
      'mime_types' => 'web_images',
    ));
/*********************************************************************************/
/****************************************************************************/
    if($imageThree){
      $this->widgetSchema['image_three'] = new sfWidgetFormInputFileEditable(array(
        'label' => 'Image Three',
        'file_src'  => ($path.$imageThree),
        'is_image'  => true,
        'edit_mode' => !$this->isNew(),
        'template'  => '<div style="float: left;">%file%<br/>%filepath%<br />%input% <br /> Tick to remove the existing image: %delete% </div><div class="ff"></div>',
      ));
    }else{
      $this->widgetSchema['image_three'] = new sfWidgetFormInputFile(array(
        'label' => 'Image Three',
      ));
    }
    $this->validatorSchema['image_three'] = new sfValidatorFile(array(
      'max_size'   => $maxSize*1024*1024,
      'required'   => false,
      'path'       => $path_dir,
      'mime_types' => 'web_images',
    ));
/*********************************************************************************/


    $this->validatorSchema['icon_delete'] = new sfValidatorString(array('required'=>false));
    $this->validatorSchema['image_one_delete'] = new sfValidatorString(array('required'=>false));
    $this->validatorSchema['image_two_delete'] = new sfValidatorString(array('required'=>false));
    $this->validatorSchema['image_three_delete'] = new sfValidatorString(array('required'=>false));
    /***********************************************************************/


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

    $currentUser = sfContext::getInstance()->getUser()->getGuardUser();
    
    if($currentUser->hasGroup('administrator'))
      {
        $languagesE=Doctrine_Core::getTable('Languages')->getLanguageCode();
        $this->embedI18n($languagesE);
    	$languagesT=Doctrine_Core::getTable('Languages')->getLanguagesCode();
        $a = 0; 
        foreach ($languagesT as $language) 
          {
            $this->widgetSchema->setLabel($language->getCode(),$language->getName());
            $a++;
          }
        $this->translationLabel($languagesE,true);

      }else{
/************************************************************************/
      $this->widgetSchema['icon']->setAttribute('readonly', 'readonly');
      $this->widgetSchema['tel']->setAttribute('readonly', 'readonly');
      $this->widgetSchema['fax']->setAttribute('readonly', 'readonly');
      $this->widgetSchema['website']->setAttribute('readonly', 'readonly');
      $this->widgetSchema['latitude']->setAttribute('readonly', 'readonly');
      $this->widgetSchema['longitude']->setAttribute('readonly', 'readonly');
      $this->widgetSchema['image_one']->setAttribute('disabled', 'disabled');
      $this->widgetSchema['image_two']->setAttribute('disabled', 'disabled');
      $this->widgetSchema['image_three']->setAttribute('disabled', 'disabled');
      $this->widgetSchema['start_date']->setAttribute('readonly', 'readonly');
      $this->widgetSchema['end_date']->setAttribute('readonly', 'readonly');

/****************************************************************************/
      $languagecode=Doctrine_Core::getTable('Languages')->findLanguageCode($currentUser->getLanguage());
      $languagesE=array('en'=>'en',$languagecode=> $languagecode);
      $this->embedI18n($languagesE);
      $this->widgetSchema->setLabel('en','English');
      $this->widgetSchema->setLabel($languagecode,$currentUser->getLanguage());

      $this->translationLabel($languagesE,false);


    }

  }

  public function translationLabel($languagesE,$user)
  {
    /*

     */
    foreach ($languagesE as $language) 
      {
        if($language == 'en'&& !$user)
          {
            $this->widgetSchema['en']['name']->setAttribute('readonly', 'readonly');
            $this->widgetSchema['en']['address']->setAttribute('readonly', 'readonly');
            $this->widgetSchema['en']['pedagogical_system']->setAttribute('readonly', 'readonly');
            $this->widgetSchema['en']['property']->setAttribute('readonly', 'readonly');
            $this->widgetSchema['en']['school_system']->setAttribute('readonly', 'readonly');
            $this->widgetSchema['en']['open_stage']->setAttribute('readonly', 'readonly');
            $this->widgetSchema['en']['honor_roll']->setAttribute('readonly', 'readonly');
            $this->widgetSchema['en']['facilities']->setAttribute('readonly', 'readonly');
            $this->widgetSchema['en']['mission']->setAttribute('readonly', 'readonly');
            $this->widgetSchema['en']['parent_language'] =new sfWidgetFormInputText(array('label' => 'Parent language'), array('size' => '100'));
            $this->widgetSchema['en']['parent_language']->setAttribute('readonly', 'readonly');

            $this->widgetSchema['en']['is_hidden'] =new sfWidgetFormInputText(array('label' => 'is hidden'), array('size' => '100'));
            $this->widgetSchema['en']['is_hidden']->setAttribute('readonly', 'readonly');

            $this->widgetSchema['en']['approve'] = new sfWidgetFormInputText(array('label' => 'Approve'), array('size' => '10','readonly'=>'true'));
            $this->widgetSchema['en']['publish'] = new sfWidgetFormInputText(array('label' => 'Publish'), array('size' => '10','readonly'=>'true'));

 
          }else{		

          $this->widgetSchema[$language]['characterstics'] = new sfWidgetFormTextareaTinyMce(array('label' => 'Characterstics'), array('rows' => '25', 'cols' =>'100'));
        }
      }
		

  }
}
