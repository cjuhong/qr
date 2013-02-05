<?php

/**
 * SchoolTranslation form.
 *
 * @package    mgto
 * @subpackage form
 * @author     Jeremy and Andy
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class SchoolTranslationForm extends BaseSchoolTranslationForm
{
  public function configure()
  {
    $this->widgetSchema['name'] = new sfWidgetFormInputText(array('label' => 'Name'), array('size' => '100'));
    $this->widgetSchema['address'] = new sfWidgetFormInputText(array('label' => 'Address'), array('size' => '100'));
    $this->widgetSchema['pedagogical_system'] = new sfWidgetFormInputText(array('label' => 'Pedagogical system'), array('size' => '100'));
    $this->widgetSchema['property'] = new sfWidgetFormInputText(array('label' => 'Property'), array('size' => '100'));
    $this->widgetSchema['characterstics'] = new sfWidgetFormTextareaTinyMce1(array('label' => 'Characterstics'), array('rows' => '25', 'cols' =>'100'));		   
		 $this->widgetSchema['parent_language'] = new sfWidgetFormChoice(array('choices'  => array('none',Doctrine_Core::getTable('Languages')->getLanguageCodeName()),'expanded' => false,));

 


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
