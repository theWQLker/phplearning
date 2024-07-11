<?php
    //UNPROTECTED
    //    if(isset($_GET['submit'])){
    // 		echo $_GET['email'] . '<br />';
    // 		echo $_GET['title'] . '<br />';
    // 		echo $_GET['ingredients'] . '<br />';  
    // 	}
    //PROTECTED
    //     if(isset($_GET['submit'])){
    //     echo htmlspecialchars($_GET['email']) . '<br />';
    //     echo htmlspecialchars($_GET['title']) . '<br />';
    //     echo htmlspecialchars($_GET['ingredients']) . '<br />';
    // }
    //     if(isset($_POST['submit'])){
    //     echo htmlspecialchars($_POST['email']) . '<br />';
    //     echo htmlspecialchars($_POST['title']) . '<br />';
    //     echo htmlspecialchars($_POST['ingredients']) . '<br />';
    // }

    // if (isset($_POST['submit'])) {

    //     // check email
    //     if (empty($_POST['email'])) {
    //         echo 'An email is required <br />';
    //     } else {
    //         echo htmlspecialchars($_POST['email']) . '<br />';
    //     }

    //     // check title
    //     if (empty($_POST['title'])) {
    //         echo 'A title is required <br />';
    //     } else {
    //         echo htmlspecialchars($_POST['title']) . '<br />';
    //     }

    //     // check ingredients
    //     if (empty($_POST['ingredients'])) {
    //         echo 'At least one ingredient is required <br />';
    //     } else {
    //         echo htmlspecialchars($_POST['ingredients']) . '<br />';
    //     }
    // } // end POST check

    $email = $title = $ingredients = '';
	$errors = array('email' => '', 'title' => '', 'ingredients' => '');

	if(isset($_POST['submit'])){
		
		// check email
		if(empty($_POST['email'])){
			$errors['email'] = 'An email is required';
		} else{
			$email = $_POST['email'];
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$errors['email'] = 'Email must be a valid email address';
			}
		}

		// check title
		if(empty($_POST['title'])){
			$errors['title'] = 'A title is required';
		} else{
			$title = $_POST['title'];
			if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
				$errors['title'] = 'Title must be letters and spaces only';
			}
		}

		// check ingredients
		if(empty($_POST['ingredients'])){
			$errors['ingredients'] = 'At least one ingredient is required';
		} else{
			$ingredients = $_POST['ingredients'];
			if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
				$errors['ingredients'] = 'Ingredients must be a comma separated list';
			}
		}

	} // end POST check

    if(array_filter($errors)){
        // echo 'errors in form';
    } else {
        // echo 'form is valid';
        header('Location: index.php');
    }


//toto-php

?>
<!DOCTYPE html>
<html>

    <?php include("templates/header.php"); ?></h1>

    <section class="container black-text">
		<h4 class="center">Add a Pizza</h4>
		<form class="white" action="add.php" method="POST">
			<label>Your Email</label>
			<input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>">
			<div class="red-text"><?php echo $errors['email']; ?></div>
			<label>Pizza Title</label>
			<input type="text" name="title" value="<?php echo htmlspecialchars($title) ?>">
			<div class="red-text"><?php echo $errors['title']; ?></div>
			<label>Ingredients (comma separated)</label>
			<input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients) ?>">
			<div class="red-text"><?php echo $errors['ingredients']; ?></div>
			<div class="center">
				<input type="submit" name="submit" value="Submit" class="btn brand z-depth-0">
			</div>
		</form>
	</section>


    <?php include("templates/footer.php"); ?></div>



</html>