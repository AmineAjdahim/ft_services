openrc reboot
# openssl req -x509 -nodes -days 365 -newkey rsa:1024 -keyout /etc/ssl/private/vsftpd.pem -out /etc/ssl/private/vsftpd.pem
# touch /run/openrc/softlevel


echo -e "user\nuser\n" > password
adduser user < password
rm password

chown root:root /home/user
mkdir /home/user/files
chown user:user /home/user/files
rc-service vsftpd start
# bin/bash
tail -F /dev/null