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
        right: 48%;
        top: 20%;
        color: white;
    }
    body
    {
        background-color: lavenderblush;
        background-image: url(nw.jpg);
        background-size: cover;
    }
    form
    {
        position: absolute;
        right: 45%;
        top: 55%;     
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
    
    
        .g
        {
            opacity: 0.7;
            position: absolute;
            top: 30%;
            left: 7%;
            height: 400px;
            width: 90%;
            background-color: black;
        }
        .g li
        {
            color: white;
        }
    .h1
    {
        top: 30%;
    }
    
    
</style>



<body>
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
    
    <div class="g">
        <h1>Search Hotels</h1>
        </div>

<form action="search.php" method="post">
    <input type="text" name="search" placeholder="Search">
    <button type="submit" name="submit-search">Search</button>
</form>


<div class="members-container">
    <?php
    $sql = "SELECT * FROM members";
    $result = mysqli_query($conn, $sql);
    $queryResults = mysqli_num_rows($result);

    ?>

</div>

</body>