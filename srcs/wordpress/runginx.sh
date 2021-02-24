openrc reboot

rc-service nginx start
rc-service php-fpm7 start
/etc/init.d/mariadb setup
rc-service mariadb start

mysql -uroot -proot -e "CREATE DATABASE wordpress"
mysql wordpress < /wordpress.sql
mysql -uroot -proot -e "CREATE USER 'majdahim'@'localhost' IDENTIFIED BY 'majdahim'"
mysql -uroot -proot -e "GRANT ALL PRIVILEGES ON *.* TO 'majdahim'@'localhost'"
mysql -e "FLUSH PRIVILEGES;"
rc-service mariadb restart
rc-service php-fpm7 restart

tail -F /dev/null
bin/bash