import os, collections, signal, sys, subprocess, socket
import triforcetools
#from systemd import daemon
from time import sleep

logfile = open('/var/www/logs/log.txt', 'w')
rom_dir = '/boot/roms/'

while True:

                try:
                    triforcetools.connect('192.168.1.2', 10703)
                except:
                    #logfile.write("Error:\nConnect Failed")
                    continue

                logfile.write(sys.argv[1])

                triforcetools.HOST_SetMode(0, 1)
                triforcetools.SECURITY_SetKeycode("\x00" * 8)
				#argv[0] not games(selection)
                triforcetools.DIMM_UploadFile(rom_dir+sys.argv[1])
                triforcetools.HOST_Restart()
                triforcetools.TIME_SetLimit(10*60*1000)
                triforcetools.disconnect()

                #logfile.write("Transfer\nComplete!")
                sleep(5)
		exit()
				

