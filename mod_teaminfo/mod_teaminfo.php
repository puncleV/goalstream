<?php
defined('_JEXEC') or die('Restricted access');

require_once __DIR__ . '/helper.php';

$teamInfo = modTeamInfoHelper::getTeamInfo();
require JModuleHelper::getLayoutPath('mod_teaminfo', $params->get('layout', 'default'));
?>