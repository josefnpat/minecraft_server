#!/bin/sh

TIME=`date +%s`
tar czvf backups/$TIME.tgz server/world/
