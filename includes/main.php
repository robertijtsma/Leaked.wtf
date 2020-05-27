

<!-- Start Head tag-->
  <head>



  <!-- Code for tagbox (tags for google)-->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/jquery-ui.min.js'></script>
  	<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/themes/start/jquery-ui.css" />
    <script src="../js/jquery.tagsinput.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/jquery.tagsinput.css" />
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


</head>
<!-- End Head tag-->

<!-- Start Body Tag -->

    <!-- Dox Paste Div-->
    <div id="doxpaste" class="doxpaste">
