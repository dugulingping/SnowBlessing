<?php

$countfile = "num.txt";
//���������д����ļ��ǵ�ǰĿ¼��count.txt��Ȼ������Ӧ�����Ը��ļ��ܷ��
if (($fp = fopen($countfile, "r+")) == false) { //�ö�дģʽ���ļ��������ܴ򿪾��˳�
printf ("���ļ� %s ʧ��!",$countfile);
exit;
}
else
{
//����ļ��ܹ������򿪣��Ͷ����ļ��е����ݣ�������1
$count = fread ($fp,10);
//��ȡ10λ����
$count = $count + 1;
fclose ($fp);
//�رյ�ǰ�ļ�
$fp = fopen($countfile, "w+");
//�Ը���ģʽ���ļ�
fwrite ($fp,$count);
//д���1���������
fclose ($fp);
//���ر��ļ�
} 

echo "var counter="."'$count'";   

?>  