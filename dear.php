<?php
/*

Plugin Name: Personal Hit Counter
Plugin URI: http://www.devilhunter.net/
Description: Go to Appearance > Widgets, and drag 'Personal Hit Counter' in sidebar or footer or in any widgetized area. This PlugIn will automatically match your theme's color. No need to use any short-code or to edit settings.
Version: 1.2
Author: Tawhidur Rahman Dear
Author URI: http://www.facebook.com/tawhidurrahmandear/ 
License: GPLv2 or later 

Tawhidur Rahman Dear
Mailing Address: 
House - 304, Road - 10 Rupnagar Tinshed,
Pallabi, Mirpur,
Dhaka - 1216
BANGLADESH
tawhidurrahmandear@gmail.com
+8801716816283, (also in Viber, DUO, WhatsApp, IMO)
Skype & Google Hangout: tawhidurrahmandear
Facebook: http://www.facebook.com/tawhidurrahmandear/ 
Google Plus: http://plus.google.com/+tawhidurrahmandear/about
Personal Blog: http://tawhidurrahmandear.blogspot.com 
 
 */


namespace deartwentyseven\dear\wordpress;

{require_once(__DIR__ . "/pluginfiles/widget.php");}

  class S extends Widget {
    static $widgetTitle = "deartwentyseven_personalhitcounter";

    public function __construct() {
      parent::__construct(null, "Personal Hit Counter");
    }


    public function widgetContent($args, $instance)
    {
      ?>


<SCRIPT LANGUAGE="JavaScript">
<!--
 function nameDefined(ckie,nme)
{
   var splitValues
   var i
   for (i=0;i<ckie.length;++i)
   {
      splitValues=ckie[i].split("=")
      if (splitValues[0]==nme) return true
   }
   return false
}

function delBlanks(strng)
{
   var result=""
   var i
   var chrn
   for (i=0;i<strng.length;++i) {
      chrn=strng.charAt(i)
      if (chrn!=" ") result += chrn
   }
   return result
}
function getCookieValue(ckie,nme)
{
   var splitValues
   var i
   for(i=0;i<ckie.length;++i) {
      splitValues=ckie[i].split("=")
      if(splitValues[0]==nme) return splitValues[1]
   }
   return ""
}
function insertCounter() {
 readCookie()
 displayCounter()
}
 function displayCounter() {
 document.write('<p ALIGN="CENTER"><b>')
 document.write("You've visited ")
 if(counter==1) document.write(" first time")
 else document.write(counter+" times")
 document.writeln('</b></p>')
 }
function readCookie() {
 var cookie=document.cookie
 counter=0
 var chkdCookie=delBlanks(cookie)  //are on the client computer
 var nvpair=chkdCookie.split(";")
 if(nameDefined(nvpair,"pageCount"))
 counter=parseInt(getCookieValue(nvpair,"pageCount"))
 ++counter
 var futdate = new Date()
 var expdate = futdate.getTime()
 expdate += 3600000 * 24 *30  //expires in 1 hour
 futdate.setTime(expdate)

 var newCookie="pageCount="+counter
 newCookie += "; expires=" + futdate.toGMTString()
 window.document.cookie=newCookie
}
// -->
</SCRIPT>

<SCRIPT LANGUAGE="JavaScript">
<!--
insertCounter()
// -->
</SCRIPT>

      <?php
    
    }
  }

  S::register("deartwentyseven_personalhitcounter");


