<?php

/**
 * BaseStatistical
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $module
 * @property integer $sub_id
 * @property date $date
 * @property integer $user_id
 * @property string $ip
 * @property integer $parent_id
 * @property string $last_modifier
 * 
 * @method string      getModule()        Returns the current record's "module" value
 * @method integer     getSubId()         Returns the current record's "sub_id" value
 * @method date        getDate()          Returns the current record's "date" value
 * @method integer     getUserId()        Returns the current record's "user_id" value
 * @method string      getIp()            Returns the current record's "ip" value
 * @method integer     getParentId()      Returns the current record's "parent_id" value
 * @method string      getLastModifier()  Returns the current record's "last_modifier" value
 * @method Statistical setModule()        Sets the current record's "module" value
 * @method Statistical setSubId()         Sets the current record's "sub_id" value
 * @method Statistical setDate()          Sets the current record's "date" value
 * @method Statistical setUserId()        Sets the current record's "user_id" value
 * @method Statistical setIp()            Sets the current record's "ip" value
 * @method Statistical setParentId()      Sets the current record's "parent_id" value
 * @method Statistical setLastModifier()  Sets the current record's "last_modifier" value
 * 
 * @package    mgto
 * @subpackage model
 * @author     Jeremy and Andy
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseStatistical extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('statistical');
        $this->hasColumn('module', 'string', 128, array(
             'type' => 'string',
             'length' => 128,
             ));
        $this->hasColumn('sub_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('date', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('user_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('ip', 'string', 128, array(
             'type' => 'string',
             'length' => 128,
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
        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}