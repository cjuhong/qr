<?php

/**
 * PluginUserLoginHistoryTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class PluginUserLoginHistoryTable extends Doctrine_Table
{
  /**
   * Returns an instance of this class.
   *
   * @return object PluginUserLoginHistoryTable
   */
  public static function getInstance()
  {
    return Doctrine_Core::getTable('PluginUserLoginHistory');
  }

  static public function writeLoginHistory(sfEvent $event)
  {
    $sessionUser = $event->getSubject();
    $ev = $event->getName();
    $params = $event->getParameters();
    if($ev === "user.change_authentication")
      {
        if(true === $params['authenticated'])
          {
            $userId = $sessionUser->getGuardUser()->id;
            $userName = $sessionUser->getGuardUser()->getUserName();
            $sessionUser->setAttribute('user_id', $userId, 'sfDoctrineGuardLoginHistoryPlugin');
            $sessionUser->setAttribute('username', $userName, 'sfDoctrineGuardLoginHistoryPlugin');
            self::createHistoryEntry('login', $userId, $userName,$ev);
          }
        else
          {
            $userId = $sessionUser->getAttributeHolder()->remove('user_id', null, 'sfDoctrineGuardLoginHistoryPlugin');
            $userName = $sessionUser->getAttributeHolder()->remove('username', null, 'sfDoctrineGuardLoginHistoryPlugin');
            self::createHistoryEntry('logout', $userId, $userName,$ev);
          }
      }else{
      $userId = $sessionUser->getUser()->getGuardUser()->id;
      $userName = $sessionUser->getUser()->getGuardUser()->getUserName();
      $recordid = $event->getReturnValue();
      self::createHistoryEntry('login', $userId, $userName, $recordid[1], $recordid[0]);
    }
  }

  protected static function createHistoryEntry($state, $userId, $userName,$event,$recordid=null)
  {
    $history = new UserLoginHistory();
    $history->state = $state;
    $history->username = $userName;
    $history->operations = $event;
    $history->record_id = $recordid;
    $history->user_id = $userId;
    $history->ip = getenv('HTTP_X_FORWARDED_FOR') ? getenv('HTTP_X_FORWARDED_FOR') : getenv('REMOTE_ADDR');
    $history->save();
  }
}