

    <?php



    $link = mysqli_connect("localhost", "root", "", "21518SBECE30214_user");

     



    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }

     

    

    $first_name = mysqli_real_escape_string($link, $_POST['un']);
    $email_address = mysqli_real_escape_string($link, $_POST['eml']);
	$password = mysqli_real_escape_string($link, $_POST['password']);
	$mob = mysqli_real_escape_string($link, $_POST['mbn']);
	$gender = mysqli_real_escape_string($link, $_POST['gen']);
     

    

    $sql = "INSERT INTO reg VALUES ('$first_name',  '$email_address',$mob,'$password','$gender')";

    if(mysqli_query($link, $sql)){

        echo "Records added successfully";

    } else{

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }

     

    

    mysqli_close($link);

    ?>

