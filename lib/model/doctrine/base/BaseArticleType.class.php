<?php

/**
 * BaseArticleType
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property integer $module_id
 * @property string $approve
 * @property string $publish
 * @property boolean $is_hidden
 * @property timestamp $start_date
 * @property timestamp $end_date
 * @property integer $parent_id
 * @property string $last_modifier
 * @property ModuleCategory $ModuleCategory
 * @property Doctrine_Collection $Article
 * @property Doctrine_Collection $Comment
 * @property Doctrine_Collection $Favorite
 * 
 * @method string              getName()           Returns the current record's "name" value
 * @method integer             getModuleId()       Returns the current record's "module_id" value
 * @method string              getApprove()        Returns the current record's "approve" value
 * @method string              getPublish()        Returns the current record's "publish" value
 * @method boolean             getIsHidden()       Returns the current record's "is_hidden" value
 * @method timestamp           getStartDate()      Returns the current record's "start_date" value
 * @method timestamp           getEndDate()        Returns the current record's "end_date" value
 * @method integer             getParentId()       Returns the current record's "parent_id" value
 * @method string              getLastModifier()   Returns the current record's "last_modifier" value
 * @method ModuleCategory      getModuleCategory() Returns the current record's "ModuleCategory" value
 * @method Doctrine_Collection getArticle()        Returns the current record's "Article" collection
 * @method Doctrine_Collection getComment()        Returns the current record's "Comment" collection
 * @method Doctrine_Collection getFavorite()       Returns the current record's "Favorite" collection
 * @method ArticleType         setName()           Sets the current record's "name" value
 * @method ArticleType         setModuleId()       Sets the current record's "module_id" value
 * @method ArticleType         setApprove()        Sets the current record's "approve" value
 * @method ArticleType         setPublish()        Sets the current record's "publish" value
 * @method ArticleType         setIsHidden()       Sets the current record's "is_hidden" value
 * @method ArticleType         setStartDate()      Sets the current record's "start_date" value
 * @method ArticleType         setEndDate()        Sets the current record's "end_date" value
 * @method ArticleType         setParentId()       Sets the current record's "parent_id" value
 * @method ArticleType         setLastModifier()   Sets the current record's "last_modifier" value
 * @method ArticleType         setModuleCategory() Sets the current record's "ModuleCategory" value
 * @method ArticleType         setArticle()        Sets the current record's "Article" collection
 * @method ArticleType         setComment()        Sets the current record's "Comment" collection
 * @method ArticleType         setFavorite()       Sets the current record's "Favorite" collection
 * 
 * @package    mgto
 * @subpackage model
 * @author     Jeremy and Andy
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseArticleType extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('article_type');
        $this->hasColumn('name', 'string', 245, array(
             'type' => 'string',
             'length' => 245,
             ));
        $this->hasColumn('module_id', 'integer', null, array(
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

        $this->hasMany('Article', array(
             'local' => 'id',
             'foreign' => 'article_type_id'));

        $this->hasMany('Comment', array(
             'local' => 'id',
             'foreign' => 'article_type_id'));

        $this->hasMany('Favorite', array(
             'local' => 'id',
             'foreign' => 'article_type_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $i18n0 = new Doctrine_Template_I18n(array(
             'fields' => 
             array(
              0 => 'name',
              1 => 'is_hidden',
              2 => 'approve',
              3 => 'publish',
             ),
             ));
        $this->actAs($timestampable0);
        $this->actAs($i18n0);
    }
}