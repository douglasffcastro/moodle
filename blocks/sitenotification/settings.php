<?php
  defined('MOODLE_INTERNAL') || die();

  if($hassiteconfig) {
    $settings = new admin_settingpage(
      'block_sitenotification',
      get_string('adminpageheading', 'block_sitenotification')
    );

    $settings->add(new admin_setting_heading(
      'block_sitenotification/generalheading',
      get_string('generalheading', 'block_sitenotification'),
      ''
    ));

    $settings->add(new admin_setting_configcheckbox(
      'block_sitenotification/enabled',
      get_string('shownotification', 'block_sitenotification'),
      '',
      ''
    ));

    $settings->add(new admin_setting_configtext(
      'block_sitenotification/notificationmessage',
      get_string('notificationmessage', 'block_sitenotification'),
      '',
      ''
    ));

    $arrColors = array("primary" => "primary", 
                       "info" => "info", 
                       "warning" => "warnin",
                       "danger" => "danger",
                       "success" => "success",
                       "light" => "light",
                       "dark" => "dark");

    $currentColor = 'light';

    $settings->add(new admin_setting_configselect(
      'block_sitenotification/notificationalertcolor',
      get_string('notificationcolor', 'block_sitenotification'),
      get_string('notificationcolor_desc', 'block_sitenotification'),
      $currentColor,
      $arrColors
    ));

    $ADMIN->add('messaging', $settings);
  }