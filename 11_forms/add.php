<?php
//get shows input on url
/*
if (isset($_GET['submit'])) {
    echo $_GET['email'];
    echo $_GET['pizza'];
    echo $_GET['ingredients'];
}*/


//connect db from config folder

include('./db_connect.php');




$title = $email = $ingredients = '';
$errors = array('email' => '', 'title' => '', 'ingredients' => '');





//post doesn't shows input on url
/*
 if (isset($_POST['submit'])) {
    //echo htmlspecialchars($_POST['email']);
    // echo htmlspecialchars($_POST['pizza']);
    // echo htmlspecialchars($_POST['ingredients']);

   
    //validation 1
    //check email
    if (empty($_POST['email'])) {
        echo 'An email is required <br>';
    } else {
        echo htmlspecialchars($_POST['email']);
    }
    //check pizza
    if (empty($_POST['title'])) {
        echo 'A title is required <br>';
    } else {
        echo htmlspecialchars($_POST['pizza']);
    }
    //check ingredients
    if (empty($_POST['ingredients'])) {
        echo 'At least one ingredients is required <br>';
    } else {
        echo htmlspecialchars($_POST['ingredients']);
    } //end of post check
}

//raw

    //21--- validation 2
    //check email
    if (empty($_POST['email'])) {
        echo 'An email is required <br>';
    } else {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo 'email must be a valid email address';
        }
    }
    //check pizza
    if (empty($_POST['title'])) {
        echo 'A title is required <br>';
    } else {
        $title = $_POST['title'];
        if (!preg_match('/^[a-zA-Z\s]+$/', $title)) {
            echo 'Title must contain letters and spaces only <br>';
        }
    }
    //check ingredients

    if (empty($_POST['ingredients'])) {
        echo 'At least one ingredient is required <br>';
    } else {
        $ingredients = $_POST['ingredients'];
        if (!preg_match('/^([a-zA-Z\s])+(,\s*[a-zA-Z\s]*)*$/', $ingredients)) {
            echo 'must be comma and separated line <br>';
        }
    }*/

if (isset($_POST['submit'])) {


    // check email
    if (empty($_POST['email'])) {
        echo  'An email is required <br />';
    } else {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'e-mail must be a valid email address';
        }
    }

    // check title
    if (empty($_POST['title'])) {
        echo 'A title is required <br />';
    } else {
        $title = $_POST['title'];
        if (!preg_match('/^[a-zA-Z\s]+$/', $title)) {
            $errors['title'] = 'Title must be letters and spaces only';
        }
    }

    // check email
    if (empty($_POST['ingredients'])) {
        echo  'An least one ingredient is required <br />';
    } else {
        $ingredients = $_POST['ingredients'];
        if (!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)) {
            $errors['ingredients'] = 'Ingredients must be a comma separated list';
        } //end of post check
    }
    //Checking for Errors & Redirecting
    if (array_filter($errors)) {
        // echo 'errors in the form';
    } else {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $ingredients = mysqli_real_escape_string($conn, $_POST['ingredients']);

        // create sql
        $sql = "INSERT INTO pizzas(title,email,ingredients) VALUES('$title','$email','$ingredients')";

        // save to db and check
        if (mysqli_query($conn, $sql)) {
            // success
            header('Location:index.php');
        } else {
            // error
            echo 'query error: ' . mysqli_error($conn);
        }
    }

    //end of post chec
}




?>
<!DOCTYPE html>
<html>

<?php include('./header.php'); ?>

<section class="container grey-text">

    <section class="container grey-text">
        <h4 class="center">Add a Pizza</h4>

        <form action="add.php" method="POST" class="white">

            <label for="email">Your Email:</label>
            <input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>">
            <div class="red-text"><?php echo $errors['email']; ?></div>

            <label for="title">Pizza Title:</label>
            <input type="text" name="title" value="<?php echo htmlspecialchars($title) ?>">
            <div class="red-text"><?php echo $errors['title']; ?></div>

            <label for="ingredients">Ingredients (comma separated):</label>
            <input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients) ?>">
            <div class="red-text"><?php echo $errors['ingredients']; ?></div>

            <input type="submit" value="submit" name="submit">

        </form>
    </section>


    <?php include('./footer.php'); ?>




</html>