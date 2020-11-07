<?php
system("clear");

date_default_timezone_set("Asia/Jakarta");
system("clear");
/* START COLOR */
$res="\033[0m";
$hitam="\033[0;30m";
$abu2="\033[1;30m";
$putih="\033[0;37m";
$putih2="\033[1;37m";
$red="\033[0;31m";
$red2="\033[1;31m";
$green="\033[0;32m";
$green2="\033[1;32m";
$yellow="\033[0;33m";
$yellow2="\033[1;33m";
$blue="\033[0;34m";
$blue2="\033[1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$lblue="\033[0;36m";
$lblue2="\033[1;36m";
/* END COLOR */


sleep(2);
echo $baner= $green.'                    ||  mmmmm   mmmm mmmmmmm ||
                    ||  #    # m"  `m   #    ||
                    ||  #mmmm* #    #   #    ||
                    ||  #    # #    #   #    ||
                    ||  #mmmm*  #mm#    #    ||';
echo "\n";


echo   "           <~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~>";
echo $baner = "
               $putih2 ∆CREATOR             =$putih2 RAMADHAN
               $putih2 ∆INSTAGRAM           =$putih2 _dani.163
               $putih2 ∆WHATSAPP            =$putih2 0831-2343-8688\n";
echo "           <~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~>";

echo "\n\n";
sleep(3);

echo $putih2."                         [ BOT LUCKYCASH ]       ";
echo "\n\n";

sleep(2);


$header = array(
"x-access-token: eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZGZhIjoiNDczN2IwMWItZGExMy00OGJiLTkzODItMThhMjM3OTYzNzEyIiwicmFuZG9tU2VlZCI6MC4zMTIyMTIzMDE1NDQ0MDc2LCJpYXQiOjE2MDQ3MzQ5NzQsImV4cCI6MTYwNzMyNjk3NH0.gwav1e90Uxrzd5knUfr0VGuz0A7ruw-_WcE9AZ4mMp4",
"Content-type: application/json",
"User-Agent: Dalvik/2.1.0 (Linux; U; Android 7.1.2; Neffos Y5s Build/N2G47H)",
"Host: appli.picturehit.cool",
"Connection: Keep-Alive",
);

function http_post($link, $data){
global $header;

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $link);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  return curl_exec($ch);
}
while(true){
$dat = '{"device":"android","deviceId":"a35aad34c48e4c7b","idfa":"4737b01b-da13-48bb-9382-18a237963712","isRooted":0,"info_tel":"Neffos Neffos Y5s","version":"1.36"}';
$login = "https://appli.picturehit.cool/money/money_auth/getUser/";
$hom = http_post($login,$dat);
$hom = json_decode($hom);

$email = $hom->user->email;
$credit =$hom->user->credits;
$kode = $hom->user->code_invite;
$ptoken = $hom->user->push_token;


$data = '{"bet":800,"userId":"5fa64ce23c0253211d756141"}';
$url = "https://appli.picturehit.cool/money/money_users/launchWheel/";
$bom = http_post($url,$data);
$bom = json_decode($bom);


$go = $bom->result;

echo $putih2."~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~>\n";
echo $putih2."Status Claim ".$green2."800".$putih2." Credit ".$yellow2."=> ".$green2.$go."\n";
echo $putih2."Total Credits ".$yellow2."=> ".$blue.$credit."\n";
echo $putih2."~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~>\n";

//Waktu

for ($i=10; $i>=0; $i--){
 echo "\r                     \r";
 echo $putih2."Menunggu : ".$yellow2.$i.$putih2." sec  ";
 sleep(1);
}
 echo "\r                                     \r";



}
