	<VirtualHost *:80>
		<Directory "E:/wamp/www/thanhlap">
			Options Indexes FollowSymLinks MultiViews
			AllowOverride all
			Order Deny,Allow
			Allow from all
	        Require all granted
		</Directory>
		SetEnv APPLICATION_ENV "DEVELOPMENT"
		DocumentRoot "E:/wamp/www/thanhlap"
		ServerName dev.moitruongthanhlap.com.vn	
	</VirtualHost> 