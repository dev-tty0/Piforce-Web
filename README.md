# Piforce-Web

# Fork specific information
# -------------------------

This fork of the original code by devtty0 has an improved user interface and added features - see the help file text for more information. The source code provided here is provided so you can see the methods used. As the SD card image contains images and videos it is too large for upload here. You will need to download the image file from this link and burn to a 4GB or higher SD card: https://drive.google.com/file/d/1y_xnmCFS-C8uvzaVMZc1V3D3PeYaqaqx/view?usp=sharing

Video of changes: https://www.youtube.com/watch?v=ww_yfgAagxA

Update, added card emulator for Initial D, Wangan, F-Zero and Mario Kart GP: https://www.youtube.com/watch?v=lZwW4s91PLQ&t=71s

Current code is now compatible with Pi 3B, 3B+ and Pi 4 and includes support for 16x2 LCDs and 480x320 touchscreen LCDs

There are 2 versions, version 2 which is linked above and version 3 which also supports a time hack so you don't need to use a zero pic chip and multiple dimm support: https://drive.google.com/file/d/10SZIyt72dbqziHk0cNbZBUAgY7xKzRld/view?usp=sharing

# -------------------------

Piforce-Web is a raspberry pi image which creates a wireless access point and creates a web-page containing images and links to the naomi games which you own, and allows you to netboot these games from your phone, laptop or tablet.

a video can be found here: https://www.youtube.com/watch?v=_-y7jqlN2ko

This has the following advantages:

- touch-screen web page via your phone for game selection; only the games you have loaded are shown
- can be hidden inside the cab, so no need to open the naomi every time, or to run cables outside the cabinet
- no soldering required
- fast boot times
- just the netdimm, a crossover cable, raspberry pi and a sdcard required for multiboot fun
- supports rasperry pi 1, 2 & 3
- now supports pi version 3 using its inbuilt wireless card
- support for GPIO pins for hard-reset of games
- UPDATE - v1.1 - Support for naomi 2 and atomswave games
- UPDATE - v1.1 - Added shutdown and reboot links from the web page 
- UPDATE - v1.2 - option to auto-load the last played game
- UPDATE - v1.2 - option to auto-shutdown the file system after loading
- UPDATE - v1.2 - config menu and shutdown links from every web-page
- UPDATE - v1.2 - adds support for naomi2, atomswave, triforce and chihiro games
- UPDATE - v1.2 - moves the game names, images and rom names to a .csv (excel) file in the Windows partition (/config/roms.csv) so its easy to amend or changing the pictures and text that are displayed for each game on the web page. 
- UPDATE - v1.2 - move the image folder to /config/images/ on the Windows (fat32) partition so the image files/pictures can be swopped easily.
- UPDATE - v1.2 - integrated GPiO support for this project: http://www.arcade-projects.com/forums/index.php?thread/615-games-that-won-t-allow-for-auto-reset-when-netbooting/&postID=6248#post6248

Piforce-Web uses debugmode's triforce tools to load a NetDIMM board with binaries for a Triforce, Naomi, or Chihiro arcade system. No soldering or additional components other than the raspberry pi,and a SD card are required, and game selection is via a web page with images. If using the pi versions 1 and 2, a wireless card is also needed. 

# Requirements
You will need the following items to use Piforce-Web:

- A Raspberry Pi - http://www.raspberrypi.org/
- An SD Card (4GB or greater)
- A suitable wireless card (but only if using the pi versions 1 or 2 - see below)
- A Naomi, Triforce, or Chihiro arcade system.
- A Netdimm with a zero-key security PIC installed.
- A crossover cable
- The netdimm will need to be configured in static mode with an IP address of 192.168.1.2, netmask of 255.255.255.0, and gateway of 192.168.1.1.

# Download 

For the raspberry pi version 3, the link is:
http://www.mediafire.com/file/clh9bzq16ddkpwc/piforce-web-v1.2.zip


The (legacy) download image for the pi versions 1 and 2 can be found here:
http://www.mediafire.com/download/qpzby3nxd7hgqab/Piforce-Web_v1.0.zip

# Installation
All that is needed is to write the image, and hook everything up. Installing the SD card image is the same as for any other raspberry pi install, so if you are familiar with that, then you are good to go, of not, there are a bunch of guides for whatever OS you are running here: http://www.raspberrypi.org/documentation/installation/installing-images/

### Using all the space on your card

