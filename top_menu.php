<?php session_start(); ?>

<html>
<head>
   
<title></title>

<style>
body {
    font-family: 'Montserrat', sans-serif;;
    line-height: 1.6;
    background-color: #f0f0f0;
}

header {
    background-image: linear-gradient(15deg, #13547a 0%, #80d0c7 100%);
    background-color: #13547a;
    color: #fff;
    font-family: 'Montserrat', sans-serif;
    padding: 10px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
nav ul li {
    display: inline;
    margin-right: 20px;
}
nav ul li a {
    color: #fff;
    text-decoration: none;
    
}

button {
    
    margin-left: 10px;}


header h1 {
    font-size: 1.8rem;
    font-family: 'Montserrat', sans-serif;
    color:black;
}
nav ul {
    list-style-type: none;
}
</style>
</head>
<body>
    <header>
    <h1>EMBER ELLE<div style="font-size: 15px;">
     Your Complete Fashion Guide</div></h1>
        <nav >
          <ul >
                
             <li ><a href="index.php"> Home</a></li>
	  	    <?php if (isset($_SESSION['name'])) {?>

	    
	     <li><a href="mp_logout.php">Logout</a></li>
                       
	    
                 
	  
	    
	  	    <?php } 
	  	          else { ?>
	     <li><a  href="mp_login.php"> Login</a></li>
             
            
	  	       <?php } ?>
              
        
        </ul>  
           
        </nav>
        
        
         
    </header>
</body>
</html>

           
  