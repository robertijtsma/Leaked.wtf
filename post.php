<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <script src="https://leaked.wtf/js/jquery.min.js"></script>
<script src="https://leaked.wtf/js/jquery-ui.min.js"></script>
<script src="https://leaked.wtf/js/jquery.cookie.js"></script>
    <title></title>
  </head>
  <body>
    <script>
    function goBack() {
      window.history.back();
    }

    </script>
    <script type=text/javascript>
            function setScreenHWCookie() {
                $.cookie('sw',screen.width);
                $.cookie('sh',screen.height);
                return true;
            }
            setScreenHWCookie();
    </script>
    <?php
    session_start();

    if(isset($_SESSION['login']) && $_SESSION['login'] == 1) {
        //session is set

        if (!isset($_POST['authorsecret'])) {
        $authorunsafe = $_SESSION['username'];
        $realauthorunsafe = $_SESSION['username'];
      }
      else {
      $authorunsafe = 'Anonymous';
      $realauthorunsafe = $_SESSION['username'];
      }
    } else if(!isset($_SESSION['logged_in']) || (isset($_SESION['logged_in']) && $_SESSION['logged_in'] == 0)){
        //session is not set
        $authorunsafe = 'Anonymous';
        $realauthorunsafe = 'Non-Account';
    }
		$author = htmlspecialchars(strip_tags($authorunsafe), ENT_QUOTES, 'UTF-8');
		$realauthor = htmlspecialchars(strip_tags($authorunsafe), ENT_QUOTES, 'UTF-8');

    function generateRandomDoxID($length = 12) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    function generateRandomDoxIDSecure($length = 1) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }



    function isMobileDevice() {
        return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
    }
    if(isMobileDevice()){
        $mobileordesktop = "Mobile (If not spoofed)";
    }
    else {
        $mobileordesktop = "Desktop (If not spoofed)";
    }
    if(isset($_COOKIE['sw'])) { $screenwidth = $_COOKIE['sw'];}
    if(isset($_COOKIE['sh'])) { $screenhight = $_COOKIE['sh'];}
      $screendata = $screenwidth . 'x' . $screenhight;
      $doxnameunsafe = $_POST['doxname'];
      $doxdataunsafe = $_POST['doxdata'];
      $doxtagsunsafe = $_POST['doxtags'];
      $doxcaptcha = $_POST['g-recaptcha-response'];
      $doxname = htmlspecialchars(strip_tags($doxnameunsafe), ENT_QUOTES, 'UTF-8');
      $doxnameurl = str_replace(' ', '_', $doxname);
      $doxtags = htmlspecialchars(strip_tags($doxtagsunsafe), ENT_QUOTES, 'UTF-8');
      $doxdata = htmlspecialchars(strip_tags($doxdataunsafe), ENT_QUOTES, 'UTF-8');
      $removekey = $_POST['doxremovekey'];
      $doxidcheck = generateRandomDoxID();
      $doxpostergeolocationunsafe = $_POST['geolocation'];
      $doxpostergeolocation = htmlspecialchars(strip_tags($doxpostergeolocationunsafe), ENT_QUOTES, 'UTF-8');
      $ip = $_SERVER['HTTP_CLIENT_IP'] ? $_SERVER['HTTP_CLIENT_IP'] : ($_SERVER['HTTP_X_FORWARDED_FOR'] ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR']);
      $useragent = $_SERVER['HTTP_USER_AGENT'];
      $apostroffe = "'";
	  
      
      $browser = get_browser(null, true);
      $browserdata = http_build_query($browser,'',', ');





// Dox own language (STR REPLACES)
function getStringBetween($str,$from,$to)
{
    $sub = substr($str, strpos($str,$from)+strlen($from),strlen($str));
    return substr($sub,0,strpos($sub,$to));
}


  $doxagefinder = getStringBetween($doxdata,'[age]','[/age]');
  $doxdata = str_replace('[age]' . $doxagefinder . '[/age]','AGE: ".$doxagefrom->diff($doxageto)->y."',$doxdata);


// END DOX OWN LANGUAGE
      if (file_exists('archive/'. $doxidcheck .'.php'))
      {
        $doxidcheck = $doxidcheck . generateRandomDoxIDSecure();

        if (file_exists('archive/'. $doxidcheck .'.php'))
      {
        $doxidcheck = $doxidcheck . generateRandomDoxIDSecure();

        if (file_exists('archive/'. $doxidcheck .'.php'))
      {
        $doxidcheck = $doxidcheck . generateRandomDoxIDSecure();

        if (file_exists('archive/'. $doxidcheck .'.php'))
      {
        $doxidcheck = $doxidcheck . generateRandomDoxIDSecure();
        if (file_exists('archive/'. $doxidcheck .'.php'))
      {
        $doxidcheck = $doxidcheck . generateRandomDoxIDSecure();

        if (file_exists('archive/'. $doxidcheck .'.php'))
      {
        header('Location: /error');
      }
      }
      }
      }
      }
       }
      else
       {
        $doxid = $doxidcheck;
        };
  $doxurl = $doxid;
      if(empty($doxname) || empty($doxdata) || empty($doxcaptcha) || empty($removekey)){
        error_reporting(0);
    echo "<script type='text/javascript'>";
    echo "alert('You did not fill out the required fields');";
    echo "</script>";
    echo '<button onclick="goBack()">Go Back</button>';
    }
    else if(strpos($doxname, '.be') !== false || strpos($doxname, '.net') !== false || strpos($doxname, '.com') !== false || strpos($doxname, '.nl') !== false || strpos($doxname, '`') !== false || strpos($doxname, '~') !== false || strpos($doxname, '?') !== false || strpos($doxname, '>') !== false || strpos($doxname, '<') !== false || strpos($doxname, '@') !== false || strpos($doxname, '%') !== false || strpos($doxname, '#') !== false || strpos($doxname, ';') !== false || strpos($doxname, ':') !== false || strpos($doxname, '.') !== false || strpos($doxname, ')') !== false || strpos($doxname, '(') !== false || strpos($doxname, '/') !== false || strpos($doxname, '*') !== false || strpos($doxname, '"') !== false || strpos($doxname, "'") !== false || strpos($doxname, '{') !== false || strpos($doxname, '}') !== false || strpos($doxname, '$') !== false || strpos($doxname, '&') !== false || strpos($doxname, '!') !== false || strpos($doxname, '^') !== false) {
      error_reporting(0);
      echo "<script type='text/javascript'>";
      echo "alert('Stop abusing the namefield');";
      echo "</script>";
      echo '<button onclick="goBack()">Go Back</button>';
    }
    else{
        $newpage = '
        <?php		
$validdox = "valid";		
		
$authorinsidedox = "'.$author.'";
$realauthorinsidedox = "'.$realauthor.'";
$doxpostergeolocationinsidedox = "'.$doxpostergeolocation.'";
$ipinsidedox = "'.$ip.'";
$screendatainsidedox = "'.$screendata.'";
$useragentinsidedox = "'.$useragent.'";
$mobileordesktopinsidedox = "'.$mobileordesktop.'";
$keyremovaldox = "Dr7d1Wf5ZiAIa3IBoqm4FwXjH5Ik5Laxeyd6LeF1tDpYHu2sQf";
$doxagefind = "' .$doxagefinder. '";
$doxname = "'.$doxname.'";
$doxtags = "'.$doxtags.'";
$doxid = "'.$doxid.'";
$removekeyindox = "'.$removekey.'";


$doxagefrom = new DateTime($doxagefind);
$doxageto   = new DateTime("today");

$browserdatainsidedox = "'. $browserdata .'";
$doxdata = "'. $doxdata .'"

?>
        ';

        file_put_contents('archive/' . $doxurl . '.php', $newpage );

        $doxnamepost = PHP_EOL . $doxid . " = " . $doxname;
        $fopendoxnamepost = fopen('data/pageNames.ini', 'a');
        fwrite($fopendoxnamepost, $doxnamepost);
        fclose($fopendoxnamepost);

        $doxcountspost = PHP_EOL . $doxid . " = " . "0";
        $fopendoxcountspost = fopen('data/pageCounts.ini', 'a');
        fwrite($fopendoxcountspost, $doxcountspost);
        fclose($fopendoxcountspost);



        header("Location: posted.php?removeKey=$removekey&doxNAME=$doxurl");
        die();
    }
    ?>

  </body>
</html>
