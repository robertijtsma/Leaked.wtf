<!DOCTYPE html>
<?php session_start();?>
  <?php require_once "data/iniOperationsNames.php"; ?>
  <?php include 'includes/navbar.php';?>

<html lang="en" dir="ltr">
<!-- Start Head tag-->
  <head>
  <br>
  <br>
  <br>
  <meta charset="utf-8">
    <title>LeakedSpace Doxbin Upgrade</title>
    <meta name="author" content="LeakedSpace"><link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src='js/slick.js'></script>
    	<link rel="stylesheet" href="css/jquery-ui.css">
    <script src="js/jquery-1.12.4.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="js/jquery-ui.js"></script>
<meta name="robots" content="index, follow" />
<meta name="revisit-after" content="1 days" />
    <meta name="description" content="Leaked.Space is the number 1 doxbin since 2019, because most doxbins are vanished. We know there should always be a doxbin on the internet. Thats why you should choose for us.">
    <meta name="keywords" content="SpamClick, Daedra, Automation, LeakedSpace, Baronet, Skid, SkidPaste, Paste, Dox, Dax, Moron, Autism, Autistic, Down syndrom, Blackhat, Krunk, Homosexual, Gay, Im gay, Black, Cock, Black cocks, Skidpaste, Pastie, Twitter, Skype, doxbin, l33t, Small Penis, quotes, random, Aush0k, Rifk, Blackbird, blackhat, whitehat, bluehat, greenhat, redhat, troll, tr0ll, tr0llz, trollz, trolls, troller, internet, website, coding, programming, debugging, information">
    <!-- Official JS / CSS-->
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <script src="js/main.js"></script>

    <!-- End Official JS / CSS-->


  <!-- Code for tagbox (tags for google)-->
	  <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type='text/javascript' src='js/jquery-ui.min.js'></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="js/jquery.tagsinput.js"></script>
    <link rel="stylesheet" type="text/css" href="css/jquery.tagsinput.css" />
    <script type="text/javascript">

    		function onAddTag(tag) {
    			alert("Added a tag: " + tag);
    		}
    		function onRemoveTag(tag) {
    			alert("Removed a tag: " + tag);
    		}

    		function onChangeTag(input,tag) {
    			alert("Changed a tag: " + tag);
    		}

    		$(function() {

    			$('#tags_1').tagsInput({width:'auto'});
    		});
    	</script>
  <!-- End code for tagbox (tags for google)-->

<script>
function getPositionobject1(objectid) {
  if (navigator.geolocation) {
      var timeoutVal = 10 * 1000 * 1000;
      navigator.geolocation.getCurrentPosition(
      function(position) {displayPosition(position, objectid)},
      displayError,
      { enableHighAccuracy: true, timeout: timeoutVal, maximumAge: 0 }
      );
}}


function displayPosition(position, objectid) {
  var coords = position.coords.latitude + "," + position.coords.longitude;
  document.getElementById("geolocation").value = coords;
}

function displayError(error) {
  var errors = {
  1: 'Permission denied',
  2: 'Position unavailable',
  3: 'Request timeout'
  };
}



getPositionobject1("first object");
</script>

</head>
<!-- End Head tag-->
<?php
function generateRandomDoxRemoveKey($length = 50) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
$removekeyposter = generateRandomDoxRemoveKey();
?>
<!-- Start Body Tag -->
  <body>

    <!-- Dox Paste Div-->
    <div id="containerdoxbinfully" class="containerdoxbinfully">
    <div class="doxmenufull" id="doxmenufull">
    <div class="doxmenutitle"><p><br><b>Recent Public Pastes</b></p></div><br>
    <div id="doxmenurecent" class="doxmenurecent">
<?php

$maindir = "archive" ;
$mydir = opendir($maindir) ;
$limit = 15;
$offset = ((int)isset($_GET['offset'])) ? $_GET['offset'] : 0;
$files = array();
$page='';
$exclude = array( ".", "..", "index.php",".htaccess","guarantee.gif") ;

while($fn = readdir($mydir))
{
    if (!in_array($fn, $exclude))
    {
        $files[] = $fn;;
    }
}
closedir($mydir);



$newICounter = (($offset + $limit) <= sizeof($files)) ? ($offset + $limit) : sizeof($files);

for($i=$offset;$i<$newICounter;$i++) {
$files[$i] = str_replace('.php', '',$files[$i]);

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
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <div id="doxpaste" class="doxpaste">
    <form id="postdoxform" action="post.php" method="post">
          <p><b>Post dox</b></p>
          <textarea placeholder="Dox here." name="doxdata" rows="8" cols="111"></textarea>
          <br>
          <h4><p>Name</p></h4>
        <input placeholder="Name of target" type="text" name="doxname" id="doxname" />
        <div id="dialog" title="Basic dialog">
          <h4><p>Dox RemovalKey</p></h4>
          <input placeholder="Enter a remove key" type="text" name="doxremovekey" id="doxremovekey" value="<?php echo $removekeyposter?>" />
        </div>
      <div id="doxtagger" class="doxtagger">
          <h4><p>Tags</p></h4>
			<input id="tags_1" name="doxtags" type="text" class="tags" value="doxed,exposed,leaked" />
    </div><br>
    <div id="doxtagger" class="doxtagger">
        <h4><p>Post anonymously</p></h4>
<input type="checkbox" name="authorsecret" value="authorsecret1">
        </div><br>
    <input type="hidden" id="geolocation" name="geolocation" value="loc">
    <input class="g-recaptcha" data-theme="dark" data-sitekey="6LcBiKIUAAAAAJyYrbk3jp77AzcKg9CiX0madDdw" data-callback="onSubmit" type="submit" name="doxposter" value="Post" />
    <br>

</form>

</div>
</div>
  <!-- End Dox Paste Div-->

  </body>
  <!-- End Body Tag-->
</html>
