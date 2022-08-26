<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ছায়াচিত্র</title>
<link rel="stylesheet" href="contactStyle.css">
<link rel="shortcut icon" href="Untitled design (1).png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="c7e84f67-519e-4886-9a7b-0d96fdc5732d";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Ibarra+Real+Nova:ital,wght@1,700&family=Nunito:wght@300&family=Oleo+Script&display=swap');
    </style>
      
  </head>
  <body>  

  <form action="insertcontact.php" method = "post">
    <div class="title">
      <h2>CONTACT</h2>
    </div>
    <div class="half">
      <div class="item">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
      </div>
      <div class="item">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        
        <label for="subject">Subject:</label>
            <input type="text" name="subject" id="subject">
      </div>
    </div>
    <div class="full">
      <label for="message">Message</label>
            <textarea name="message"></textarea>
            
    </div>
    
    <div class="action">
      <input type="submit" value = "SEND MESSAGE">
      
    </div>
    
  </form> 


  
</body>
</html>