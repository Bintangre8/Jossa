<?php

function timer($t){
$p=$t;
for ($x=$p;$x>0;$x--){
$wak = date("[i:s]", $x);
echo "\r                          \r";
echo "\r  \033[1;97mwait \033[1;93m".$wak." \r";
sleep(1);
}
}

function enc($message){
$ts = round(microtime(true) * 1000);
$secret  =  b"\xa1'\x85j\t@3r\xc1I\xed\xb1\xd5b~\xf4";
$cipher = "AES-128-ECB";
$option = 0;
$encrypted =  openssl_encrypt($message,$cipher,$secret,$option);
$binary = base64_decode($encrypted);
$hex = bin2hex($binary);
return $hex;
}
function request($url, $method, $data = null) {
    $header = array(
"language: English",
"currency: USD",
"version: 12.6",
"api_level: 29",
"authCode: i}7w~i7ij;h",
"sessionId: om1ey3sz",
"packageName: com.givvyvideos",
"Content-Type: application/json; charset=utf-8",
"Host: givvy-video-backend.herokuapp.com",
"Connection: Keep-Alive",
"User-Agent: okhttp/5.0.0-alpha.9",
    );
    
    $ch = curl_init();
    
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    if ($method === 'POST') {
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    }
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

function curl_request($url, $method, $data = null) {
    $header = array(
"language: English",
"currency: USD",
"version: 12.6",
"api_level: 30",
"authCode: ~qjfq68ig==",
"sessionId: 7x3zmfbm",
"packageName: com.givvyvideos",
"Content-Type: application/json; charset=utf-8",
"Host: givvy-video-backend.herokuapp.com",
"Connection: Keep-Alive",
"User-Agent: okhttp/5.0.0-alpha.9",
    );
    
    $ch = curl_init();
    
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    if ($method === 'POST') {
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    }
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

a:
$userId2="6448cd2de6c6d80002e59018";

$host2= "givvy-video-backend.herokuapp.com";
$ts2 = round(microtime(true) * 1000);


$url = "https://".$host2."/getUser";
$datt=json_encode(["userId" => $userId2,"verts"  => $ts2]);
$data =json_encode(["verificationCode" => enc($datt2)]);
$res2 = request($url, 'POST', $data);
echo " \033[1;32m >>GIVVY COMBO<< \n";

$userId="64a6c13db88bcc00029f4114";
$host= "givvy-video-backend.herokuapp.com";
$ts = round(microtime(true) * 1000);


$url = "https://".$host."/getUser";
$datt=json_encode(["userId" => $userId,"verts"  => $ts]);
$data=json_encode(["verificationCode" => enc($datt)]);
$res = curl_request($url, 'POST', $data);

while("true"){
$tss2 = round(microtime(true) * 1000);
$url = "https://".$host2."/canWatchVideo";
$datt2=json_encode(["userId" => $userId2,"verts"  => $tss2]);
$data=json_encode(["verificationCode" => enc($datt2)]);
$response = request($url, 'POST', $data);

$tss = round(microtime(true) * 1000);
$url = "https://".$host."/canWatchVideo";
$datt=json_encode(["userId" => $userId,"verts"  => $tss]);
$data=json_encode(["verificationCode" => enc($datt)]);
$response = curl_request($url, 'POST', $data);

$se = rand(3,8);
timer($se);

$tsd2 = round(microtime(true) * 1000);
$url = "https://".$host2."/getPresentReward";
$datt2=json_encode(["userId" => $userId2,"verts"  => $tsd2]);
$data=json_encode(["verificationCode" => enc($datt2)]);
$resp2 = request($url, 'POST', $data);
$rez2=json_decode($resp2);
$claim2=$rez2->result->earnCredits;
$poin2=$rez2->result->credits;
$ball2=$rez2->result->userBalance;
if($claim2 == ""){sleep(5); goto a;}
echo "\033[1;97m [1] \033[0;94mBalance \033[1;97m= \033[1;33m".$ball2."$ \033[0;94mPoin \033[1;97m= \033[1;93m".$poin2." \033[1;97m+ \033[1;92m".$claim2." \n";

$tsd = round(microtime(true) * 1000);
$url = "https://".$host."/getPresentReward";
$datt=json_encode(["userId" => $userId,"verts"  => $tsd]);
$data=json_encode(["verificationCode" => enc($datt)]);
$resp = curl_request($url, 'POST', $data);
$rez=json_decode($resp);
$claim=$rez->result->earnCredits;
$poin=$rez->result->credits;
$ball=$rez->result->userBalance;
//if($claim == ""){sleep(5); goto a;}
echo "\033[1;97m [2] \033[1;35mBalance \033[1;97m= \033[1;33m".$ball."$ \033[1;35mPoin \033[1;97m= \033[1;93m".$poin." \033[1;97m+ \033[1;92m".$claim." \n";

}




