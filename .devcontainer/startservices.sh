#!/bin/bash
echo "starting nginx and php services"
service nginx start
service php8.1-fpm start
service --status-all