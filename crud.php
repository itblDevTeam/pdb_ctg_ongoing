<?php 

    include "Connection.php";

    error_reporting(0);

    
    // if($_SERVER["REQUEST_METHOD"] == "POST"){
    //     $P_CODE = $_POST['code'];
    // $P_NAME = $_POST['name'];

    // }


    if(isset($_GET['submit'])){
        $P_CODE = "'".$_GET["code"]."'";
        $P_NAME = "'".$_GET["name"]."'";

        

        $sql1 = "select distinct COUNT(MJR_CODE) COUNT   from TEST.NC_MJR_CAT_MST WHERE MJR_CODE=".$_GET["id"];
    $parseresults1 = ociparse($conn, $sql1);
    ociexecute($parseresults1);
    while ($row1 = oci_fetch_assoc($parseresults1)){
    
   print $COUNT = $row1['COUNT'];
    
}
        if($COUNT == 1){
$sql = "UPDATE TEST.NC_MJR_CAT_MST SET MJR_CODE=$P_CODE, MJR_DESC=$P_NAME WHERE MJR_CODE=".$_GET["id"];

        $parseresults = ociparse($conn, $sql);
        ociexecute($parseresults);


        oci_free_statement($parseresults);
        oci_close($conn); 
        }
        else{
           $sql = "INSERT INTO TEST.NC_MJR_CAT_MST(MJR_CODE, MJR_DESC) VALUES($P_CODE, $P_NAME)";

        $parseresults = ociparse($conn, $sql);
        ociexecute($parseresults);


        oci_free_statement($parseresults);
        oci_close($conn); 
        }

       


        //header("Location: crud.php");

    }


                


                
            

?>

<!doctype html>
<html lang="en">

<head>
    <link rel="icon" href="./image/icon.ico" type="image/ico">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>CRUD</title>


    <!-- <link rel="stylesheet" href="./css/style5.css"> -->


    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;


        }

        html {
            font-size: 62.5%;

        }

        .logo {
            float: right;
        }

        .note {
            text-align: center;
            height: 15%;
            background: -webkit-linear-gradient(left, #0072ff, #8811c5);
            color: #fff;
            font-weight: bold;
            line-height: 80px;
        }

        .select {
            border: 1px solid;
            padding: 10px;
            box-shadow: 5px 10px #888888;
        }

        .mar_top{
            margin-top: 10px!important;
        }

    table td{
        text-align: center;
    }
    </style>
</head>

<body>

    <!-- header starts  -->

    <div class="note">

        <legend>
            <center>



                <div class="row">

                    <div class="col-md-2" style="padding-right: 0!important;">
                        <img class=" mt-2 mb-2 logo" src="./image/Logo.png" alt="BPDB" height="80px" width="80px">
                    </div>

                    <div class="col-md-8 mt-4">
                        <center>
                            <h1><b>বাংলাদেশ বিদ্যুৎ উন্নয়ন বোর্ড</b></h1>
                            
                        </center>
                    </div>
                    <div class="col-md-2"></div>

                </div>
            </center>
        </legend>
    </div>
    <!-- header ends  -->


    <?php 
    if(isset($_GET["id"])){
    include "Connection.php";
    $sql = "select MJR_CODE, MJR_DESC from TEST.NC_MJR_CAT_MST WHERE MJR_CODE=".$_GET["id"];
    $parseresults = ociparse($conn, $sql);
    ociexecute($parseresults);
    while ($row = oci_fetch_assoc($parseresults)){
    
    $P_C = $row['MJR_CODE'];
    $P_D = $row['MJR_DESC'];
    
}
            
oci_free_statement($parseresults);
oci_close($conn);
    }
    ?>
    <!-- select starts  -->
    <div class="container mt-2 mb-4 p-2 select">
        <form action="" method="get">
            <div class="form-row justify-content-center">

                <div class="col-auto">
                    <input type="text" required name="code" id="code" value="<?php echo $P_C; ?>" class="form-control" placeholder="Code No.">

                </div>

                <div class="col-auto">
                    <input type="text" required name="name" id="name" value="<?php echo $P_D;?>" class="form-control" placeholder="Name">
                </div>

                <div class="col-auto">
                    <!-- <button type="submit" name="submit" id="submit" class="btn btn-success">Add</button> -->
                    <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-success"/>  
                </div>
            </div>
        </form>
    </div>
    <!-- select ends  -->
    
    

    <!-- show data starts  -->
    <div class="container mar_top">

    
    <table class="table">
        <thead>
            <tr style="text-align: center;">
                <th>Code</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php 
                include "Connection.php";
            $sql = "select MJR_CODE, MJR_DESC from TEST.NC_MJR_CAT_MST";
            $parseresults = ociparse($conn, $sql);
            ociexecute($parseresults);
            while ($row = oci_fetch_assoc($parseresults)){
                echo "<tr>";
                echo "<td style='text-align : center;'>" . $row['MJR_CODE'] . "</td>";
                echo "<td style='text-align : center;'>" . $row['MJR_DESC'] . "</td>";
                // echo "<td> <a href='./crud.php?id='".$row['MJR_CODE']."'>Edit</a> </td>";
            
                echo "<td> <a   class='btn btn-info' href='./crud.php?id=".$row['MJR_CODE']."'>Edit</a></td>";
                
                echo "</tr>";


                
            }
            
                oci_free_statement($parseresults);
                oci_close($conn);

            
                            
            
            ?>
        </tbody>
    </table>
    </div>
    <!-- show data ends  -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>




</body>

</html>