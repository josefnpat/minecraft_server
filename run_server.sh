#!/bin/sh
RAM="512M"
cd server
nohup java -Xmx$RAM -Xms$RAM -jar minecraft_server.jar nogui &
