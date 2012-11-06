<?php
echo "

DEFAULT http://pxe/ipxe/menu.c32
PROMPT 0
MENU TITLE Eniro PXE Boot
TIMEOUT 200
TOTALTIMEOUT 6000
ONTIMEOUT local

LABEL local
MENU LABEL (local)
MENU DEFAULT
LOCALBOOT 0

LABEL esxi50
 KERNEL /esxi50/mboot.c32
 APPEND -c /esxi50/auto-test.cfg
 MENU LABEL ESXi-5.0.0

LABEL Cobbler
 KERNEL /esxi50/mboot.c32
 APPEND -c /esxi50/auto-test.cfg
 MENU LABEL Cobbler 
"
?>
