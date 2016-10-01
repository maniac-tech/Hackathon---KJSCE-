<!-- 
  ****************************************
  Contest Entry for Treehouse:
  "Design a Contact Form"
  Submitted by Lisa Wagner
  ****************************************
-->
<link rel="stylesheet" type="text/css" href="CSS/Experthelp.css">
<?php
	  		require ("navigationBar.html");
	  ?>
<div id="contact-form">
	<div>
		<h1>Nice to Meet You!</h1> 
		<h4>Have a question or just want to get in touch? Let's chat.</h4> 
	</div>
		<p id="failure">Oopsie...message not sent.</p>  
		<p id="success">Your message was sent successfully. Thank you!</p>

		   <form method="post" action="Experthelp.php">
			<div>
		      <label for="name">
		      	<span class="required">Userame: *</span> 
		      	<input type="text" name="username" value="" placeholder="Username" required="required" tabindex="1" autofocus="autofocus" />
		      </label> 
			</div>
			<div>
		      <label for="email">
		      	<span class="required">Email: *</span>
		      	<input type="email" name="email" value="" placeholder="Your Email" tabindex="2" required="required" />
		      </label>  
			</div>
			<div>		          
		      <label for="subject">
		      <span>Subject: </span>
			      <select name="subject" tabindex="4">   
			         <option value="hello">Select an option</option>
			         <option value="Rights">Rights</option>  
			         <option value="Health">Health</option>
			         <option value="Spiritual">Spiritual</option>
			         <option value="Others">Others</option>
			      </select>
		      </label>
			</div>
			<div>		          
		      <label for="message">
		      	<span class="required">Message: *</span> 
		      	<textarea name="message" placeholder="Please write your message here." tabindex="5" required="required"></textarea> 
		      </label>  
			</div>
			<div>		           
		      <button name="submit" type="submit" id="submit" >SEND</button> 
			</div>
		   </form>

	</div>
