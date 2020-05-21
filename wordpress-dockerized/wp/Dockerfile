FROM laprotectora_wordpress:1.0.0
# ARG buildno
#ARG gitcommithash
# COPY ./wp-data /var/www/wp-data
# RUN mv /var/www/wp-data /var/www/html
RUN apt-get update -y && chown -R www-data:www-data /var/www/html/ && chmod -R 777 /var/www/html/
RUN apt-get install -y iputils-ping nmap mariadb-client-10.3

# CMD ["flask", "run"]