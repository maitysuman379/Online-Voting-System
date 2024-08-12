<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <center>
    <div id="headersection">
        <h1>Online Voting System</h1>
        <hr>
    </div>
    
    <div id="bodysection">
        <form action="./api/login.php" method="post" enctype="multipart/form-data">
            <h2>Login</h2>

            <div class="space">
                <input id="inputt" type="number" name="mobile" placeholder="Enter Mobile" required><br>
            </div>

            <div class="space">
                <input id="inputt" type="password" name="password" placeholder="password" required><br>
            </div>
             
            <div class="space">
                <select id="dropbox" name="role">
                    <option value="1">Voter</option>
                    <option value="2">Group</option>
                </select><br>
            </div>

            <button id="loginbutton">Login</button><br>
        </form>

            <p>New User?<a href="./routes/register.php">Register here</a></p>
        
    </div>
    </center>

     <div id="futer">
     <?php
    echo "&copy;"  . "2023"."-" .date('Y')." Your Online Voting System. All rights reserved.";
    ?>
     </div>
    
</body>
</html>