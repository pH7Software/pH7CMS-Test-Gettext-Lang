<?php
/**
 * Gettext Checker
 *
 * @author         Pierre-Henry Soria <hello@ph7cms.com>
 * @copyright      (c) 2016, Pierre-Henry Soria. All Rights Reserved.
 */

// First off, check if Gettext is installed
 if (!function_exists('gettext')) {
     echo 'You don\'t have Gettext installed on your PHP server.<br /> Please install Gettext first.';
 }

define('PH7_LANG_NAME', 'fr_FR');
define('PH7_ENCODING', 'UTF8');

/*** Set locale environment variables for gettext ***/
putenv('LC_ALL=' . PH7_LANG_NAME);
if (!setlocale(LC_ALL, PH7_LANG_NAME)) {
    echo '"setlocale" failed: locale function isn\'t available on your web host/server or the given local "' . PH7_LANG_NAME . '" doesn\'t exist. Please contact your hosting company to fix that issue.<br /><br />' . "\r\n";
}

textdomain('global');
bindtextdomain('global',  __DIR__ . '/langs');
bind_textdomain_codeset(PH7_LANG_NAME, PH7_ENCODING);

$sRes = gettext('Sign in to Admin Panel.');
if ($sRes === 'Sign in to Admin Panel.') {
    echo "--> Translation Failed: Original Message was returned instead.<br /><br />\r\n";
} else {
    echo "--> Translated Message:\r\n" . $sRes;
}