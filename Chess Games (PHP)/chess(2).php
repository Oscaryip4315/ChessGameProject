<html>
<head>
<style type="text/css">
table
{
	border-collapse:collapse;
	width 100%;
	height 100%;
}
td,tr
{
	width 100%;
	height 100%;
}

</style>
<script type="text/javascript">
function rook()
{
alert("this is a rook");
}

function bishop()
{
alert("this is a bishop");
}

function queen()
{
alert("this is a queen");
}

function king()
{
alert("this is a king");
}

function pawn()
{
alert("this is a pawn");
}

function knight()
{
alert("this is a knight");
}

function color(x)
{
	if(x=="rookb1")
	{
	document.getElementById("rookb1").style.background = "red";
	return true;

	}
	
	else if(x=="rookb2")
	{
	document.getElementById("rookb2").style.background = "blue";
	return true;
	}
	
	else if(x=="bishopb1")
	{
	document.getElementById("bishopb1").style.background = "red";
	return true;
	}
	
	else if(x=="bishopb2")
	{
	document.getElementById("bishopb2").style.background = "blue";
	return true;
	}
	
	else if(x=="rookw1")
	{
	document.getElementById("rookw1").style.background = "red";
	return true;
	}
	
	else if(x=="rookw2")
	{
	document.getElementById("rookw2").style.background = "blue";
	return true;
	}
	
	else if(x=="bishopw1")
	{
	document.getElementById("bishopw1").style.background = "red";
	return true;
	}
	
	else if(x=="bishopw2")
	{
	document.getElementById("bishopw2").style.background = "blue";
	return true;
	}
	
	else if(x=="knightb1")
	{
	document.getElementById("knightb1").style.background = "red";
	return true;
	}
	
	else if(x=="knightb2")
	{
	document.getElementById("knightb2").style.background = "blue";
	return true;
	}
	
	else if(x=="knightw1")
	{
	document.getElementById("knightw1").style.background = "red";
	return true;
	}
	
	else if(x=="knightw2")
	{
	document.getElementById("knightw2").style.background = "blue";
	return true;
	}
		
	else if(x=="kingw")
	{
	document.getElementById("kingw").style.background = "red";
	return true;
	}
		
	else if(x=="kingb")
	{
	document.getElementById("kingb").style.background = "blue";
	return true;
	}
		
	else if(x=="queenw")
	{
	document.getElementById("queenw").style.background = "red";
	return true;
	}
		
	else if(x=="queenb")
	{
	document.getElementById("queenb").style.background = "blue";
	return true;
	}
		
	else if(x=="pawnb1")
	{
	document.getElementById("pawnb1").style.background = "red";
	return true;
	}
			
	else if(x=="pawnb8")
	{
	document.getElementById("pawnb8").style.background = "blue";
	return true;
	}
			
	else if(x=="pawnb2")
	{
	document.getElementById("pawnb2").style.background = "red";
	return true;
	}
			
	else if(x=="pawnb3")
	{
	document.getElementById("pawnb3").style.background = "blue";
	return true;
	}
			
	else if(x=="pawnb4")
	{
	document.getElementById("pawnb4").style.background = "red";
	return true;
	}
			
	else if(x=="pawnb5")
	{
	document.getElementById("pawnb5").style.background = "blue";
	return true;
	}
			
	else if(x=="pawnb6")
	{
	document.getElementById("pawnb6").style.background = "red";
	return true;
	}
			
	else if(x=="pawnb7")
	{
	document.getElementById("pawnb7").style.background = "blue";
	return true;
	}
				
	else if(x=="pawnw1")
	{
	document.getElementById("pawnw1").style.background = "red";
	return true;
	}
					
	else if(x=="pawnw2")
	{
	document.getElementById("pawnw2").style.background = "blue";
	return true;
	}
					
	else if(x=="pawnw3")
	{
	document.getElementById("pawnw3").style.background = "red";
	return true;
	}
					
	else if(x=="pawnw4")
	{
	document.getElementById("pawnw4").style.background = "blue";
	return true;
	}
					
	else if(x=="pawnw5")
	{
	document.getElementById("pawnw5").style.background = "red";
	return true;
	}
					
	else if(x=="pawnw6")
	{
	document.getElementById("pawnw6").style.background = "blue";
	return true;
	}
					
	else if(x=="pawnw7")
	{
	document.getElementById("pawnw7").style.background = "red";
	return true;
	}
					
	else if(x=="pawnw8")
	{
	document.getElementById("pawnw8").style.background = "blue";
	return true;
	}
}

