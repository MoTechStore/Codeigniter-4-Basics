<?php 
// var_dump($products);
?>

<html>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</html>

<script>

    var data = <?php echo json_encode($products); ?>
    
    //console.log(data);

   

    var selectFunction = function() {
            console.log('Me')
            selectElement = document.querySelector('#mySelect');
            output = selectElement.value;
            //console.log(output);
            $('#status').val(output);

        };
   
 
$(document).ready(function(){
    var selectElem = $("#mySelect");
    
for (var i=0; i<data.length; i++) {
      
    //console.log(data[i].name);

      $("<option/>", {
            value: data[i].price,
            text: data[i].name
        }).appendTo(selectElem);


        //$('#status').val(data[i].name);


}

  

});



</script>

<html>

	<head>
		<title>Modeling Data and ORM in CodeIgniter 4</title>
	</head>

	<body>


    

<div class="container col-sm-8">



<div class="form-group pt-3">


            <div class="row">

                <div class="col">

    <select id="mySelect" class="form-control" onChange="selectFunction()">
        <option value="0" id="arama">Select Device Name</option>
    </select>
                </div>

                 <div class="col"><input type="text" class="form-control" name="status" id="status" required=""></div>              
            </div>          
        </div>

</br>

		<h3>Product List</h3>
		<table border="1"  class="table table-bordered">
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Status</th>
				<th>Created</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Description</th>
			</tr>
			<?php foreach ($products as $product) { ?>
				<tr>
					<td><?= $product['id'] ?></td>
					<td><?= $product['name'] ?></td>
					<td><?= $product['status'] ?></td>
					<td><?= $product['created'] ?></td>
					<td><?= $product['price'] ?></td>
					<td><?= $product['quantity'] ?></td>
					<td><?= $product['description'] ?></td>
				</tr>
			<?php } ?>
		</table>

            </div>

	</body>

</html>