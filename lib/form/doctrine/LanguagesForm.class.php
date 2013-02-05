<?php

/**
 * Languages form.
 *
 * @package    mgto
 * @subpackage form
 * @author     Jeremy and Andy
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class LanguagesForm extends BaseLanguagesForm
{
  public function configure()
  {
    unset($this['created_at'],
		$this['updated_at'],
		$this['parent_id']
    );
       $this->widgetSchema['last_modifier']= new sfWidgetFormInputHidden(array('label' => 'Last modifier'), array('size' => '100'));
	
	$this->widgetSchema['code'] = new sfWidgetFormI18nChoiceLanguage(array('culture' => 'en'));

      $this->widgetSchema['parent_language'] = new sfWidgetFormChoice(array(
        'choices'  =>  Doctrine_Core::getTable('Languages')->getLanguageCodeName(),
        'expanded' => false,));
		$this->widgetSchema['link_target'] =new sfWidgetFormChoice(array(
		  'expanded' => true,
		  'choices'  => array('_self' => '_self', 'blank' => '_blank')
		));
  }
}
