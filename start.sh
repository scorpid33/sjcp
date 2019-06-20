#!/bin/bash

mysqld_safe --skip-grant-tables &
echo "Waiting for DB..."
until mysqladmin -u root status > /dev/null 2>&1
do
    sleep 1
done
echo 'create database `sjcp`' | mysql -u root
mysql -u root sjcp < ./sjcp.sql

php -S 0.0.0.0:8000
