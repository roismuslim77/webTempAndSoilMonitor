<?php
     function ambil_ip() {
    foreach (array('HTTP_CLIENT_IP', 'HTTP_X_REAL_IP', 'REMOTE_ADDR', 'HTTP_FORWARDED_FOR', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED') as $key) {
        if (array_key_exists($key, $_SERVER) === true) {
          foreach (explode(',', $_SERVER[$key]) as $ip) {
            if (filter_var($ip, FILTER_VALIDATE_IP) !== false) {
              return $ip;
            }
          }
        }
      }
    }
    ob_start();
system('ipconfig/all');
$my_com = ob_get_contents();
ob_clean();
$findme = "Physical";
$pmac = strpos($my_com, $findme);
$mac = substr($my_com, ($pmac+36),17);
echo "IP anda adalah : ";
echo ambil_ip();
echo "Mac anda adalah : ";
echo $mac;
echo "IP :";
echo $_SERVER['REMOTE_ADDR'];
?>

<br><br>
<?php

function getRealIP()
{
  if (!empty($_SERVER['HTTP_CLIENT_IP'])) //CHEK IP YANG DISHARE DARI INTERNET  
  {
    $ip=$_SERVER['HTTP_CLIENT_IP'];
  }
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) //UNTUK CEK IP DARI PROXY  
  {
    $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
  }
  else
  {
    $ip=$_SERVER['REMOTE_ADDR'];
  }
  return $ip;
}

function getClientIP()
{
if (isset($_SERVER))
{
    if (isset($_SERVER["HTTP_X_FORWARDED_FOR"]))
        return $_SERVER["HTTP_X_FORWARDED_FOR"];

    if (isset($_SERVER["HTTP_CLIENT_IP"]))
        return $_SERVER["HTTP_CLIENT_IP"];

    return $_SERVER["REMOTE_ADDR"];
}

if (getenv('HTTP_X_FORWARDED_FOR'))
    return getenv('HTTP_X_FORWARDED_FOR');

if (getenv('HTTP_CLIENT_IP'))
    return getenv('HTTP_CLIENT_IP');

return getenv('REMOTE_ADDR');
}

echo "<p><b>Fungsi Dengan getRealIP</b> : ".getRealIP()."<p>";
echo "<p><b>Fungsi Dengan getClientIP</b> : ".getClientIP()."<p>";

?>