FROM webdevops/php-nginx:7.3
ENV APOLLO_ENV=dev
ENV APLLO_APP=apollo_demo_key
ENV APOLLO_NAMESPACE=application
ENV APOLLO_KEY=9c966762a0a0fc940c39c70f37f5bfce1f142e29
RUN cp /usr/share/zoneinfo/Asia/Shanghai /etc/localtime \
&& echo 'Asia/Shanghai' >/etc/timezone
RUN rmdir  /app
COPY / /app
RUN chmod -R 777 /app/bootstrap && chmod -R 777 /app/storage
RUN /usr/local/bin/php apollo.php $APOLLO_ENV $APOLLO_APP $APOLLO_NAMESPACE $APOLLO_KEY
