<?php

/**
 * BaseApp
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property string $url
 * @property string $os_type
 * @property longtext $introduction
 * @property string $logo
 * @property string $screen_capture_one
 * @property string $screen_capture_two
 * @property string $screen_capture_three
 * @property string $screen_capture_four
 * @property string $approve
 * @property string $publish
 * @property boolean $is_hidden
 * @property timestamp $start_date
 * @property timestamp $end_date
 * @property integer $parent_id
 * @property string $last_modifier
 * @property Doctrine_Collection $Comment
 * @property AppIntro $AppIntro
 * 
 * @method string              getName()                 Returns the current record's "name" value
 * @method string              getUrl()                  Returns the current record's "url" value
 * @method string              getOsType()               Returns the current record's "os_type" value
 * @method longtext            getIntroduction()         Returns the current record's "introduction" value
 * @method string              getLogo()                 Returns the current record's "logo" value
 * @method string              getScreenCaptureOne()     Returns the current record's "screen_capture_one" value
 * @method string              getScreenCaptureTwo()     Returns the current record's "screen_capture_two" value
 * @method string              getScreenCaptureThree()   Returns the current record's "screen_capture_three" value
 * @method string              getScreenCaptureFour()    Returns the current record's "screen_capture_four" value
 * @method string              getApprove()              Returns the current record's "approve" value
 * @method string              getPublish()              Returns the current record's "publish" value
 * @method boolean             getIsHidden()             Returns the current record's "is_hidden" value
 * @method timestamp           getStartDate()            Returns the current record's "start_date" value
 * @method timestamp           getEndDate()              Returns the current record's "end_date" value
 * @method integer             getParentId()             Returns the current record's "parent_id" value
 * @method string              getLastModifier()         Returns the current record's "last_modifier" value
 * @method Doctrine_Collection getComment()              Returns the current record's "Comment" collection
 * @method AppIntro            getAppIntro()             Returns the current record's "AppIntro" value
 * @method App                 setName()                 Sets the current record's "name" value
 * @method App                 setUrl()                  Sets the current record's "url" value
 * @method App                 setOsType()               Sets the current record's "os_type" value
 * @method App                 setIntroduction()         Sets the current record's "introduction" value
 * @method App                 setLogo()                 Sets the current record's "logo" value
 * @method App                 setScreenCaptureOne()     Sets the current record's "screen_capture_one" value
 * @method App                 setScreenCaptureTwo()     Sets the current record's "screen_capture_two" value
 * @method App                 setScreenCaptureThree()   Sets the current record's "screen_capture_three" value
 * @method App                 setScreenCaptureFour()    Sets the current record's "screen_capture_four" value
 * @method App                 setApprove()              Sets the current record's "approve" value
 * @method App                 setPublish()              Sets the current record's "publish" value
 * @method App                 setIsHidden()             Sets the current record's "is_hidden" value
 * @method App                 setStartDate()            Sets the current record's "start_date" value
 * @method App                 setEndDate()              Sets the current record's "end_date" value
 * @method App                 setParentId()             Sets the current record's "parent_id" value
 * @method App                 setLastModifier()         Sets the current record's "last_modifier" value
 * @method App                 setComment()              Sets the current record's "Comment" collection
 * @method App                 setAppIntro()             Sets the current record's "AppIntro" value
 * 
 * @package    mgto
 * @subpackage model
 * @author     Jeremy and Andy
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseApp extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('app');
        $this->hasColumn('name', 'string', 145, array(
             'type' => 'string',
             'length' => 145,
             ));
        $this->hasColumn('url', 'string', 245, array(
             'type' => 'string',
             'length' => 245,
             ));
        $this->hasColumn('os_type', 'string', 145, array(
             'type' => 'string',
             'length' => 145,
             ));
        $this->hasColumn('introduction', 'longtext', null, array(
             'type' => 'longtext',
             ));
        $this->hasColumn('logo', 'string', 245, array(
             'type' => 'string',
             'length' => 245,
             ));
        $this->hasColumn('screen_capture_one', 'string', 245, array(
             'type' => 'string',
             'length' => 245,
             ));
        $this->hasColumn('screen_capture_two', 'string', 245, array(
             'type' => 'string',
             'length' => 245,
             ));
        $this->hasColumn('screen_capture_three', 'string', 245, array(
             'type' => 'string',
             'length' => 245,
             ));
        $this->hasColumn('screen_capture_four', 'string', 245, array(
             'type' => 'string',
             'length' => 245,
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
        $this->hasMany('Comment', array(
             'local' => 'id',
             'foreign' => 'app_id'));

        $this->hasOne('AppIntro', array(
             'local' => 'id',
             'foreign' => 'app_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $i18n0 = new Doctrine_Template_I18n(array(
             'fields' => 
             array(
              0 => 'name',
              1 => 'introduction',
              2 => 'is_hidden',
              3 => 'approve',
              4 => 'publish',
             ),
             ));
        $this->actAs($timestampable0);
        $this->actAs($i18n0);
    }
}