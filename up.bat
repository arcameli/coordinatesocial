@echo off

FOR /f "tokens=*" %%i IN ('docker ps -a -q') DO docker rm -f %%i
docker build -t arcameli/coordinatesocial .
docker-compose up