@echo off
set HOME=.\..
set USER=Windows
set CLIENT=.\ccg_client.exe
set SERVER=gccg.meccg.es
set SIZE=1280x700
if exist .\home set HOME=.\home
if exist module_windows32\ccg_client.exe set CLIENT=module_windows32\ccg_client.exe
start %CLIENT% --design %SIZE% --server %SERVER% --user %USER% %1 %2 %3 %4 %5 %6 %7 %8 %9 metw.xml
