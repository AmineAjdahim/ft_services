FROM alpine:3.12

RUN apk add wget libc6-compat

RUN wget https://dl.grafana.com/oss/release/grafana-7.4.3.linux-amd64.tar.gz
RUN tar -zxvf grafana-7.4.3.linux-amd64.tar.gz
COPY grafana.sh /
COPY grafana.db /grafana-7.4.3/data/
RUN chmod -x grafana.sh
CMD [ "sh", "grafana.sh" ]
EXPOSE 3000