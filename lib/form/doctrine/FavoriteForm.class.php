<?php

/**
 * Favorite form.
 *
 * @package    mgto
 * @subpackage form
 * @author     Jeremy and Andy
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class FavoriteForm extends BaseFavoriteForm
{
  public function configure()
  {
    unset(
      $this['created_at'],
      $this['updated_at'],
      $this['parent_id']
    );

         $this->widgetSchema['opinion'] = new sfWidgetFormTextareaTinyMce(array('label' => 'Opinion'), array('rows' => '25', 'cols' =>'100')); 
 }
}
