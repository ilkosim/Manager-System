<?php
/*
 *  
 *  
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 *  Version 0.1
 *  Author: Ilko Simeonov  
 */


// Those variables will help you to load css, javascript and some page information
//
// $_main_title This variable will load the page title.
$_main_title="PhpMyAdmin plugin";

// You can define an array with the css files you want to load. The css must be
// on the plugin css folder.
// $_plugin_css=Array('plugin_1.css','plugin_2.css');
// Will load files
// plugins/section_name/plugin_name/css/plugin1.css
// plugins/section_name/plugin_name/css/plugin1.css
$_plugin_css=Array("basic.css");

// You can define an array with the javascript files you want to load.
// javascript files must be under the plugin javascript folder
// $_plugin_javascript=Array('plugin_1.js','plugin_2.js');
// Will load files
// plugins/section_name/plugin_name/javascript/plugin1.js
// plugins/section_name/plugin_name/javascript/plugin1.js
$_plugin_javascript=Array("jquery-1.3.2.min.js","jquery.json-1.3.min.js","ajax.js","json_encode.js");

// Predefined variables:
// $section contains the section folder name.
// $plugin contains the plugin folder name.
// $section and $plugin can be used to make a link to this plugin by just reference
// $html="<a href=\"index.php?section=$section&plugin=$plugin\">This plugin</a>";
// $base_plugin contains the path that must be used as start to includes for
// plugin includes that need the local path.
// example: include_once $base_plugin.'php/my_include.php';
// $url_plugin contains the url base that must be used to include html items
// such as images.
// example: <img src="'.url_plugin.'images/my_image.png">
// $API_core contains the path to the core API folder.
// example: include_once $API_core.'is_active.php';

// Plugin produced data will be output between a <div> structure.
// <div>
//      Plugin output will be here.
// </div>

// Once plugin is finished core will check $html variable and output its content if any is stored.
// Is better to use $html variable to avoid direct call of the plugin from browsers. 78.90.28.140



$html ='
<div class="title2">PhpMyAdmin</div>
<a href="http://10.39.45.72/phpmyadmin/" target="_blank" style="float: right;">Open in a new Window</a><br><br>
<div style="width: 100%; height: 620px; overflow: auto;">
<iframe src ="http://'.$_SERVER['SERVER_ADDR'].'/phpmyadmin" style="width: 720px; height: 600px; border: 1px solid #454545;">
  <p>Your browser does not support iframes.</p>
</iframe>
</div>';


?>