<?php
    $uploadFlag = true;
    $msg = "";
    if(isset($_POST["submit"])) {
        $msg = "file detected";
        
        $fileName = $_FILES["userDataset"]["name"];
        $target = "/uploads/".$fileName;
        
        $fileType = pathinfo($target, PATHINFO_EXTENSION);
        // Allow ONE dataset format
        if($fileType != "csv") {
            $msg =  "Sorry, only .csv file is allowed.";
            $uploadFlag = false;
        }
        // Check if the file already exists
        if (file_exists("uploads/" . $fileName)){  
                echo "<h1>".$fileName . " already exists. </h1>";
        }
        else{
            $msg =  ".csv dataset detected.";
            echo "<h1>".$fileName . " does not exist on server. </h1>";
            if(move_uploaded_file($_FILES['userDataset']['name'], $target)){
                $msg = "Upload successful";
            }
            else{
                $msg = "Failed to upload";
            }
            echo "<h1>".$msg."</h1>";
        }
        var_dump($_FILES['userDataset']['error']);
        var_dump($target);
    }
    echo phpinfo();
    
?>