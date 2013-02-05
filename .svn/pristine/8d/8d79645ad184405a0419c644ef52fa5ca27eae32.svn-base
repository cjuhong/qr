<?php

/**
 * BannerTranslation form.
 *
 * @package    mgto
 * @subpackage form
 * @author     Jeremy and Andy
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class BannerTranslationForm extends BaseBannerTranslationForm
{
  public function configure()
  {
			$this->widgetSchema['name'] = new sfWidgetFormInputText(array('label' => 'Name'), array('size' => '100'));
			$this->widgetSchema['link_url'] =new sfWidgetFormInputText(array('label' => 'Link url'), array('size' => '100'));
			$this->widgetSchema['orders'] =new sfWidgetFormInputText(array('label' => 'Orders'), array('size' => '100'));
		    $this->widgetSchema['parent_language'] = new sfWidgetFormChoice(array('choices'  => array('none',Doctrine_Core::getTable('Languages')->getLanguageCodeName()),'expanded' => false,));

			$this->widgetSchema['start_date']= new sfWidgetFormInputText();
			$this->widgetSchema['end_date']= new sfWidgetFormInputText();
			$this->widgetSchema->setHelp('start_date', 'Date Format:YYYY-MM-DD HH:MM:SS (for example:2012-11-01 15:30:00)');
			$this->widgetSchema->setDefault('start_date', '2012-12-25');
			$this->widgetSchema->setHelp('end_date', 'Date Format:YYYY-MM-DD HH:MM:SS (for example:2012-11-01 18:30:00) ');		
			$this->validatorSchema->setPostValidator(new sfValidatorSchemaCompare('start_date',sfValidatorSchemaCompare::LESS_THAN_EQUAL, 'end_date', array(),array('invalid' => 'The start date ("%left_field%") must be before the end date ("%right_field%")')));



			$this->widgetSchema['link_target'] =new sfWidgetFormChoice(array('expanded' => true,'choices'  => array('_self' => '_self', 'blank' => '_blank')));
			$this->widgetSchema['approve'] = new sfWidgetFormChoice(array('choices'  => array('Yes'=>'Yes','No'=>'No'),'expanded' => true,));
			$this->widgetSchema['publish'] = new sfWidgetFormChoice(array('choices'  => array('Yes'=>'Yes','No'=>'No'),'expanded' => true,));



			$currentUser = sfContext::getInstance()->getUser()->getGuardUser();
		
			if($currentUser->hasGroup('content_managers'))
			  {
		  	 		$this->widgetSchema['approve'] = new sfWidgetFormInputText(array('label' => 'Approve'), array('size' => '10','readonly'=>'true'));
//					$this->widgetSchema['publish'] = new sfWidgetFormInputText(array('label' => 'Publish'), array('size' => '10','readonly'=>'true'));

				}

//var_dump(get_class_methods(sfContext::getInstance()->getRequest()));
//echo sfContext::getInstance()->getRequest()->getParameter('id');


    		$maxSize = sfConfig::get('sf_uploads_maxSize',5);
			$image =$this->getObject()->get("image");
    $path = sfConfig::get('app_upload_path_banner');
			$path_dir = sfConfig::get('sf_upload_dir').'/banner/';

			if($image){
			   $this->widgetSchema['image'] = new sfWidgetFormInputFileEditable(array(
				  'label' => 'Upload Image',
				  'file_src'  => ($path.$image),
				  'is_image'  => true,
				  'edit_mode' => !$this->isNew(),
				'template'  => '<div>%file%<br/>%filepath%<br />%input%<br />%delete% %delete_label%</div>',
				));
				}else{
				$this->widgetSchema['image'] = new sfWidgetFormInputFile(array(
				  'label' => 'Upload Image',
				));
				}
			$this->validatorSchema['image'] = new sfValidatorFile(array(
			  'max_size'   => $maxSize*1024*1024,
			  'required'   => false,
			  'path'       => $path_dir,
			  'mime_types' => 'web_images',
			));

		    $this->validatorSchema['image_delete'] = new sfValidatorString(array('required'=>false));

				$id = 1;
				$tid = $this->getObject()->get("id");
				if($tid != null&&$tid != ''){
		    	$object1 = Doctrine::getTable('Banner')->findOneById($tid);
				$id = $object1->getGroupId();

					if(!($id != null&&$id != '')){
						
						$id = 1;
						}

				}else{

				$id = 1;
				}
						
		    $object2=Doctrine::getTable('BannerGroup')->findOneById($id);

			$this->widgetSchema->setHelp('image', 'size: '.$object2->getBannerWidth().' px  * '.$object2->getBannerHeight().' px ');

  }
}
