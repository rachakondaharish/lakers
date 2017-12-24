


<div class="wrapper">
  <div class="container">
  
      
      <style>


.gallery > div {
  position: relative;
  float: left;
  padding: 5px;
}

.gallery > div > img {
  display: block;
  width: 79px;
  transition: .1s transform;
  transform: translateZ(0); /* hack */
}

.gallery > div:hover {
  z-index: 1;
}

.gallery > div:hover > img {
  transform: scale(6,6);
  transition: .3s transform;
}

.cf:before, .cf:after {
  display: table;
  content: "";
  line-height: 0;
}

.cf:after {
  clear: both;
}

       
      table, th, td {
   
}
      </style>
      
      
      
 
        
        
        <?php 
for ($x = 1; $x <= 1; $x++) {

        ?>
    
           <table >
    
        <tr><td colspan="3"><h4>&nbsp;&nbsp;&nbsp;&nbsp;Sort by&nbsp;&nbsp;&nbsp;&nbsp; 
            <a href="" >Year</a>&nbsp;&nbsp;&nbsp;&nbsp;  
            <a href="" >Make/Model</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="" >Price</a></h4></td></tr>    
      <tr><td  align="center" width="20%"><img style="border:10px outset silver;" src="inventory/1/1.jpg" width="155" height="101" alt="Photo of Milford Sound in New Zealand" />
          <br/><a href="#" >View Photos</a></td>
          <td  width="60%">
   <table ><tr><td>

         <ul>
		<li><label>Make:</label>&nbsp;Gray</li>
<li><label>Model:</label>&nbsp;Gray Leather</li>
<li><label>Year:</label>&nbsp;Automatic</li>
<li><label>Exterior:</label>&nbsp;3.7L SOHC 24-valve V6</li>
<li><label>Interior:</label>&nbsp;2HNYD2H23DH522576</li>
    </ul></td>
       <td>
        <ul>
		<li><label>Transmission:</label>&nbsp;Gray</li>
<li><label>Engine:</label>&nbsp;Gray Leather</li>
<li><label>Mileage:</label>&nbsp;3.7L SOHC 24-valve V6</li>
<li><label>VIN:</label>&nbsp;2HNYD2H23DH522576</li>
    </ul>
       </td></tr></table>
            
              
              
      
              
              
          
          </td>
          <td width="20%">
	                <h2>Our Price</h2>
					<h1>$25,995</h1>
		
          </td></tr></table>
          <?php
} 
?>
<?php

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("198.71.231.60", "hariuser", "Lakers144!", "lakersautos");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM cars";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        
          
       
        while($row = mysqli_fetch_array($result)){
            
            
             echo "<table>";
            
              ?>
     <tr border="1"><td  align="center" width="20%"><img style="border:10px outset silver;" src="inventory/<?= $row['Photo1']?>" width="155" height="101" alt="Photo of Milford Sound in New Zealand" />
          <br/><a href="#" style="font-size:16px;" ><b><?= $row['Make']?>&nbsp;<?= $row['Model']?>&nbsp;<?= $row['Year']?></b></a></td>
          <td  width="60%">
   <table ><tr><td>

         <ul>
		<li><label>Make:</label>&nbsp;<?= $row['Make']?></li>
<li><label>Model:</label>&nbsp;<?= $row['Model']?></li>
<li><label>Year:</label>&nbsp;<?= $row['Year']?></li>
<li><label>Exterior:</label>&nbsp;<?= $row['Exterior']?></li>
<li><label>Interior:</label>&nbsp;<?= $row['Interior']?></li>
    </ul></td>
       <td>
        <ul>
		<li><label>Transmission:</label>&nbsp;<?= $row['Transmission']?></li>
<li><label>Engine:</label>&nbsp;<?= $row['Engine']?></li>
<li><label>VIN:</label>&nbsp;<?= $row['VIN']?></li>
<li><label>Mileage:</label>&nbsp;<?= $row['Mileage']?></li>
    </ul>
       </td></tr></table>
              
        <div class="gallery cf">
          <div>
            <img src="inventory/<?= $row['Photo1']?>" />
          </div>
             <div>
            <img src="inventory/<?= $row['photo2']?>" />
          </div>
             <div>
            <img src="inventory/<?= $row['photo3']?>" />
          </div>
             <div>
            <img src="inventory/<?= $row['photo4']?>" />
          </div>
             <div>
            <img src="inventory/<?= $row['photo5']?>" />
          </div>

        </div>
          </td>
          <td width="20%">
	                <h2>Our Price</h2>
					<h1>$<?= $row['Price']?></h1>
		
          </td>
        
    </tr>   
        
        
        
        
        
        
        
 <?php  
            
            
            
            
     echo "</table>";       
            
           
        }
        
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>

        
        
      </table>  
      
       
      
      
    <br class="clear" />
  </div>
</div>