function mouseout(y)	
{
		if(y=="rookb1")
	{
	document.getElementById("rookb1").style.background = "grey";
	return true;

	}
	
	else if(y=="rookb2")
	{
	document.getElementById("rookb2").style.background = "grey";
	return true;
	}
	
	else if(y=="bishopb1")
	{
	document.getElementById("bishopb1").style.background = "grey";
	return true;
	}
	
	else if(y=="bishopb2")
	{
	document.getElementById("bishopb2").style.background = "grey";
	return true;
	}
	
	else if(y=="rookw1")
	{
	document.getElementById("rookw1").style.background = "grey";
	return true;
	}
	
	else if(y=="rookw2")
	{
	document.getElementById("rookw2").style.background = "grey";
	return true;
	}
	
	else if(y=="bishopw1")
	{
	document.getElementById("bishopw1").style.background = "grey";
	return true;
	}
	
	else if(y=="bishopw2")
	{
	document.getElementById("bishopw2").style.background = "grey";
	return true;
	}
	
	else if(y=="knightb1")
	{
	document.getElementById("knightb1").style.background = "grey";
	return true;
	}
	
	else if(y=="knightb2")
	{
	document.getElementById("knightb2").style.background = "grey";
	return true;
	}
	
	else if(y=="knightw1")
	{
	document.getElementById("knightw1").style.background = "grey";
	return true;
	}
	
	else if(y=="knightw2")
	{
	document.getElementById("knightw2").style.background = "grey";
	return true;
	}
		
	else if(y=="kingw")
	{
	document.getElementById("kingw").style.background = "grey";
	return true;
	}
		
	else if(y=="kingb")
	{
	document.getElementById("kingb").style.background = "grey";
	return true;
	}
		
	else if(y=="queenw")
	{
	document.getElementById("queenw").style.background = "grey";
	return true;
	}
		
	else if(y=="queenb")
	{
	document.getElementById("queenb").style.background = "grey";
	return true;
	}
		
	else if(y=="pawnb1")
	{
	document.getElementById("pawnb1").style.background = "grey";
	return true;
	}
			
	else if(y=="pawnb8")
	{
	document.getElementById("pawnb8").style.background = "grey";
	return true;
	}
			
	else if(y=="pawnb2")
	{
	document.getElementById("pawnb2").style.background = "grey";
	return true;
	}
			
	else if(y=="pawnb3")
	{
	document.getElementById("pawnb3").style.background = "grey";
	return true;
	}
			
	else if(y=="pawnb4")
	{
	document.getElementById("pawnb4").style.background = "grey";
	return true;
	}
			
	else if(y=="pawnb5")
	{
	document.getElementById("pawnb5").style.background = "grey";
	return true;
	}
			
	else if(y=="pawnb6")
	{
	document.getElementById("pawnb6").style.background = "grey";
	return true;
	}
			
	else if(y=="pawnb7")
	{
	document.getElementById("pawnb7").style.background = "grey";
	return true;
	}
				
	else if(y=="pawnw1")
	{
	document.getElementById("pawnw1").style.background = "grey";
	return true;
	}
					
	else if(y=="pawnw2")
	{
	document.getElementById("pawnw2").style.background = "grey";
	return true;
	}
					
	else if(y=="pawnw3")
	{
	document.getElementById("pawnw3").style.background = "grey";
	return true;
	}
					
	else if(y=="pawnw4")
	{
	document.getElementById("pawnw4").style.background = "grey";
	return true;
	}
					
	else if(y=="pawnw5")
	{
	document.getElementById("pawnw5").style.background = "grey";
	return true;
	}
					
	else if(y=="pawnw6")
	{
	document.getElementById("pawnw6").style.background = "grey";
	return true;
	}
					
	else if(y=="pawnw7")
	{
	document.getElementById("pawnw7").style.background = "grey";
	return true;
	}
					
	else if(y=="pawnw8")
	{
	document.getElementById("pawnw8").style.background = "grey";
	return true;
	}

}


