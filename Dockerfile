FROM ubuntu:19.10
MAINTAINER JXU <.com>

# Setup environment
ENV DEBIAN_FRONTEND noninteractive
# Update sources
RUN apt-get update -y

# install http
RUN apt-get install -y apache2 vim bash-completion unzip
RUN mkdir -p /var/lock/apache2 /var/run/apache2

# install php
RUN apt-get install -y php5 php5-mysql php5-dev php5-gd php5-memcache php5-pspell php5-snmp snmp php5-xmlrpc libapache2-mod-php5 php5-cli
RUN yum install -y php php-mysql php-devel php-gd php-pecl-memcache php-pspell php-snmp php-xmlrpc php-xml

EXPOSE 80
# CMD ["/usr/sbin/apache2", "-DFOREGROUND"] 
CMD /bin/bash -c "source /etc/apache2/envvars && exec /usr/sbin/apache2 -DFOREGROUND"
# ENTRYPOINT "source /etc/apache2/envvars && exec /usr/sbin/apache2 -DFOREGROUND"
