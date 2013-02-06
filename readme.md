# Minecraft Server

## by josefnpat

### Requirements;

* Java 1.6
* git
* Apache & PHP

### Setup

1. Run the setup `./setup.sh`
2. Make c10t: https://github.com/udoprog/c10t
3. Softlink (`ln -s`) the www folder to your host directory (e.g. `/var/www/mc`)
4. 
### Scripts

The daemon scripts are best run with `nohup`. e.g. `nohup ./daemon_server.sh &`.

* `setup.sh` - This will download minecraft and c10t and configure some basic folders
* `update_server.sh` - This will move `minecraft_server.jar` to `minecraft_server.jar.old` and redownload the server.
* `run_server.sh` - This will run the server without a daemon.
* `daemon_server.sh` - This will run `run_server.sh` if the server isn't running.
* `run_c10t.sh` - This will run c10t.
* `daemon_c10t.sh` - This will run `run_c10t.sh` once every day.
* `run_backup.sh` - This will backup the current world.
* `daemon_backup.sh` - This will run `run_backup.sh` once every day.

### Configurable Files

* `www/locations.txt` - Any text wrapped with [] will be replaced with the images in `www/images/`.
