FROM webdevops/php-nginx:7.3
RUN cp /usr/share/zoneinfo/Asia/Shanghai /etc/localtime \
&& echo 'Asia/Shanghai' >/etc/timezone
RUN rmdir  /app
COPY ../k3y /app
