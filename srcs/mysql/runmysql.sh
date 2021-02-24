openrc reboot

/etc/init.d/mariadb setup
rc-service mariadb start

mysql -u root -e "CREATE USER 'majdahim'@'%' IDENTIFIED BY 'majdahim'"
mysql -u root -e "CREATE DATABASE phpmyadmin;"
mysql -u root -e "CREATE DATABASE wordpress;"
mysql -u root -e "GRANT ALL PRIVILEGES ON * . * TO 'majdahim'@'%'"
mysql -u root -e "FLUSH PRIVILEGES;"

mysql phpmyadmin < /phpmyadmin.sql
mysql wordpress < /wordpress.sql
rc-service mariadb restart

tail -F /dev/null