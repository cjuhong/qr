<?php

/**
 * BaseSchool
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property string $address
 * @property string $icon
 * @property string $tel
 * @property string $fax
 * @property string $website
 * @property string $pedagogical_system
 * @property string $property
 * @property string $school_system
 * @property string $open_stage
 * @property string $latitude
 * @property string $longitude
 * @property string $characterstics
 * @property string $honor_roll
 * @property string $facilities
 * @property string $mission
 * @property string $remark
 * @property longtext $introduction
 * @property string $image_one
 * @property string $image_two
 * @property string $image_three
 * @property string $approve
 * @property string $publish
 * @property boolean $is_hidden
 * @property timestamp $start_date
 * @property timestamp $end_date
 * @property integer $parent_id
 * @property string $parent_language
 * @property string $last_modifier
 * @property Doctrine_Collection $Article
 * 
 * @method string              getName()               Returns the current record's "name" value
 * @method string              getAddress()            Returns the current record's "address" value
 * @method string              getIcon()               Returns the current record's "icon" value
 * @method string              getTel()                Returns the current record's "tel" value
 * @method string              getFax()                Returns the current record's "fax" value
 * @method string              getWebsite()            Returns the current record's "website" value
 * @method string              getPedagogicalSystem()  Returns the current record's "pedagogical_system" value
 * @method string              getProperty()           Returns the current record's "property" value
 * @method string              getSchoolSystem()       Returns the current record's "school_system" value
 * @method string              getOpenStage()          Returns the current record's "open_stage" value
 * @method string              getLatitude()           Returns the current record's "latitude" value
 * @method string              getLongitude()          Returns the current record's "longitude" value
 * @method string              getCharacterstics()     Returns the current record's "characterstics" value
 * @method string              getHonorRoll()          Returns the current record's "honor_roll" value
 * @method string              getFacilities()         Returns the current record's "facilities" value
 * @method string              getMission()            Returns the current record's "mission" value
 * @method string              getRemark()             Returns the current record's "remark" value
 * @method longtext            getIntroduction()       Returns the current record's "introduction" value
 * @method string              getImageOne()           Returns the current record's "image_one" value
 * @method string              getImageTwo()           Returns the current record's "image_two" value
 * @method string              getImageThree()         Returns the current record's "image_three" value
 * @method string              getApprove()            Returns the current record's "approve" value
 * @method string              getPublish()            Returns the current record's "publish" value
 * @method boolean             getIsHidden()           Returns the current record's "is_hidden" value
 * @method timestamp           getStartDate()          Returns the current record's "start_date" value
 * @method timestamp           getEndDate()            Returns the current record's "end_date" value
 * @method integer             getParentId()           Returns the current record's "parent_id" value
 * @method string              getParentLanguage()     Returns the current record's "parent_language" value
 * @method string              getLastModifier()       Returns the current record's "last_modifier" value
 * @method Doctrine_Collection getArticle()            Returns the current record's "Article" collection
 * @method School              setName()               Sets the current record's "name" value
 * @method School              setAddress()            Sets the current record's "address" value
 * @method School              setIcon()               Sets the current record's "icon" value
 * @method School              setTel()                Sets the current record's "tel" value
 * @method School              setFax()                Sets the current record's "fax" value
 * @method School              setWebsite()            Sets the current record's "website" value
 * @method School              setPedagogicalSystem()  Sets the current record's "pedagogical_system" value
 * @method School              setProperty()           Sets the current record's "property" value
 * @method School              setSchoolSystem()       Sets the current record's "school_system" value
 * @method School              setOpenStage()          Sets the current record's "open_stage" value
 * @method School              setLatitude()           Sets the current record's "latitude" value
 * @method School              setLongitude()          Sets the current record's "longitude" value
 * @method School              setCharacterstics()     Sets the current record's "characterstics" value
 * @method School              setHonorRoll()          Sets the current record's "honor_roll" value
 * @method School              setFacilities()         Sets the current record's "facilities" value
 * @method School              setMission()            Sets the current record's "mission" value
 * @method School              setRemark()             Sets the current record's "remark" value
 * @method School              setIntroduction()       Sets the current record's "introduction" value
 * @method School              setImageOne()           Sets the current record's "image_one" value
 * @method School              setImageTwo()           Sets the current record's "image_two" value
 * @method School              setImageThree()         Sets the current record's "image_three" value
 * @method School              setApprove()            Sets the current record's "approve" value
 * @method School              setPublish()            Sets the current record's "publish" value
 * @method School              setIsHidden()           Sets the current record's "is_hidden" value
 * @method School              setStartDate()          Sets the current record's "start_date" value
 * @method School              setEndDate()            Sets the current record's "end_date" value
 * @method School              setParentId()           Sets the current record's "parent_id" value
 * @method School              setParentLanguage()     Sets the current record's "parent_language" value
 * @method School              setLastModifier()       Sets the current record's "last_modifier" value
 * @method School              setArticle()            Sets the current record's "Article" collection
 * 
 * @package    mgto
 * @subpackage model
 * @author     Jeremy and Andy
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSchool extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('school');
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('address', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('icon', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('tel', 'string', 245, array(
             'type' => 'string',
             'length' => 245,
             ));
        $this->hasColumn('fax', 'string', 245, array(
             'type' => 'string',
             'length' => 245,
             ));
        $this->hasColumn('website', 'string', 245, array(
             'type' => 'string',
             'length' => 245,
             ));
        $this->hasColumn('pedagogical_system', 'string', 245, array(
             'type' => 'string',
             'length' => 245,
             ));
        $this->hasColumn('property', 'string', 200, array(
             'type' => 'string',
             'length' => 200,
             ));
        $this->hasColumn('school_system', 'string', 500, array(
             'type' => 'string',
             'length' => 500,
             ));
        $this->hasColumn('open_stage', 'string', 500, array(
             'type' => 'string',
             'length' => 500,
             ));
        $this->hasColumn('latitude', 'string', 145, array(
             'type' => 'string',
             'length' => 145,
             ));
        $this->hasColumn('longitude', 'string', 145, array(
             'type' => 'string',
             'length' => 145,
             ));
        $this->hasColumn('characterstics', 'string', 500, array(
             'type' => 'string',
             'length' => 500,
             ));
        $this->hasColumn('honor_roll', 'string', 600, array(
             'type' => 'string',
             'length' => 600,
             ));
        $this->hasColumn('facilities', 'string', 600, array(
             'type' => 'string',
             'length' => 600,
             ));
        $this->hasColumn('mission', 'string', 500, array(
             'type' => 'string',
             'length' => 500,
             ));
        $this->hasColumn('remark', 'string', 500, array(
             'type' => 'string',
             'length' => 500,
             ));
        $this->hasColumn('introduction', 'longtext', null, array(
             'type' => 'longtext',
             ));
        $this->hasColumn('image_one', 'string', 145, array(
             'type' => 'string',
             'length' => 145,
             ));
        $this->hasColumn('image_two', 'string', 145, array(
             'type' => 'string',
             'length' => 145,
             ));
        $this->hasColumn('image_three', 'string', 145, array(
             'type' => 'string',
             'length' => 145,
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
        $this->hasColumn('parent_language', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
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
        $this->hasMany('Article', array(
             'local' => 'id',
             'foreign' => 'school_id'));

        $i18n0 = new Doctrine_Template_I18n(array(
             'fields' => 
             array(
              0 => 'name',
              1 => 'address',
              2 => 'pedagogical_system',
              3 => 'property',
              4 => 'school_system',
              5 => 'open_stage',
              6 => 'characterstics',
              7 => 'honor_roll',
              8 => 'facilities',
              9 => 'mission',
              10 => 'remark',
              11 => 'introduction',
              12 => 'parent_language',
              13 => 'is_hidden',
              14 => 'link_target',
              15 => 'is_link',
              16 => 'approve',
              17 => 'publish',
             ),
             ));
        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($i18n0);
        $this->actAs($timestampable0);
    }
}