# Piforce-Web
Piforce-Web is a raspberry pi image which loads creates a wireless access point and re-directs users to a web-bage containing images and links to the naomi games which you own, and allows you to netboot these games from your phone/laptop/tablet.

This has the following advantages:

- no need to open the naomi every time, or to run cables outside the cabinet
- nice web page gui/game selection, which only shows the games you have loaded
- fast boot times
- no soldering required
- just the netdimm, a crossover cable, raspberry pi and a sdcard required
- supports both rasperry pi 1 & 2 (for super speedy boot times)

Piforce-Web uses debugmode's triforce tools to load a NetDIMM board with binaries for a Triforce, Naomi, or Chihiro arcade system. No soldering or additional components other than the raspberry pi, a low-cost USB wireless card and a SD card are required, and game selection is via a web page with images. 

# Requirements
You will need the following items to use Piforce-Web:

- A Raspberry Pi - http://www.raspberrypi.org/
- An SD Card (4GB or greater)
- A suitable wireless card (see below)
- A Naomi, Triforce, or Chihiro arcade system.
- A Netdimm with a zero-key security PIC installed.
- A crossover cable
- The netdimm will need to be configured in static mode with an IP address of 192.168.1.2, netmask of 255.255.255.0, and gateway of 192.168.1.1.

# Download 

The download image can be found here:
http://www.mediafire.com/download/qpzby3nxd7hgqab/Piforce-Web_v1.0.zip

# Installation
All that is needed is to write the image, and hook everything up. Installing the SD card image is the same as for any other raspberry pi install, so if you are familiar with that, then you are good to go, of not, there are a bunch of guides for whatever OS you are running here: http://www.raspberrypi.org/documentation/installation/installing-images/

### Using all the space on your card

In order to create more room on your SD card to put lots of games, the card needs to be re-sized. As with the piforce tool, a partition manager tool like Partition Wizard should be used (http://www.partitionwizard.com/free-partition-manager.html):
- move the Ext4 partition to the end of the card (just click and drag it in the GUI)
- resize the FAT partition to use all unallocated space (just click and drag it in the GUI)

Once done, the card can be used in Windows/Linux/OSx, and there is a /roms directory where the games that you own should be placed.


# Usage

Using the image is very simple:

- On powerup, a wireless network called 'naomi' will be created, you can connect to this with the password 'segarocks' using your phone/laptop/tablet.
- Then visit any page (gg.com, asda.org, a.uk etc) and you will be automatically re-directed to a webpage showing clickable images and links to the games which are on your card. 
- Selecting the image or link will load the game. 


# Supported Wireless Cards

This image was created and confirmed to be working with a Netgear wg111v2. These cards are cheap and widely available. In theory, any card supported by a raspbian wheezy image _should _ work, however I have not tried them, and cannot guarantee it will work. A list of these cards can be found here:
http://elinux.org/RPi_USB_Wi-Fi_Adapters

Note that if you do try multiple cards, you will need to re-burn the image each time, this is as otherwise each new card will be registered as a new interface (wlan0, wlan1, wlan2 etc) which will cause the script to fail. 


I provide this script and image without warranty etc.

# Shouts
Thanks to travistyoj, and debugmode's triforce tools script. As travistyoj says: debugmode's done the heavy lifting this is just an interface for his work.
