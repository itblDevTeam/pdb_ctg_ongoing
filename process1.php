<?php 

    error_reporting(0);
    session_start();

    include "Connection.php";

    $P_CODE = '';
    $P_NAME = '';
    $id = 0;
    $P_UPDATE = false;


    if(isset($_POST['save'])){
        $P_CODE = $_POST['code'];
        $P_NAME = $_POST['name'];
    
        // $mysqli->query("INSERT INTO data(name, location) VALUES('$name', '$location')") or die($mysqli->error);
    
        $sql = "INSERT INTO TEST.NC_MJR_CAT_MST(MJR_CODE, MJR_DESC) VALUES('$P_CODE', '$P_NAME')";

        $parseresults = ociparse($conn, $sql);
        ociexecute($parseresults); 


        // $_SESSION['message'] = "Record has been saved!";
        // $_SESSION['msg_type'] = "success";

        oci_free_statement($parseresults);
        oci_close($conn);
    
        header("location: crud1.php");
    }


    if(isset($_GET['edit'])){
        $id = $_GET['edit'];
        echo $id;
        $update = true;
    
        // $result = $mysqli->query("SELECT * FROM data WHERE id=$id") or die($mysqli->error);

        $result = "select MJR_CODE, MJR_DESC from TEST.NC_MJR_CAT_MST where MJR_CODE=".$_GET['edit'];

        $parseresults = ociparse($conn, $result);
		ociexecute($parseresults);
        
        if(count($result) == 1){

            while ($row = oci_fetch_assoc($parseresults)){
                $P_CODE = $row['MJR_CODE'];
                $P_NAME = $row['MJR_DESC'];
            }
            // $row = $result->fetch_array();
    
        }

        pre_r($result);
        // pre_r($result->fetch_assoc());
        function pre_r($array){
            echo "<pre>";
            print_r($array);
            echo "</pre>";
        }
    
    }

    