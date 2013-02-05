<?php

/**
 * api actions.
 *
 * @package    cdt
 * @subpackage api
 * @author     Jeremy and Andy
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class apiActions extends sfActions
{
  /**
   * Executes index action
   *
   * @param sfRequest $request A request object
   */
  function property_exists_safe($class, $prop) {
    $r = property_exists($class, $prop);
    if (!$r) {
      $x = new ReflectionClass($class);
      $r = $x->hasProperty($prop);
    }
    return $r;
  }

  public function from_camel_case($str) {
    $str[0] = strtolower($str[0]);
    $func = create_function('$c', 'return "_" . strtolower($c[1]);');
    return preg_replace_callback('/([A-Z])/', $func, $str);
  }


  public function getPara(sfWebRequest $request)
  {
    $para = $request->getGetParameters();
    if($para['order']== null)
      {
        $para['order'] = 'asc';
      }
    if($para['id'] != null )
      {
        $para['id'] = explode(",",$para['id']);
      }
    if($para['culture'] == null)
      {
        $para['culture'] = 'en';
      }
    if($para['limit'] != null )
      {
        $para['limit'] = explode(",",$para['limit']);
      }
    return $para;
  }

  public function processData($highlight_all_array,$para)
  {
    $single_culture_data = $highlight_all_array[0];
    $all_culture_data = $highlight_all_array[1];
    $highlight_pre = array();
    foreach($single_culture_data  as $key => $highlight_all)
      {
        $lang = $highlight_all['parent_language'];
        if(($lang != "0") && ($lang != null) ) {
          $lang_code = Doctrine_Core::getTable('Languages')->findOneByName($lang)->getCode();
          foreach($all_culture_data as $k => $parent ) {
            if(($parent['id'] == $highlight_all['id']) && ($parent['lang'] == $lang_code)) {
              if(array_key_exists('name',$highlight_all)) {
                $highlight_all['name'] = $parent['name'];
              }
              if(array_key_exists('question',$highlight_all)) {
                $highlight_all['question'] = $parent['question'];
              }
              if(array_key_exists('answer',$highlight_all)) {
                $highlight_all['answer'] = $parent['answer'];
              }
              if(array_key_exists('title',$highlight_all)) {
                $highlight_all['title'] = $parent['title'];
              }
              if(array_key_exists('intro',$highlight_all)) {
                $highlight_all['intro'] = $parent['intro'];
              }
              if(array_key_exists('info',$highlight_all)) {
                $highlight_all['info'] = $parent['info'];
              }
              if(array_key_exists('content',$highlight_all)) {
                $highlight_all['content'] = $parent['content'];
              }
              if(array_key_exists('description',$highlight_all)) {
                $highlight_all['description'] = $parent['description'];
              }
              if(array_key_exists('address',$highlight_all)) {
                $highlight_all['address'] = $parent['address'];
              }
            }
          }
        }//end of ($lang != "0") && ($lang != null)
        unset($highlight_all['parent_id']);
        $currentId = $highlight_all['id'];
        unset($highlight_all['id']);

        if(array_key_exists('start_date',$highlight_all) && array_key_exists('end_date',$highlight_all))
          {
            if($highlight_all['start_date'] != null)
              {
                if($highlight_all['end_date'] != null)
                  {
                    $startdate = new DateTime($highlight_all['start_date']);
                    $enddate = new DateTime($highlight_all['end_date']);
                    $currentdate = new DateTime(date("Y-m-d H:m:i",time()));
                    if( $startdate <= $currentdate )
                      {
                        if( $enddate >= $currentdate )
                          {
                            if(isset($currentId))
                              {
                                $highlight_pre[$currentId] = $highlight_all;
                              }
                          }
                      }
                  }
              }
          }//end of array_key_exists('start_date',$highlight_all) &

        if(!array_key_exists('start_date',$highlight_all))
          {
            if(!array_key_exists('end_date',$highlight_all))
              {
                if(isset($currentId))
                  {
                    $highlight_pre[$currentId] = $highlight_all;
                  }
              }
          }

      }//foreach($single_culture_data

    return $highlight_pre;
  }
  /**********************************************************************************************/
  public function processUploads($highlights,$module,$request)
  {
      if($module == "article") {
          $module = "photo_album";
      }
    $currentHost = sfConfig::get('app_api_current_host_path');
    $path = 'http://'.$request->getHost().$currentHost.$module.'/';
    $highlight_pre = array();
    foreach( $highlights as $key => $highlight_pre_one)
      {
        if(array_key_exists('image',$highlight_pre_one) && ($highlight_pre_one['image'] != null) )
          {
            $highlight_pre_one['image'] = $path.$highlight_pre_one['image'];
          }
        if(array_key_exists('image_one',$highlight_pre_one)  && ($highlight_pre_one['image_one'] != null))
          {
            $highlight_pre_one['image_one'] = $path.$highlight_pre_one['image_one'];
          }
        if(array_key_exists('image_two',$highlight_pre_one) && ($highlight_pre_one['image_two'] != null))
          {
            $highlight_pre_one['image_two'] = $path.$highlight_pre_one['image_two'];
          }
        if(array_key_exists('image_three',$highlight_pre_one)  && ($highlight_pre_one['image_three'] != null))
          {
            $highlight_pre_one['image_three'] = $path.$highlight_pre_one['image_three'];
          }
        if(array_key_exists('image_four',$highlight_pre_one)  && ($highlight_pre_one['image_four'] != null) )
          {
            $highlight_pre_one['image_four'] = $path.$highlight_pre_one['image_four'];
          }
        if(array_key_exists('image_five',$highlight_pre_one)  && ($highlight_pre_one['image_five'] != null) )
          {
            $highlight_pre_one['image_five'] = $path.$highlight_pre_one['image_five'];
          }
        if(array_key_exists('thumbnail_photo',$highlight_pre_one)  && ($highlight_pre_one['thumbnail_photo'] != null) )
          {
            $highlight_pre_one['thumbnail_photo'] = $path.$highlight_pre_one['thumbnail_photo'];
          }
        if(array_key_exists('thumbnail_image',$highlight_pre_one)  && ($highlight_pre_one['thumbnail_image'] != null) )
          {
            $highlight_pre_one['thumbnail_image'] = $path.$highlight_pre_one['thumbnail_image'];
          }
        if(array_key_exists('doc',$highlight_pre_one)  && ($highlight_pre_one['doc'] != null) )
          {
            $highlight_pre_one['doc'] = $path.$highlight_pre_one['doc'];
          }
        if(array_key_exists('photo',$highlight_pre_one)  && ($highlight_pre_one['photo'] != null) )
          {
            $highlight_pre_one['photo'] = $path.$highlight_pre_one['photo'];
          }
        if(array_key_exists('panorama',$highlight_pre_one)  && ($highlight_pre_one['panorama'] != null) )
          {
            $highlight_pre_one['panorama'] = $path.$highlight_pre_one['panorama'];
          }
        if(array_key_exists('sound_clips_one',$highlight_pre_one)  && ($highlight_pre_one['sound_clips_one'] != null) )
          {
            $highlight_pre_one['sound_clips_one'] = $path.$highlight_pre_one['sound_clips_one'];
          }
        if(array_key_exists('sound_clips_two',$highlight_pre_one)  && ($highlight_pre_one['sound_clips_two'] != null) )
          {
            $highlight_pre_one['sound_clips_two'] = $path.$highlight_pre_one['sound_clips_two'];
          }
        if(array_key_exists('sound_clips_three',$highlight_pre_one)  && ($highlight_pre_one['sound_clips_three'] != null) )
          {
            $highlight_pre_one['sound_clips_three'] = $path.$highlight_pre_one['sound_clips_three'];
          }
        if(array_key_exists('thumbnails',$highlight_pre_one)  && ($highlight_pre_one['thumbnails'] != null))
          {
            $highlight_pre_one['thumbnails'] = $path.$highlight_pre_one['thumbnails'];
          }
        if(array_key_exists('thumbnail',$highlight_pre_one)  && ($highlight_pre_one['thumbnail'] != null))
          {
            $highlight_pre_one['thumbnail'] = $path.$highlight_pre_one['thumbnail'];
          }
        if(array_key_exists('upload_pdf',$highlight_pre_one)  && ($highlight_pre_one['upload_pdf'] != null))
          {
            $highlight_pre_one['upload_pdf'] = $path.$highlight_pre_one['upload_pdf'];
          }
        if(array_key_exists('video_upload',$highlight_pre_one)  && ($highlight_pre_one['video_upload'] != null))
          {
            $highlight_pre_one['video_upload'] = $path.$highlight_pre_one['video_upload'];
          }
        if(array_key_exists('icon',$highlight_pre_one)  && ($highlight_pre_one['icon'] != null))
          {
            $highlight_pre_one['icon'] = $path.$highlight_pre_one['icon'];
          }
        if(array_key_exists('content_photo',$highlight_pre_one)  && ($highlight_pre_one['content_photo'] != null))
          {
            $highlight_pre_one['content_photo'] = $path.$highlight_pre_one['content_photo'];
          }
        if(array_key_exists('cover',$highlight_pre_one)  && ($highlight_pre_one['cover'] != null))
          {
            $highlight_pre_one['cover'] = $path.$highlight_pre_one['cover'];
          }
        if(array_key_exists('logo',$highlight_pre_one)  && ($highlight_pre_one['logo'] != null))
          {
            $highlight_pre_one['logo'] = $path.$highlight_pre_one['logo'];
          }
        $highlight_pre[$key] = $highlight_pre_one;
      }//end of $highlights as $key => $highlight_pre_one)
    return $highlight_pre;
  }
  /**********************************************************************************************/

  public function getSingleCultureData($table,$para,$request,$currenTable) {

    //$currenTable =  Doctrine_Core::getTable($table);
    $query = null;

    if($currenTable->hasTemplate('I18n')){
      $query = "SELECT * FROM ".$this->from_camel_case($table)." p LEFT JOIN ".$this->from_camel_case($table)."_translation t on p.id = t.id ";
      $query = $query." WHERE t.lang = "."'".$para['culture']."'";
      if($table == "Article") {
          $query = "SELECT p.*,t.*,pa.image_one, pa.image_two, pa.image_three,pat.image_one_description, pat.image_two_description, pat.image_three_description FROM article p LEFT JOIN article_translation t on p.id = t.id LEFT JOIN photo_album pa on pa.id = p.photo_album_id LEFT JOIN photo_album_translation pat ON pat.id = pa.id";
          $query = $query." WHERE t.lang = "."'".$para['culture']."'";
          $query = $query." AND pat.lang = "."'".$para['culture']."'";
      }
    }else{
      $query = "SELECT * FROM ".$this->from_camel_case($table)." p  WHERE 1";
    }

    if($currenTable->hasField('parent_id')) {
      $query = $query." AND p.parent_id = 0 ";
    }
    if($para['photo_album'] != null){
      if($currenTable->hasField('photo_album')) {
        $query = $query." AND p.photo_album = ".$para['photo_album'];
      }else{
        $query = $query." AND t.photo_album = ".$para['photo_album'];
      }
    }

    if($para['star_id'] != null){
      if($currenTable->hasField('star_id')) {
        $query = $query." AND p.star_id = ".$para['star_id'];
      }else{
        $query = $query." AND t.star_id = ".$para['star_id'];
      }
    }

    if($para['module_id'] != null){
      if($currenTable->hasField('module_id')) {
        $query = $query." AND p.module_id = ".$para['module_id'];
      }else{
        $query = $query." AND t.module_id = ".$para['module_id'];
      }
    }

    if($para['module'] != null){
      if($currenTable->hasField('module')) {
        $query = $query." AND p.module = ".$para['module'];
      }else{
        $query = $query." AND t.module = ".$para['module'];
      }
    }

    if($para['daybook'] != null){
      if($currenTable->hasField('daybook')) {
        $query = $query." AND p.daybook = ".$para['daybook'];
      }else{
        $query = $query." AND t.daybook = ".$para['daybook'];
      }
    }

    if($para['area_id'] != null){
      if($currenTable->hasField('area_id')) {
        $query = $query." AND p.area_id = ".$para['area_id'];
      }else{
        $query = $query." AND t.area_id = ".$para['area_id'];
      }
    }

    if($para['area'] != null){
      if($currenTable->hasField('area')) {
        $query = $query." AND p.area = ".$para['area'];
      }else{
        $query = $query." AND t.area = ".$para['area'];
      }
    }

    if($para['entertainment_type'] != null){
      if($currenTable->hasField('entertainment_type')) {
        $query = $query." AND p.entertainment_type = ".$para['entertainment_type'];
      }else{
        $query = $query." AND t.entertainment_type = ".$para['entertainment_type'];
      }
    }

    if($para['venues_id'] != null){
      if($currenTable->hasField('venues_id')) {
        $query = $query." AND p.venues_id = ".$para['venues_id'];
      }else{
        $query = $query." AND t.venues_id = ".$para['venues_id'];
      }
    }

    if($para['sightseeingtype_id'] != null){
      if($currenTable->hasField('sightseeingtype_id')) {
        $query = $query." AND p.sightseeingtype_id = ".$para['sightseeingtype_id'];
      }else{
        $query = $query." AND t.sightseeingtype_id = ".$para['sightseeingtype_id'];
      }
    }

    if($para['approve'] != null){
      if($currenTable->hasField('approve')) {
        $query = $query." AND p.approve = "."'".$para['approve']."'";
      }else{
        $query = $query." AND t.approve = "."'".$para['approve']."'";
      }
    }

    if($para['publish'] != null){
      if($currenTable->hasField('publish')) {
        $query = $query." AND p.publish = "."'".$para['publish']."'";
      }else{
        $query = $query." AND t.publish = "."'".$para['publish']."'";
      }
    }

    if($para['shopping_type'] != null){
      if($currenTable->hasField('shopping_type')) {
        $query = $query." AND p.ashopping_type = ".$para['shopping_type'];
      }else{
        $query = $query." AND t.shopping_type = ".$para['shopping_type'];
      }
    }

    if($para['hotelclass_id'] != null){
      if($currenTable->hasField('hotelclass_id')) {
        $query = $query." AND p.hotelclass_id = ".$para['hotelclass_id'];
      }else{
        $query = $query." AND t.hotelclass_id = ".$para['hotelclass_id'];
      }
    }
    if($para['type'] != null){
      if($currenTable->hasField('type')) {
        $query = $query." AND p.type = ".$para['type'];
      }else{
        $query = $query." AND t.type = ".$para['type'];
      }
    }
    if($para['type_id'] != null){
      if($currenTable->hasField('type_id')) {
        $query = $query." AND p.type_id = ".$para['type_id'];
      }else{
        $query = $query." AND t.type_id = ".$para['type_id'];
      }
    }
    if($para['group_id'] != null){
      if($currenTable->hasField('group_id')) {
        $query = $query." AND p.group_id = ".$para['group_id'];
      }else{
        $query = $query." AND t.group_id = ".$para['group_id'];
      }
    }
    if($para['focuson_group'] != null){
      if($currenTable->hasField('focuson_group')) {
        $query = $query." AND p.focuson_group = ".$para['focuson_group'];
      }else{
        $query = $query." AND t.focuson_group = ".$para['focuson_group'];
      }
    }
    if($para['file_category'] != null){
      if($currenTable->hasField('file_category')) {
        $query = $query." AND p.file_category = ".$para['file_category'];
      }else{
        $query = $query." AND t.file_category = ".$para['file_category'];
      }
    }
    if($para['code'] != null){
      if($currenTable->hasField('code')) {
        $query = $query." AND p.code = ".$para['code'];
      }else{
        $query = $query." AND t.code = ".$para['code'];
      }
    }
    if($para['orders'] != null){
      if($currenTable->hasField('orders')) {
        $query = $query." AND p.orders = ".$para['orders'];
      }else{
        $query = $query." AND t.orders = ".$para['orders'];
      }
    }

    if($para['forum_id'] != null){
      if($currenTable->hasField('forum_id')) {
        $query = $query." AND p.forum_id = ".$para['forum_id'];
      }else{
        $query = $query." AND t.forum_id = ".$para['forum_id'];
      }
    }
    if($para['walkingtoursgroup_id'] != null){
      if($currenTable->hasField('walkingtoursgroup_id')) {
        $query = $query." AND p.walkingtoursgroup_id = ".$para['walkingtoursgroup_id'];
      }else{
        $query = $query." AND t.walkingtoursgroup_id = ".$para['walkingtoursgroup_id'];
      }
    }
    if($para['sim_mnuTyp'] != null){
      if($currenTable->hasField($para['sim_mnuTyp'])) {
        $query = $query." AND p.sim_mnuTyp = ".$para['sim_mnuTyp'];
      }else{
        $query = $query." AND t.sim_mnuTyp = ".$para['sim_mnuTyp'];
      }
    }
    if($para['category_id'] != null){
      if($currenTable->hasField('category_id')) {
        $query = $query." AND p.category_id = ".$para['category_id'];
      }else{
        $query = $query." AND t.category_id = ".$para['category_id'];
      }
    }
    if($para['is_hidden'] != null){
      if($currenTable->hasField('is_hidden')) {
        $query = $query." AND p.is_hidden = ".$para['is_hidden'];
      }else{
        $query = $query." AND t.is_hidden = ".$para['is_hidden'];
      }
    }
    if($para['article_type_id'] != null){
      if($currenTable->hasField('article_type_id')) {
        $query = $query." AND p.article_type_id = ".$para['article_type_id'];
      }else{
        $query = $query." AND t.article_type_id = ".$para['article_type_id'];
      }
    }


    if($para['end_date'] != null){
      if($currenTable->hasField('end_date')) {
        $query = $query." AND p.end_date = "."'".$para['end_date']."'";
      }else{
        $query = $query." AND t.end_date = "."'".$para['end_date']."'";
      }
    }
    if($para['start_date'] != null){
      if($currenTable->hasField('start_date')) {
        $query = $query." AND p.start_date = "."'".$para['start_date']."'";
      }else{
        $query = $query." AND t.start_date = "."'".$para['start_date']."'";
      }
    }
    if($para['updated_at'] != null){
      if($currenTable->hasField('updated_at')) {
        $query = $query." AND p.updated_at = "."'".$para['updated_at']."'";
      }else{
        $query = $query." AND t.updated_at = "."'".$para['updated_at']."'";
      }
    }
    if($para['created_at'] != null){
      if($currenTable->hasField('created_at')) {
        $query = $query." AND p.created_at = "."'".$para['created_at']."'";
      }else{
        $query = $query." AND t.created_at = "."'".$para['created_at']."'";
      }
    }
    if($para['last_modifier'] != null){
      if($currenTable->hasField('last_modifier')) {
        $query = $query." AND p.last_modifier = "."'".$para['last_modifier']."'";
      }else{
        $query = $query." AND t.last_modifier = "."'".$para['last_modifier']."'";
      }
    }
    if($para['name'] != null){
      if($currenTable->hasField('name')) {
        $query = $query." AND p.name = "."'".$para['name']."'";
      }else{
        $query = $query." AND t.name = "."'".$para['name']."'";
      }
    }
    if($para['page_name'] != null){
      if($currenTable->hasField('page_name')) {
        $query = $query." AND p.page_name = "."'".$para['page_name']."'";
      }else{
        $query = $query." AND t.page_name = "."'".$para['page_name']."'";
      }
    }
    if($para['year'] != null){
      if($currenTable->hasField('year')) {
        $query = $query." AND p.year = "."'".$para['year']."'";
      }else{
        $query = $query." AND t.year = "."'".$para['year']."'";
      }
    }

    if($para['orderby'] != null){
      if($currenTable->hasField($para['orderby'])) {
        $query = $query." ORDER BY p.".$para['orderby'];
        if($para['order'] != null){
          $query = $query." ".$para['order'];
        }
      }else{
        $query = $query." ORDER BY t.".$para['orderby'];
        if($para['order'] != null){
          $query = $query." ".$para['order'];
        }
      }
    }

    if($para['limit'] != null){
      $query = $query." LIMIT"." ".$para['limit'][1]." "."OFFSET ".($para['limit'][0]-1);
    }

    if($para['id'] != null){
      $rangeId = "";
      foreach($para['id'] as $key => $value) {
        $rangeId = $rangeId.$value.",";
      }

      $rangeId = substr($rangeId,0,-1);
      $rangeId = "(".$rangeId.")";
      $query = $query." AND p.id IN ".$rangeId;
    }

    $pdo = Doctrine_Manager::getInstance()->getCurrentConnection()->getDbh();
    $stmt = $pdo->prepare($query);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();
    $fetchResults = $stmt->fetchAll();
    return $fetchResults;
  }

  /***************************************************************************/
  public function allData($table,$currenTable) {
    //$currenTable =  Doctrine_Core::getTable($table);
    $query = null;

    if($currenTable->hasTemplate('I18n')){
      $query = "SELECT * FROM ".$this->from_camel_case($table)." p LEFT JOIN ".$this->from_camel_case($table)."_translation t on p.id = t.id ";
      $query = $query." WHERE 1";
    }else{
      $query = "SELECT * FROM ".$this->from_camel_case($table)." p  WHERE 1";
    }

    if($currenTable->hasField('parent_id')) {
      $query = $query." AND p.parent_id = 0 ";
    }
    $pdo = Doctrine_Manager::getInstance()->getCurrentConnection()->getDbh();
    $stmt = $pdo->prepare($query);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();
    $fetchResults = $stmt->fetchAll();
    return $fetchResults;
  }
  /***************************************************************************/

  public function executeArticle(sfWebRequest $request)
  {
    $this->getRoute()->getObjects();
    $para = $this->getPara($request);
    $currenTable =  Doctrine_Core::getTable("Article");
    $all = $this->allData("Article",$currenTable);
    $single = $this->getSingleCultureData("Article",$para,$request,$currenTable);
    $highlight_all = array($single,$all);
    $this->highlights = $this->processData($highlight_all,$para);
    $module = $currenTable->getTableName();
    $this->highlights = $this->processUploads($this->highlights,$module,$request);
  }

  /*********************************************************************************/
  public function executeArticletype(sfWebRequest $request)
  {
    $this->getRoute()->getObjects();
    $para = $this->getPara($request);
    $currenTable =  Doctrine_Core::getTable("ArticleType");
    $all = $this->allData("ArticleType",$currenTable);
    $single = $this->getSingleCultureData("ArticleType",$para,$request,$currenTable);
    $highlight_all = array($single,$all);
    $this->highlights = $this->processData($highlight_all,$para);
    $module = $currenTable->getTableName();
    $this->highlights = $this->processUploads($this->highlights,$module,$request);
  }

  /*********************************************************************************/
  public function executeBanner(sfWebRequest $request)
  {
    $this->getRoute()->getObjects();
    $para = $this->getPara($request);
    $currenTable =  Doctrine_Core::getTable("Banner");
    $all = $this->allData("Banner",$currenTable);
    $single = $this->getSingleCultureData("Banner",$para,$request,$currenTable);
    $highlight_all = array($single,$all);
    $this->highlights = $this->processData($highlight_all,$para);
    $module = $currenTable->getTableName();
    $this->highlights = $this->processUploads($this->highlights,$module,$request);
  }

  /*********************************************************************************/
  public function executeBannergroup(sfWebRequest $request)
  {
    $this->getRoute()->getObjects();
    $para = $this->getPara($request);
    $currenTable =  Doctrine_Core::getTable("BannerGroup");
    $all = $this->allData("BannerGroup",$currenTable);
    $single = $this->getSingleCultureData("BannerGroup",$para,$request,$currenTable);
    $highlight_all = array($single,$all);
    $this->highlights = $this->processData($highlight_all,$para);
    $module = $currenTable->getTableName();
    $this->highlights = $this->processUploads($this->highlights,$module,$request);
  }

  /*********************************************************************************/
  public function executeModule(sfWebRequest $request)
  {
    $this->getRoute()->getObjects();
    $para = $this->getPara($request);
    $currenTable =  Doctrine_Core::getTable("ModuleCategory");
    $all = $this->allData("ModuleCategory",$currenTable);
    $single = $this->getSingleCultureData("ModuleCategory",$para,$request,$currenTable);
    $highlight_all = array($single,$all);
    $this->highlights = $this->processData($highlight_all,$para);
    $module = $currenTable->getTableName();
    $this->highlights = $this->processUploads($this->highlights,$module,$request);
  }

  /*********************************************************************************/
  public function executeComment(sfWebRequest $request)
  {
    $this->getRoute()->getObjects();
    $para = $this->getPara($request);
    $currenTable =  Doctrine_Core::getTable("Comment");
    $all = $this->allData("Comment",$currenTable);
    $single = $this->getSingleCultureData("Comment",$para,$request,$currenTable);
    $highlight_all = array($single,$all);
    $this->highlights = $this->processData($highlight_all,$para);
    $module = $currenTable->getTableName();
    $this->highlights = $this->processUploads($this->highlights,$module,$request);
  }

  /*********************************************************************************/
  public function executePhotoalbum(sfWebRequest $request)
  {
    $this->getRoute()->getObjects();
    $para = $this->getPara($request);
    $currenTable =  Doctrine_Core::getTable("PhotoAlbum");
    $all = $this->allData("PhotoAlbum",$currenTable);
    $single = $this->getSingleCultureData("PhotoAlbum",$para,$request,$currenTable);
    $highlight_all = array($single,$all);
    $this->highlights = $this->processData($highlight_all,$para);
    $module = $currenTable->getTableName();
    $this->highlights = $this->processUploads($this->highlights,$module,$request);
  }

  /*********************************************************************************/
  public function executeFavorite(sfWebRequest $request)
  {
    $this->getRoute()->getObjects();
    $para = $this->getPara($request);
    $currenTable =  Doctrine_Core::getTable("Favorite");
    $all = $this->allData("Favorite",$currenTable);
    $single = $this->getSingleCultureData("Favorite",$para,$request,$currenTable);
    $highlight_all = array($single,$all);
    $this->highlights = $this->processData($highlight_all,$para);
    $module = $currenTable->getTableName();
    $this->highlights = $this->processUploads($this->highlights,$module,$request);
  }

  /*********************************************************************************/
  public function executeTheme(sfWebRequest $request)
  {
    $this->getRoute()->getObjects();
    $para = $this->getPara($request);
    $currenTable =  Doctrine_Core::getTable("Theme");
    $all = $this->allData("Theme",$currenTable);
    $single = $this->getSingleCultureData("Theme",$para,$request,$currenTable);
    $highlight_all = array($single,$all);
    $this->highlights = $this->processData($highlight_all,$para);
    $module = $currenTable->getTableName();
    $this->highlights = $this->processUploads($this->highlights,$module,$request);
  }

  /*********************************************************************************/
  public function executeApp(sfWebRequest $request)
  {
    $this->getRoute()->getObjects();
    $para = $this->getPara($request);
    $currenTable =  Doctrine_Core::getTable("App");
    $all = $this->allData("App",$currenTable);
    $single = $this->getSingleCultureData("App",$para,$request,$currenTable);
    $highlight_all = array($single,$all);
    $this->highlights = $this->processData($highlight_all,$para);
    $module = $currenTable->getTableName();
    $this->highlights = $this->processUploads($this->highlights,$module,$request);
  }

  /*********************************************************************************/
  public function executeAppintro(sfWebRequest $request)
  {
    $this->getRoute()->getObjects();
    $para = $this->getPara($request);
    $currenTable =  Doctrine_Core::getTable("AppIntro");
    $all = $this->allData("AppIntro",$currenTable);
    $single = $this->getSingleCultureData("AppIntro",$para,$request,$currenTable);
    $highlight_all = array($single,$all);
    $this->highlights = $this->processData($highlight_all,$para);
    $module = $currenTable->getTableName();
    $this->highlights = $this->processUploads($this->highlights,$module,$request);
  }

  /*********************************************************************************/
  public function executeBook(sfWebRequest $request)
  {
    $this->getRoute()->getObjects();
    $para = $this->getPara($request);
    $currenTable =  Doctrine_Core::getTable("Book");
    $all = $this->allData("Book",$currenTable);
    $single = $this->getSingleCultureData("Book",$para,$request,$currenTable);
    $highlight_all = array($single,$all);
    $this->highlights = $this->processData($highlight_all,$para);
    $module = $currenTable->getTableName();
    $this->highlights = $this->processUploads($this->highlights,$module,$request);
  }

  /*********************************************************************************/
  public function executeVote(sfWebRequest $request)
  {
    $this->getRoute()->getObjects();
    $para = $this->getPara($request);
    $currenTable =  Doctrine_Core::getTable("Vote");
    $all = $this->allData("Vote",$currenTable);
    $single = $this->getSingleCultureData("Vote",$para,$request,$currenTable);
    $highlight_all = array($single,$all);
    $this->highlights = $this->processData($highlight_all,$para);
    $module = $currenTable->getTableName();
    $this->highlights = $this->processUploads($this->highlights,$module,$request);
  }

  /*********************************************************************************/
  public function executeVoteoption(sfWebRequest $request)
  {
    $this->getRoute()->getObjects();
    $para = $this->getPara($request);
    $currenTable =  Doctrine_Core::getTable("VoteOption");
    $all = $this->allData("VoteOption",$currenTable);
    $single = $this->getSingleCultureData("VoteOption",$para,$request,$currenTable);
    $highlight_all = array($single,$all);
    $this->highlights = $this->processData($highlight_all,$para);
    $module = $currenTable->getTableName();
    $this->highlights = $this->processUploads($this->highlights,$module,$request);
  }

  /*********************************************************************************/
  public function executeStatistical(sfWebRequest $request)
  {
    $this->getRoute()->getObjects();
    $para = $this->getPara($request);
    $currenTable =  Doctrine_Core::getTable("Statistical");
    $all = $this->allData("Statistical",$currenTable);
    $single = $this->getSingleCultureData("Statistical",$para,$request,$currenTable);
    $highlight_all = array($single,$all);
    $this->highlights = $this->processData($highlight_all,$para);
    $module = $currenTable->getTableName();
    $this->highlights = $this->processUploads($this->highlights,$module,$request);
  }

  /*********************************************************************************/
  public function executeStatisticalday(sfWebRequest $request)
  {
    $this->getRoute()->getObjects();
    $para = $this->getPara($request);
    $currenTable =  Doctrine_Core::getTable("StatisticalDay");
    $all = $this->allData("StatisticalDay",$currenTable);
    $single = $this->getSingleCultureData("StatisticalDay",$para,$request,$currenTable);
    $highlight_all = array($single,$all);
    $this->highlights = $this->processData($highlight_all,$para);
    $module = $currenTable->getTableName();
    $this->highlights = $this->processUploads($this->highlights,$module,$request);
  }

  /*********************************************************************************/
  public function executeStatisticalmonth(sfWebRequest $request)
  {
    $this->getRoute()->getObjects();
    $para = $this->getPara($request);
    $currenTable =  Doctrine_Core::getTable("StatisticalMonth");
    $all = $this->allData("StatisticalMonth",$currenTable);
    $single = $this->getSingleCultureData("StatisticalMonth",$para,$request,$currenTable);
    $highlight_all = array($single,$all);
    $this->highlights = $this->processData($highlight_all,$para);
    $module = $currenTable->getTableName();
    $this->highlights = $this->processUploads($this->highlights,$module,$request);
  }

  /*********************************************************************************/
  public function executeStatisticalyear(sfWebRequest $request)
  {
    $this->getRoute()->getObjects();
    $para = $this->getPara($request);
    $currenTable =  Doctrine_Core::getTable("StatisticalYear");
    $all = $this->allData("StatisticalYear",$currenTable);
    $single = $this->getSingleCultureData("StatisticalYear",$para,$request,$currenTable);
    $highlight_all = array($single,$all);
    $this->highlights = $this->processData($highlight_all,$para);
    $module = $currenTable->getTableName();
    $this->highlights = $this->processUploads($this->highlights,$module,$request);
  }

  /*********************************************************************************/
  public function executeInformation(sfWebRequest $request)
  {
    $this->getRoute()->getObjects();
    $para = $this->getPara($request);
    $currenTable =  Doctrine_Core::getTable("Information");
    $all = $this->allData("Information",$currenTable);
    $single = $this->getSingleCultureData("Information",$para,$request,$currenTable);
    $highlight_all = array($single,$all);
    $this->highlights = $this->processData($highlight_all,$para);
    $module = $currenTable->getTableName();
    $this->highlights = $this->processUploads($this->highlights,$module,$request);
  }

  /*********************************************************************************/
  public function executeSchool(sfWebRequest $request)
  {
    $this->getRoute()->getObjects();
    $para = $this->getPara($request);
    $currenTable =  Doctrine_Core::getTable("School");
    $all = $this->allData("School",$currenTable);
    $single = $this->getSingleCultureData("School",$para,$request,$currenTable);
    $highlight_all = array($single,$all);
    $this->highlights = $this->processData($highlight_all,$para);
    $module = $currenTable->getTableName();
    $this->highlights = $this->processUploads($this->highlights,$module,$request);
  }

  /*********************************************************************************/
  public function executeUseroption(sfWebRequest $request)
  {
    $this->getRoute()->getObjects();
    $para = $this->getPara($request);
    $currenTable =  Doctrine_Core::getTable("UserOption");
    $all = $this->allData("UserOption",$currenTable);
    $single = $this->getSingleCultureData("UserOption",$para,$request,$currenTable);
    $highlight_all = array($single,$all);
    $this->highlights = $this->processData($highlight_all,$para);
    $module = $currenTable->getTableName();
    $this->highlights = $this->processUploads($this->highlights,$module,$request);
  }

  /*********************************************************************************/

  public function executeFileupload(sfWebRequest $request)
  {

    $this->getRoute()->getObjects();
    $para = $this->getPara($request);
    $currenTable =  Doctrine_Core::getTable("FileUpload");
    $all = $this->allData("FileUpload",$currenTable);
    $single = $this->getSingleCultureData("FileUpload",$para,$request,$currenTable);
    $highlight_all = array($single,$all);
    $this->highlights = $this->processData($highlight_all,$para);
    $module = $currenTable->getTableName();
    $this->highlights = $this->processUploads($this->highlights,$module,$request);


  }
  /*********************************************************************************/

  public function executeLanguages(sfWebRequest $request)
  {

    $this->getRoute()->getObjects();
    $para = $this->getPara($request);
    $currenTable =  Doctrine_Core::getTable("Languages");
    $all = $this->allData("Languages",$currenTable);
    $single = $this->getSingleCultureData("Languages",$para,$request,$currenTable);
    $highlight_all = array($single,$all);
    $this->highlights = $this->processData($highlight_all,$para);
    $module = $currenTable->getTableName();
    $this->highlights = $this->processUploads($this->highlights,$module,$request);

  }

  /*********************************************************************************/

    public function executeUser(sfWebRequest $request)
  {

    $this->getRoute()->getObjects();
    $para = $this->getPara($request);
    $currenTable =  Doctrine_Core::getTable("sfGuardUser");
    $all = $this->allData("sfGuardUser",$currenTable);
    $single = $this->getSingleCultureData("sfGuardUser",$para,$request,$currenTable);
    $highlight_all = array($single,$all);
    $this->highlights = $this->processData($highlight_all,$para);
    $module = $currenTable->getTableName();
    $this->highlights = $this->processUploads($this->highlights,$module,$request);

  }

  /*********************************************************************************/
  /*********************************************************************************/

  public function executeStaticcontent(sfWebRequest $request)
  {

    $this->getRoute()->getObjects();
    $para = $this->getPara($request);
    $currenTable =  Doctrine_Core::getTable("StaticContent");
    $all = $this->allData("StaticContent",$currenTable);
    $single = $this->getSingleCultureData("StaticContent",$para,$request,$currenTable);
    $highlight_all = array($single,$all);
    $this->highlights = $this->processData($highlight_all,$para);
    $module = $currenTable->getTableName();
    $this->highlights = $this->processUploads($this->highlights,$module,$request);
  }

  /*********************************************************************************/
  public function executeStaticcontentcategory(sfWebRequest $request)
  {

    $this->getRoute()->getObjects();
    $para = $this->getPara($request);
    $currenTable =  Doctrine_Core::getTable("StaticContentCategory");
    $all = $this->allData("StaticContentCategory",$currenTable);
    $single = $this->getSingleCultureData("StaticContentCategory",$para,$request,$currenTable);
    $highlight_all = array($single,$all);
    $this->highlights = $this->processData($highlight_all,$para);
    $module = $currenTable->getTableName();
    $this->highlights = $this->processUploads($this->highlights,$module,$request);

  }

  /*********************************************************************************/

  public function executePoststatistical(sfWebRequest $request)
  {
    $para = $request->getPostParameters();
    $statistical_new = new Statistical();
    $statistical_new_array = $statistical_new->toArray();
    $postKey = Doctrine_Core::getTable('Api')->findOneByPublicKey($para['postkey']);
    if($postKey) {
      foreach($para as $key => $value) {
        if(array_key_exists( $key, $statistical_new_array)) {
          $statistical_new->$key = $value;
        }
      }
      $statistical_new->parentSave();
      echo "successfully";
      return sfView::NONE;
    }else{
      echo "failed";
      return sfView::NONE;
    }

    //print_r($statistical_new_array);
    //array_key_exists('question',$highlight_all)
    //print_r( $this->property_exists_safe('Statistical', 'module'));
    //var_dump(get_object_vars($statistical_new));
    //echo "por";

    /*
    try{
    $currentUser = Doctrine_Core::getTable('sfGuardUser')->findOneByUsername($para['username']);
    }catch(Exception $e){
      echo "The user is invalid";
      return;
    }
    */
    /*
    $currentUserArray = $currentUser->toArray();
     if(($currentUserArray['authstring'] != null) && ($currentUserArray['authstring'] != "")){
      $currentTime = new DateTime();
      //$timeNow = $currentTime->format("Y-m-d H:i:s");
      if($currentUserArray['activetime'] != null){
        if($currentUserArray['activetime'] != ""){
          $activeTime = new DateTime($currentUserArray['activetime']);
        }else{
          $activeTime = new DateTime("1888-12-04 11:59:11");
        }
      }else{
        $activeTime = new DateTime("1888-12-04 11:59:11");
      }
      $currentTime->modify('-1 hour');
    */
    /*
      if($currentTime <= $activeTime){
        //$path = sfConfig::get('app_upload_path_post');
        $path_dir=sfConfig::get('sf_upload_dir').'/post/';
        $path_parts  = pathinfo($_FILES['image_post']['name']);
        //        $ex = pathinfo($_FILES['image_post']['name'],PATHINFO_EXTENSION);
        $ex = $para['extension'];
        ///        $img = substr($img,10,-1);
        $img = md5(time().$path_parts['filename']);
        $img = $img.".".$ex;
        move_uploaded_file($_FILES['image_post']['tmp_name'],$path_dir.$img);
        $post_new = new Post();
        $post_new->title = $para['title'];
        $post_new->message = $para['message'];
        $post_new->parent_post = $para['parent_post'];
        $post_new->image = $img;
        $post_new->user = $para['username'];
        $post_new->forum_id = $para['forum_id'];
        $post_new->orders = $para['orders'];
        $post_new->approve=$para['approve'];
        $post_new->approve=$para['publish'];
        $post_new->parentSave();
        $currentUser->setActivetime($currentUserArray['updated_at']);
        $currentUser->save();
        echo "successfully";
      }else{
        $currentUser->setAuthstring("");
        $currentUser->save();
        echo "failed";
      }
     }else{
       echo "failed";
     }
    */
  }
  /*********************************************************************************/

  public function executePoststatisticalday(sfWebRequest $request)
  {
    $para = $request->getPostParameters();
    $statistical_new = new StatisticalDay();
    $statistical_new_array = $statistical_new->toArray();
    $postKey = Doctrine_Core::getTable('Api')->findOneByPublicKey($para['postkey']);
    if($postKey) {
      foreach($para as $key => $value) {
        if(array_key_exists( $key, $statistical_new_array)) {
          $statistical_new->$key = $value;
        }
      }
      $statistical_new->parentSave();
      echo "successfully";
      return sfView::NONE;
    }else{
      echo "failed";
      return sfView::NONE;
    }

  }
  /*********************************************************************************/

  public function executePoststatisticalmonth(sfWebRequest $request)
  {

    $para = $request->getPostParameters();
    $statistical_new = new StatisticalMonth();
    $statistical_new_array = $statistical_new->toArray();
    $postKey = Doctrine_Core::getTable('Api')->findOneByPublicKey($para['postkey']);
    if($postKey) {
      foreach($para as $key => $value) {
        if(array_key_exists( $key, $statistical_new_array)) {
          $statistical_new->$key = $value;
        }
      }
      $statistical_new->parentSave();
      echo "successfully";
      return sfView::NONE;
    }else{
      echo "failed";
      return sfView::NONE;
    }
  }
  /*********************************************************************************/

  public function executePoststatisticalyear(sfWebRequest $request)
  {
    $para = $request->getPostParameters();
    $statistical_new = new StatisticalYear();
    $statistical_new_array = $statistical_new->toArray();
    $postKey = Doctrine_Core::getTable('Api')->findOneByPublicKey($para['postkey']);
    if($postKey) {
      foreach($para as $key => $value) {
        if(array_key_exists( $key, $statistical_new_array)) {
          $statistical_new->$key = $value;
        }
      }
      $statistical_new->parentSave();
      echo "successfully";
      return sfView::NONE;
    }else{
      echo "failed";
      return sfView::NONE;
    }
  }
  /*********************************************************************************/

   public function executeVerify(sfWebRequest $request)
  {
    $para = $request->getPostParameters();
    //$this->getRoute()->getObjects();
    //$para = $this->getPara($request);
    try{
    $currentUser = null;
    $currentUser = Doctrine_Core::getTable('sfGuardUser')->findOneByUsername($para['username']);
    }catch(Exception $e){
        //$this->highlights = array("false");
        echo false;
        return sfView::NONE;
    }
    if($currentUser){
        $hasUser = $currentUser->checkPassword($para['password']);
        //$hasGroup = $currentUser->hasGroup($para['group']);
        if($hasUser){
            echo $currentUser->getId();
            return sfView::NONE;
        }else{
            echo false;
            return sfView::NONE;
        }
    }
  }
  /*********************************************************************************/

   public function executeCheckusername($request) {
       $para = $request->getPostParameters();
       $currentUser = Doctrine_Core::getTable('sfGuardUser')->findOneByUsername($para['username']);
       if(!$currentUser) {
           echo false;
           return sfView::NONE;
       }else{
           echo true;
           return sfView::NONE;
       }
   }
  /*********************************************************************************/
   public function executeCheckemail($request) {
       $para = $request->getPostParameters();
       $currentUser = Doctrine_Core::getTable('sfGuardUser')->findOneByEmailAddress($para['email']);
       if(!$currentUser) {
           echo false;
           return sfView::NONE;
       }else{
           echo true;
           return sfView::NONE;
       }
   }
  /*********************************************************************************/
   public  function executeSignup($request) {
       $para = $request->getPostParameters();
       $user_new = new sfGuardUser();
       $user_new_array = $user_new->toArray();
       $postKey = Doctrine_Core::getTable('Api')->findOneByPublicKey($para['postkey']);
       if($postKey) {
           foreach($para as $key => $value) {
               if(array_key_exists( $key, $user_new_array)) {
                   $user_new->$key = $value;
               }
           }
           $user_new->addGroupByName("forum_user");
           $user_new->save();
           echo $user_new->getId();
           return sfView::NONE;
       }else{
           echo "failed";
           return sfView::NONE;
       }
   }

     /*********************************************************************************/
   public  function executePostcomment($request) {
       $para = $request->getPostParameters();
       $comment_new = new Comment();
       $comment_new_array = $user_new->toArray();
       $postKey = Doctrine_Core::getTable('Api')->findOneByPublicKey($para['postkey']);
       if($postKey) {
           foreach($para as $key => $value) {
               if(array_key_exists( $key, $comment_new_array)) {
                   $comment_new->$key = $value;
               }
           }
           $comment_new->save();
           echo "successfully";
           return sfView::NONE;
       }else{
           echo "failed";
           return sfView::NONE;
       }
   }

      public  function executePostfavorite($request) {
       $para = $request->getPostParameters();
       $favorite_new = new Favorite();
       $favorite_new_array = $favorite_new->toArray();
       $postKey = Doctrine_Core::getTable('Api')->findOneByPublicKey($para['postkey']);
       if($postKey) {
           foreach($para as $key => $value) {
               if(array_key_exists( $key, $favorite_new_array)) {
                   $favorite_new->$key = $value;
               }
           }
           $favorite_new->save();
           echo "successfully";
           return sfView::NONE;
       }else{
           echo "failed";
           return sfView::NONE;
       }
   }


      public  function executePostvoteoption($request) {
       $para = $request->getPostParameters();
       $vote_new = new VoteOption();
       $vote_new_array = $vote_new->toArray();
       $postKey = Doctrine_Core::getTable('Api')->findOneByPublicKey($para['postkey']);
       if($postKey) {
           foreach($para as $key => $value) {
               if(array_key_exists( $key, $vote_new_array)) {
                   $vote_new->$key = $value;
               }
           }
           $vote_new->save();
           echo "successfully";
           return sfView::NONE;
       }else{
           echo "failed";
           return sfView::NONE;
       }
   }

}