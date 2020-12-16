FROM		debian:buster

# UPDATE AND INSTALL PROGRAMS...
RUN		apt-get update && apt-get install -y \
		nginx \
		mariadb-server \
		php-mysql \
		php-mbstring \
		openssl \
		vim \
		wget \
		php7.3-fpm

# SET NGINX CONFIG...
WORKDIR	/etc/nginx/sites-available
COPY	./srcs/nginx.conf .
RUN		ln -s /etc/nginx/sites-available/nginx.conf /etc/nginx/sites-enabled

# SET WORD-PRESS...
WORKDIR	/var/www/server
COPY	./srcs/wp-config.php ./wordpress/
RUN		wget https://wordpress.org/latest.tar.gz
RUN		tar -xzvf latest.tar.gz
RUN		rm -rf latest.tar.gz
RUN		chown -R www-data:www-data /var/www/server/wordpress

# SCRIPT FOR CHANGE AUTOINDEX ON/OFF STATE...
WORKDIR	/
COPY	./srcs/autoindex.sh .
COPY	./srcs/run.sh .

# DOWNLOAD PHP-MYADMIN...
RUN		wget https://files.phpmyadmin.net/phpMyAdmin/5.0.4/phpMyAdmin-5.0.4-all-languages.tar.gz
RUN		tar -xzvf phpMyAdmin-5.0.4-all-languages.tar.gz
RUN		rm -rf phpMyAdmin-5.0.4-all-languages.tar.gz
RUN		mv phpMyAdmin-5.0.4-all-languages/ /var/www/server/phpmyadmin
COPY	./srcs/config.inc.php /var/www/server/phpmyadmin

# SET EXPOSED PORTS...
EXPOSE	80 443

# RUN BASH SCRIPTS...
CMD		bash run.sh
