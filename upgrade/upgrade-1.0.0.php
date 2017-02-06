<?php

if (!defined('_TB_VERSION_')) {
    exit;
}

function upgrade_module_1_0_0($module)
{
    /** @var DashGoals $module */
    return ($module->registerHook('displayBackOfficeHeader'));
}
