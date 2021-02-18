FROM alpine:3.12

RUN apk update && apk add nginx && apk -U add vim && apk add openrc --no-cache
COPY default.conf /etc/nginx/conf.d/
RUN mkdir /run/nginx
RUN echo "<h1>Hello Amine top!</h1>" > /var/www/localhost/htdocs/index.html
COPY init_nginx.sh /

RUN chmod -x init_nginx.sh
CMD [ "sh", "init_nginx.sh" ]