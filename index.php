<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
  <link rel="shortcut icon" href="1.jpg" />
  
	<link rel="stylesheet" type="text/css" href="styleiot.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Notable" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    .active
{
  color: #1b497a;
  text-shadow: -10px 4px 5px rgba(0,0,0,0.3);
  
  font-weight:bold;
}
  </style>
</head>
<body>
 <?php include("header.php");?>
 <div class="template">
   <div class="temp1">
     <p class="font">ADVANCE TRAFFIC SIGNAL CONTROL</p>
   </div>
 </div>
<div class="aboutus">
   <div class="about1">
	     <span class="abouttitle">About us :-</span>
	    <p>System that deal with Indian traffic rules. If you break the rules, system is capable to detect you and     respond you on real-time using online Database query system and penalty document is used to send  to your respective home  address and immediate respond to your connected mobile number with an SMS service.
         <br>
         The most common type of detection device used today is the inductive loop vehicle sensor. An emerging trend in  traffic signal control systems is the use of closed-circuit television (CCTV) cameras, possibly with image processing to derive traffic flow data, to enable traffic managers to monitor the video
        </p>
        <div class="around">
        </div>
    </div>
  
     <div class="about2">
       <span class="abouttitle">News Updates :-</span><br>
       <div class="admin">
        <ul class="news">
          <marquee  SCROLLDELAY=180 VSPACE=5 hspace=2 height="200px" scrolldpeed="150" direction="up" onMouseOver="this.stop()" onMouseOut="this.start()">
          <li class="newsli">The plate number is scanned using the iot system.</li><hr>
          <li class="newsli">In this cloud computing is used.</li><hr>
          <li class="newsli">Real Time response to the user.</li><hr>
          <li class="newsli">Reduce the traffic load to the trffic police</li><hr>
          <li class="newsli">15-18-15</li></marquee>
        </ul>
      </div>  
    </div> 
    <div class="about2">
    <span class="abouttitle">Adminstrator :-</span><br>
    <div class="admin">
      <fieldset><legend>Select the Type of login</legend>
        <i class="fa fa-user"></i><a href="Manager.php"><input type="button" name="adminlogin" value="Administrator"></a>
         <br><i class="fa fa-user"></i><a href="Manager.php"><input type="button" name="Helpdesk" value="Help Desk"></a>
         <br><i class="fa fa-user"></i><a href="Register.php"><input type="button" name="users" value="User Registeration"></a>
      </fieldset>
    </div>  
   </div> 
<div class="footer">  
     <div class="shape">
      <span class="project">Project Structure :-</span>
          <p>System which detect the flow of traffic using red light , On that particular time ,  no one can cross the signal if he/she will do then system detect them using  image sensor and read the number plate and send this information to the automatic query system which generate the document with Indian traffic rules and with penalty and immediate respond to the defaulter through message to their connected mobile number and document is send to their respective house address.
         </p><br>
         <span class="project"> COMPONENTS :-</span>
         <p>
           1.A system which senses the drivers at a red light using an image sensor which senses the number plate of the vehicles.<br>
2. The System is connected to an online database which generates an automatic query.<br>
3.Database registration web tool and management web application.
Website for the record Maintenance for every user Driver.<br>
4.Documentation<br>

         </p>
      </div>  
</div>

 
</body>
</html>