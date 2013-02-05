<?php

/**
 * StatisticalMonth form.
 *
 * @package    mgto
 * @subpackage form
 * @author     Jeremy and Andy
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class StatisticalMonthForm extends BaseStatisticalMonthForm
{
  public function configure()
  {
    unset(
      $this['created_at'],
      $this['updated_at'],
      $this['parent_id']
    );
            $this->widgetSchema['module'] =new sfWidgetFormInputText(array('label' => 'Module'), array('size' => '100'));
            $this->widgetSchema['sub_id'] =new sfWidgetFormInputText(array('label' => 'Sub'), array('size' => '100'));

  }
}
