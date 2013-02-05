<?php

/**
 * Banner form.
 *
 * @package    mgto
 * @subpackage form
 * @author     Jeremy and Andy
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class BannerForm extends BaseBannerForm
{
  public function configure()
  {
    unset(
      $this['is_published'],
      $this['is_approved'], $this['created_at'], 
		$this['updated_at'],$this['clicks'],$this['parent_id']
    );
//       $this->widgetSchema['start_date']= new sfWidgetFormDateJQueryUI(array("change_month" => true, "change_year" => true), array('size' => '100'));
 //      $this->widgetSchema['end_date']= new sfWidgetFormDateJQueryUI(array("change_month" => true, "change_year" => true), array('size' => '100'));

       $this->widgetSchema['last_modifier']= new sfWidgetFormInputHidden(array('label' => 'Last modifier'), array('size' => '100'));	

		    $this->validatorSchema['group_id'] = new sfValidatorString(array('required'=>true));

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

		       $this->widgetSchema['group_id'] =new sfWidgetFormInputText();
   	   $this->widgetSchema['group_id']->setAttribute('readonly', 'readonly'); 

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
		       $this->widgetSchema['en']['start_date'] =new sfWidgetFormInputText(array('label' => 'Start date'), array('size' => '100'));
   			   $this->widgetSchema['en']['start_date']->setAttribute('readonly', 'readonly');
		       $this->widgetSchema['en']['end_date'] =new sfWidgetFormInputText(array('label' => 'End date'), array('size' => '100'));
   			   $this->widgetSchema['en']['end_date']->setAttribute('readonly', 'readonly');
		       $this->widgetSchema['en']['link_target'] =new sfWidgetFormInputText(array('label' => 'link_target'), array('size' => '100'));
   			   $this->widgetSchema['en']['link_target']->setAttribute('readonly', 'readonly');		      
				 $this->widgetSchema['en']['is_hidden'] =new sfWidgetFormInputText(array('label' => 'is hidden'), array('size' => '100'));
   			   $this->widgetSchema['en']['is_hidden']->setAttribute('readonly', 'readonly');

   			   $this->widgetSchema['en']['link_url']->setAttribute('readonly', 'readonly');  
   			   $this->widgetSchema['en']['orders']->setAttribute('readonly', 'readonly'); 

			$this->widgetSchema['en']['approve'] = new sfWidgetFormInputText(array('label' => 'Approve'), array('size' => '10','readonly'=>'true'));
	   		$this->widgetSchema['en']['publish'] = new sfWidgetFormInputText(array('label' => 'Publish'), array('size' => '10','readonly'=>'true'));



		       $this->widgetSchema['en']['parent_language'] =new sfWidgetFormInputText(array('label' => 'parent_language'), array('size' => '100'));
   			   $this->widgetSchema['en']['parent_language']->setAttribute('readonly', 'readonly');		

   			   $this->widgetSchema[$language]['image']->setAttribute('disabled', 'disabled'); 

 
				}else{		

				}
			}
  }
}
