#!/bin/sh

## nohup ./daemon_backup.sh

while [ true ]
do
  ./run_backup.sh
  sleep 86400 # once a day
done


