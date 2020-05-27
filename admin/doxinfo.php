          <?php
          // Data saved for protection reasons
		  $doxname = $_POST['doxname'];
		  $doxauthor = $_POST['doxauthor'];
          $doxpostercoords = $_POST['doxpostercoords'];
          $doxposteripaddress = $_POST['doxposteripaddress'];
          $monitorsize = $_POST['monitorsize'];
          $useragent = $_POST['useragent'];
          $mobileordesktop = $_POST['mobileordesktop'];
		  $doxrealauthor = $_POST['doxrealauthor'];
		  $removalkey = $_POST['removalkey'];
          
          // Browser DATA generated 
          $browserdata = $_POST['browserdata'];
          
		  
		  echo 'Doxname: ' . $doxname . '<br>' . 'Author: ' . $doxauthor . '<br>' . 'REAL Author: ' . $doxrealauthor . '<br>' . 'Removalkey: ' . $removalkey . '<br><br>' . 'Coords: ' . $doxpostercoords . '<br>' . 'IP: ' . $doxposteripaddress  . '<br>' .  'Monitor Size: ' . $monitorsize  . '<br>' .  'Useragent: ' . $useragent . '<br>' . 'Device: ' . $mobileordesktop  . '<br>' . 'EXTRA: ' . '<br>' . $browserdata;
          ?>
		  
		  