<?php
class breadcrumbsComponents extends sfComponents
{
  public function executeMenu(sfWebRequest $request)
  {

    $this->navMenu = new pmSuperfishMenu();
    $this->navMenu->setRoot();

    $data = new pmSuperfishMenu();
    $data->setName("Web Data")->setUrl('@homepage');

/***********************************************************************/


    /**********************************************************************/
    $menu = new pmSuperfishMenu();
    $menu->setName("Static Content Module ")->setUrl("@homepage");


    $menu_item = new pmSuperfishMenuItem();
    $menu_item->setName('Static Content')->setUrl('@static_content');
    $menu->addChild("Static Content",$menu_item);

    $menu_item = new pmSuperfishMenuItem();
    $menu_item->setName('Static Content Category')->setUrl('@static_content_category');
    $menu->addChild("Static Content Category",$menu_item);


    $data->addChild("Static Content Module ", $menu);

/***********************************************************************/



    $menu_item = new pmSuperfishMenuItem();
    $menu_item->setName('File Upload')->setUrl('@file_upload');
    $data->addChild("File Upload",$menu_item);

    /****************************************************************************************/
    /**/
    $menu = new pmSuperfishMenu();
    $menu->setName("Languages Management")->setCredentials('create_user');

    $menu_item = new pmSuperfishMenuItem();
    $menu_item->setName("Languages")->setUrl("@languages");
    $menu->addChild("Languages", $menu_item);
  
    $this->navMenu->addChild('Web Data',$data);

     $this->navMenu->addChild("Languages Management", $menu);
  

    /****************************************************************************************/
    $menu = new pmSuperfishMenu();
    $menu->setName("QR")->setUrl('@homepage')->setCredentials('create_user');
    $menu_item = new pmSuperfishMenuItem();
    $menu_item->setName('QR')->setUrl('@qr');
    $menu->addChild("QR",$menu_item);
    $this->navMenu->addChild('QR',$menu);

    /****************************************************************************************/
    $menu = new pmSuperfishMenu();
    $menu->setName("API Management")->setUrl('@homepage')->setCredentials('create_user');
    $menu_item = new pmSuperfishMenuItem();
    $menu_item->setName('api')->setUrl('@api');
    $menu->addChild("api",$menu_item);
    $this->navMenu->addChild('API Management',$menu);

    /****************************************************************************************/
    $menu = new pmSuperfishMenu();
    $menu->setName("User Profile")->setUrl('@homepage');;

    $menu_item = new pmSuperfishMenuItem();
    $menu_item->setName('Users')->setUrl('@sf_guard_user');
    $menu->addChild("Users",$menu_item);

    $menu_item = new pmSuperfishMenuItem();
    $menu_item->setName('Permissions')->setUrl('@sf_guard_permission');
    $menu->addChild("Permissions",$menu_item);

    $menu_item = new pmSuperfishMenuItem();
    $menu_item->setName('User Log History')->setUrl('@user_login_history')->setCredentials('create_user');
    $menu->addChild('User Log History', $menu_item);
    //$menu_item = new pmSuperfishMenuItem();
    //$menu_item->setName('Change Password')->setUrl('@sf_guard_user');
    //$menu->addChild("Change Password",$menu_item);

    $this->navMenu->addChild('User Profile',$menu);

    if($this->getUser()->isAuthenticated())
      {
        //        $menu = new pmSuperfishMenu();
        //        $menu->setName("User Name");

        $menu_item = new pmSuperfishMenuItem();
        $menu_item->setName($this->getUser()->getGuardUser()->getUsername()." editing ".$this->getUser()->getGuardUser()->getLanguage()." version")->setUrl('@homepage');
        //$menu->addChild(",$menu_item);
        
        $this->navMenu->addChild($this->getUser()->getGuardUser()->getLanguage(), $menu_item);

        $menu_item = new pmSuperfishMenuItem();
        $menu_item->setName('Logout')->setUrl('@sf_guard_signout');
        //$menu->addChild("Logout",$menu_item);
        $this->navMenu->addChild('Logout', $menu_item);

        echo  $this->navMenu->render();
      }


  }
}
