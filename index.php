<?php
$out = "Ahmed Imran Abu Rumman";
echo strtoupper($out);
echo "<br>"
?>

<!-- //////1a//////// -->

<?php
$out = "Ahmed Imran Abu Rumman";
echo strtolower($out);
echo "<br>"

?>

<!-- //////1b/////// -->

<?php
$out = "Ahmed Imran Abu Rumman";
echo ucfirst(strtolower($out));
echo "<br>"

?>

<!-- //////1c/////// -->

<?php
$out = "Ahmed Imran Abu Rumman";
echo ucfirst($out);
echo "<hr/>"
?>

<!-- //////1d/////// -->

<?php
$out = "082307";
echo substr(chunk_split($out, 2, ':'), 0, -1)."\n";
echo "<hr/>"
?>

<!-- ///////2////// -->

<?php
$out = 'The quick brown fox jumps over the lazy dog.';
if (strpos($out,'jumps') !== false) 
 {
    echo 'The specific word is present.';
 }
else
 {
    echo 'The specific word is not present.';
 }
 echo "<hr/>"
?>

<!-- //////3/////// -->

<?php
$x =  20;          
$str1 = (string)$x; 

if ($x === $str1) 
{
  echo "They are the same"."\n";
}
else
{
echo "They are not same"."\n";
}
echo "<hr/>"
?>

<!-- //////4/////// -->

<?php
$path = 'www.example.com/public_html/index.php';
$file_name = substr(strrchr($path, "/"), 1);
echo $file_name."\n"; 
echo "<hr/>"
?>

<!-- //////5/////// -->

<?php
$ayham  = 'Ayham@example.com';
$user = strstr($ayham, '@', true);
echo $user."\n";
echo "<hr/>"
?>

<!-- //////6/////// -->

<?php
$out = 'Ayham@example.com';
echo substr($out, -3);
echo "<hr/>"
?>

<!-- //////7/////// -->

<?php
$value1 = 65.45;
$value2 = 104.35;
echo sprintf("%1.2f", $value1+$value2)."\n";
echo "<hr/>"
?>

<!-- //////8/////// -->
<?php
function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}
  echo password_generate(7)."\n";
  echo "<hr/>"
  ?>
  
  <!-- //////9/////// -->
  <?php
$str = 'the quick brown fox jumps over the lazy dog.';
echo preg_replace('/the/', 'That', $str, 1)."\n"; 
?>
<?php
$string1 = 'football';
$string2 = 'footboll';
$pos = strspn($string1 ^ $string2, "\0");
echo "<hr/>"
?>

<!-- //////10/////// -->
<?php
printf(
    'First difference at position %d: "%s" vs "%s"',
    $pos, $string1[$pos], $string2[$pos]
);
echo "<hr/>"
?>

<!-- //////11/////// -->
<?php
$str9="Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky."; 
echo var_dump( explode( "\n", $str9 ) );
echo "<hr/>"
?>
<!-- //////12/////// -->

<?php
$path = 'www.example.com/public_html/index.php';
$file = basename($path, ".php"); 
echo $file;
echo "<hr/>"

?>
<!-- //////13/////// -->
<?php
$cha = 'z';
$next_cha = ++$cha; 

if (strlen($next_cha) > 1) 
{
 $next_cha = $next_cha[0];
 }
echo $next_cha."\n";
echo "<hr/>"

?>
<!-- //////14/////// -->
<?php
$sub_string = 'rayy@';
$str = 'rayy@example.com';
echo $str = substr($str, strlen($sub_string));
echo "<hr/>"

?>
<!-- //////15/////// -->

<?php
$str = 'rayy@example.com';
echo bin2hex($str)."\n";
echo "<hr/>"
?>
<!-- //////16/////// -->

<?php
$fox = "The brown fox";
echo substr_replace($fox,"quick".' ' ,4, 0);
echo "<hr>";

?>


<!-- //////17/////// -->
<?php
$fox = "The quick brown fox";
$ex = explode(' ',$fox);
echo $ex[0];
echo "<hr>";
?>

<!-- //////18/////// -->
<?php
$num = '000547023.24';
echo trim($num,'0');
echo "<hr>";
?>


<!-- //////19/////// -->

<?php
$my_str = 'The quick brown fox jumps over the lazy dog';
echo str_replace("fox", " ", $my_str);
echo "<hr>";
?>
<!-- //////20/////// -->
<?php
$my_str = 'The quick brown fox jumps over the lazy dog///';
echo rtrim($my_str, '/');
echo "<hr>";
?>
<!-- //////21/////// -->
<?php
$path = 'http://www.example.com/5478631';
$file = basename($path); 
echo $file;
echo "<hr>";


?>

<!-- //////22/////// -->

<?php
$my_str = '\"\1+2/3*2:2-3/4*3';
echo str_replace(str_split('\\/:*?"<>|+-'), ' ', $my_str);
echo "<hr>";
?>
 <!-- //////23/////// -->  

 <?php
$my_string = 'The quick brown fox jumps over the lazy dog';
echo implode(' ', array_slice(explode(' ', $my_string), 0, 5));
echo "<hr>";
?>
 <!-- //////24/////// -->  
 <?php
$str1 = "2,543.12";
$x = str_replace( ',', '', $str1);
if( is_numeric($x))
  {
  echo $x."\n";
  }
echo "<hr>";
?>
 <!-- //////25/////// -->  
 <?php
for ($x = ord('a'); $x <= ord('z'); $x++)
 echo chr($x);
 echo "\n"
?>
echo "<hr>";
?>
 <!-- //////26/////// --> 