import os, sys

bashCommand = 'cp /var/www/html/csv/romsinfo.csv /boot/config/romsinfo.csv'
os.system(bashCommand)
shutdwn = 'sudo shutdown now'
os.system(shutdwn)