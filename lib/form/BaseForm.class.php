<?php

/**
 * Base project form.
 * 
 * @package    mgto
 * @subpackage form
 * @author     Jeremy and Andy 
 * @version    SVN: $Id: BaseForm.class.php 20147 2009-07-13 11:46:57Z FabianLange $
 */
class BaseForm extends sfFormSymfony
{

 public function addCSRFProtection($secret = null)
  {
    parent::addCSRFProtection($secret);
    if(isset($this->validatorSchema[self::$CSRFFieldName]))
      {
        $this->validatorSchema[self::$CSRFFieldName]->setMessage('csrf_attack', 'For security purpose, you can not login at this point. Try login again, please click left-top School Net to return homepage');
      }
  }

}
