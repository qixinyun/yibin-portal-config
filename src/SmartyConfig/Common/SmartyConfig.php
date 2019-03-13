<?php
namespace SmartyConfig\Common;

class SmartyConfig
{
    public static function configDir()
    {
        $dirArray = array(
            S_ROOT.'vendor/qixinyun/yibin-portal-config/src/SmartyConfig/Yb',
            S_ROOT.'vendor/qixinyun/yibin-portal-config/src/SmartyConfig/Common',
            S_ROOT.'vendor/qixinyun/yibin-portal-config/src/SmartyConfig/',
        );

        return $dirArray;
    }
}
