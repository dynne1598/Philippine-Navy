<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="NICTS.css">
	
	<title>because of you</title>
</head>
<body>
<div class="container">
<center><h1>KALAMANSIG</h1></center>

<div class="container-search">
<input type="text" class="display-size">
<select class="display-size">
	<option>EQUIPMENT</option>
	<option>SERIAL NO.</option>
</select>
<button class="display-size">SEARCH</button>
</div>

<div class="view-btn">
	<a href="VIEW_kalamansig.php"><button class="display-size">VIEW DATA</button></a>
</div>

<div class="container-drpdwn">
	<select class="display-size" onchange="location = this.value;">

		<option value="NICTS_kalamansig.php">KALAMANSIG</option>
		<option value="NICTS_general.php">GENERAL</option>
		<option value="NICTS_davao.php">NICTS DAVAO</option>
		<option value="NICTS_surigao.php">SURIGAO</option>
		<option value="NICTS_maitum.php">MAITUM</option>
		<option value="NICTS_maasim.php">MAASIM</option>
		<option value="NICTS_balut.php">BALUT</option>
		<option value="NICTS_tinaca.php">TINACA</option>
		<option value="NICTS_San_agustin.php">SAN AGUSTIN</option>
	</select>
</div>

<button id="myBtn" class="display-size">ADD ITEM</button>

<div id="myModal" class="modal">
	
		<div class="modal-content">
			<span class="close"> &times; </span>
			<h4 class="modal-header">NICTS</h4>
			<form>	
				QUANTITY:<br> <input type="number" id="input1" class="display-size" ><br>
				U/I:<br> <input type="text" id="input2" class="display-size"><br>
				DESCRIPTION:<br> <input type="text" id="input3" class="display-size"><br>
				MODEL:<br> <input type="text" id="input4" class="display-size"><br>
				SERIAL-NO.:<br> <input type="text" id="input5" class="display-size"><br>
				REMARKS:<br> <input type="text" id="input6" class="display-size"><br>
				<p id=button></p>
			</form>
			<button onclick="myCreateFunction()" class="display-size">ADD ITEM</button>
		</div>
</div>
<center>
<table id="myTable" class="table">
		<thead class="thead-dark">
			<th scope="col">QTY</th>
			<th scope="col">U/I</th>
			<th scope="col">DESCRIPTION</th>
			<th scope="col">MODEL</th>
			<th scope="col">SERIAL-NO.</th>
			<th scope="col">REMARKS</th>
			<th scope="col"><i>Function</i></th>
		</thead>	
	</table>
</center>

</div>
<script type="text/javascript">
	var modal = document.getElementById("myModal");
	var btn = document.getElementById("myBtn");
	var span = document.getElementsByClassName("close")[0];
	btn.onclick = function(){
		modal.style.display = "block";
	}

	span.onclick = function(){
		modal.style.display = "none";
	}

	window.onclick = function(event){
		if (event.target == modal) {
			modal.style.display = "none";
		}
	}

	function myCreateFunction() {
			var table =  document.getElementById("myTable");
			var row = table.insertRow(-1);
			var cell1 = row.insertCell(0);
			var cell2 = row.insertCell(1);
			var cell3 = row.insertCell(2);
			var cell4 = row.insertCell(3);
			var cell5 = row.insertCell(4);
			var cell6 = row.insertCell(5);
			var cell7 = row.insertCell(6);
			var newCell1 = document.getElementById("input1").value;
			var newCell2 = document.getElementById("input2").value;
			var newCell3 = document.getElementById("input3").value;
			var newCell4 = document.getElementById("input4").value;
			var newCell5 = document.getElementById("input5").value;
			var newCell6 = document.getElementById("input6").value;
			cell1.innerHTML = newCell1;
			cell2.innerHTML = newCell2.toUpperCase();
			cell3.innerHTML = newCell3.toUpperCase();
			cell4.innerHTML = newCell4.toUpperCase();
			cell5.innerHTML = newCell5;
			cell6.innerHTML = newCell6.toUpperCase();
			cell7.innerHTML = "<button class='display-size'>EDIT</button>";
		}

</script>





</body>
</html>