<?php
    include('database.php');

    $fetchData = fetch_data($connection);

    //fetch query
function fetch_data($connection)
    {
    
        $query="SELECT * from user_details ORDER BY id DESC";
        
        $exec=mysqli_query($connection, $query);
        
        if(mysqli_num_rows($exec)>0){
        
            $row= mysqli_fetch_all($exec, MYSQLI_ASSOC);

            //echo '<br> read-script.php connection successs! <br>';
            echo '<br><br>';
        
            return $row;
        
        }else{
            return $row=[];
        }
    
    
    }


?>