<html>
    <head>
        
    <style>
        .main {
            position: relative;
        }
        .name
        {
            position: absolute;
            top: 20%;
            left: 25%;
        }
        .name h1
        {
            font-size: 70;
            letter-spacing: 10px;
            color: white;
        }
        li a
        {
            color: white;
            text-decoration: none;
        } 
       
        
        .menu
        {
            margin: 20;
            padding: 10px;
            background: black;
            position: absolute;
            top: 10;
            left: 20;
            color: white;
        }
        .menu li
        {
            margin-left: 20px;
            color: white;
            float: left;
        }
        .my
        {
            opacity: 0.7;
            position: absolute;
            top: 49.2%;
            right: 7%;
            height: 200px;
            width: 630px;
            background-color: black;
        }
        .my li
        {
            color: white;
        }
        
        .g
        {
            opacity: 0.7;
            position: absolute;
            top: 50%;
            left: 7%;
            height: 300px;
            width: 350px;
            background-color: black;
        }
        .g li
        {
            color: white;
        }
        .nw
        {
            background-color: black;
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
        
        </style>
    </head>
    <body>
        <div>
            <img src="h3.jpg" style="height: 750px;width: 1500px">
            <div class="name"><h1>Hotel Booking</h1>
            
            
            </div>
            
            
     </div> 
        <div class="g">
              <ul>
                  <div class="p1"><li><h1>Our Services</h1></li></div>
                  <div class="p3"> <li><p>100% hygenic</p></li></div>
                  <div class="p2"><li><p>Pure vage</p></li></div>
                  <div class="p4"> <li><p>lowest cost</p></li></div>
                  <div class="p5"> <li><p>summer special offers</p></li></div>
              </ul>
        </div>
        <div class="my">
  
        <div class="nw">
            <section class="booking">
            
            <form action="info.php" method="post">
                <div style="color:white" class="textbox">Name<br/>
                       <input type="text" placeholder="Name" name="Name">
                    </div>
                <div style="color:white" class="textbox">Email<br/>
                       <input type="text" placeholder="Email" name="Email">
                    </div>
                <div style="color:white" class="textbox">Phone<br/>
                       <input type="text" placeholder="phone" name="phone">
                    </div>
                
              
 
                
<div style="padding-bottom: 18px;">
    <input class="btn" type="submit" name="" value="insert">
    </div>
                
        
 
            </form>
            </section>
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
</html>