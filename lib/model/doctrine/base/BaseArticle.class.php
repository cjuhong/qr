<?php

/**
 * BaseArticle
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $title
 * @property longtext $content
 * @property string $keyword
 * @property string $comment_user
 * @property longtext $comment_content
 * @property date $comment_date
 * @property integer $article_type_id
 * @property integer $module_id
 * @property integer $school_id
 * @property integer $photo_album_id
 * @property integer $orders
 * @property string $approve
 * @property string $publish
 * @property boolean $is_hidden
 * @property timestamp $publish_date
 * @property timestamp $start_date
 * @property timestamp $end_date
 * @property integer $parent_id
 * @property string $last_modifier
 * @property PhotoAlbum $PhotoAlbum
 * @property ArticleType $ArticleType
 * @property ModuleCategory $ModuleCategory
 * @property School $School
 * @property Doctrine_Collection $Comment
 * @property Doctrine_Collection $Favorite
 * 
 * @method string              getTitle()           Returns the current record's "title" value
 * @method longtext            getContent()         Returns the current record's "content" value
 * @method string              getKeyword()         Returns the current record's "keyword" value
 * @method string              getCommentUser()     Returns the current record's "comment_user" value
 * @method longtext            getCommentContent()  Returns the current record's "comment_content" value
 * @method date                getCommentDate()     Returns the current record's "comment_date" value
 * @method integer             getArticleTypeId()   Returns the current record's "article_type_id" value
 * @method integer             getModuleId()        Returns the current record's "module_id" value
 * @method integer             getSchoolId()        Returns the current record's "school_id" value
 * @method integer             getPhotoAlbumId()    Returns the current record's "photo_album_id" value
 * @method integer             getOrders()          Returns the current record's "orders" value
 * @method string              getApprove()         Returns the current record's "approve" value
 * @method string              getPublish()         Returns the current record's "publish" value
 * @method boolean             getIsHidden()        Returns the current record's "is_hidden" value
 * @method timestamp           getPublishDate()     Returns the current record's "publish_date" value
 * @method timestamp           getStartDate()       Returns the current record's "start_date" value
 * @method timestamp           getEndDate()         Returns the current record's "end_date" value
 * @method integer             getParentId()        Returns the current record's "parent_id" value
 * @method string              getLastModifier()    Returns the current record's "last_modifier" value
 * @method PhotoAlbum          getPhotoAlbum()      Returns the current record's "PhotoAlbum" value
 * @method ArticleType         getArticleType()     Returns the current record's "ArticleType" value
 * @method ModuleCategory      getModuleCategory()  Returns the current record's "ModuleCategory" value
 * @method School              getSchool()          Returns the current record's "School" value
 * @method Doctrine_Collection getComment()         Returns the current record's "Comment" collection
 * @method Doctrine_Collection getFavorite()        Returns the current record's "Favorite" collection
 * @method Article             setTitle()           Sets the current record's "title" value
 * @method Article             setContent()         Sets the current record's "content" value
 * @method Article             setKeyword()         Sets the current record's "keyword" value
 * @method Article             setCommentUser()     Sets the current record's "comment_user" value
 * @method Article             setCommentContent()  Sets the current record's "comment_content" value
 * @method Article             setCommentDate()     Sets the current record's "comment_date" value
 * @method Article             setArticleTypeId()   Sets the current record's "article_type_id" value
 * @method Article             setModuleId()        Sets the current record's "module_id" value
 * @method Article             setSchoolId()        Sets the current record's "school_id" value
 * @method Article             setPhotoAlbumId()    Sets the current record's "photo_album_id" value
 * @method Article             setOrders()          Sets the current record's "orders" value
 * @method Article             setApprove()         Sets the current record's "approve" value
 * @method Article             setPublish()         Sets the current record's "publish" value
 * @method Article             setIsHidden()        Sets the current record's "is_hidden" value
 * @method Article             setPublishDate()     Sets the current record's "publish_date" value
 * @method Article             setStartDate()       Sets the current record's "start_date" value
 * @method Article             setEndDate()         Sets the current record's "end_date" value
 * @method Article             setParentId()        Sets the current record's "parent_id" value
 * @method Article             setLastModifier()    Sets the current record's "last_modifier" value
 * @method Article             setPhotoAlbum()      Sets the current record's "PhotoAlbum" value
 * @method Article             setArticleType()     Sets the current record's "ArticleType" value
 * @method Article             setModuleCategory()  Sets the current record's "ModuleCategory" value
 * @method Article             setSchool()          Sets the current record's "School" value
 * @method Article             setComment()         Sets the current record's "Comment" collection
 * @method Article             setFavorite()        Sets the current record's "Favorite" collection
 * 
 * @package    mgto
 * @subpackage model
 * @author     Jeremy and Andy
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseArticle extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('article');
        $this->hasColumn('title', 'string', 245, array(
             'type' => 'string',
             'length' => 245,
             ));
        $this->hasColumn('content', 'longtext', null, array(
             'type' => 'longtext',
             ));
        $this->hasColumn('keyword', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('comment_user', 'string', 145, array(
             'type' => 'string',
             'length' => 145,
             ));
        $this->hasColumn('comment_content', 'longtext', null, array(
             'type' => 'longtext',
             ));
        $this->hasColumn('comment_date', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('article_type_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('module_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('school_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('photo_album_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('orders', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 0,
             ));
        $this->hasColumn('approve', 'string', 50, array(
             'type' => 'string',
             'default' => 'No',
             'length' => 50,
             ));
        $this->hasColumn('publish', 'string', 50, array(
             'type' => 'string',
             'default' => 'No',
             'length' => 50,
             ));
        $this->hasColumn('is_hidden', 'boolean', null, array(
             'type' => 'boolean',
             ));
        $this->hasColumn('publish_date', 'timestamp', null, array(
             'type' => 'timestamp',
             ));
        $this->hasColumn('start_date', 'timestamp', null, array(
             'type' => 'timestamp',
             ));
        $this->hasColumn('end_date', 'timestamp', null, array(
             'type' => 'timestamp',
             ));
        $this->hasColumn('parent_id', 'integer', null, array(
             'type' => 'integer',
             'default' => 0,
             ));
        $this->hasColumn('last_modifier', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));

        $this->option('type', 'MyISAM');
        $this->option('collate', 'utf8_unicode_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('PhotoAlbum', array(
             'local' => 'photo_album_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('ArticleType', array(
             'local' => 'article_type_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('ModuleCategory', array(
             'local' => 'module_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('School', array(
             'local' => 'school_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasMany('Comment', array(
             'local' => 'id',
             'foreign' => 'article_id'));

        $this->hasMany('Favorite', array(
             'local' => 'id',
             'foreign' => 'article_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $i18n0 = new Doctrine_Template_I18n(array(
             'fields' => 
             array(
              0 => 'title',
              1 => 'content',
              2 => 'keyword',
              3 => 'is_hidden',
              4 => 'approve',
              5 => 'publish',
             ),
             ));
        $this->actAs($timestampable0);
        $this->actAs($i18n0);
    }
}