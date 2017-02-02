

    <?php



    $link = mysqli_connect("localhost", "root", "", "21518SBECE30214_user");

     



    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }

     

    

    $name = mysqli_real_escape_string($link, $_POST['nm']);
    $feed = mysqli_real_escape_string($link, $_POST['fb']);
	 

    

    $sql = "INSERT INTO feedback VALUES ('$name',  '$feed')";

    if(mysqli_query($link, $sql)){

        echo "Records added successfully";

    } else{

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }

     

    

    mysqli_close($link);

    ?>

