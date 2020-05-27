<?php session_start(); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    
    <script>
    function copyToClipboard(element) {
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val($(element).text()).select();
    document.execCommand("copy");
    $temp.remove();
}      
    </script>
  <center>  <h1> Your RemovalKey:</h1> <br>
    <div id="showkeyid" class="showkeyclass">
    <?php echo $_GET['removeKey']; ?>
    </div>
        <br><button onclick="copyToClipboard('#showkeyid')">click to save to clipboard</button><br>
                <br><a onclick='window.location.href ="<?php echo $_GET['doxNAME']; ?>u"'>view dox</a>
        <br><a onclick='window.location.href = "index.php"'>back to leakedspace</a>
  </center>