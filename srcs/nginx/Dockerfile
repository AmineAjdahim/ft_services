FROM alpine:3.12

RUN apk update && apk add nginx && apk -U add vim && apk add openrc --no-cache && apk add openssl && apk add openssh
COPY default.conf /etc/nginx/conf.d/
RUN mkdir /run/nginx
RUN echo "<h1>Hello Amine top!</h1>" > /var/www/localhost/htdocs/index.html
COPY nginx-selfsigned.crt etc/ssl/certs/
COPY nginx-selfsigned.key /etc/ssl/private/
COPY init_nginx.sh /
COPY healthy.sh /

RUN adduser -D hdm
RUN echo "hdm:password"|chpasswd
RUN ssh-keygen -A

RUN chmod -x init_nginx.sh
CMD [ "sh", "init_nginx.sh" ]