<!DOCTYPE html>
<html lang="en" >
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<head>

	   <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

  <nav class="navbar navbar-inverse  navbar-fixed-top"  role="navigation" >
                               
                 <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
             
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a   href="index"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a></li>
                    <li><a href="public">
                        <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> List</a></li>
						<li><a href="chat">
                        <span class="glyphicon glyphicon-comment" aria-hidden="true"></span> Chat</a></li>
                    <li class="dropdown">
                        <a href="index.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> 
                      <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Menu <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="contactus.html#">Main Courses</a></li>
                            <li><a href="contactus.html#">Bootstrap</a></li>
                            <li><a href="contactus.html#">Asp</a></li>
                            <li><a href="contactus.html#">SQl</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">PHP</li>
                            <li><a href="contactus.html#">MySQl</a></li>
                           
                        </ul>
                    </li>
                    <li><a href="#"><span class="fa fa-envelope-o"></span> Contact</a></li>
                    
                    
    
                </ul>
				
    
				<?php 
				
				
				
				    if(isset($_SESSION['login']) && $_SESSION['login'] == 1) {
						
						
        //session is set
		
		
		
        echo '
		
		
						               <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="index.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> 
                      <span class="glyphicon glyphicon-user" aria-hidden="true"></span> '.$_SESSION["username"].' <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="contactus.html#">Main Courses</a></li>
                            <li><a href="contactus.html#">Bootstrap</a></li>
                            <li><a href="contactus.html#">Asp</a></li>
                            <li><a href="contactus.html#">SQl</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">Options</li>
							
					
					
					
								';
								 if(isset($_SESSION["admin"]) && $_SESSION["admin"] == 1) {
								echo '<li><a href="admin/">Admin</a></li>';
								}
								echo '
					
							<li><a href="user#">Settings</a></li>
                            <li><a href="logout#">Logout</a></li>
                           
                        </ul>
                    </li>                     
       
            </div>
        </div>
   </nav>
		
		
		';
		
		
		
    } else if(!isset($_SESSION['logged_in']) || (isset($_SESION['logged_in']) && $_SESSION['logged_in'] == 0)){
		
		
        //session is not set
		
		
		
        echo '
		
		
		               <ul class="nav navbar-nav navbar-right">
                   <li><a data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in"></span> login</a></li>
                </ul>
                                              
       
            </div>
        </div>
   </nav>
    
    <div id="loginModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"> &times;</button>
                <h4>Login</h4>
            </div>
            <div class="modal-body">
                   <form action="loginpost.php" method="post" class="form-inline">
                   <div class="form-group">
                       <label class="sr-only" for="email">Username</label><input type="text" class="form-control input-sm" placeholder="Username" id="Usermame" name="username">
                       </div>
                        <div class="form-group">  
                          
                           <label class="sr-only" for="password">Password</label>
                                     <input type="password" class="form-control input-sm" placeholder="Password" id="password" name="password"></div>
                       <div class="checkbox">
                       <label>
                       <input type="checkbox"> Remember me
                       </label>
                         </div>
                    
                      
                        
                       <button type="submit" name="submit" class="btn btn-info btn-xs">Sign in</button>
                       <button type="button" class="btn btn-default btn-xs" data-dismiss="modal">Cancel</button> 
                    
                   
                     
               
                    </form>
            </div>
		
		
		';
		
		
    }
				
				
				
				?>
				

<!--
            <div class="modal-footer">
                <div style="padding:10px"></div>
            </div>
-->
        </div>
        </div>
    </div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>

  

</body>

</html>