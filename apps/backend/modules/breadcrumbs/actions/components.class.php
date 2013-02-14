<?php
class breadcrumbsComponents extends sfComponents
{
  public function executeMenu(sfWebRequest $request)
  {

    $this->navMenu = new pmSuperfishMenu();
    $this->navMenu->setRoot();

    $data = new pmSuperfishMenu();
    $data->setName("Web Data")->setUrl('@homepage');

   /**********************************************************************/

    $menu_item = new pmSuperfishMenuItem();
    $menu_item->setName('School')->setUrl('@school');
    $data->addChild("School",$menu_item);

    $menu_item = new pmSuperfishMenuItem();
    $menu_item->setName('Theme')->setUrl('@theme');
    $data->addChild("Theme",$menu_item);


    /**********************************************************************/
    $menu = new pmSuperfishMenu();
    $menu->setName("Vote Module")->setUrl("@homepage");

    $menu_item = new pmSuperfishMenuItem();
    $menu_item->setName('Vote')->setUrl('@vote');
    $menu->addChild("Vote",$menu_item);

    $menu_item = new pmSuperfishMenuItem();
    $menu_item->setName('Vote Option')->setUrl('@vote_options');
    $menu->addChild("Vote Option",$menu_item);

    $menu_item = new pmSuperfishMenuItem();
    $menu_item->setName('User Option')->setUrl('@user_option');
    $menu->addChild("User Option",$menu_item);


    $data->addChild("Vote Module", $menu);

/***********************************************************************/

    /**********************************************************************/
    $menu = new pmSuperfishMenu();
    $menu->setName("Artide Module ")->setUrl("@homepage");

    $menu_item = new pmSuperfishMenuItem();
    $menu_item->setName('Module')->setUrl('@module_category');
    $menu->addChild("Module",$menu_item);

    $menu_item = new pmSuperfishMenuItem();
    $menu_item->setName('Article')->setUrl('@article');
    $menu->addChild("Article",$menu_item);

    $menu_item = new pmSuperfishMenuItem();
    $menu_item->setName('Article Type')->setUrl('@article_type');
    $menu->addChild("Article Type",$menu_item);

    $menu_item = new pmSuperfishMenuItem();
    $menu_item->setName('Photo Album')->setUrl('@photo_album');
    $menu->addChild("Photo Album",$menu_item);

    $data->addChild("Artide Module ", $menu);

/***********************************************************************/


    $menu_item = new pmSuperfishMenuItem();
    $menu_item->setName('Book')->setUrl('@book');
    $data->addChild("Book",$menu_item);


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


    /**********************************************************************/
    $menu = new pmSuperfishMenu();
    $menu->setName("App Module ")->setUrl("@homepage");

    $menu_item = new pmSuperfishMenuItem();
    $menu_item->setName('App')->setUrl('@app');
    $menu->addChild("App",$menu_item);

    $menu_item = new pmSuperfishMenuItem();
    $menu_item->setName('App Intro')->setUrl('@app_intro');
    $menu->addChild("App Intro",$menu_item);

    $data->addChild("App Module ", $menu);

/***********************************************************************/


    $menu_item = new pmSuperfishMenuItem();
    $menu_item->setName('Information')->setUrl('@information');
    $data->addChild("Information",$menu_item);


    $menu_item = new pmSuperfishMenuItem();
    $menu_item->setName('Banner')->setUrl('@banner');
    $data->addChild("Banner",$menu_item);

    $menu_item = new pmSuperfishMenuItem();
    $menu_item->setName('Banner Group')->setUrl('@banner_group');
    $data->addChild("Banner Group",$menu_item);



    $menu_item = new pmSuperfishMenuItem();
    $menu_item->setName('Comment')->setUrl('@comment');
    $data->addChild("Comment",$menu_item);

    $menu_item = new pmSuperfishMenuItem();
    $menu_item->setName('Favorite')->setUrl('@favorite');
    $data->addChild("Favorite",$menu_item);
    /*
    $menu_item = new pmSuperfishMenuItem();
    $menu_item->setName('Post')->setUrl('@post');
    $data->addChild("Post",$menu_item);
    */
    /**/
    /*
    $menu_item = new pmSuperfishMenuItem();
    $menu_item->setName('委員意見分享')->setUrl(url_for('post/index/?forum=1'));
    $data->addChild("委員意見分享",$menu_item);

    $menu_item = new pmSuperfishMenuItem();
    $menu_item->setName('文章分享')->setUrl(url_for('post/index/?forum=2'));
    $data->addChild("文章分享",$menu_item);
    */
/**********************************
    $menu_item = new pmSuperfishMenuItem();
    $menu_item->setName('Statistical')->setUrl('@statistical');
    $data->addChild("Statistical",$menu_item);

    $menu_item = new pmSuperfishMenuItem();
    $menu_item->setName('Statistical Day')->setUrl('@statistical_day');
    $data->addChild("Statistical Day",$menu_item);

    $menu_item = new pmSuperfishMenuItem();
    $menu_item->setName('Statistical Month')->setUrl('@statistical_month');
    $data->addChild("Statistical Month",$menu_item);

    $menu_item = new pmSuperfishMenuItem();
    $menu_item->setName('Statistical Year')->setUrl('@statistical_year');
    $data->addChild("Statistical Year",$menu_item);
****************************************/

    $menu_item = new pmSuperfishMenuItem();
    $menu_item->setName('File Upload')->setUrl('@file_upload');
    $data->addChild("File Upload",$menu_item);

    /**
    $menu_item = new pmSuperfishMenuItem();
    $menu_item->setName('TourGuide')->setUrl("@mgto_tour_guide");
    $menu2->addChild("TourGuide",$menu_item);
    **/

    /****************************************************************************************/
    /**/
    $menu = new pmSuperfishMenu();
    $menu->setName("Languages Management")->setCredentials('create_user');

    $menu_item = new pmSuperfishMenuItem();
    $menu_item->setName("Languages")->setUrl("@languages");
    $menu->addChild("Languages", $menu_item);
    //$menu_item = new pmSuperfishMenuItem();
    /**/
    //$menu_item->setName("Nueva ciudad")->setUrl("@homepage")->setCredentials(array("approve"));
    //$menu->addChild("city_new", $menu_item);

    $this->navMenu->addChild('Web Data',$data);

     $this->navMenu->addChild("Languages Management", $menu);
    /**
    $menu = new pmSuperfishMenu();
    $menu->setName("Permissions Management")->setCredentials('create_user');

    $menu_item = new pmSuperfishMenuItem();
    $menu_item->setName('Permissions')->setUrl('@sf_guard_permission');
    $menu->addChild("Permissions",$menu_item);

    $menu_item = new pmSuperfishMenuItem();
    $menu_item->setName('Groups')->setUrl('@sf_guard_group');
    $menu->addChild("Groups",$menu_item);

    $this->navMenu->addChild('Permissions Management',$menu);
    */

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
