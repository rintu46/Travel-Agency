<?php
    include 'header.php';
?>

 <head>
     <meta charset="UTF-8">
     <title>Document</title>
     
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <!--------------------google fornt------------->
     <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
     
     <!--------------------boostrap cdn------------->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
     
     <!--------------------main style sheet------------->
     <link rel="stylesheet" href="css/style.css">
 </head>

<style>
    
    h1
    {
        position: absolute;
        right: 50%;
        top: 25%;
        color: black;
    }
    body
    {
        background-color: white;
        border-image: url(show.jpg)
         
    }
    form
    {
        position: absolute;
        right: 45%;
        top: 40%;     
    }
    nav{
    
    display: flex;
    justify-content: center;
    padding: -1100px -11px;
    position: absolute;
    transform: all 0.3s;
    background: white;
    z-index: 0;
    top: 0px;
    width: 100%;
}
nav ul{
    
    display: flex;
    align-items: center;
    flex-wrap: wrap;
}
nav ul li{
    display: flex;
}

nav ul li a{
    font-family: 'Roboto Condensed', sans-serif;
    font-size: 1.3em;
    color: #333;
    padding: 0rem 0;
    margin: 0 1.80rem;
    text-transform: uppercase; 
}
    
    
        .members-container
        {
            opacity: 0.7;
            position: absolute;
            top: 40%;
            left: 7%;
            height: 300px;
            width: 90%;
            background-color: black;
            color: white;
        }
    
    
</style>

<body>

<h1>Search page</h1>

<div class="members-container">
    <div class="my">

    <?php
        if (isset($_POST['submit-search']))
        {
            $search = mysqli_real_escape_string($conn, $_POST['search']);
            $sql = "SELECT * FROM members WHERE firstname LIKE '%$search%' OR lastname LIKE '%$search%' ";
            $result = mysqli_query($conn, $sql);
            $queryResult = mysqli_num_rows($result);
            
            echo "there are ".$queryResult." results";
            if($queryResult > 0)
            {
                while($row = mysqli_fetch_assoc($result))
                {
                     echo "<a href='new.php' color: white><div>
                            <h3>".$row['firstname']." ".$row['lastname']."</h3>    
                         </div></a>";
                }
            }
            else
            {
                echo "there are no results";
            }
        }
    
    ?>
    </div>
    
    
</div>


<nav class="nav">
             <ul>
                 <li><a href="index.php">Home</a></li>
                 <li><a href="">Features</a></li>
                 <li><a href="rintu.php">Hotels</a></li>                
                 <li class="logo"><a href=""><img src="img/my3.png" alt="" class="white"></a></li>
                 <li><a href="advisor.php">Travel Advisors</a></li>
                 <li><a href="about.php">About</a></li>
                 <li><a href="ami.php"><button type="button" class="login-btn">Logout</button></a></li>
                 
             </ul>
         </nav>
    
</body>