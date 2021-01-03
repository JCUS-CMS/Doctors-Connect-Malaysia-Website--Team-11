FROM mysql:latest

WORKDIR /mydb 

ENV MYSQL_ROOT_PASSWORD=p@ssw0rd
ENV MYSQL_DATABASE=doctorsconnectdb
ENV MYSQL_USER=admin
ENV MYSQL_PASSWORD=p@ssw0rd

COPY doctorsconnect.sql /docker-entrypoint-initdb.d/

EXPOSE 3306

CMD ["mysqld"]