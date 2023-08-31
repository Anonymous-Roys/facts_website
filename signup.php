<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>           
        <link rel="stylesheet" href="forms.css">
      <link rel="shortcut icon" href="img/fact.png" type="image/x-icon">
<body>
   <!-- <h1>Benedoct</h1>  Design using a picture to display his name behind the forms -->
   <div class="login-box">
      <form action="signup_process.php" method="post">
         <h2>SIGN UP FORMS</h2>
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
    
     
    
       <button>Sign Up</button>
         <p>Already have an account? <a href="login.php">Login here</a></p>
        </form>
    </div>
 
</body>
</html>