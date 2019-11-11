FROM webdevops/php-nginx:7.3
RUN cp /usr/share/zoneinfo/Asia/Shanghai /etc/localtime \
&& echo 'Asia/Shanghai' >/etc/timezone
RUN rmdir  /app
COPY / /app
RUN chmod -R 777 /app/bootstrap && chmod -R 777 /app/storage
