#!/bin/bash

# SET ONLY OWNER RIGHTS...
chmod 600 /run.sh
chown -R www-data:www-data /var/www/
chmod -R 700 /var/www/

# RUNS SSL...
openssl req -newkey rsa:2048 -days 365 -nodes -x509 \
	-subj "/C=RU/ST=Tatarstan/L=Kazan/O=21School/OU=21School-Kazan/CN=localhost" \
	-keyout /etc/ssl/private/nginx-selfsigned.key \
	-out /etc/ssl/certs/nginx-selfsigned.crt

chmod 600 /etc/ssl/private/nginx-selfsigned.key /etc/ssl/certs/nginx-selfsigned.crt


# WORDPRESS DATABASE...
db_name='mydb'
username='lessie'
password='password'
hostname='localhost'

service mysql start
mysql -e "CREATE DATABASE $db_name;"
mysql -e "CREATE USER '$username'@'localhost' IDENTIFIED BY '$password';"
mysql -e "GRANT ALL PRIVILEGES ON $db_name.* TO '$username'@'$hostname' WITH GRANT OPTION;"
mysql -e "UPDATE mysql.user SET plugin='mysql_native_password' WHERE user='$username';"
mysql -e "FLUSH PRIVILEGES;"

#PHPMYADMIN DATABASE
mysql < /var/www/server/phpmyadmin/sql/create_tables.sql

# STARTS FT_SERVER
service nginx start
service php7.3-fpm start
service mysql start

bash
