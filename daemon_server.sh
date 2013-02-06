#!/bin/sh

## nohup ./daemon_server.sh &

while [ true ]
do
  if [ ! `pgrep -f "minecraft_server.jar"` ]; then
    ##give the server a few seconds to calm the fuck down
    sleep 10
    nohup ./run_server.sh &
  fi
  sleep 1
done