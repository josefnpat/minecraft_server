#!/bin/sh

## server

mkdir server
./update_server.sh

## backups

mkdir backups

## www

touch www/locations.txt

mkdir www/maps

## c10t

## Build it yourself mate.

git clone https://github.com/udoprog/c10t.git