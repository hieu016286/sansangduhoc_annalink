<?php 
/**
	Admin Page Framework v3.8.34 by Michael Uno 
	Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
	<http://en.michaeluno.jp/index-wp-mysql-for-speed>
	Copyright (c) 2013-2021, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT> */
class Imfs_AdminPageFramework_Form_View___CSS_Section extends Imfs_AdminPageFramework_Form_View___CSS_Base {
    protected function _get() {
        return $this->_getFormSectionRules();
    }
    private function _getFormSectionRules() {
        $_sCSSRules = ".index-wp-mysql-for-speed-section .form-table {margin-top: 0;}.index-wp-mysql-for-speed-section .form-table td label { display: inline;}.index-wp-mysql-for-speed-section-tabs-contents {margin-top: 1em;}.index-wp-mysql-for-speed-section-tabs { margin: 0;}.index-wp-mysql-for-speed-tab-content { padding: 0.5em 2em 1.5em 2em;margin: 0;border-style: solid;border-width: 1px;border-color: #dfdfdf;background-color: #fdfdfd; }.index-wp-mysql-for-speed-section-tab {background-color: transparent;vertical-align: bottom; margin-bottom: -2px;margin-left: 0px;margin-right: 0.5em;background-color: #F1F1F1;font-weight: normal;}.index-wp-mysql-for-speed-section-tab:hover {background-color: #F8F8F8;}.index-wp-mysql-for-speed-section-tab.active {background-color: #fdfdfd; }.index-wp-mysql-for-speed-section-tab h4 {margin: 0;padding: 0.4em 0.8em;font-size: 1.12em;vertical-align: middle;white-space: nowrap;display:inline-block;font-weight: normal;}.index-wp-mysql-for-speed-section-tab.nav-tab {padding: 0.2em 0.4em;}.index-wp-mysql-for-speed-section-tab.nav-tab a {text-decoration: none;color: #464646;vertical-align: inherit; outline: 0; }.index-wp-mysql-for-speed-section-tab.nav-tab a:focus { box-shadow: none;}.index-wp-mysql-for-speed-section-tab.nav-tab.active a {color: #000;}.index-wp-mysql-for-speed-content ul.index-wp-mysql-for-speed-section-tabs > li.index-wp-mysql-for-speed-section-tab {list-style-type: none;margin: -4px 4px -1px 0;}.index-wp-mysql-for-speed-repeatable-section-buttons {float: right;clear: right;margin-top: 1em;}.index-wp-mysql-for-speed-repeatable-section-buttons.disabled > .repeatable-section-button {color: #edd;border-color: #edd;}.index-wp-mysql-for-speed-section-caption {text-align: left;margin: 0;}.index-wp-mysql-for-speed-section .index-wp-mysql-for-speed-section-title {}.index-wp-mysql-for-speed-sections.sortable-section > .index-wp-mysql-for-speed-section {padding: 1em 1.8em 1em 2.6em;}.index-wp-mysql-for-speed-sections.sortable-section > .index-wp-mysql-for-speed-section.is_subsection_collapsible {display: block; float: none;border: 0px;padding: 0;background: transparent;}.index-wp-mysql-for-speed-sections.sortable-section > .index-wp-mysql-for-speed-tab-content {display: block; float: none;border: 0px;padding: 0.5em 2em 1.5em 2em;margin: 0;border-style: solid;border-width: 1px;border-color: #dfdfdf;background-color: #fdfdfd;}.index-wp-mysql-for-speed-sections.sortable-section > .index-wp-mysql-for-speed-section {margin-bottom: 1em;}.index-wp-mysql-for-speed-section {margin-bottom: 1em; }.index-wp-mysql-for-speed-sectionset {margin-bottom: 1em; display:inline-block;width:100%;}.index-wp-mysql-for-speed-section > .index-wp-mysql-for-speed-sectionset {margin-left: 2em;}";
        $_sCSSRules.= $this->___getForWP47();
        $_sCSSRules.= $this->___getForWP53();
        return $_sCSSRules;
    }
    private function ___getForWP47() {
        if (version_compare($GLOBALS['wp_version'], '4.7', '<')) {
            return '';
        }
        return ".index-wp-mysql-for-speed-content ul.index-wp-mysql-for-speed-section-tabs > li.index-wp-mysql-for-speed-section-tab {margin-bottom: -2px;}";
    }
    private function ___getForWP53() {
        if (version_compare($GLOBALS['wp_version'], '5.3', '<')) {
            return '';
        }
        return ".index-wp-mysql-for-speed-repeatable-section-buttons {display: flex;}.repeatable-section-button.button {margin: 0 0.1em;display: flex;align-items: center;justify-content: center;}.repeatable-section-button.button.button-large {padding: 0;min-width: unset;min-height: unset;width: 32px;height: 32px;}.repeatable-section-button .dashicons {font-size: 1.32em;display: flex;align-items: center;justify-content: center;width: unset;}";
    }
    }
    