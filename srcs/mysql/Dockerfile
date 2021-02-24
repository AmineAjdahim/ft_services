FROM alpine:3.12

RUN apk add mysql mysql-client && apk add openrc --no-cache

COPY runmysql.sh /
COPY phpmyadmin.sql /
COPY wordpress.sql /
COPY mariadb-server.cnf /etc/my.cnf.d
RUN chmod -x runmysql.sh
ENTRYPOINT [ "sh", "runmysql.sh" ]
