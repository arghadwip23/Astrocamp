<?php
$fp = fopen("data.txt",'r');
if($fp){
$content = fread($fp);
echo ($content.'nice');
}else{
echo('<h1>something went wrong</h1>');
}
?>
