import os, collections, signal, sys, subprocess, socket
from time import sleep

if (sys.argv[1] == 'multi') or (sys.argv[1] == 'single'):
   bootfile = open('/sbin/piforce/bootfile.txt', 'w')
   bootfile.write(sys.argv[1])
   file.close
   
if (sys.argv[1] == 'auto-off') or (sys.argv[1] == 'always-on'):
   bootfile = open('/sbin/piforce/powerfile.txt', 'w')
   bootfile.write(sys.argv[1])
   file.close

if (sys.argv[1] == 'simple') or (sys.argv[1] == 'advanced'):
   bootfile = open('/sbin/piforce/menumode.txt', 'w')
   bootfile.write(sys.argv[1])
   file.close