<?php

/**
 * sfGuardUser form.
 *
 * @package    mgto
 * @subpackage form
 * @author     Jeremy and Andy
 * @version    SVN: $Id: sfDoctrinePluginFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class sfGuardUserForm extends PluginsfGuardUserForm
{
  public function configure()
  {
    parent::setup();
    
    unset(
      $this['last_login'],
      $this['created_at'],
      $this['updated_at'],
      $this['salt'],
      $this['algorithm']
    );
    //        $this->widgetSchema['groups_list']->setOption('expanded', true);
    //  $this->widgetSchema['groups_list']->setOption('multiple', false);
    //  $this->widgetSchema['permissions_list']->setOption('expanded', true);
    //$this->widgetSchema['groups_list']->setLabel('Groups');
    //$this->widgetSchema['groups_list']->setOption('expanded', true);
    //$this->widgetSchema['permissions_list']->setLabel('Permissions');
    //$this->widgetSchema['permissions_list']->setOption('expanded', true);

    // $this->setWidget('permission_list', 'readonly' => 'readonly');
    //unset($this['permissions_list']);

    if( sfContext::getInstance()->getUser()->hasCredential('create_user') ){
      $this->widgetSchema['language'] = new sfWidgetFormChoice(array(
        'choices'  =>  Doctrine_Core::getTable('Languages')->getLanguageCodeName(),
        'expanded' => false,));
    }else{
      $this->widgetSchema['language']->setAttribute('readonly', 'readonly');

      unset($this['is_active'], $this['is_super_admin'],$this['permissions_list'], $this['groups_list']);
//      $this->widgetSchema['permissions_list']->setAttribute('hidden', 'hidden');
//      $this->widgetSchema['groups_list']->setAttribute('hidden','hidden');
      /**

      $groups = sfContext::getInstance()->getUser()->getGroups();
      $groupStr = null;
      foreach ($groups as $group)
        {
          $groupStr .= $group." ";
        }
      //echo $groupStr;
      $this->widgetSchema['groups_list'] =new sfWidgetFormInput(array(),array('value'=> $groupStr));
      $this->widgetSchema['groups_list']->setAttribute('readonly','readonly');
      
      $permissions = sfContext::getInstance()->getUser()->getGuardUser()->getAllPermissions();
      $permissionStr = null;
      foreach($permissions as $permission)
        {
          $permissionStr .= $permission." ";
        }
      //echo $permissionStr;
      $this->widgetSchema['permissions_list'] = new sfWidgetFormInput(array(),array('value'=> $permissionStr));
      $this->widgetSchema['permissions_list']->setAttribute('readonly','readonly');
      */
    }
    
    $this->validatorSchema['language']->setOption('required', true);
    //      'choices'  => Doctrine_Core::getTable('JobeetJob')->getTypes(),
    $this->widgetSchema['password'] = new sfWidgetFormInputPassword();
    $this->validatorSchema['password']->setOption('required', false);
    $this->widgetSchema['password_again'] = new sfWidgetFormInputPassword();
    $this->validatorSchema['password_again'] = clone $this->validatorSchema['password'];

    $this->widgetSchema->moveField('password_again', 'after', 'password');

    $this->mergePostValidator(new sfValidatorSchemaCompare('password', sfValidatorSchemaCompare::EQUAL, 'password_again', array(), array('invalid' => 'The two passwords must be the same.')));
  }
}
