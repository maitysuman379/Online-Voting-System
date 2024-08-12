<?php
  session_start();
  if(!isset($_SESSION['userdata'])){
    header("location:../");
  }

  
  $userdata = $_SESSION['userdata'];
  $groupsdata = $_SESSION['groupsdata'];

  if($_SESSION['userdata']['status']==0){
    $status = '<b style="color:red;">Not voted</b>';
  }
  else{
    $status = '<b style="color:green;">Voted</b>';
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashbord Page</title>
    <link rel="stylesheet" href="../css/stylesheet.css">
</head>
<body>


<style>

    #backbtn{
    padding:3px ;
    border-radius: 5px;
    background-color: #4a69bd;
    color: white;
    box-shadow: 4px 4px 6px black;
    border-top: 1px solid red;
    border-right: 1px solid green;
    border-bottom: 1px solid yellow;
    border-left: 1px solid blue;
    float:left;
    margin-top: 0px;
    }

    #backbtn:hover{
      box-shadow: 2px 2px 3px black;
    }

    #logoutbtn{
    padding:3px ;
    border-radius: 5px;
    background-color: #4a69bd;
    color: white;
    box-shadow: 4px 4px 6px black;
    border-top: 1px solid red;
    border-right: 1px solid green;
    border-bottom: 1px solid yellow;
    border-left: 1px solid blue;
    float:right;

    }

    #logoutbtn:hover{
      box-shadow: 2px 2px 3px black;
    }

    #lineup{
      width:50%;
      background-color: blue;
    }

    #image{
      border-radius: 10px;
      margin-top:10px;
    }

    #profile{
      background-color: #dfe4ea;
      width:30%;
      border-radius:10px;
      border-top: 2px solid red;
      border-right: 2px solid green;
      border-bottom: 2px solid yellow;
      border-left: 2px solid blue;
      float:left;
      
    }

    #groups{
      background-color: white;
      width:60%;
      border-radius:10px;
      border-top: 2px solid red;
      border-right: 2px solid green;
      border-bottom: 2px solid yellow;
      border-left: 2px solid blue;
      float:right;
    }

    #votebtn{
      border-radius: 5px;
      background-color: #4a69bd;
      color: white;
      box-shadow: 4px 4px 6px black;
      border-top: 1px solid red;
      border-right: 1px solid green;
      border-bottom: 1px solid yellow;
      border-left: 1px solid blue;
    }
    
    #mainpanel{
      paddind:10px;
    }

    #login_time{
      margin-left:50%;
      color:red;
      font-size:10px;
    }

    #fute{
      margin-top:42%;
      margin-left:26%;
      color:red;
    }


</style>  

  <center>
  <div id="headersection">
    <a href="../"><button id="backbtn">Back</button></a>
    <a href="logout.php"><button id="logoutbtn">Logout</button></a>
    <hr id="lineup">
    <h1>Online Voting System</h1>
    <div id="login_time">
      <?php
        date_default_timezone_set('Asia/kolkata');
        echo "Note : After 5_min you will be loged out ______";
        echo " | Your Login Time is :".date("h:i:sa")."|";
      ?>
    </div>
    <hr id="linedown">
  </div> 
  </center> 

  <div id="mainpanel">
  <div id="profile">
    <center> | <img id="image" src="../uploads/<?php echo $userdata['photo'] ?>" alt="Profile_Photo" height="100" width="100">  |<center><br><br>
      <b>Name :</b><?php echo $userdata['name'] ?><br><br>
      <b>Mobile :</b><?php echo $userdata['mobile'] ?><br><br>
      <b>Adderss :</b><?php echo $userdata['adderss'] ?><br><br>
      <b>Status :</b><?php echo $status ?><br><br>
    </div>

    <div id="groups">
      <?php
        if($_SESSION['groupsdata']){
          for($i = 0;$i < count($groupsdata);$i++){
            ?>
            <div>
              <img style="float:right;margin-right: 20px;" src="../uploads/<?php echo $groupsdata[$i]['photo'] ?>" alt="Groups Photo" height="100" width="100">
              <b style="margin-left:10px;">Group Name :</b><?php echo " - "." ".$groupsdata[$i]['name'] ?><br><br>
              <b style="margin-left:10px;">Votes :</b><?php echo  $groupsdata[$i]['votes']?><br><br>


              <form action="../api/vote.php" mothod="post">
                <input type="hidden" name="gvotes" value="<?php echo $groupsdata[$i]['votes'] ?>">
                <input type="hidden" name="gid" value="<?php echo $groupsdata[$i]['id'] ?>">
                <input style="margin-left:10px;" type="submit" name="votebtn" value="vote" id="votebtn">

              </form>  
            </div>
            <hr>
            <?php
          }
        }
        else{

        }
      
      ?>
    </div>
  </div>


  <div id="fute">
     <?php
    echo "&copy;"  . "2023"."-" .date('Y')." Your Online Voting System. All rights reserved.";
    ?>
     </div>

</body>
</html>