<?php

/**
 * BaseVote
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property timestamp $date
 * @property longtext $question
 * @property boolean $is_multiple
 * @property string $approve
 * @property string $publish
 * @property boolean $is_hidden
 * @property timestamp $start_date
 * @property timestamp $end_date
 * @property integer $parent_id
 * @property string $last_modifier
 * @property Doctrine_Collection $Comment
 * @property Doctrine_Collection $VoteOptions
 * 
 * @method timestamp           getDate()          Returns the current record's "date" value
 * @method longtext            getQuestion()      Returns the current record's "question" value
 * @method boolean             getIsMultiple()    Returns the current record's "is_multiple" value
 * @method string              getApprove()       Returns the current record's "approve" value
 * @method string              getPublish()       Returns the current record's "publish" value
 * @method boolean             getIsHidden()      Returns the current record's "is_hidden" value
 * @method timestamp           getStartDate()     Returns the current record's "start_date" value
 * @method timestamp           getEndDate()       Returns the current record's "end_date" value
 * @method integer             getParentId()      Returns the current record's "parent_id" value
 * @method string              getLastModifier()  Returns the current record's "last_modifier" value
 * @method Doctrine_Collection getComment()       Returns the current record's "Comment" collection
 * @method Doctrine_Collection getVoteOptions()   Returns the current record's "VoteOptions" collection
 * @method Vote                setDate()          Sets the current record's "date" value
 * @method Vote                setQuestion()      Sets the current record's "question" value
 * @method Vote                setIsMultiple()    Sets the current record's "is_multiple" value
 * @method Vote                setApprove()       Sets the current record's "approve" value
 * @method Vote                setPublish()       Sets the current record's "publish" value
 * @method Vote                setIsHidden()      Sets the current record's "is_hidden" value
 * @method Vote                setStartDate()     Sets the current record's "start_date" value
 * @method Vote                setEndDate()       Sets the current record's "end_date" value
 * @method Vote                setParentId()      Sets the current record's "parent_id" value
 * @method Vote                setLastModifier()  Sets the current record's "last_modifier" value
 * @method Vote                setComment()       Sets the current record's "Comment" collection
 * @method Vote                setVoteOptions()   Sets the current record's "VoteOptions" collection
 * 
 * @package    mgto
 * @subpackage model
 * @author     Jeremy and Andy
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseVote extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('vote');
        $this->hasColumn('date', 'timestamp', null, array(
             'type' => 'timestamp',
             ));
        $this->hasColumn('question', 'longtext', null, array(
             'type' => 'longtext',
             ));
        $this->hasColumn('is_multiple', 'boolean', null, array(
             'type' => 'boolean',
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
             'foreign' => 'vote_id'));

        $this->hasMany('VoteOptions', array(
             'local' => 'id',
             'foreign' => 'vote_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $i18n0 = new Doctrine_Template_I18n(array(
             'fields' => 
             array(
              0 => 'question',
              1 => 'is_multiple',
              2 => 'is_hidden',
              3 => 'approve',
              4 => 'publish',
             ),
             ));
        $this->actAs($timestampable0);
        $this->actAs($i18n0);
    }
}