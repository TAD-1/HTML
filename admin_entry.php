<style>
    
        header{
            top: 0;
            left: 0;
            position: fixed;
            font-size: 20px;
            font-weight: bold;
            font-family: 'Courier New', Courier, monospace;

            padding: 30px;
            background-color:  rgb(81, 165, 24);
            vertical-align: middle;

            width: 100%;

        }

        .centerContainer{
            vertical-align: middle;
        }

        .indentContainer{
            margin-left: 100px;
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




        li a:hover:not(.active) {
        background-color: rgb(42, 124, 69);
        color: aliceblue;
        }

        .active {
        background-color: #155308;
        color: white;
        }
        
        footer{
            bottom: 0;
            left: 0;
            position: fixed;
            font-size: 20px;
            font-weight: bold;
            font-family: 'Courier New', Courier, monospace;

            padding: 30px;
            background-color: rgb(81, 165, 24);
            vertical-align: middle;
            text-align: center;

            width: 100%;

        }


        h1{
            margin-top: 100px;
            font-size: 50px;
            color: white;
        }

        body{

        background-color: aquamarine;
        background-image: url("https://img.freepik.com/free-vector/tropical-green-leaves-background_52683-36494.jpg?w=1380&t=st=1671329528~exp=1671330128~hmac=cb77b071c42b04bf0b306f42e4bb575e93a53818eb4e9b4e614610efef968d65");  
        }



        .tableHeader {
            border-style: none;
            font-weight: bolder;
        }

        .tableDesignLower{
            border-style: dotted;
            border: 1px solid black;
            border-radius: 10px;
            position: center;
            background-color: white;
            font-size: 30px;
        }

        th, td{
            text-align: center;
            border-style: dotted;
            border: 1px solid black;
        }

        .container{
            text-align: center;
            position: center;
        }

</style>

<?php
if (isset($_POST['submit'])){
    if (isset($_POST['name']) && isset($_POST['username']) && isset($_POST['pass'])
      && isset($_POST['userlevel'])){

            $name = $_POST['name'];
            $username = $_POST['username'];
            $pass = $_POST['pass'];
            $userlevel = $_POST['userlevel'];
            

        $dbusername = 'root';
        $dbpass = '';
        $dbname = 'final_timtiman';

        $conn = new mysqli('localhost',$dbusername,$dbpass,$dbname);

        $sql = "INSERT INTO admin (name, username, password, userlevel) VALUES ('$name','$username','$pass', '$userlevel')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";

            
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          
           //this is to display the lastest data
           $sql1 = "select * from admin order by id desc";
           $result = ($conn->query($sql1));
           
           
           //declare array to store the data of database
           $row = []; 
 
           if ($result->num_rows > 0) 
           {

               // fetch all data from db into array 
               $row = $result->fetch_all(MYSQLI_ASSOC);  
           }   

          //$conn->close();

    }else{
        echo "All field are required.";
        die();

        }

}else{
    echo "Submit button is not set";
    
}

?>


<body>
<header>
       
       <table >
           <tr class="tableHeader"> 
               <div class = "centerContainer">
               <td class="tableHeader" rowspan="2"><img style="vertical-align:middle" src = "https://www.dlsud.edu.ph/images/about-logo.png" width="100px" height="100px"></td>
      
               <td class="tableHeader">De La Salle University - Dasmarinas</td></div>
           </tr>
       </table>

       <div class="indentContainer">
       <ul>
           <li><a href = "enabling assessment2.html"> HOME </a></li>
           <li><a href = "studlogin.html">STUDENT</a></li>
           <li><a class ="active" href="#home">ADMIN</a></li>
       </ul>
       </div>
       
   </header>
<center>
    <div class = "container">
<h1>Thank you for resgistering!</h1>

<center>
<table class="tableDesignLower">
			<thead>
            <tr>
                <th>Name</th>
                <th>User name</th>
                <th>Password</th>
                <th>User Level</th>
            </tr>
        </thead>
        <tbody>
            
            <?php
               if(!empty($row))
               foreach($row as $rows)
               { 
                ?>

             <tr>
                <td><?php echo $rows['name']; ?></td>   
                <td><?php echo $rows['username']; ?></td>
                <td><?php echo $rows['password']; ?></td>
                <td><?php echo $rows['userlevel']; ?></td>
                
            </tr>  

            <?php } ?>    
        </tbody>
    </table>
        

</center>
    </div>

</center>
    <footer>
        Programmed by: 
    </footer>
</body>

<?php
           $conn->close();
?>