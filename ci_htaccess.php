RewriteEngine On
RewriteCond $1 !^(index\.php|assets|images|js|css|uploads|favicon.png)
RewriteCond %(REQUEST_FILENAME) !-f
RewriteCond %(REQUEST_FILENAME) !-d
RewriteRule ^(.*)$ ./index.php/$1 [L]