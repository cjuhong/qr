<?php

/**
 * BaseStaticContentCategory
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property integer $orders
 * @property string $last_modifier
 * @property integer $parent_id
 * @property Doctrine_Collection $StaticContent
 * 
 * @method string                getName()          Returns the current record's "name" value
 * @method integer               getOrders()        Returns the current record's "orders" value
 * @method string                getLastModifier()  Returns the current record's "last_modifier" value
 * @method integer               getParentId()      Returns the current record's "parent_id" value
 * @method Doctrine_Collection   getStaticContent() Returns the current record's "StaticContent" collection
 * @method StaticContentCategory setName()          Sets the current record's "name" value
 * @method StaticContentCategory setOrders()        Sets the current record's "orders" value
 * @method StaticContentCategory setLastModifier()  Sets the current record's "last_modifier" value
 * @method StaticContentCategory setParentId()      Sets the current record's "parent_id" value
 * @method StaticContentCategory setStaticContent() Sets the current record's "StaticContent" collection
 * 
 * @package    mgto
 * @subpackage model
 * @author     Jeremy and Andy
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseStaticContentCategory extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('static_content_category');
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('orders', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 0,
             ));
        $this->hasColumn('last_modifier', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('parent_id', 'integer', null, array(
             'type' => 'integer',
             'default' => 0,
             ));

        $this->option('type', 'MyISAM');
        $this->option('collate', 'utf8_unicode_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('StaticContent', array(
             'local' => 'id',
             'foreign' => 'category_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}