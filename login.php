<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>           
        <link rel="stylesheet" href="forms.css">
      <link rel="shortcut icon" href="img/fact.png" type="image/x-icon">
<body>
   <!-- <h1>Benedoct</h1>  Design using a picture to display his name behind the forms -->
   <div class="login-box">
      <form action="login_process.php" method="post">
         <h2>LOG IN FORMS</h2>
         <div class="input-box">
            <span class="icon"></span>
            <input type="text" name="username" required>
            <label for="">Username:</label>
         </div>
         <div class="input-box">
            <span class="icon"></span>
            <input type="password" name="password" required>
            <label for="">Password:</label>
         </div>
    
     
    
       <button>Log In</button>
         <p>Don't have an account? <a href="signup.php">Signup here</a></p>
        </form>
    </div>
 
</body>
</html>