<?php
error_reporting(0);
date_default_timezone_set('Asia/Ho_Chi_Minh');
if (!file_exists('tokens.txt')){
    $k = fopen("tokens.txt","a+");
    }
    if (!file_exists('noidungnuoi.txt')){
    $k = fopen("noidungnuoi.txt","a+");
    }
    if (!file_exists('cookies.txt')){
    $k = fopen("cookies.txt","a+");
    }
    if (!file_exists('tokensttcdl.txt')){
    $k = fopen("tokensttcdl.txt","a+");
    }
    if (!file_exists('cookiettcdl.txt')){
    $k = fopen("cookiettcdl.txt","a+");
    }
    if (!file_exists('tkmk.txt')){
        $k = fopen("tkmk.txt","a+");
        }
        if (!file_exists('cookienuoi.txt')){
    $k = fopen("cookienuoi.txt","a+");
    }
    
    


$ress = "\033[0;32m";
$res = "\033[0;33m";
$red = "\033[0;31m";
$green = "\033[0;37m";
$yellow = "\033[0;33m";
$white = "\033[0;33m";
$xnhac = "\033[1;96m";
$den = "\033[1;90m";
$do = "\033[1;91m";
$luc = "\033[1;92m";
$vang = "\033[1;93m";
$xduong = "\033[1;94m";
$hong = "\033[1;95m";
$trang = "\033[1;97m";
$ress = "\033[0;32m";
$res = "\033[0;33m";
$end = "\033[0m";
$whiteb = "\033[1;37m";
$ress = "\033[0;32m";
$res = "\033[0;33m";
$red = "\033[0;31m";
$blue = "\033[1;96m";
$green = "\033[0;37m";
$yellow = "\033[0;33m";
$maui = "\033[1;".$maul."m";
$white = "\033[0;33m";
$xnhac = "\033[1;96m";
$den = "\033[1;90m";
$do = "\033[1;91m";
$luc = "\033[1;92m";
$vang = "\033[1;93m";
$xduong = "\033[1;94m";
$hong = "\033[1;95m";
$trang = "\033[1;97m";
$nenden = "\033[40m";
$xanhd = "\033[0;36m";
$nendo = "\033[41m";
$nenxanh = "\033[42m";
$nenvang = "\033[43m";
$nenblue = "\033[44m";
$nenPurpe = "\033[45m";
$nenCyan = "\033[46m";
$nentrang = "\033[47m";
$UGreen = "\033[4;32m";
$BGreen = "\033[1;32m"; $end = "\033[0m";
$whiteb = "\033[1;37m";
$ress = "\033[0;32m";
$res = "\033[0;33m";
$red = "\033[0;31m";
$green = "\033[0;37m";
$yellow = "\033[0;33m";
$maui = "\033[1;".$maul."m";
$white = "\033[0;33m";
$xnhac = "\033[1;96m";
$den = "\033[1;90m";
$do = "\033[1;91m";
$luc = "\033[1;92m";
$vang = "\033[1;93m";
$xduong = "\033[1;94m";
$hong = "\033[1;95m";
$trang = "\033[1;97m";
$nenden = "\033[40m";
$xanhd = "\033[0;36m";
$nendo = "\033[41m";
$nenxanh = "\033[42m";
$nenvang = "\033[43m";
$nenblue = "\033[44m";
$nenPurpe = "\033[45m";
$nenCyan = "\033[46m";
$nentrang = "\033[47m";
$UGreen = "\033[4;32m";
$BGreen = "\033[1;32m";
$red = "\033[0;31m";
$green = "\033[0;37m";
$yellow = "\033[0;33m";
$white = "\033[0;33m";
$banner = "\r";
$xnhac = "\033[1;96m";
$den = "\033[1;90m";
$do = "\033[1;91m";
$luc = "\033[1;92m";
$vang = "\033[1;93m";
$xduong = "\033[1;94m";
$hong = "\033[1;95m";
$trang = "\033[1;97m";
echo "\n";echo" 
   \033[1;91m██╗   ██╗██████╗ ██╗  ██╗  \033[0;33m██████╗  ██████╗ ███████╗
   \033[0;33m██║   ██║██╔══██╗██║  ██║  \033[0;31m╚════██╗██╔═████╗██╔════╝
   \033[1;94m██║   ██║██████╔╝███████║  \033[1;95m █████╔╝██║██╔██║███████╗
   \033[1;92m╚██╗ ██╔╝██╔═══╝ ██╔══██║  \033[1;96m██╔═══╝ ████╔╝██║╚════██║
   \033[1;95m ╚████╔╝ ██║     ██║  ██║  \033[1;94m███████╗╚██████╔╝███████║   
   \033[1;96m  ╚═══╝  ╚═╝     ╚═╝  ╚═╝  \033[0;32m╚══════╝ ╚═════╝ ╚══════╝    \n\n";

 for ($makep=38;$makep > 0;$makep--){echo $res."-";usleep(2500);echo $red."-";}
$ver="1.0";
$green="\033[1;32m";
$wait = $green."WAIT";
$res="\033[0m";
$red="\033[1;31m";
$yellow="\033[0;93m";
$lightblue="\033[1;35m";
$bluelight="\033[1;34m";
$blue="\033[1;36m";
$purple="\e[35m";
@system('clear');
echo "\n";
$tdsban= $red."
                   ╔══════════════╗
                   ║".$blue." Trao Đổi Sub ".$red."║  
                   ╚══════════════╝\n\n";
                   
                   echo $tdsban;
for ($makep=38;$makep > 0;$makep--){
echo $res."-";
usleep(2500);
echo $red."-";
}
echo "\n";
echo $res."~".$red."[".$green."✓".$red."]".$res." =>".$green." Nhập [1] Chế Độ  Đa Luồng TDS Token \n";
echo $res."~".$red."[".$green."✓".$red."]".$res." =>".$green." Nhập [2] Chế Độ  Đa Luồng TDS Cookie \n";
for ($makep=38;$makep > 0;$makep--){
echo $res."-";
usleep(2500);
echo $red."-";
}
echo "\n";
$ttcban =  $red."
                   ╔════════════════╗
                   ║".$blue." Tương Tác Chéo ".$red."║  
                   ╚════════════════╝\n\n";
        
echo $ttcban;
                         
for ($makep=38;$makep > 0;$makep--){
echo $res."-";
usleep(2500);
echo $red."-";
}
echo "\n";
echo $res."~".$red."[".$green."✓".$red."]".$res." =>".$green." Nhập [3] Chế Độ TTC Đa Luồng Token \n";
echo $res."~".$red."[".$green."✓".$red."]".$res." =>".$green." Nhập [4] Chế Độ TTC Đa Luồng Cookie \n";
for ($makep=38;$makep > 0;$makep--){
echo $res."-";
usleep(2500);
echo $red."-";
}
echo "\n";
$ktol = $red."
                   ╔══════════════════╗
                   ║".$blue." Kiếm Tiền Online ".$red."║  
                   ╚══════════════════╝\n\n";
echo $ktol;
for ($makep=38;$makep > 0;$makep--){
echo $res."-";
usleep(2500);
echo $red."-";
}
echo "\n";
echo $res."~".$red."[".$green."✓".$red."]".$res." =>".$green." Nhập [5] Chế Độ Auto Gom Lúa \n";
for ($makep=38;$makep > 0;$makep--){
echo $res."-";
usleep(2500);
echo $red."-";
}
echo "\n";
$nfb = $red."
                   ╔═══════════════════╗
                   ║".$blue." Nuôi Facebook     ".$red."║  
                   ╚═══════════════════╝\n\n";
  echo $nfb;
for ($makep=38;$makep > 0;$makep--){
echo $res."-";
usleep(2500);
echo $red."-";
}
echo "\n";
echo $res."~".$red."[".$green."✓".$red."]".$res." =>".$green." Nhập [6] Chế Độ Nuôi Nhiều Acc Facebook \n";
for ($makep=38;$makep > 0;$makep--){
echo $res."-";
usleep(2500);
echo $red."-";
}

echo "\n";
echo "$res~".$red."[".$green."✓".$red."]".$res." =>".$green." Tool 6in1\n";
echo "$res~".$red."[".$green."✓".$red."]".$res." =>".$bluelight." Bản Quyền : Bùi Chí Thông\n";
echo "$res~".$red."[".$green."✓".$red."]".$res." =>".$yellow." Facebook.com/CThong2004\n";
for ($makep=38;$makep > 0;$makep--){
echo $res."-";
usleep(2500);
echo $red."-";
}

echo "\n";
echo $res."~".$red."[".$green."✓".$red."]".$res." =>".$green." Vui Lòng Nhập Tool : ";
$chedo=trim(fgets(STDIN));
if($chedo=='1'){
 if(!$sock = @fsockopen('www.google.com',80))
{
echo "Vui Lòng Bật Kết Nối Mạng";
exit();
}
eval(file_get_contents('https://pastebin.com/raw/74rUgmgv'));
}else if($chedo == '2'){
eval(file_get_contents('https://pastebin.com/raw/8GB8mcQD'));
}else if($chedo == '3'){
eval(file_get_contents('https://pastebin.com/raw/pkF894ia'));
}else if($chedo == '4'){
eval(file_get_contents('https://pastebin.com/raw/JNDEZKpz'));
}else if($chedo == '5'){
eval(file_get_contents('https://pastebin.com/raw/tEZT5jb4'));
}else if($chedo == '6'){
eval(file_get_contents('https://pastebin.com/raw/Az3NcS4H'));
}
?>