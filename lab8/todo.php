<?php session_start(); ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Lab 8</title>
  </head>
  <body>
    <?php 
      // initialize variables
      $newTodo = $newTodoErr = "";
      if (!isset($_SESSION['todoList']))
	$_SESSION['todoList'] = array();
    ?>
    <div class="container">
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-6">
              <h3>To Do List</h3>
            </div>
            <div class="col-6">
              <!-- Form to clear session -->
              <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <button class="btn btn-secondary float-right" type="submit" name="clear">Clear Session</button>
		<?php 
			if(isset($_POST['clear'])){
				session_unset();
				session_destroy();
				$_SESSION['todoList'] = array();
			}
		?>
              </form>
            </div>
          </div>
        </div>
        <div class="card-body">
          <!-- Form to add more to-dos -->
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group input-group">
              <input type="text" class="form-control <?php if (!empty($newTodoErr)) echo ('is-invalid'); ?>" name="todo">
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit" name="submit">Submit</button>
              </div>
              <div class="invalid-feedback"> 
                <?php
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			if(empty($_POST["todo"]))
				$newTodoErr = "Please enter a to-do";
			else{
				$newTodo = test_input($_POST["todo"]);
				if(!preg_match("/^[a-zA-Z0-9 ]*$/", $newTodo))
					$newTodoErr = "To-do should only contain letters and numbers";
				else
					array_push($_SESSION['todoList'], $newTodo);	
			}
		}
		function test_input($data) {  
			$data = trim($data);  
			$data = stripslashes($data);  
			$data = htmlspecialchars($data);  
			return $data;
		}
		?>
		<span class="error"><?php echo $newTodoErr;?></span>
              </div>
            </div>
          </form>
        </div>
        <div class="card-body">
          <!-- Loop to create HTML for each to-do  -->
          <?php 
	    if(count($_SESSION['todoList']) != 0)	
	     	foreach ($_SESSION['todoList'] as $todo): ?>
            <div class="input-group mb-1">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <!-- index of each to-do -->
                  <?php 
			static $index = 1;
			echo $index++;
		   ?>
                </div>
              </div>
              <input type="text" class="form-control" value="<?php echo $todo; ?>" >
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
