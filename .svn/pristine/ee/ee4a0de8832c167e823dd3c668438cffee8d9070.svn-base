<?php

/**
 * ThemeTranslation form.
 *
 * @package    mgto
 * @subpackage form
 * @author     Jeremy and Andy
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ThemeTranslationForm extends BaseThemeTranslationForm
{
  public function configure()
  {
    $this->widgetSchema['title'] = new sfWidgetFormInputText(array('label' => 'Title'), array('size' => '100'));
    $this->widgetSchema['content'] = new sfWidgetFormTextareaTinyMce1(array('label' => 'Content'), array('rows' => '25', 'cols' =>'100'));
    $this->widgetSchema['intro'] = new sfWidgetFormTextareaTinyMce1(array('label' => 'Intro'), array('rows' => '25', 'cols' =>'100'));
    $this->widgetSchema['article_title'] = new sfWidgetFormInputText(array('label' => 'Article title'), array('size' => '100'));


    $this->widgetSchema['approve'] = new sfWidgetFormChoice(array('choices'  => array('Yes' =>'Yes','No'=>'No'),'expanded' => true,));
    $this->widgetSchema['publish'] = new sfWidgetFormChoice(array('choices'  => array('Yes' =>'Yes','No'=>'No'),'expanded' => true,));
/*****************************************************/

	$maxSize = sfConfig::get('sf_uploads_maxSize',5);
	$content_photo=$this->getObject()->get("content_photo");
	$path = sfConfig::get('app_upload_path_theme');
	$path_dir=sfConfig::get('sf_upload_dir').'/theme/';

	if($content_photo){
    $this->widgetSchema['content_photo'] = new sfWidgetFormInputFileEditable(array(
      'label'     => 'Content photo',
      'height'  => 154,
      'file_src'  => $path.$content_photo,
      'is_image'  => true,
      'edit_mode' => !$this->isNew(),
      'template'  => '<div>%file%<br/>%filepath%<br />%input%<br />%delete% %delete_label%</div>',
    ));

	}	else{
	$this->widgetSchema['content_photo'] = new sfWidgetFormInputFile(array(
	  'label' => 'Content photo',
	));
	}

	 $this->setValidator('content_photo', new sfValidatorFile(array(
		'max_size'   => $maxSize*1024*1024,
      'required'=>false,
	  'mime_types' => 'web_images',
	  'path' => $path_dir,
	), array('mime_types' => 'The file only accept image format.','max_size' => sprintf('The file is too big (max allowed %d MB).', $maxSize))));

    $this->validatorSchema['content_photo_delete'] = new sfValidatorPass();
/*******************************************************/






    $currentUser = sfContext::getInstance()->getUser()->getGuardUser();

    if($currentUser->hasGroup('content_managers'))
      {
        // 		$this->widgetSchema['approve'] = new sfWidgetFormInputText(array('label' => 'Approve'), array('size' => '100','readonly'=>'true'));
        $this->widgetSchema['approve'] = new sfWidgetFormInputText(array('label' => 'Approve'), array('size' => '10','readonly'=>'true'));
        $this->widgetSchema['publish'] = new sfWidgetFormInputText(array('label' => 'Publish'), array('size' => '10','readonly'=>'true'));

      }







  }
}
