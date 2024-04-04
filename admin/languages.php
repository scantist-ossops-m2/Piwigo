<?php
// +-----------------------------------------------------------------------+
// | Piwigo - a PHP based photo gallery                                    |
// +-----------------------------------------------------------------------+
// | Copyright(C) 2008-2012 Piwigo Team                  http://piwigo.org |
// | Copyright(C) 2003-2008 PhpWebGallery Team    http://phpwebgallery.net |
// | Copyright(C) 2002-2003 Pierrick LE GALL   http://le-gall.net/pierrick |
// +-----------------------------------------------------------------------+
// | This program is free software; you can redistribute it and/or modify  |
// | it under the terms of the GNU General Public License as published by  |
// | the Free Software Foundation                                          |
// |                                                                       |
// | This program is distributed in the hope that it will be useful, but   |
// | WITHOUT ANY WARRANTY; without even the implied warranty of            |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU      |
// | General Public License for more details.                              |
// |                                                                       |
// | You should have received a copy of the GNU General Public License     |
// | along with this program; if not, write to the Free Software           |
// | Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, |
// | USA.                                                                  |
// +-----------------------------------------------------------------------+

if( !defined("PHPWG_ROOT_PATH") )
{
  die ("Hacking attempt!");
}

include_once(PHPWG_ROOT_PATH.'admin/include/tabsheet.class.php');

$my_base_url = get_root_url().'admin.php?page=languages';

if (isset($_GET['tab']))
{
  check_input_parameter('tab', $_GET, false, '/^(installed|update|new)$/');
  $page['tab'] = $_GET['tab'];
}
else
{
  $page['tab'] = 'installed';
}

$tabsheet = new tabsheet();
$tabsheet->add('installed', l10n('Installed Languages'), $my_base_url.'&amp;tab=installed');
$tabsheet->add('update', l10n('Check for updates'), $my_base_url.'&amp;tab=update');
$tabsheet->add('new', l10n('Add New Language'), $my_base_url.'&amp;tab=new');
$tabsheet->select($page['tab']);
$tabsheet->assign();

if ($page['tab'] == 'update')
  include(PHPWG_ROOT_PATH.'admin/updates_ext.php');
else
  include(PHPWG_ROOT_PATH.'admin/languages_'.$page['tab'].'.php');

?>