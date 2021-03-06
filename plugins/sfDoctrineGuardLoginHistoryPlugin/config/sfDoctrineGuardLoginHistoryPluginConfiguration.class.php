<?php

/**
 * sfDoctrineGuardLoginHistoryPlugin configuration.
 * 
 * @package     sfDoctrineGuardLoginHistoryPlugin
 * @subpackage  config
 * @author      caefer <caefer@ical.ly>
 * @version     SVN: $Id: PluginConfiguration.class.php 17207 2009-04-10 15:36:26Z Kris.Wallsmith $
 */
class sfDoctrineGuardLoginHistoryPluginConfiguration extends sfPluginConfiguration
{
  const VERSION = '1.0.0-DEV';

  /**
   * @see sfPluginConfiguration
   */
  public function initialize()
  {
    $this->dispatcher->connect('user.change_authentication', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('api.approve', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('api.disapprove', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('api.publish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('api.dispublish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('api.edit', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('api.delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('api.batch_delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('api.new', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('user.new', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('user.edit', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('user.delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('user.batch_delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('languages.new', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('languages.edit', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('languages.delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('languages.batch_delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('banner.approve', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('banner.disapprove', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('banner.publish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('banner.dispublish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('banner.edit', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('banner.delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('banner.batch_delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('banner.new', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('focuson.approve', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('focuson.disapprove', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('focuson.publish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('focuson.dispublish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('focuson.edit', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('focuson.delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('focuson.batch_delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('focuson.new', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('faq.approve', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('faq.disapprove', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('faq.publish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('faq.dispublish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('faq.edit', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('faq.delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('faq.batch_delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('faq.new', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('exhibition.approve', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('exhibition.disapprove', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('exhibition.publish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('exhibition.dispublish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('exhibition.edit', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('exhibition.delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('exhibition.batch_delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('exhibition.new', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('highlight.approve', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('highlight.disapprove', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('highlight.publish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('highlight.dispublish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('highlight.edit', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('highlight.delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('highlight.batch_delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('highlight.new', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('contact.approve', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('contact.disapprove', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('contact.publish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('contact.dispublish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('contact.edit', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('contact.delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('contact.batch_delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('contact.new', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('generalinfo.approve', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('generalinfo.disapprove', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('generalinfo.publish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('generalinfo.dispublish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('generalinfo.edit', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('generalinfo.delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('generalinfo.batch_delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('generalinfo.new', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('travelagency.approve', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('travelagency.disapprove', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('travelagency.publish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('travelagency.dispublish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('travelagency.edit', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('travelagency.delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('travelagency.batch_delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('travelagency.new', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('localtransportation.approve', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('localtransportation.disapprove', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('localtransportation.publish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('localtransportation.dispublish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('localtransportation.edit', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('localtransportation.delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('localtransportation.batch_delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('localtransportation.new', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('restaurant.approve', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('restaurant.disapprove', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('restaurant.publish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('restaurant.dispublish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('restaurant.edit', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('restaurant.delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('restaurant.batch_delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('restaurant.new', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('hotelclass.approve', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('hotelclass.disapprove', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('hotelclass.publish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('hotelclass.dispublish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('hotelclass.edit', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('hotelclass.delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('hotelclass.batch_delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('hotelclass.new', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('tourguide.approve', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('tourguide.disapprove', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('tourguide.publish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('tourguide.dispublish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('tourguide.edit', array('UserLoginHistoryTable', 'writeLoginHistory'))
;    $this->dispatcher->connect('tourguide.delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('tourguide.batch_delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('tourguide.new', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('gettingtomacau.approve', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('gettingtomacau.disapprove', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('gettingtomacau.publish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('gettingtomacau.dispublish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('gettingtomacau.edit', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('gettingtomacau.delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('gettingtomacau.batch_delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('gettingtomacau.new', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('hotel.approve', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('hotel.disapprove', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('hotel.publish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('hotel.dispublish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('hotel.edit', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('hotel.delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('hotel.batch_delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('hotel.new', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('sightseeing.approve', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('sightseeing.disapprove', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('sightseeing.publish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('sightseeing.dispublish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('sightseeing.edit', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('sightseeing.delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('sightseeing.batch_delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('sightseeing.new', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('walkingtours.approve', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('walkingtours.disapprove', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('walkingtours.publish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('walkingtours.dispublish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('walkingtours.edit', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('walkingtours.delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('walkingtours.batch_delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('walkingtours.new', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('shopping.approve', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('shopping.disapprove', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('shopping.publish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('shopping.dispublish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('shopping.edit', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('shopping.delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('shopping.batch_delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('shopping.new', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('calendar.approve', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('calendar.disapprove', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('calendar.publish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('calendar.dispublish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('calendar.edit', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('calendar.delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('calendar.batch_delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('calendar.new', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('majorevents.approve', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('majorevents.disapprove', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('majorevents.publish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('majorevents.dispublish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('majorevents.edit', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('majorevents.delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('majorevents.batch_delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('majorevents.new', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('meetinginmacau.approve', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('meetinginmacau.disapprove', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('meetinginmacau.publish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('meetinginmacau.dispublish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('meetinginmacau.edit', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('meetinginmacau.delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('meetinginmacau.batch_delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('meetinginmacau.new', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('tourismcontacts.approve', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('tourismcontacts.disapprove', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('tourismcontacts.publish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('tourismcontacts.dispublish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('tourismcontacts.edit', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('tourismcontacts.delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('tourismcontacts.batch_delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('tourismcontacts.new', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('oversearep.approve', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('oversearep.disapprove', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('oversearep.publish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('oversearep.dispublish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('oversearep.edit', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('oversearep.delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('oversearep.batch_delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('oversearep.new', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('hotline.approve', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('hotline.disapprove', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('hotline.publish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('hotline.dispublish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('hotline.edit', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('hotline.delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('hotline.batch_delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('hotline.new', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('msaroffices.approve', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('msaroffices.disapprove', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('msaroffices.publish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('msaroffices.dispublish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('msaroffices.edit', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('msaroffices.delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('msaroffices.batch_delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('msaroffices.new', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('macautraveltalk.approve', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('macautraveltalk.disapprove', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('macautraveltalk.publish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('macautraveltalk.dispublish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('macautraveltalk.edit', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('macautraveltalk.delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('macautraveltalk.batch_delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('macautraveltalk.new', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('ezone.approve', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('ezone.disapprove', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('ezone.publish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('ezone.dispublish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('ezone.edit', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('ezone.delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('ezone.batch_delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('ezone.new', array('UserLoginHistoryTable', 'writeLoginHistory'));

    $this->dispatcher->connect('whaton.approve', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('whaton.disapprove', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('whaton.publish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('whaton.dispublish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('whaton.edit', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('whaton.delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('whaton.batch_delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('whaton.new', array('UserLoginHistoryTable', 'writeLoginHistory'));

    $this->dispatcher->connect('entertainment.approve', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('entertainment.disapprove', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('entertainment.publish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('entertainment.dispublish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('entertainment.edit', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('entertainment.delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('entertainment.batch_delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('entertainment.new', array('UserLoginHistoryTable', 'writeLoginHistory'));

    $this->dispatcher->connect('informationcounter.approve', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('informationcounter.disapprove', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('informationcounter.publish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('informationcounter.dispublish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('informationcounter.edit', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('informationcounter.delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('informationcounter.batch_delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('informationcounter.new', array('UserLoginHistoryTable', 'writeLoginHistory'));

    $this->dispatcher->connect('usefullink.approve', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('usefullink.disapprove', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('usefullink.publish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('usefullink.dispublish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('usefullink.edit', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('usefullink.delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('usefullink.batch_delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('usefullink.new', array('UserLoginHistoryTable', 'writeLoginHistory'));


    $this->dispatcher->connect('practicalinfo.approve', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('practicalinfo.disapprove', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('practicalinfo.publish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('practicalinfo.dispublish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('practicalinfo.edit', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('practicalinfo.delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('practicalinfo.batch_delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('practicalinfo.new', array('UserLoginHistoryTable', 'writeLoginHistory'));


    $this->dispatcher->connect('entryrequirements.approve', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('entryrequirements.disapprove', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('entryrequirements.publish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('entryrequirements.dispublish', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('entryrequirements.edit', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('entryrequirements.delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('entryrequirements.batch_delete', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('entryrequirements.new', array('UserLoginHistoryTable', 'writeLoginHistory'));
    $this->dispatcher->connect('log', array('UserLoginHistoryTable', 'writeLoginHistory'));

  }
}
