# cluster
Web App Data Mining Team 2

Tambahkan file .htaccess berikut

RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^([^/\.]+)/?.php$ index.php?page=$1 [L]

Kemudian simpan di direktori 
