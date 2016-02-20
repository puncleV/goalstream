<?php
defined('_JEXEC') or die('Restricted access');

require_once __DIR__ . '/helper.php';

$teamSquad = modTeamSquadHelper::getTeamSquad();
require JModuleHelper::getLayoutPath('mod_teamsquad', $params->get('layout', 'default'));
?>