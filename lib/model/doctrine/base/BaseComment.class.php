<?php

/**
 * BaseComment
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property integer $comment_id
 * @property longtext $comment
 * @property integer $module_id
 * @property integer $article_id
 * @property integer $article_type_id
 * @property integer $book_id
 * @property integer $app_id
 * @property integer $theme_id
 * @property integer $vote_id
 * @property integer $user_id
 * @property string $approve
 * @property string $publish
 * @property boolean $is_hidden
 * @property timestamp $start_date
 * @property timestamp $end_date
 * @property integer $parent_id
 * @property string $last_modifier
 * @property ModuleCategory $ModuleCategory
 * @property Article $Article
 * @property ArticleType $ArticleType
 * @property Book $Book
 * @property App $App
 * @property Theme $Theme
 * @property Vote $Vote
 * @property sfGuardUser $sfGuardUser
 * 
 * @method string         getName()            Returns the current record's "name" value
 * @method integer        getCommentId()       Returns the current record's "comment_id" value
 * @method longtext       getComment()         Returns the current record's "comment" value
 * @method integer        getModuleId()        Returns the current record's "module_id" value
 * @method integer        getArticleId()       Returns the current record's "article_id" value
 * @method integer        getArticleTypeId()   Returns the current record's "article_type_id" value
 * @method integer        getBookId()          Returns the current record's "book_id" value
 * @method integer        getAppId()           Returns the current record's "app_id" value
 * @method integer        getThemeId()         Returns the current record's "theme_id" value
 * @method integer        getVoteId()          Returns the current record's "vote_id" value
 * @method integer        getUserId()          Returns the current record's "user_id" value
 * @method string         getApprove()         Returns the current record's "approve" value
 * @method string         getPublish()         Returns the current record's "publish" value
 * @method boolean        getIsHidden()        Returns the current record's "is_hidden" value
 * @method timestamp      getStartDate()       Returns the current record's "start_date" value
 * @method timestamp      getEndDate()         Returns the current record's "end_date" value
 * @method integer        getParentId()        Returns the current record's "parent_id" value
 * @method string         getLastModifier()    Returns the current record's "last_modifier" value
 * @method ModuleCategory getModuleCategory()  Returns the current record's "ModuleCategory" value
 * @method Article        getArticle()         Returns the current record's "Article" value
 * @method ArticleType    getArticleType()     Returns the current record's "ArticleType" value
 * @method Book           getBook()            Returns the current record's "Book" value
 * @method App            getApp()             Returns the current record's "App" value
 * @method Theme          getTheme()           Returns the current record's "Theme" value
 * @method Vote           getVote()            Returns the current record's "Vote" value
 * @method sfGuardUser    getSfGuardUser()     Returns the current record's "sfGuardUser" value
 * @method Comment        setName()            Sets the current record's "name" value
 * @method Comment        setCommentId()       Sets the current record's "comment_id" value
 * @method Comment        setComment()         Sets the current record's "comment" value
 * @method Comment        setModuleId()        Sets the current record's "module_id" value
 * @method Comment        setArticleId()       Sets the current record's "article_id" value
 * @method Comment        setArticleTypeId()   Sets the current record's "article_type_id" value
 * @method Comment        setBookId()          Sets the current record's "book_id" value
 * @method Comment        setAppId()           Sets the current record's "app_id" value
 * @method Comment        setThemeId()         Sets the current record's "theme_id" value
 * @method Comment        setVoteId()          Sets the current record's "vote_id" value
 * @method Comment        setUserId()          Sets the current record's "user_id" value
 * @method Comment        setApprove()         Sets the current record's "approve" value
 * @method Comment        setPublish()         Sets the current record's "publish" value
 * @method Comment        setIsHidden()        Sets the current record's "is_hidden" value
 * @method Comment        setStartDate()       Sets the current record's "start_date" value
 * @method Comment        setEndDate()         Sets the current record's "end_date" value
 * @method Comment        setParentId()        Sets the current record's "parent_id" value
 * @method Comment        setLastModifier()    Sets the current record's "last_modifier" value
 * @method Comment        setModuleCategory()  Sets the current record's "ModuleCategory" value
 * @method Comment        setArticle()         Sets the current record's "Article" value
 * @method Comment        setArticleType()     Sets the current record's "ArticleType" value
 * @method Comment        setBook()            Sets the current record's "Book" value
 * @method Comment        setApp()             Sets the current record's "App" value
 * @method Comment        setTheme()           Sets the current record's "Theme" value
 * @method Comment        setVote()            Sets the current record's "Vote" value
 * @method Comment        setSfGuardUser()     Sets the current record's "sfGuardUser" value
 * 
 * @package    mgto
 * @subpackage model
 * @author     Jeremy and Andy
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseComment extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('comment');
        $this->hasColumn('name', 'string', 245, array(
             'type' => 'string',
             'length' => 245,
             ));
        $this->hasColumn('comment_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('comment', 'longtext', null, array(
             'type' => 'longtext',
             ));
        $this->hasColumn('module_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('article_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('article_type_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('book_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('app_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('theme_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('vote_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('user_id', 'integer', null, array(
             'type' => 'integer',
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
        $this->hasOne('ModuleCategory', array(
             'local' => 'module_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Article', array(
             'local' => 'article_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('ArticleType', array(
             'local' => 'article_type_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Book', array(
             'local' => 'book_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('App', array(
             'local' => 'app_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Theme', array(
             'local' => 'theme_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Vote', array(
             'local' => 'vote_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('sfGuardUser', array(
             'local' => 'user_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}