<?php
    include('update-script.php');
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
 
        
        * {
         box-sizing: border-box;
        }

        .user-detail form {
            height: 500px;
            border: 2px solid #f1f1f1;
            padding: 16px;
            background-color: white;
         }
        
         .user-detail{
            margin-top: 30px;
            width: 30%;
            float: left;
         }

        input{
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }
        
        input[type=text]:focus, input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }
        
        button[type=submit] {
            background-color: #101f11;
            color: #ffffff;
            padding: 10px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
            font-size: 20px;
        }

        label{
            font-size: 18px;
        }

        button[type=submit]:hover {
            background-color:#77bea1;
        }
         
        .form-title a, .form-title h2{
            display: inline-block;
            font-size: 40px;
            font-weight: bold;
         
        }

        .form-title a{
            text-decoration: none;
            font-size: 20px;
            background-color: green;
            color: honeydew;
            padding: 2px 10px;
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
        </style>
        </head>

<body>

    <header>
        CRUD Operations (UPDATE FORM)
        
        <div class="indentContainer">
            <ul>
                <li><a  href="http://localhost/CRUD_operations/create-form.html">CREATE</a></li>
                <li><a href="http://localhost/CRUD_operations/user-table.php">USER TABLE</a></li>
                <li><a class ="active" href="#home">UPDATE FORM</a></li>
            </ul>
            </div>
    </header>
    
    <!--====form section start====-->
        <div class="user-detail">
            <div class="form-title">
            
                <h2>Create Form</h2>
            </div>

            <p style="color:red">
 
            <?php if(!empty($msg)){echo $msg; }?>
            </p>

            <form method="post" action="">
                <label>Full Name</label>
 
                    <input type="text" placeholder="Enter Full Name" name="full_name" required value="<?php echo 
                    isset($editData) ? $editData['full_name'] : '' ?>">
            
                <label>Email Address</label>
 
                    <input type="email" placeholder="Enter Email Address" name="email_address" required value="<?php 
                    echo isset($editData) ? $editData['email_address'] : '' ?>">

                <label>City</label>
                
                    <input type="city" placeholder="Enter Full City" name="city" required value="<?php echo 
                    isset($editData) ? $editData['city'] : '' ?>">
 
                <label>Country</label>
 
                    <input type="text" placeholder="Enter Full Country" name="country" required value="<?php echo 
                    isset($editData) ? $editData['country'] : '' ?>">
                
                <button type="submit" name="update">Submit</button>
            </form>
        </div>
    </div>
<!--====form section start====-->

    <footer>

    </footer>

</body>

</html>