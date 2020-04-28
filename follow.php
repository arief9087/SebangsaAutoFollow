<?php




///---[ DO NOT DELETE MY COPYRIGHT ]---\\\
//     SEBANGSA.COM auto follow
//     Author   :   AlexaMP
//     Release Date : Apr 2020
///---[ DO NOT DELETE MY COPYRIGHT ]---\\\













awal:
echo "Tools : Sebangsa Auto Follow\n";
echo "Author : AlexaMP\n";
echo "To : sebangsa.com\n";
echo "Release Date : APR 2020\n";
echo "==================================\n\n";
echo "Your Sebangsa Username : ";
$MyUsername = trim(fgets(STDIN));
echo "Your Sebangsa Password : ";
$MyPWD = trim(fgets(STDIN));
echo "[+][]Check Login...\n";
$ch100 = curl_init();
curl_setopt($ch100, CURLOPT_URL,"https://sebangsa.com/api/auth/login/");
curl_setopt($ch100, CURLOPT_POST, 1);
curl_setopt($ch100, CURLOPT_COOKIEJAR, "sobud.txt");
curl_setopt($ch100, CURLOPT_COOKIEFILE, "sobud.txt");
curl_setopt($ch100, CURLOPT_POSTFIELDS,"username=$MyUsername&password=$MyPWD&remember_me=false");  //Post Fields
curl_setopt($ch100, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch100, CURLOPT_FOLLOWLOCATION, true); 
curl_setopt($ch100, CURLOPT_ENCODING, 'gzip, deflate');
$result100 = curl_exec($ch100);
$bacaxxx = json_decode($result100,true);
if($bacaxxx['message'] == 'Selamat Datang di Sebangsa'){
$meid = $bacaxxx['id'];
echo "[+][]Login Success!\n";
echo "[+][]Your UserID => $meid\n";
echo "[+][]Your User KEY => $bacaxxx[user_key]\n\n";
echo "Starting 500 Auto Follow...\n\n\n";
for($i=1;$i<=500;$i++){
//$cookie_file = "cookie-sebangsa-".rand(1,9999999999).".txt";
$cookie_file = "cookie-sebangsa.txt";
echo "[CONNETION ID : $i]\n";
$user[1] = 'alexamp';
$user[2] = 'awanbiru';
$user[3] = 'tutupbotol';
$user[4] = 'jedarjedor';
$user[5] = 'buluketek';
$user[6] = 'miinumay';
$user[7] = 'silasa';
$user[8] = 'byiasad';
$user[9] = 'pamfns';
$user[10] = 'dsfbhj';
$user[11] = 'sdfnkj';
$user[12] = 'poasjd';
$user[13] = 'dasfnna';
$user[14] = 'sdjfndsjfn';
$user[15] = 'dsgrefg';
$user[16] = 'evtyyev';
$user[17] = 'jeofhueiwh';
$user[18] = 'sdgfrfgg';
$user[19] = 'regreg';
$user[20] = 'evrybeyr';
$user[21] = 'evyrtb';
$user[22] = 'rjejhgjreb';
$user[23] = 'asdfuishd';
$user[24] = 'sdfdsf';
$user[25] = 'skdffnjks';
$user[26] = 'dsknds';
$user[27] = 'klsdnfks';
$user[28] = 'sdkkffnkds';
$user[29] = 'sdklfnfd';
$user[30] = 'jsfnoi';
$user_fix = rand(1,30);
$user_fix2 = rand(1,30);
$fake_username = "$user[$user_fix]".rand(1,1000)."$user[$user_fix2]bot";
$ch2 = curl_init();
curl_setopt($ch2, CURLOPT_URL,"https://sebangsa.com/api/auth/register");
curl_setopt($ch2, CURLOPT_POST, 1);
curl_setopt($ch2, CURLOPT_COOKIEJAR, $cookie_file);
curl_setopt($ch2, CURLOPT_COOKIEFILE, $cookie_file);
curl_setopt($ch2, CURLOPT_POSTFIELDS,"username=$fake_username&email=$fake_username@alexampbot.io&password=azhaja");  //Post Fields
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, true); 
curl_setopt($ch2, CURLOPT_ENCODING, 'gzip, deflate');
$result2 = curl_exec($ch2);
$bacax = json_decode($result2,true);
if($bacax['message'] == 'login sukses'){
//echo "[][ACCOUNT CREATED] > $fake_username|$fake_username@bot.io|azhaja|$bacax[id]|$bacax[user_key]\n";
$ch2 = curl_init();
curl_setopt($ch2, CURLOPT_URL,"https://sebangsa.com/api/users/follow");
curl_setopt($ch2, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($ch2, CURLOPT_POST, 1);
//curl_setopt($ch2, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch2, CURLOPT_COOKIEJAR, $cookie_file);
curl_setopt($ch2, CURLOPT_COOKIEFILE, $cookie_file);
curl_setopt($ch2, CURLOPT_POSTFIELDS,"user_id=$meid");  //Post Fields
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, true); 
curl_setopt($ch2, CURLOPT_ENCODING, 'gzip, deflate');
$result3 = curl_exec($ch2);
$bacab = json_decode($result3,true);
if($bacab['status_lang'] == 'followed'){
echo "[][FOLLOW SUCCESS] > FROM : @$fake_username => $bacab[message]\n";
}else{
echo "[][ERROR FOLLOW] > Following to $meid Error!\n";
}
}else{
echo "[][Error] > Error Create Account!\n";
}
echo "================================================================\n";
}
}else{
echo "[!][]Login Error!\n";
echo "[!][]Check Your Login Info!!\n\n";
goto awal;
}
?>
