<?php

/**
 * StaticContent form.
 *
 * @package    mgto
 * @subpackage form
 * @author     Jeremy and Andy
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class StaticContentForm extends BaseStaticContentForm
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
    $imageOne =$this->getObject()->getImage();
    $doc =$this->getObject()->getDoc();
    $path = sfConfig::get('app_upload_path_static_content');
    $path_dir = sfConfig::get('sf_upload_dir').'/static_content/';
/****************************************************************************/
    if($imageOne){
      $this->widgetSchema['image'] = new sfWidgetFormInputFileEditable(array(
        'label' => 'Image',
        'file_src'  => ($path.$imageOne),
        'is_image'  => true,
        'edit_mode' => !$this->isNew(),
        'template'  => '<div style="float: left;">%file%<br/>%filepath%<br />%input% <br /> Tick to remove the existing image: %delete% </div><div class="ff"></div>',
      ));
    }else{
      $this->widgetSchema['image'] = new sfWidgetFormInputFile(array(
        'label' => 'Image',
      ));
    }
    $this->validatorSchema['image'] = new sfValidatorFile(array(
      'max_size'   => $maxSize*1024*1024,
      'required'   => false,
      'path'       => $path_dir,
      'mime_types' => 'web_images',
    ));
    if($doc){
      $this->widgetSchema['doc'] = new sfWidgetFormInputFileEditable(array(
        'label' => 'Doc',
        'file_src'  => ($path.$doc),
        'is_image'  => false,
        'edit_mode' => !$this->isNew(),
        'template'  => '<div style="float: left;">%file%<br/>%filepath%<br />%input% <br /> Tick to remove the existing image: %delete% </div><div class="ff"></div>',
      ));
    }else{
      $this->widgetSchema['doc'] = new sfWidgetFormInputFile(array(
        'label' => 'doc',
      ));
    }
    $this->validatorSchema['doc'] = new sfValidatorFile(array(
      'max_size'   => $maxSize*1024*1024,
      'required'   => false,
      'path'       => $path_dir,
      'mime_type_guessers' => array('guessFromFileinfo'),
    ));


    $this->validatorSchema['image_delete'] = new sfValidatorString(array('required'=>false));
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
      $this->widgetSchema['category_id'] =new sfWidgetFormInputText();
      $this->widgetSchema['category_id']->setAttribute('readonly', 'readonly');
      $this->widgetSchema['orders']->setAttribute('readonly', 'readonly');
      $this->widgetSchema['page_name']->setAttribute('readonly', 'readonly');
      $this->widgetSchema['image']->setAttribute('disabled', 'disabled');
      $this->widgetSchema['doc']->setAttribute('disabled', 'disabled');
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
            $this->widgetSchema['en']['title']->setAttribute('readonly', 'readonly');
            $this->widgetSchema['en']['link_target']->setAttribute('readonly', 'readonly');
            $this->widgetSchema['en']['is_link']->setAttribute('readonly', 'readonly');
            $this->widgetSchema['en']['parent_language'] =new sfWidgetFormInputText(array('label' => 'Parent language'), array('size' => '100'));
            $this->widgetSchema['en']['parent_language']->setAttribute('readonly', 'readonly');

            $this->widgetSchema['en']['is_hidden'] =new sfWidgetFormInputText(array('label' => 'is hidden'), array('size' => '100'));
            $this->widgetSchema['en']['is_hidden']->setAttribute('readonly', 'readonly');


            $this->widgetSchema['en']['link_target'] =new sfWidgetFormInputText();
            $this->widgetSchema['en']['link_target']->setAttribute('readonly', 'readonly');

            $this->widgetSchema['en']['approve'] = new sfWidgetFormInputText(array('label' => 'Approve'), array('size' => '10','readonly'=>'true'));
            $this->widgetSchema['en']['publish'] = new sfWidgetFormInputText(array('label' => 'Publish'), array('size' => '10','readonly'=>'true'));

 
          }else{		

          $this->widgetSchema[$language]['content'] = new sfWidgetFormTextareaTinyMce(array('label' => 'Content'), array('rows' => '25', 'cols' =>'100'));
        }
      }
		

  }
}
