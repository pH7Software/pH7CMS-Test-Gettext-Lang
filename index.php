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

mb_internal_encoding(PH7_ENCODING);
mb_http_output(PH7_ENCODING);
mb_http_input(PH7_ENCODING);
mb_language('uni');
mb_regex_encoding(PH7_ENCODING);

textdomain('global');
bindtextdomain('global',  __DIR__ . '/langs/' . PH7_LANG_NAME . '/LC_MESSAGES/global');
bind_textdomain_codeset(PH7_LANG_NAME, PH7_ENCODING);

/*** Set locale environment variables for gettext ***/
putenv('LC_ALL=' . PH7_LANG_NAME);
if (!setlocale(LC_ALL, 'PH7_LANG_NAME')) {
    echo '"setlocale" failed: locale function isn\'t available on your web host/server or the given local doesn\'t exist.<br /><br />' . "\r\n";
}

$sRes = gettext('Sign in to Admin Panel.');
if ($sRes === 'Sign in to Admin Panel.') {
    echo "Translation Failed: Original Message was returned instead.<br /><br />\r\n";
} else {
    echo "Translated Message:\r\n" . $sRes;
}