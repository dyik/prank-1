<?php
// 
function send($phone){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://telegram.org/");                      curl_setopt($ch, "https://t.me/telepulsa22/", POST);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, client_id);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, redirect_uri);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "msisdn=$phone&accept=call");                        $asw = curl_exec($ch);
        curl_close($ch);
                echo $asw."\n";
}
echo "COPYRIGHT ; SGBTEAM\n\n";
echo "Nomor\nInput : ";
$nomor = trim(fgets(STDIN));
$execute = send($nomor);
print $execute;
?>
