  <?php
	  	$qty = $row_prd['p_qty'];
		if($qty == 0){
			echo "<font color='red'>";
			echo "<button class='btn btn-danger btn-sm' >หมด!</button>";
			echo "</font>";
			}else{ 


				?>	
			
			
      <a href="index.php?p_id=<?php echo $row_prd['p_id'];?>&act=add" class="btn btn-danger btn-sm"> <span class="glyphicon glyphicon-shopping-cart"></span>  สั่งซื้อ </a>
	  
 
      <?php  } ?>
          