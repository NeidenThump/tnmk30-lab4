<?php
  include_once 'header.php';
?>

     <div id="signupForm">
       <h2>Skriv ett nytt inlägg</h2>
       <div class="signupFormForm">
         <form action="skickain.php" method="post">
           <input type="text" name="name" size="30" placeholder="Namn på författaren" >
           <input type="text" name="title" size="30" placeholder="Rubrik">
           <textarea name="content"  rows="10" cols="50" placeholder="Brödtexten..."></textarea>
           <input type="password" name="password" size="30" placeholder="Lösenord">
           <input type="submit" value="Skicka in">
           <input type="reset" value="Rensa">
         </form>
       </div>
     </div>

<?php include_once 'footer.php'; ?>