</script>
</head>
<body>
<?php
		echo "<table border=\"1\" align=\"center\">";
			
		for($row = 1 ; $row <= 8; $row++){		
		echo"<tr>";
			for($column=1 ; $column <= 8; $column++){
			
			$total =$row +$column;
		
			if(($total%2) ==0)
				{ 
					echo '<td style="background-color:white">';
				}
					else
						{
							echo '<td style="background-color:green">';
						}
				
			if($row==1 && $column==1)
			{
				echo '<img src="/rookb.jpg" onclick="rook()" id="rookb1" onmouseover="color(this.id)" onmouseout="mouseout(this.id)"/>';
			}
			if($row==1 && $column==3)
			{
				echo '<img src="/bishopb.jpg" onclick="bishop()" id="bishopb1" onmouseover="color(this.id)" onmouseout="mouseout(this.id)"/>';
			}
			if($row==1 && $column==4)
			{
				echo '<img src="/queenb.jpg" onclick="queen()" id="queenb" onmouseover="color(this.id)" onmouseout="mouseout(this.id)"/>';
			}
			if($row==1 && $column==5)
			{
				echo '<img src="/kingb.jpg" onclick="king()" id="kingb" onmouseover="color(this.id)" onmouseout="mouseout(this.id)"/>';
			}
			if($row==1 && $column==8)
			{
				echo '<img src="/rookb.jpg" onclick="rook()" id="rookb2" onmouseover="color(this.id)" onmouseout="mouseout(this.id)"/>';
			}
			if($row==2 && $column==1)
			{
				echo '<img src="/pawnb.jpg" onclick="pawn()" id="pawnb1" onmouseover="color(this.id)" onmouseout="mouseout(this.id)"/>';
			}
			if($row==2 && $column==2)
			{
				echo '<img src="/pawnb.jpg" onclick="pawn()" id="pawnb2" onmouseover="color(this.id)" onmouseout="mouseout(this.id)"/>';
			}
			if($row==2 && $column==3)
			{
				echo '<img src="/pawnb.jpg" onclick="pawn()" id="pawnb3" onmouseover="color(this.id)" onmouseout="mouseout(this.id)"/>';
			}
			if($row==2 && $column==4)
			{
				echo '<img src="/pawnb.jpg" onclick="pawn()" id="pawnb4" onmouseover="color(this.id)" onmouseout="mouseout(this.id)"/>';
			}
			if($row==2 && $column==5)
			{
				echo '<img src="/bishopb.jpg" onclick="bishop()" id="bishopb2" onmouseover="color(this.id)" onmouseout="mouseout(this.id)"/>';
			}
			if($row==2 && $column==6)
			{
				echo '<img src="/pawnb.jpg" onclick="pawn()" id="pawnb5" onmouseover="color(this.id)" onmouseout="mouseout(this.id)"/>';
			}
			if($row==2 && $column==7)
			{
				echo '<img src="/pawnb.jpg" onclick="pawn()" id="pawnb6" onmouseover="color(this.id)" onmouseout="mouseout(this.id)"/>';
			}
			if($row==2 && $column==8)
			{
				echo '<img src="/pawnb.jpg" onclick="pawn()" id="pawnb7" onmouseover="color(this.id)" onmouseout="mouseout(this.id)"/>';
			}
			if($row==3 && $column==3)
			{
				echo '<img src="/knightb.jpg" onclick="knight()" id="knightb1" onmouseover="color(this.id)" onmouseout="mouseout(this.id)"/>';
			}
			if($row==3 && $column==6)
			{
				echo '<img src="/knightb.jpg" onclick="knight()" id="knightb2" onmouseover="color(this.id)" onmouseout="mouseout(this.id)"/>';
			}
			if($row==4 && $column==5)
			{
				echo '<img src="/pawnb.jpg" onclick="pawn()" id="pawnb8" onmouseover="color(this.id)" onmouseout="mouseout(this.id)"/>';
			}
			if($row==5 && $column==3)
			{
				echo '<img src="/bishopw.jpg" onclick="bishop()" id="bishopw1" onmouseover="color(this.id)" onmouseout="mouseout(this.id)"/>';
			}
			if($row==5 && $column==5)
			{
				echo '<img src="/pawnw.jpg" onclick="pawn()" id="pawnw1" onmouseover="color(this.id)" onmouseout="mouseout(this.id)"/>';
			}
			if($row==6 && $column==4)
			{
				echo '<img src="/pawnw.jpg" onclick="pawn()" id="pawnw2" onmouseover="color(this.id)" onmouseout="mouseout(this.id)"/>';
			}
			if($row==6 && $column==6)
			{
				echo '<img src="/knightw.jpg" onclick="knight()" id="knightw1" onmouseover="color(this.id)" onmouseout="mouseout(this.id)"/>';
			}
			if($row==7 && $column==1)
			{
				echo '<img src="/pawnw.jpg" onclick="pawn()" id="pawnw3" onmouseover="color(this.id)" onmouseout="mouseout(this.id)"/>';
			}
			if($row==7 && $column==2)
			{
				echo '<img src="/pawnw.jpg" onclick="pawn()" id="pawnw4" onmouseover="color(this.id)" onmouseout="mouseout(this.id)"/>';
			}
			if($row==7 && $column==3)
			{
				echo '<img src="/pawnw.jpg" onclick="pawn()" id="pawnw5" onmouseover="color(this.id)" onmouseout="mouseout(this.id)"/>';
			}
			if($row==7 && $column==6)
			{
				echo '<img src="/pawnw.jpg" onclick="pawn()" id="pawnw6" onmouseover="color(this.id)" onmouseout="mouseout(this.id)"/>';
			}
			if($row==7 && $column==7)
			{
				echo '<img src="/pawnw.jpg" onclick="pawn()" id="pawnw7" onmouseover="color(this.id)" onmouseout="mouseout(this.id)"/>';
			}
			if($row==7 && $column==8)
			{
				echo '<img src="/pawnw.jpg" onclick="pawn()" id="pawnw8" onmouseover="color(this.id)" onmouseout="mouseout(this.id)"/>';
			}
			if($row==8 && $column==1)
			{
				echo '<img src="/rookw.jpg" onclick="rook()" id="rookw1" onmouseover="color(this.id)" onmouseout="mouseout(this.id)"/>';
			}
			if($row==8 && $column==2)
			{
				echo '<img src="/knightw.jpg" onclick="knight()" id="knightw2" onmouseover="color(this.id)" onmouseout="mouseout(this.id)"/>';
			}
			if($row==8 && $column==3)
			{
				echo '<img src="/bishopw.jpg" onclick="bishop()" id="bishopw2" onmouseover="color(this.id)" onmouseout="mouseout(this.id)"/>';
			}
			if($row==8 && $column==4)
			{
				echo '<img src="/queenw.jpg" onclick="queen()" id="queenw" onmouseover="color(this.id)" onmouseout="mouseout(this.id)"/>';
			}
			if($row==8 && $column==6)
			{
				echo '<img src="/rookw.jpg" onclick="rook()" id="rookw2" onmouseover="color(this.id)" onmouseout="mouseout(this.id)"/>';
			}
			if($row==8 && $column==7)
			{
				echo '<img src="/kingw.jpg" onclick="king()" id="kingw" onmouseover="color(this.id)" onmouseout="mouseout(this.id)"/>';
			}
			
			
			echo "</td>";
			}
			
		
		}
		
		echo"<tr/>";
		echo "</table>";
		
?>
</body>
</html>