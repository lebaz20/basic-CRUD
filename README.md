# basic-CRUD
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/lebaz20/basic-CRUD/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/lebaz20/basic-CRUD/?branch=master) [![Build Status](https://scrutinizer-ci.com/g/lebaz20/basic-CRUD/badges/build.png?b=master)](https://scrutinizer-ci.com/g/lebaz20/basic-CRUD/build-status/master)

basic CRUD using [symfony 3 framework](http://symfony.com/doc/current/index.html)

A simple CRUD accessible via `/setting` which holds key/value pairs

Data is saved via sqlite engine

App is loaded via apache2 ,Following a sample for the host file;
```
<VirtualHost *:80>

        ServerName local-crud.com

        ServerAdmin webmaster@localhost
        DocumentRoot /path/to/web
        <Directory "/path/to/web">
                AllowOverride All
                Order Allow,Deny
                Allow from All
        </Directory>
</VirtualHost>
```
