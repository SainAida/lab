
<html>
<head>
	<title> Museum </title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
  <?php
      echo $alert;
  ?>
      <div class="banner">
        <div class="navbar">
        	<img src="2.png" class="logo">
        	<ul>
<li><a href="#"><b>Home</b></a></li>
<li><a href="#"><b>About-us</b></a></li>
<li><a href="#"><b>Tickets</b></a></li>
<li><a href="#"><b>Comments</b></a></li>
</ul>
  </div>
      <div class="content">
       <h1>Museum of Contemporary Photography</h1>
      	<p> To read more information, press the button.</p>
      	<div>
      		<button type="button"><span></span><center>Read more</center></button>
      	</div>
      </div>
   </div>
   <main>
   	<div class="О-нас-container">
   		<hr style="height:3px;background-color:black;">
   		<h4>About-us</h4>
   		<p>Contemporary Photography (MoCP) was founded in 1976 by Columbia College Chicago as the successor to the Chicago Center for Contemporary Photography. The museum houses a permanent collection as well as the Midwest Photographers Project (MPP), which contains portfolios of photographers and artists' work who reside in the Midwestern United States. 
   		</p>
   		<div class="bullets-container">
   			<div class="left-column">
   				<div class="bullet">
   			<div class="bullet">
   				<div>
   					The Museum of Contemporary Photography began collecting in the early 1980s and has since grown its collection to include more than 15,000 objects by over 1,500 artists. The MoCP is accredited by the American Alliance of Museums.
   				</div>
   				<div class="image" id="im">

   			</div>
   		</div>
   	</div>
   			</div>
   		</div>
   </main>
   <main>
   	<div class="Билеты-container">
   		<hr style="height:3px;background-color:white;">
   		<h4>Tickets</h4>
   		<p>The museum's programming guides the public to a greater understanding of thought-provoking contemporary photography as well as an appreciation for traditional work that has not yet received critical acclaim. Admission is always free for visitors.</p>
   		<div class="left-column">
   		<div class="picture" id="iml">
   		</div>
   	</div>
   	<div class="right-column">
      
   				<div class="container">
            <h1>Contact me</h1>
<form action="sendmail.php" method="POST">
  <label for="name"> Name:</label>
  <input type="text" name="name" id="name">
<label for ="email"> Email:</label>
<input type="email" name="email" id="email">
<label for="subject">Subject: </label>
<input type="text" name="subject" id="subject">
<label for="message">Message</label>
<textarea name="message"></textarea>
<input type="submit" value="send">
</form>
</div>

   				

   			</div>
   </main>


	</body>
</html>