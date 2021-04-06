FROM alpine:3.12

RUN apk add vsftpd && apk add openrc --no-cache && apk add openssl
COPY vsftpd.pem /etc/ssl/private/

COPY vsftpd.conf /etc/vsftpd/vsftpd.conf
COPY script.sh /
CMD [ "sh", "script.sh" ]