**Virtual host**

	<VirtualHost *:80>
		<Directory "E:/wamp/www/heroku/thanhcong">
			Require all granted
		AllowOverride All
			Order Deny,Allow   
			Allow from all 
	    </Directory>
	    SetEnv APPLICATION_ENV "DEVELOPMENT"
	    DocumentRoot "E:/wamp/www/heroku/thanhcong/public/"
	    ServerName dev.thanhcong.vn	
	    ServerAlias dev.thanhcong.vn
	    ErrorLog "E:/wamp/logs/thanhcong.log"
	    CustomLog "logs/thanhcong.log" common
	</VirtualHost>


**Setup connect database**

For developer: 
	/fuel/app/config/development/db.php

For production
	/fuel/app/config/production/db.php


----
**Code for UserPage**: /fuel/app/modules/frontend
	
- Route User: /fuel/app/modules/frontend/config/routes.php
- Template: /fuel/app/modules/frontend/views/template.php

**Code for AdminPage**: /fuel/app/modules/wsroot
	
- Route Admin: /fuel/app/modules/wsroot/config/routes.php
- Template: /fuel/app/modules/wsroot/views/template.php

**Model**:  /fuel/app/classes/model



----
**Database admin user**: /database_demo/admin_user.sql
For login admin page and manage user  

http://[domian]/wsroot/users/index
