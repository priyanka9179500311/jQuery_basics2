<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Bootstrap 4 Example</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
	</head>
	<body>

		<div class="container">
		  <form id="myForm">
				<div class="form-group">
					<label for="n1">Enter No. 1:</label>
					<input type="text" name="n1" class="form-control" placeholder="Enter n1" id="n1">
				</div>
				<div class="form-group">
					<label for="n2">Enter No. 2 :</label>
					<input type="text" name="n2" class="form-control" placeholder="Enter n2" id="n2">
				</div>
				
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>

		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<script>
			//(function)(jQuery);
			(function(){
				//alert('ok');
				$('#myForm').submit(function(e){
					e.preventDefault();
					let n1 = parseFloat($("#n1").val());
					let n2 = parseFloat($("#n2").val());
					alert("The sum is "+(n1+n2));
				});
			})(jQuery);
			
		
		</script>
	</body>
</html>
