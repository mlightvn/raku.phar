[![Donate](https://www.wiauk.org/wp-content/uploads/2017/07/Donate-Box_goodwill.png)](https://www.paypal.me/ngocnam)

# Apache config

```bin
<VirtualHost *:80>
    ServerName "raku.phar"
    DocumentRoot "/var/www/vhosts/raku/src/"
    ErrorLog logs/raku.error.log
    CustomLog logs/raku.access.log combined env=!no_log

    <Directory "/var/www/vhosts/raku/">
	DirectoryIndex index.php index.html
	Options FollowSymLinks
        AllowOverride All
        Require all granted
    </Directory>

</VirtualHost>
```

# How to use
## Require

```php
include_once("Raku.phar");
```

## Declare class:
```php
$raku = new Raku();
```

## Common functions

|Function Name|Parametters|Description|
|-----|-----|-----|
|view($source_file_path, $data);|$source_file_path: php file. Similar to blade file path in Laravel. $data: array of parametters (variables) for source file.|Compile source file to compiled file, then display on screen.|
||||

## Common attributes

|Attribute Name|Type|Description|
|-----|-----|-----|
|isClearCache|boolean: false|True: Clear cached/compiled files every reload. Use for developing. In production, should be false. And clear all cached files in `storage/cache/` folder. `$raku->setClearCache(true)` or `$raku->setClearCache(false)`|

# Sample

Please look in `src/` and `view/` folder for sample source code.

# Deploy to production
+ Deploy latest source code files.
+ Clear all cache in `storage/cache/` folder
