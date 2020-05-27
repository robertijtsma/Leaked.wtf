<?php

$maindir = "archive" ;
$mydir = opendir($maindir) ;
$limit = 10;
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
sort($files);
$newICounter = (($offset + $limit) <= sizeof($files)) ? ($offset + $limit) : sizeof($files);

for($i=$offset;$i<$newICounter;$i++) { 
$files[$i] = str_replace('.php', '',$files[$i]); 
?>
    <a href="<?php print $files[$i]; ?>"><?php print $files[$i]; ?></a><br>
	
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
                <table cellpadding="4"><tr><td>Page </td>
            <?php
            for ($i=1; $i <= $pages; $i++) {  // loop thru 
                $newoffset=$limit*($i-1);
                if ($newoffset != $offset) {
            ?>
                    <td>
                        <a href="<?php print  $PHP_SELF; ?>?offset=<?php print $newoffset; ?><?php print $query; ?>"><?php print $i; ?>
                        </a>
                    </td>
            <?php
                    }     
                else {
            ?>
                    <td><?php print $i; ?></td>
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