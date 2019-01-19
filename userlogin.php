<style type="text/css">

</style>


<div class="dbcontainer">
   
<div class="database1">
    
<a href="present"><input type="button" name="adminlogin" value="User Registered"/></a>
<a href="finddriver"><input type="button" name="adminlogin" value="Find Driver" /></a>

<a href="sendsms"><input type="button" name="adminlogin" value="Send SMS" /></a>



</div>


    	<div class="database"> 
        <?php  if (isset($_SESSION['username'])) : ?><p class="welcome">Welcome</p>

        <p class="username">
          <font color="white" size="3px" >Login User name     : </font> <font color="yellow" size="4px"><b><i><?php echo $_SESSION['username'];?></i></b></font> </p><p class="msg"><?php echo $_SESSION['success']; ?></p>
    	<p> <a href="present.php?logout='1'" style="color: red;" name=""><button class="logout">logout</button></a> </p>
        <?php endif ?>
         </div>
         </div>