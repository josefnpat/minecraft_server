#!/bin/sh

TIME=`date +%s`
c10t/build/c10t -w server/world/ -o www/maps/$TIME.png --no-log -M 4
convert www/maps/$TIME.png -resize 640x640 www/maps/${TIME}_tn.png