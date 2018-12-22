[![Donate](https://www.wiauk.org/wp-content/uploads/2017/07/Donate-Box_goodwill.png)](https://www.paypal.me/ngocnam)

# Apache config

```bin
<VirtualHost *:80>
    ServerName "simple-coding.raku.nam"
    DocumentRoot "/var/www/vhosts/raku/simple-coding/view/"
    ErrorLog logs/simple-coding.error.log
    CustomLog logs/simple-coding.access.log combined env=!no_log

    <Directory "/var/www/vhosts/raku/simple-coding/">
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
include_once("../Raku/config/bootstrap.php");
```

## Declare class:
```php
$raku = new \Raku\SimpleCoding\SimpleCoding();
```

## Common functions

|Function Name|Parametters|Description|
|-----|-----|-----|
|view($source_file_path, $data);|$source_file_path: php file. Similar to blade file path in Laravel.&br;$data: array of parametters (variables) for source file.|Compile source file to compiled file, then display on screen.|
||||

## Common attributes

|Attribute Name|Type|Description|
|-----|-----|-----|
|isClearCache|boolean: false|True: Clear cached/compiled files every reload. Use for developing. In production, should be false. And clear all cached/compiled files in `storage/compiled/` folder.|

# Sample

Please look in `view/` folder for sample source code.

# Deploy to production
+ Deploy latest source code files.
+ Clear all cache in `storage/compiled/` folder
