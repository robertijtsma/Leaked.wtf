
        <!DOCTYPE HTML PUBLIC>
        <?php session_start();?>
		
		  
		  
          <?php 
		  include 'data/iniOperationsNames.php';
		  include 'data/iniOperationsCounts.php';

		  ?>
          
          
          
          <?php
          // Data saved for protection reasons
          $realauthor = $realauthorinsidedox;
          $doxpostercoords = $doxpostergeolocationinsidedox;
          $doxposteripaddress = $ipinsidedox;
          $monitorsize = $screendatainsidedox;
          $useragent = $useragentinsidedox;
          $mobileordesktop = $mobileordesktopinsidedox;
          
      
          // Browser DATA generated 
          $browserdata = $browserdatainsidedox;
          
          
          
          // Own dox language
          $doxagefrom = new DateTime($doxagefind);
          $doxageto   = new DateTime("today");
          ?>
        <html>
        <link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
          <?php
          error_reporting(0);
      session_start();




         if (!isset($_SESSION) || !isset($_SESSION[$doxid])) {
       $countini[$doxid]++;

      write_php_ini2($countini);

      $_SESSION[$doxid] = true;

         }



      ?>
      <head>
      <br>
      <br>
      <br>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8">
          <link rel="stylesheet" type="text/css" href="css/style.css" />
      <script src="js/main.js"></script>
        <meta name="description" content=" Baronet doxed © [LeakedSpace]  " />
        <meta name="keywords" content="Baronet,doxed,exposed,leaked">
        <title>Baronet ~ [LeakedSpace]</title>
        </head>
        <body>



    <!-- Dox Paste Div-->
  <div id="containerdoxbinfully" class="containerdoxbinfully">
  <div class="doxmenufull">
  <div class="doxmenutitle"><p><br><b>Recent Public Pastes</b></p></div><br>
  <div id="doxmenurecent" class="doxmenurecent">
<?php

$maindir = "archive" ;
$mydir = opendir($maindir) ;
$limit = 15;
$offset = ((int)isset($_GET["offset"])) ? $_GET["offset"] : 0;
$files = array();
$page="";
$exclude = array( ".", "..", "index.php",".htaccess","guarantee.gif") ;
while($fn = readdir($mydir))
{
  if (!in_array($fn, $exclude))
  {
      $files[] = $fn;;
  }
}
closedir($mydir);
sort($files);
$newICounter = (($offset + $limit) <= sizeof($files)) ? ($offset + $limit) : sizeof($files);

for($i=$offset;$i<$newICounter;$i++) {
$files[$i] = str_replace(".php", "",$files[$i]);

if (file_exists($files[$i])) {

}


$filename = "archive/" . $files[$i] . ".php";

$creationdate = date ("F d Y H:i:s.", filemtime($filename));
?>
  <div id="doxlist" class="doxlist">
  <div id="doxlistname" class="doxlistname">
  <td>  <a href="<?php print $files[$i] ?>u"><?php $files[$i] = $nameini[$files[$i]]; print $files[$i];?></a></td>
</div>
<td>  <div id="doxlistdate" class="doxlistdate"> </td>
  <?php echo $creationdate ?><br><hr><br>
</div>
</div>
    <?php


    }
    freddyShowNav($offset,$limit,sizeof($files),"");

    function freddyShowNav($offset, $limit, $totalnum, $query) {
        global $PHP_SELF;
        if ($totalnum > $limit) {
                // calculate number of pages needing links
                $pages = intval($totalnum/$limit);

                // $pages now contains int of pages needed unless there is a remainder from division
                if ($totalnum%$limit) $pages++;

                if (($offset + $limit) > $totalnum) {
                    $lastnum = $totalnum;
                    }
                else {
                    $lastnum = ($offset + $limit);
                    }
                ?>
                    <table cellpadding="4"><tr><td class="pagination" id="pagination"></td>
                <?php
                for ($i=1; $i <= $pages; $i++) {  // loop thru
                    $newoffset=$limit*($i-1);
                    if ($newoffset != $offset) {
                ?>
                        <td class="pageid" id="pageid">
                            <a href="<?php print  $PHP_SELF; ?>?offset=<?php print $newoffset; ?><?php print $query; ?>"><?php print $i; ?>
                            </a>
                        </td>
                <?php
                        }
                    else {
                ?>
                        <td class="activepageid" id="activepageid"><?php print $i; ?></td>
                <?php
                        }
                    }
                ?>
                        </tr></table>
                <?php
            }
        return;
        }



    echo $page;
    ?>
    </div>
    </div>



    <script type="text/javascript">
      var onSubmit = function(response) {
        document.getElementById("postdoxform").submit(); // send response to your backend service
      };
    </script>
    <div id="doxpaste" class="doxpaste">
    <form id="postdoxform" action="" method="post">
          <p><b>Post dox</b></p>
          <textarea placeholder="Dox here." name="doxdata" rows="8" cols="111" readonly><?php echo $doxdata ?></textarea>

    <br>
  <h4><p>Name</p></h4>
