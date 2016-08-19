#!/usr/bin/env bash

for i in $(docker ps --all --format "table {{ .ID }}"); do docker kill $i; done
for i in $(docker ps --all --format "table {{ .ID }}"); do docker rm $i; done
for i in $(docker volume ls -qf "dangling=true"); do docker volume rm $i; done
for i in $(docker network ls -q); do docker network disconnect $i; done
for i in $(docker network ls -q); do docker network rm $i; done

docker build -t arcameli/coordinate:latest .
docker run --name 'coordinate' -d -p 80:80 arcameli/coordinate:latest

docker ps
