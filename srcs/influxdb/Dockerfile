FROM alpine:3.12

RUN apk update
RUN apk add influxdb --no-cache
RUN apk add telegraf --no-cache --repository http://dl-2.alpinelinux.org/alpine/edge/community

RUN mkdir -p /etc/telegraf
COPY telegraf.conf /etc/telegraf/telegraf.conf
COPY start.sh /
RUN chmod -x start.sh
COPY healthy.sh /
# VOLUME [ "/var/run/docker.sock" ]
CMD ["sh", "start.sh"]
EXPOSE 8086