<?php

/**
 * Settings for the informatik theme
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
    // font size reference
    $name = 'theme_informatik/fontsizereference';
    $title = get_string('fontsizereference','theme_informatik');
    $description = get_string('fontsizereferencedesc', 'theme_informatik');
    $default = '13';
    $choices = array(11=>'11px', 12=>'12px', 13=>'13px', 14=>'14px', 15=>'15px', 16=>'16px');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $settings->add($setting);

    // moodle 1.* like setting
    $name = 'theme_informatik/noframe';
    $title = get_string('noframe','theme_informatik');
    $description = get_string('noframedesc', 'theme_informatik');
    $default = '0';
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
    $settings->add($setting);

    // Display logo or heading
    $name = 'theme_informatik/displaylogo';
    $title = get_string('displaylogo','theme_informatik');
    $description = get_string('displaylogodesc', 'theme_informatik');
    $default = '1';
    $choices = array(1=>get_string('moodlelogo', 'theme_informatik'),0=>get_string('heading', 'theme_informatik'));
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $settings->add($setting);

    // Logo file setting
    $name = 'theme_informatik/logo';
    $title = get_string('logo','theme_informatik');
    $description = get_string('logodesc', 'theme_informatik');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $settings->add($setting);

    // page header background colour setting
    $name = 'theme_informatik/headerbgc';
    $title = get_string('headerbgc','theme_informatik');
    $description = get_string('headerbgcdesc', 'theme_informatik');
    $default = '#E3DFD4';
    $previewconfig = array('selector'=>'#page-header', 'style'=>'backgroundColor');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $settings->add($setting);

    // Block content background colour setting
    $name = 'theme_informatik/blockcontentbgc';
    $title = get_string('blockcontentbgc','theme_informatik');
    $description = get_string('blockcontentbgcdesc', 'theme_informatik');
    $default = '#F6F6F6';
    $previewconfig = array('selector'=>'.block .content', 'style'=>'backgroundColor');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $settings->add($setting);

    // Left column colour setting
    $name = 'theme_informatik/lblockcolumnbgc';
    $title = get_string('lblockcolumnbgc','theme_informatik');
    $description = get_string('lblockcolumnbgcdesc', 'theme_informatik');
    $default = '#E3DFD4';
    $previewconfig = array('selector'=>'#page-content, #page-content #region-pre, #page-content #region-post-box', 'style'=>'backgroundColor');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $settings->add($setting);

    // Right column colour setting
    $name = 'theme_informatik/rblockcolumnbgc';
    $title = get_string('rblockcolumnbgc','theme_informatik');
    $description = get_string('rblockcolumnbgcdesc', 'theme_informatik');
    $default = '';
    $previewconfig = array('selector'=>'#page-content #region-post-box, #page-content #region-post', 'style'=>'backgroundColor');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $settings->add($setting);

    // Block region width
    $name = 'theme_informatik/blockcolumnwidth';
    $title = get_string('blockcolumnwidth','theme_informatik');
    $description = get_string('blockcolumnwidthdesc', 'theme_informatik');
    $default = '200';
    $choices = array(150=>'150px', 170=>'170px', 200=>'200px', 240=>'240px', 290=>'290px', 350=>'350px', 420=>'420px');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $settings->add($setting);

    // Foot note setting
    $name = 'theme_informatik/footnote';
    $title = get_string('footnote','theme_informatik');
    $description = get_string('footnotedesc', 'theme_informatik');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $settings->add($setting);

    // Custom CSS file
    $name = 'theme_informatik/customcss';
    $title = get_string('customcss','theme_informatik');
    $description = get_string('customcssdesc', 'theme_informatik');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $settings->add($setting);
}