<input placeholder="Name of target" type="text" name="doxname" id="doxname" value="<?php echo $doxname;?>" readonly />
<div id="dialog" title="Basic dialog">
  <br><h4><p>Dox RemovalKey</p></h4>
<input id="removalkey" type="text" name="removekey">    <input id="removalkeybutton" type="submit" value="X">
</div>



</form>


    <?php
	   if( isset($_POST["removekey"])) {
		$inputkey =  $_POST["removekey"];
	$key = $removekeyindox;

    if($inputkey == $key) {
		unlink($filename);
    }
    else {
    echo "<div id=keywrong>Wrong removalkey, try again. </div>";
				header("Location: index.php");
    }
	   }

    ?>
<div id="viewcounter">
    <h4><?php echo "Views: ". $countini[$doxid];?></h4>
</div>
<div id="doxauthor">
<h4><?php echo "Author: " . $authorinsidedox . " "?></h4>
</div>

<?php
if ($_SESSION["admin"] == "1") {
	echo "
	
	<div id=getdoxadmininfo>
	<form id=postdoxform action=admin/doxinfo method=post>
  <input type=hidden id=doxname name=doxname value='".$doxname."'>
    <input type=hidden id=removalkey name=removalkey value='".$removekeyindox."'>
  <input type=hidden id=doxrealauthor name=doxrealauthor value='".$realauthor."'>
  <input type=hidden id=doxauthor name=doxauthor value='".$authorinsidedox."'>
	<input type=hidden id=useragent name=useragent value='".$useragent."'>
	<input type=hidden id=mobileordesktop name=mobileordesktop value='".$mobileordesktop."'>
	<input type=hidden id=doxposteripaddress name=doxposteripaddress value='".$doxposteripaddress."'>
	<input type=hidden id=monitorsize name=monitorsize value='".$monitorsize."'>
	<input type=hidden id=doxpostercoords name=doxpostercoords value='".$doxpostercoords."'>
	<input type=hidden id=browserdata name=browserdata value='".$browserdata."'>
	<input id=adminbutton type=submit value=ADMIN INFO>
	</form>
	</div>
	
	
	";
}

?>

      <?php



          $PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR."qrgen/temp".DIRECTORY_SEPARATOR;

          //html PNG location prefix
          $PNG_WEB_DIR = "qrgen/temp/";

          include "qrgen/qrlib.php";

          //ofcourse we need rights to create temp dir
          if (!file_exists($PNG_TEMP_DIR))
              mkdir($PNG_TEMP_DIR);


          $filename = $PNG_TEMP_DIR."DOXQR.png";

          //processing form input
          //remember to sanitize user input in real-life solution !!!
          $errorCorrectionLevel = "L";
          if (isset($_REQUEST["level"]) && in_array($_REQUEST["level"], array("L","M","Q","H")))
              $errorCorrectionLevel = $_REQUEST["level"];

          $matrixPointSize = 4;
          if (isset($_REQUEST["size"]))
              $matrixPointSize = min(max((int)$_REQUEST["size"], 1), 10);


          if (isset($_REQUEST["data"])) {

              if (trim($_REQUEST["data"]) == "")
                  die("data cannot be empty!");


              $filename = $PNG_TEMP_DIR."test".md5($_REQUEST["data"]."|".$errorCorrectionLevel."|".$matrixPointSize).".png";
              QRcode::png($_REQUEST["data"], $filename, $errorCorrectionLevel, $matrixPointSize, 2);

          } else {


              QRcode::png((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]", $filename, $errorCorrectionLevel, $matrixPointSize, 2);

          }


    echo "<img id=" . "qrcodeid" . " src=".$PNG_WEB_DIR.basename($filename)." />";

?>
</div>
</div>

      </div>
      </div>
    </div>
    </div>
        </body>

        </html>
        