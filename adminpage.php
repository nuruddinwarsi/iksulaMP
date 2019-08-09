<?php
    session_start();
    require_once("connect.php");
    if(!isset($_SESSION["role"]) || $_SESSION["role"]!="admin"){
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-wth, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MINIPROJECT</title>
</head>
<body>
    <h2>ADMIN FORM</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <fieldset>
            <legend>User Details</legend>
            <label for="usr_role">User role</label>
            <input type="text" name="usr_role" value="customer" disabled><br>
            <label for="uname">Username</label>
            <input type="text" name="uname"><br>
            <label for="email">Email</label>
            <input type="email" name="email"><br>
            <label for="pw">Password</label>
            <input type="password" name="pw" ><br>
            <label for="fname">First Name</label>
            <input type="text" name="fname"><br>
            <label for="lname">Last Name</label>
            <input type="text" name="lname"><br>
            <label for="tcode">T-Code</label>
            <input type="text" name="tcode"><br>
            <label for="h_phone">Home Phone</label>
            <input type="text" name="h_phone"><br>
        </fieldset>
       <fieldset>
            <legend>Address</legend>
            <label for="building">Building</label>
            <input type="text" name="building"><br>
            <label for="street">Street</label>
            <input type="text" name="street"><br>
            <label for="city">City</label>
            <input type="text" name="city"><br>
            <label for="state">State</label>
            <input type="text" name="state"><br>
            <label for="zip">Zip code</label>
            <input type="text" name="zip"><br>
       </fieldset>
       <fieldset>
            <legend>Secondary Details</legend>
            <label for="sec_fname">Relations first name</label>
            <input type="text" name="sec_fname"><br>
            <label for="sec_lname">Relations Last Name</label>
            <input type="text" name="sec_lname"><br>
            <label for="sec_email">Secondary email</label>
            <input type="email" name="sec_email"><br>
            <label for="sec_phone">Secondary Phone</label>
            <input type="text" name="sec_phone"><br>
            <label for="sec_reln">Relation</label>
            <input type="text" name="sec_reln"><br>
            <label for="sec_street">Street</label>
            <input type="text" name="sec_street"><br>
            <label for="sec_city">City</label>
            <input type="text" name="sec_city"><br>
            <label for="sec_state">State</label>
            <input type="text" name="sec_state"><br>
            <label for="sec_zip">Zip Code</label>
            <input type="text" name="sec_zip"><br>            
       </fieldset>
        <fieldset>
            <legend>Programs</legend>
            <label for="house_prog">House Program</label>
            <input type="text" name="house_prog"><br>
            <label for="service_prog">Service program</label>
            <input type="text" name="service_prog"><br>
        </fieldset>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $uname = $_POST["uname"];
        $email = $_POST["email"];
        $pw = $_POST["pw"];
        $usr_role = $_POST["usr_role"];
        $fname = $_POST["fname"];        
        $lname = $_POST["lname"];
        $tcode = $_POST["tcode"];
        $h_phone = $_POST["h_phone"];
        $building = $_POST["building"];
        $street = $_POST["street"];
        $city = $_POST["city"];
        $usr_state = $_POST["state"];
        $zip = $_POST["zip"];
        $sec_fname = $_POST["sec_fname"];
        $sec_lname = $_POST["sec_lname"];
        $sec_reln = $_POST["sec_reln"];
        $sec_street = $_POST["sec_street"];
        $sec_city = $_POST["sec_city"];
        $sec_state = $_POST["sec_state"];
        $sec_zip = $_POST["sec_zip"];
        $sec_email = $_POST["sec_email"];
        $sec_phone = $_POST["sec_phone"];
        $house_prog = $_POST["house_prog"];
        $service_prog = $_POST["service_prog"];

        // $sql ="INSERT INTO users(uname,email,pw,fname,lname,tcode,h_phone,building,street,city,usr_state,
        //                         zip,sec_fname,sec_lname,sec_reln,sec_street,sec_city,sec_state,
        //                         sec_zip,sec_email,sec_phone,house_prog,service_prog) 
        //         VALUES('$uname','$email','$pw',$fname','$lname','$tcode','$h_phone','$building',
        //         '$street','$city','$usr_state','$zip','$sec_fname','$sec_lname','$sec_reln','$sec_street',
        //         '$sec_city','$sec_state','$sec_zip','$sec_email','$sec_phone','$house_prog','$service_prog')";

        $sql = "INSERT INTO users(uname,email,pw,usr_role,fname,lname,tcode,h_phone,building,street,city,usr_state,
                            zip,sec_fname,sec_lname,sec_reln,sec_street,sec_city,sec_state,sec_zip,sec_email,
                            sec_phone,house_prog,service_prog) VALUES('$uname','$email','$pw','$usr_role',
                            '$fname','$lname','$tcode','$h_phone','$building','$street','$city','$usr_state',
                            '$zip','$sec_fname','$sec_lname','$sec_reln','$sec_street','$sec_city','$sec_state',
                            '$sec_zip','$sec_email','$sec_phone','$house_prog','$service_prog')";

        $result = $mysqli->query($sql);
        if($result){
            echo "DATA ENTERED";
        }else{
            echo "ENTRY FAILED ";
        }

    }
    