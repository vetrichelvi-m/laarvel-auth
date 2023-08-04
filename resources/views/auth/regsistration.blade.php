
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>regsistration From</title>
   </head>
   <body>
      <form action="/store" method="post">
    @csrf        
     <div class="imgcontainer">
         </div>
         <div class="container">
            <label for="uname"><b>Name</b></label>
            <input type="text" placeholder="Enter Username" name="name" required><br>
            <label for="uname"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required><br>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required><br>
            <label for="psw"><b>Confirm Password</b></label>
            <input type="password" placeholder="Enter Password" name="password_confirmation" required><br>
            <button type="submit">Login</button>

         </div>
         <div class="container" style="background-color:#f1f1f1">
            <button type="button" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
         </div>
      </form>
   </body>
</html>
