<?php
if (!isset($_SESSION)) 
{
  session_start();
  
}
?>
<style type="text/css">
<!--
.style1 {
	color: #000000;
	font-weight: bold;
}
-->
</style>
<div id="templatemo_header_bar">
    
           
            
           
    
    </div>
<div id="templatemo_banner">
    
        <div id="templatemo_menu">
            <ul>
                <li><a href="Index.php" class="current">Home</a></li>
                <li><a href="Profile.php">Profile</a></li>
                <li><a href="Complains.php">Complaints</a></li>
                <li><a href="Missing.php">Missing Persons</a></li>
                <li><a href="Wanted.php">Most Wanted</a></li>
                <li><a href="Logout.php">Logout</a></li>
            </ul>    	
        </div> <!-- end of menu -->
        
        <div id="templatemo_slider">
        
            <div id="one" class="contentslider">
                <div class="cs_wrapper">
                  
                </div><!-- End cs_wrapper -->
            </div><!-- End contentslider -->
    
           
        
        </div> <!-- end of slider -->
        
        <div id="login">
        
            <h2 align="center">Welcome</h2>
            
          <div align="center">
            <p><img src="images/suppliers.png" width="32" height="32" /></p>
            <p><span class="style1">Police Station:<?php echo $_SESSION['Name'];?></span></p>
            <br/>
            <p><a href="Logout.php"><img src="images/exit.png" width="32" height="32" /></a><br/>
            </p>
          </div>
            
  </div>
    
</div>