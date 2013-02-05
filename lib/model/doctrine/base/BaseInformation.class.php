<?php

/**
 * BaseInformation
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $realtime_temp
 * @property string $humidity
 * @property string $high_temp
 * @property string $low_temp
 * @property string $weather_info
 * @property string $wind_level
 * @property string $edu_youth
 * @property string $approve
 * @property string $publish
 * @property boolean $is_hidden
 * @property timestamp $start_date
 * @property timestamp $end_date
 * @property integer $parent_id
 * @property string $last_modifier
 * 
 * @method string      getRealtimeTemp()  Returns the current record's "realtime_temp" value
 * @method string      getHumidity()      Returns the current record's "humidity" value
 * @method string      getHighTemp()      Returns the current record's "high_temp" value
 * @method string      getLowTemp()       Returns the current record's "low_temp" value
 * @method string      getWeatherInfo()   Returns the current record's "weather_info" value
 * @method string      getWindLevel()     Returns the current record's "wind_level" value
 * @method string      getEduYouth()      Returns the current record's "edu_youth" value
 * @method string      getApprove()       Returns the current record's "approve" value
 * @method string      getPublish()       Returns the current record's "publish" value
 * @method boolean     getIsHidden()      Returns the current record's "is_hidden" value
 * @method timestamp   getStartDate()     Returns the current record's "start_date" value
 * @method timestamp   getEndDate()       Returns the current record's "end_date" value
 * @method integer     getParentId()      Returns the current record's "parent_id" value
 * @method string      getLastModifier()  Returns the current record's "last_modifier" value
 * @method Information setRealtimeTemp()  Sets the current record's "realtime_temp" value
 * @method Information setHumidity()      Sets the current record's "humidity" value
 * @method Information setHighTemp()      Sets the current record's "high_temp" value
 * @method Information setLowTemp()       Sets the current record's "low_temp" value
 * @method Information setWeatherInfo()   Sets the current record's "weather_info" value
 * @method Information setWindLevel()     Sets the current record's "wind_level" value
 * @method Information setEduYouth()      Sets the current record's "edu_youth" value
 * @method Information setApprove()       Sets the current record's "approve" value
 * @method Information setPublish()       Sets the current record's "publish" value
 * @method Information setIsHidden()      Sets the current record's "is_hidden" value
 * @method Information setStartDate()     Sets the current record's "start_date" value
 * @method Information setEndDate()       Sets the current record's "end_date" value
 * @method Information setParentId()      Sets the current record's "parent_id" value
 * @method Information setLastModifier()  Sets the current record's "last_modifier" value
 * 
 * @package    mgto
 * @subpackage model
 * @author     Jeremy and Andy
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseInformation extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('information');
        $this->hasColumn('realtime_temp', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('humidity', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('high_temp', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('low_temp', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('weather_info', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('wind_level', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('edu_youth', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
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
        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}