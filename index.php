<?php 
	
	// Define empty vars
	$decimal = null;
	$binary = null;

	// Check if binary has been submitted
	if (isset($_POST['binary'])) {
		$binary = $_POST['binary'];
		$decimal = bindec($_POST['binary']);
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Binary to Decimal Convertor</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <main class="container">
    	<div class="row justify-content-center py-5">
    		<div class="col-12 col-md-6">
		    	<div class="card">
		    		<div class="card-body">
				        <h1>Binary to Decimal</h1>
				        <form action="/" method="POST" class="">
				            <div class="form-group">
				                <label for="binary">Binary</label><br>
				                <input type="text" name="binary" pattern="^[0-1]{0,8}$" maxlength="8" required="required" id="binary" value="<?php echo $binary ?>" class="form-control">
				            </div>
				            <div>
				                <label for="number">Decimal</label><br>
				                <input type="number" class="form-control" id="number" readonly="readonly" value="<?php echo $decimal ?>"><br>
				            </div>
				            <div>
				                <input type="submit" value="Convert" name="submit" class="btn btn-primary">
				            </div>
				        </form>
				    </div>
				</div>
			</div>
	    </div>
    </main>
</body>
</html>
