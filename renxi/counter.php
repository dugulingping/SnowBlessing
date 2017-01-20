<?php

$countfile = "num.txt";
//定义计数器写入的文件是当前目录下count.txt，然后我们应当测试该文件能否打开
if (($fp = fopen($countfile, "r+")) == false) { //用读写模式打开文件，若不能打开就退出
printf ("打开文件 %s 失败!",$countfile);
exit;
}
else
{
//如果文件能够正常打开，就读入文件中的数据，假设是1
$count = fread ($fp,10);
//读取10位数据
$count = $count + 1;
fclose ($fp);
//关闭当前文件
$fp = fopen($countfile, "w+");
//以覆盖模式打开文件
fwrite ($fp,$count);
//写入加1后的新数据
fclose ($fp);
//并关闭文件
} 

echo "var counter="."'$count'";   

?>  