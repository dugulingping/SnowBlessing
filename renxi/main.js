﻿//倒计时
function _fresh()
{
 var endtime=new Date("January 28, 2017 00:00:00");
 var nowtime = new Date();
 var leftsecond=parseInt((endtime.getTime()-nowtime.getTime())/1000);
 if(leftsecond<0){leftsecond=0;}
 __d=parseInt(leftsecond/3600/24);
 __h=parseInt((leftsecond/3600)%24);
 __m=parseInt((leftsecond/60)%60);
 __s=parseInt(leftsecond%60);
 __all = __d+"天 "+__h+"小时"+__m+"分"+__s+"秒";
 __all = __all.replace(/([0-9]{1})/g,'<img width="16" height="21" src="http://www.newxing.com/img/201006/djs/$1.gif">');
 document.getElementById("_countdown").innerHTML=__all;
}
function _datetime()
{
var day=""; 
var month=""; 
var year=""; 
var mydate=new Date();
var myhour=mydate.getHours();
var myminute=mydate.getMinutes();
mymonth=mydate.getMonth()+1; 
myday= mydate.getDate(); 
myyear= mydate.getYear(); 
year=(myyear > 200) ? myyear : 1900 + myyear; 
document.write(year+"年"+mymonth+"月"+myday+"日 "+myhour+":"+myminute); 
			}