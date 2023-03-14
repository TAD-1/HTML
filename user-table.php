<?php

    include('read-script.php');

?>

<!DOCTYPE html>
    <html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PHP CRUD Operations</title>

    <style>


        header{
            position: fixed;
            top: 0;
            left: 0;
            padding: 35px;
            background-color: aquamarine;
            font-size: 30px;
            width: 100%;
            text-align: center;
        }

        footer{
            position: fixed;
            bottom: 0;
            left: 0;
            padding: 35px;
            background-color: aquamarine;
            font-size: 30px;
            width: 100%;
            text-align: center;
        }
 
        body{
         background-repeat: no-repeat;
         background-size: cover;
         overflow-x: hidden;
         margin-left: 700px;
         margin-top: 100px;
         position: relative;
        }

    table, td, th { 
        border: 1px solid #ddd;
        text-align: left;
    }
 
    table {
        border-collapse: collapse;
        max-width: 100%;
        width:90%;
        background-color: azure;
    }

    .table-data{

        width:65%;
        left: 400;
        margin-right: 500px;
        position: fixed;
    }

    th, td {
        padding: 15px;
    }

    * {
        box-sizing: border-box;
    }

    li a:hover:not(.active) {
        background-color: rgb(42, 124, 69);
        color: aliceblue;
        }

        .active {
        background-color: #155308;
        color: white;
        }

        ul{
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        li {
            float: left;
            display: inline;
        }

        li a {
            display: block;
            padding: 10px; 
            color: #111;
            
        }

        a:link { 
            text-decoration: none; 
        }

        h2{
            font-size: 40px;
            font-weight: bold;
            text-align: justify;
        }


    </style>
    </head>


<body>

    <header>
        CRUD Operations (READ)
        
        <div class="indentContainer">
            <ul>
                <li><a  href="http://localhost/CRUD_operations/create-form.html">CREATE</a></li>
                <li><a class ="active" href="#home">USER TABLE</a></li>
            </ul>
            </div>
    
    </header>
    
    <div class="table-data">
        <div class="list-title">
            <br><br><br>
            <h2>CRUD List</h2>
        
        </div>

    <table border="1">
        <tr>
            <th>S.N</th>
            <th>Full Name</th>
            <th>Email Address</th>
            <th>City</th>
            <th>Country</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
 
    <?php
        if(count($fetchData)>0){
        $sn=1;
        foreach($fetchData as $data){
    ?> 
    
    <tr>
        <td><?php echo $sn; ?></td>
        <td><?php echo $data['full_name']; ?></td>
        <td><?php echo $data['email_address']; ?> </td>
        <td><?php echo $data['city']; ?></td>
        <td><?php echo $data['country']; ?></td>
        <td><a href="update-form.php?edit=<?php echo $data['id']; ?>">Edit</a></td>
        <td><a href="delete-script.php?delete=<?php echo $data['id']; ?>">Delete</a></td>
    </tr> 
    
    <?php
            $sn++; } //foreach inner if
        }else{ //outer if
    ?>
    
    <tr>
        <td colspan="7">No Data Found</td>
    </tr>
 
    <?php
        } //outer if
    ?>

    </table>
    </div>
    
    <footer>

    </footer>
</body>
</html>