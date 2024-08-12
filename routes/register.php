<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registation Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/stylesheet.css">
</head>
<body>
    <style>

        #imagepart{
            border-radius: 5px;
            border-top: 2px solid red;
            border-right: 2px solid green;
            border-bottom: 2px solid yellow;
            border-left: 2px solid blue;
            width: 41%;
            padding: 6px;
        }

        #roll{
            border-radius: 5px;
            border-top: 2px solid red;
            border-right: 2px solid green;
            border-bottom: 2px solid yellow;
            border-left: 2px solid blue;
            width: 42%;
        }
    </style>
    <center>
    <div id="headersection">
        <h1>Online Voting System</h1>
        <hr>
    </div>

    <div id="bodysection">
        <h3>Registration</h3>
        <form action="../api/register.php" method="post" enctype="multipart/form-data">
            <div class="space">
                <input id="inputt" type="text" name="name_title" placeholder="Name" required>
                <input id="inputt" type="number" name="mobile_number" placeholder="Enter Mobile" required><br>
            </div>
            
            <div class="space">
                <input id="inputt" type="password" name="password" placeholder="Password" required>
                <input id="inputt" type="password" name="c_password" placeholder="Confirm Password" required><br>
            </div>
            
            <div class="space">
                <input id="inputt" style="width: 41%;" id="adderss" type="text" name="address" placeholder="Address" required><br>
            </div>
            
            
                <div class="space" id="imagepart">
                    Uplode image
                    <input type="file" name="photo"><br>
                </div>
            
            
            
                <div id="roll" class="space">
                    Select roll :<select id="dropbox" name="roll">
                        <option value="1">Voter</option>
                        <option value="2">Group</option>
                    </select><br>
                </div>
            
         
            
            <button>Register</button><br>
            Already user?<a href="../index.php">Login here</a>
        </form>
    </div>
    </center>

    <div id="futer">
     <?php
    echo "&copy;"  . "2023"."-" .date('Y')." Your Online Voting System. All rights reserved.";
    ?>
     </div>
</body>
</html>