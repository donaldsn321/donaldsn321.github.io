
 <?php include 'sendemail.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <title>Spoofy</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
      <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="cursor.css" />
         <link rel="canonical" href="https://freemailsender.com/app/" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->

  </head>
   <body onload="myFunction()">
   <div class="cursor"><h2 style="color: red;">SPOOFY</h2></div>
      <div class="cursor2"></div>
    <!--alert messages start-->
    <?php echo $alert; ?>
    <!--alert messages end-->
        <div class="contact-form">
  
 
        <h2>Email Spoofer Tool</h2>
        <form class="contact" id="form" action="" method="post" enctype="multipart/form-data">
            <input type="password" name="license" class="text-box" placeholder="Enter your License Key" required>
          <input type="text" name="name" class="text-box" placeholder="Enter Name" maxlength="30" required>
          <input type="text" name="subject" class="text-box" placeholder="Subject" required>
          <input type="email" name="from" class="text-box" placeholder="Enter Sender's Email" required>
          <input type="email" name="replyto" class="text-box" placeholder="Reply-to Email (Optional)">
                   
                    <textarea id="recipient" name="recipient" placeholder="Receiver's Email (Bulk Recipients Accepted)" required></textarea>

          
          <input type="file" name="file" class="text-box" placeholder="Add an attachment">
          <textarea name="message" rows="5" placeholder="Your Message (Html Also Accepted)" required></textarea>
        <center> <input type="submit" name="submit" class="send-btn" value="Send"> <center> 
           </form>
           <div class="space"></div>
</div>
    <!--contact section end-->
    <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>
    <script>
    var cursor = document.querySelector(".cursor");
    var cursor2 = document.querySelector(".cursor2");
    document.addEventListener("mousemove",function(e){
      cursor.style.cssText = cursor2.style.cssText = "left: " + e.clientX + "px; top: " + e.clientY + "px;";
    });
  </script>
  <script>
  function remove() {
    var elem = document.getElementById("remove");
    count -= 1;
    elem.parentNode.removeChild(elem);
    return false;
}
var count = 0;
const max = 9;
$("#addmore").on("click", function () {
    if (count >= max) return;
    var html = `<div class="more-emails" id="remove"><input type="email" name="email[]" class="text-box" placeholder="Receiver's Email" required><button type="button" id="delete" class="button" onclick="remove()">Delete</button></div>`;
    $("#more-emails").append(html);
    count += 1;
});
  </script>
  </body>
</html>
