# basic-CRUD
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
