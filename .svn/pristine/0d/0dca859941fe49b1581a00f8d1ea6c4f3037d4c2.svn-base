<?php

/**
 * main actions.
 *
 * @package    mgto
 * @subpackage main
 * @author     Jeremy and Andy
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class mainActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
      echo "<script>window.location = 'backend.php'; </script>";
      return sfView::NONE;

    /* firse: to verify the user */
/*
    $verify = "http://localhost/index.php/user/verify/10/f67497ffa51fb82680b23981675bb07a/auth_string.json?username=jeremy&password=jeremy";
    $ch = curl_init($verify);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $returndata = curl_exec($ch);
    curl_close($ch);
    $jsondata = json_decode($returndata);
    $auth_string = $jsondata[0]->auth;
    echo $auth_string;
    echo "<br>";
*/
    /* second: to valid the user
       the will stay valid for 1 hour
       the api will return a json file including the user object, so you can check use information in the api
     */
    /*
    $publickey = 10;
    $publickey_object = Doctrine_Core::getTable('Api')->findOneByPublicKey($publickey);
    $privateKey = $publickey_object->getPrivateKey();
    $token = md5($publickey.$auth_string.$privateKey);
    $isvalid = "http://localhost/index.php/user/isvalid/".$publickey."/".$token."/isvalid.json?auth_string=".$auth_string;
    $ch = curl_init($isvalid);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $returndata = curl_exec($ch);
    curl_close($ch);
    $jsondata = json_decode($returndata);
    print_r($jsondata);
    echo "<br>";
    */
    /* third: post data 
       if the user need to post data, just repeat the second step to valid the user before allowing the user to post data.
       if the user had not taken any action for more than 1 hour, you need to repeat the first step to verify the user.
     */

  $urltopost = "http://localhost/schoolnet/index.php/api/post/user/verify";
    $datatopost = array (
      "email_address" => "forumtest@low.idii",
      "username" => "jeremy",
      "password" => "jeremy",
      "postkey" => "10",
    );
    $ch = curl_init ($urltopost);
    curl_setopt ($ch, CURLOPT_POST, true);
    curl_setopt ($ch, CURLOPT_POSTFIELDS, $datatopost);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
    $returndata = curl_exec ($ch);
    echo $returndata;
  }

}

