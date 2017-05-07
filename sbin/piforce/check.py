import os, collections, signal, sys, subprocess, socket
from time import sleep

bootfile = open('/sbin/piforce/bootfile.txt')
bootmode = file.readline(bootfile)
file.close
bootromfile = open('/var/www/logs/log.txt')
bootrom = file.readline(bootromfile)
file.close
powerfile = open('/sbin/piforce/powerfile.txt')
powermode = file.readline(powerfile)
file.close

if (bootmode == 'single'):
  cmd = 'sudo python /sbin/piforce/webforce.py '+bootrom
  scriptfile = open('/var/www/logs/scriptlog.txt', 'w')
  scriptfile.write('Last command run - '+cmd)
  scriptfile.close()
  os.system(cmd)
  
if (powermode == 'auto'):
  shutdwn = 'sudo shutdown -P +10'
  os.system(shutdwn)
