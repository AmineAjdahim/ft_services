FROM alpine:3.12

RUN apk add mysql mysql-client && apk add openrc --no-cache

COPY run.sh /
COPY phpmyadmin.sql /
COPY wordpress.sql /
COPY mariadb-server.cnf /etc/my.cnf.d
COPY healthy.sh /
RUN chmod -x run.sh
ENTRYPOINT [ "sh", "run.sh" ]
