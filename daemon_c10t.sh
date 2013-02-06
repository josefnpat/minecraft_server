#!/bin/sh

## nohup ./daemon_c10t.sh

while [ true ]
do
  ./run_c10t.sh
  sleep 86400 # once a day
done


