<?php

$dato=$datos[0];
$dato=$datos[1];
$dato=$datos[2];
$dato=$datos[3];
while($row=mysqli_fetch_array($dato))
{
    echo "

		<div class='col-sm'>
			<div class='card' style='width: 20rem;'>"
    ?><img class='card-img-top' alt='Card image cap' src='data:image/jpg; base64, <?php echo base64_encode($row[4]); ?>'/><?php echo"
    	            <div class='card-body' >
	              	<h6 class='card-title'>{$row[1]}</h6>	
	              	<h6 class='card-title'>{$row[2]}</h6> 
	              	<h6 class='card-title'>{$row[3]}</h6>  
	              	<h6 class='card-title'>{$row[5]}</h6> 
	              	<h6 class='card-title'>{$row[6]}</h6> 
	              	<h6 class='card-title'>{$row[7]}</h6>         
		          	<div>
			            <a href='".URL."{$row[0]}' class='btn'>
			             	Adoptar
			            </a>
		        	</div> 		              		        
	            </div>
	         </div>
	          
        </div>";
}

?>