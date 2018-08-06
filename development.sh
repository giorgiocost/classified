#!/bin/bash

if [ $* == 'up' ]; then
    docker-compose up -d
    exit 1
fi

if [ $* == 'restart' ]; then
    docker-compose down && docker-compose up -d
    exit 1
fi

if [ $* == 'down' ]; then
    docker-compose down
    exit 1
fi

if [ $* == 'ps' ]; then
    docker-compose ps
    exit 1
fi
 
if [ $# -lt 1 ]; then
   echo "Faltou utilizar pelo menos um argumento!"
   exit 1
fi


#  ./development.sh