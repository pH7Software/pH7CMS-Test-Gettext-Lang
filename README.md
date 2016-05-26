# Test Gettext Lang

The script will allow you to test quickly, debugging easily and much easier than with *pH7CMS* if Gettext is correctly installed or not.

It will check for the French language (`fr_FR`), but you can change this easily by changing the locale folder and the [locale constant](https://github.com/pH7Software/pH7CMS-Test-Gettext-Lang/blob/master/index.php#L14).


## Prerequisites

* PHP 5.4 or higher
* Gettext properly installed
    * `sudo apt-get install gettext` (Debian / Ubuntu)
    * `sudo apt-get install php-gettext` (Debian / Ubuntu)
    * `sudo apt-get install locales` (Debian / Ubuntu)


## How It Works?

In a lot of cases (even when Gettext is installed on the server), Gettext won't work for some reason (and this is not caused by pH7CMS!) To check if it is correctly installed or to debug if Gettext is not working, please play with this script.


### *In most cases when it failed, it's because the OS (the system of the server) doesn't recognised the locale (the language) set by Gettext*

## How To Install the missing locale (language) on my server?

For Ubuntu and other OS based on Debian, you can see what languages (locales) are installed on the OS (server) by typing `locale -a` in your terminal.

If you don't find the language of your Gettext translation, you will have to install the locale for your language so the server will reconize the language of your site.

For the example, it will be French (as this script uses French locale). If French is not the language you need, you will have to change it to yours (e.g., `ru_RU` for Russian, `es_ES` for Spanish, `it_IT` for Italian, `de_DE` for German, `nl_NL` for Dutch, ...).

* `sudo locale-gen fr_FR`
* `sudo locale-gen fr_FR.UTF-8`
* `sudo dpkg-reconfigure locales`


## Website

[pH7CMS](http://ph7cms.com)


## Author

Pierre-Henry Soria


## Contact Me

By email at: *phy [AT] hizup [D0T] uk* or at: *ph7software [AT] gmail [D0T] com*