If you need more than 3G of storage for games, the card needs to be re-sized. As with the piforce tool, a partition manager tool like Partition Wizard should be used (http://www.partitionwizard.com/free-partition-manager.html):
- move the Ext4 partition to the end of the card (just click and drag it in the GUI)
- resize the FAT partition to use all unallocated space (just click and drag it in the GUI)

Once done, the card can be used in Windows/Linux/OSx, and there is a /roms directory where the games that you own should be placed.


# Usage

Using the image is very simple:

- On powerup, a wireless network called 'naomi' will be created, you can connect to this with the password '**segarocks**' using your phone/laptop/tablet.
- Then visit any page (gg.com, asda.org, a.uk etc) and you will be automatically re-directed to a webpage showing clickable images and links to the games which are on your card. 
- Selecting the image or link will load the game. 



# Supported Wireless Cards

If using the pi versions 1 and 2, then a USB wireless card is required - if using the pi model 3, the inbuilt card is used!. 

The image fpr the pi versions 1 and 2 was created and confirmed to be working with a **Netgear wg111v2**. These cards are cheap and widely available. In theory, any card supported by a raspbian wheezy image _should _ work, however I have not tried them, and cannot guarantee it will work. A list of these cards can be found here:
http://elinux.org/RPi_USB_Wi-Fi_Adapters

Note that if you do try multiple cards, you will need to re-burn the image each time, this is as otherwise each new card will be registered as a new interface (wlan0, wlan1, wlan2 etc) which will cause the script to fail. 


I provide this script and image without warranty etc.

# Shouts
Thanks to travistyoj, and debugmode's triforce tools script. As travistyoj says: debugmode's done the heavy lifting this is just an interface for his work.
=======
# Piforce-Web

Piforce-Web is a raspberry pi image which creates a wireless access point and creates a web-page containing images and links to the naomi games which you own, and allows you to netboot these games from your phone, laptop or tablet.

a video can be found here: https://www.youtube.com/watch?v=_-y7jqlN2ko

This has the following advantages:

- touch-screen web page via your phone for game selection; only the games you have loaded are shown
- can be hidden inside the cab, so no need to open the naomi every time, or to run cables outside the cabinet
- no soldering required
- fast boot times
- just the netdimm, a crossover cable, raspberry pi and a sdcard required for multiboot fun
- supports rasperry pi 1, 2 & 3
- now supports pi version 3 using its inbuilt wireless card
- support for GPIO pins for hard-reset of games
- UPDATE - v1.1 - Support for naomi 2 and atomswave games
- UPDATE - v1.1 - Added shutdown and reboot links from the web page 
- UPDATE - v1.2 - option to auto-load the last played game
- UPDATE - v1.2 - option to auto-shutdown the file system after loading
- UPDATE - v1.2 - config menu and shutdown links from every web-page
- UPDATE - v1.2 - adds support for naomi2, atomswave, triforce and chihiro games
- UPDATE - v1.2 - moves the game names, images and rom names to a .csv (excel) file in the Windows partition (/config/roms.csv) so its easy to amend or changing the pictures and text that are displayed for each game on the web page. 
- UPDATE - v1.2 - move the image folder to /config/images/ on the Windows (fat32) partition so the image files/pictures can be swopped easily.
- UPDATE - v1.2 - integrated GPiO support for this project: http://www.arcade-projects.com/forums/index.php?thread/615-games-that-won-t-allow-for-auto-reset-when-netbooting/&postID=6248#post6248

Piforce-Web uses debugmode's triforce tools to load a NetDIMM board with binaries for a Triforce, Naomi, or Chihiro arcade system. No soldering or additional components other than the raspberry pi,and a SD card are required, and game selection is via a web page with images. If using the pi versions 1 and 2, a wireless card is also needed. 

# Requirements
You will need the following items to use Piforce-Web:

- A Raspberry Pi - http://www.raspberrypi.org/
- An SD Card (4GB or greater)
- A suitable wireless card (but only if using the pi versions 1 or 2 - see below)
- A Naomi, Triforce, or Chihiro arcade system.
- A Netdimm with a zero-key security PIC installed.
- A crossover cable
- The netdimm will need to be configured in static mode with an IP address of 192.168.1.2, netmask of 255.255.255.0, and gateway of 192.168.1.1.

# Download 

For the raspberry pi version 3, the link is:
http://www.mediafire.com/download/6mcsfskfr6znvjb/pi3-v1.1.1.zip

For the raspberry pi version 3 with GPIO auto-reset (http://www.arcade-projects.com/forums/index.php?thread/615-games-that-won-t-allow-for-auto-reset-when-netbooting/&postID=6248#post6248) use:
http://www.mediafire.com/download/9bi7r087w9dwhbe/pi3-4g-gpio-final.zip

The (legacy) download image for the pi versions 1 and 2 can be found here:
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

- On powerup, a wireless network called 'naomi' will be created, you can connect to this with the password '**segarocks**' using your phone/laptop/tablet.
- Then visit any page (gg.com, asda.org, a.uk etc) and you will be automatically re-directed to a webpage showing clickable images and links to the games which are on your card. 
- Selecting the image or link will load the game. 


# Supported Wireless Cards

If using the pi versions 1 and 2, (not recommended!) then a USB wireless card is required - if using the pi model 3, the inbuilt card is used!. 

The image fpr the pi versions 1 and 2 was created and confirmed to be working with a **Netgear wg111v2**. These cards are cheap and widely available. In theory, any card supported by a raspbian wheezy image _should _ work, however I have not tried them, and cannot guarantee it will work. A list of these cards can be found here:
http://elinux.org/RPi_USB_Wi-Fi_Adapters

Note that if you do try multiple cards, you will need to re-burn the image each time, this is as otherwise each new card will be registered as a new interface (wlan0, wlan1, wlan2 etc) which will cause the script to fail. 


I provide this script and image without warranty etc.

# Shouts
Thanks to travistyoj, and debugmode's triforce tools script. As travistyoj says: debugmode's done the heavy lifting this is just an interface for his work.
>>>>>>> origin/upstream
