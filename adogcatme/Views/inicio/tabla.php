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
	              	<h5 class='card-title'>{$row[1]}</h5>
	              	<h5 class='card-title'>{$row[6]}</h5>         
		          	<div>
		          	
		                <a href='Ver_mas'>
			             	Ver mas
			            </a>
		        	</div> 		              		        
	            </div>
	         </div>
	          
        </div>";
}

?>