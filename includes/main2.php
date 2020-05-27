
      <div class="doxmenufullposts">
<div class="doxmenutitle"><a href="#"><br><b>Recent Public Pastes</b></a></div><br>
<div id="doxmenurecent" class="doxmenurecent">




     <?php

  $maindir = "../archive" ;
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
sort($files);
$newICounter = (($offset + $limit) <= sizeof($files)) ? ($offset + $limit) : sizeof($files);

for($i=$offset;$i<$newICounter;$i++) {
$files[$i] = str_replace('.php', '',$files[$i]);

if (file_exists($files[$i])) {

}


$filename = "../archive" . $files[$i] . ".php";

  $creationdate = date ("F d Y H:i:s.", filemtime($filename));
?>
    <div id="doxlist" class="doxlist">
    <div id="doxlistname" class="doxlistname">
  <td>  <a href="archive/<?php print $files[$i]; ?>"><?php $files[$i] = $nameini[$files[$i]]; print $files[$i];?></a></td>
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
