<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * informatik module upgrade code
 *
 * This file keeps track of upgrades to
 * the theme plugin
 *
 * Sometimes, changes between versions involve
 * alterations to database structures and other
 * major things that may lose the effort they've put
 * into customising and setting up your theme.
 *
 * The upgrade function in this file will attempt
 * to perform all the necessary actions to upgrade
 * your older installation to the current version.
 *
 * If there's something it cannot do itself, it
 * will tell you what you need to do.
 *
 * The commands in here will all be database-neutral,
 * using the methods of database_manager class
 *
 * Please do not forget to use upgrade_set_timeout()
 * before any action that may take longer time to finish.
 *
 * @package    theme
 * @subpackage informatik
 * @copyright  Mediatouch 2000 (http://mediatouch.it/)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

function xmldb_theme_informatik_install() {

    // We need here to check whether or not the theme has been installed.
    // If it has been installed then we need to change the name of the settings to the new names.
    // If it is not installed it won't have any settings yet and we won't need to worry about this.
    $currentsetting = get_config('theme_informatik');
    if (!empty($currentsetting)) {
        // Remove the settings that are no longer used by this theme
        // Remove regionwidth
        unset_config('regionwidth', 'theme_informatik');
        // Remove alwayslangmenu
        unset_config('alwayslangmenu', 'theme_informatik');

        // previous releases of informatik them were not equipped with version number
        // so I can not know if a theme specific variable exists or not.
        // This is the reason why I try to use them both.
        if (!empty($currentsetting->backgroundcolor)) {
            // Create a new config setting called lblockcolumnbgc and give it backgroundcolor's value.
            set_config('lblockcolumnbgc', $currentsetting->backgroundcolor, 'theme_informatik');
            // Remove backgroundcolor
            unset_config('backgroundcolor', 'theme_informatik');
        } elseif (!empty($currentsetting->blockcolumnbgc)) {
            // Create a new config setting called lblockcolumnbgc and give it blockcolumnbgc's value.
            set_config('lblockcolumnbgc', $currentsetting->blockcolumnbgc, 'theme_informatik');
            // Remove blockcolumnbgc
            unset_config('blockcolumnbgc', 'theme_informatik');
        }
    }

    return true;
}