@echo off

FOR /f "tokens=*" %%i IN ('docker ps -a -q') DO docker rm -f %%i
docker build -t tehraven/dark .
docker run -p 80:80 tehraven/dark