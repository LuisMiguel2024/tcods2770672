<?php
require "config/app.php";
require "config/database.php";

$pet = getpet($conx, $_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pet</title>
    <link rel="stylesheet" href="<?php echo URLCSS . "/master.css" ?>">
</head>

<body>
    <main>
    <header class="nav level-1">
            <a href="index.php">
                <img src="<?php echo URLIMGS . "/ico-back.svg" ?>" alt="back">
            </a>
            <img src="<?php echo URLIMGS . "/Vector.svg"?>" alt="logo">
            <a href="" class="burguer">
                <img src="<?php echo URLIMGS . "/mburger.svg"?>"  alt="menu burguer">
            </a>
        </header>
        <section class="edit">
            <h1>Edit Pet</h1>
            <form action="dashboard.html" method="post" enctype="multipart/form-data">
                <img src="<?php echo URLIMGS . "/" . $pet['photo']?>" alt="upload" width="240px" id="upload">
                <input type="file" name="photo" id="photo" accept="image/*">
                <input type="text" name="name" value="<?= $pet['name'] ?>" placeholder="full name" value="Name" required>
                <input type="text" name="pet" value="<?= $pet['kind'] ?>" placeholder="type of pet" value="kind" required>
                <input type="number" name="weight" value="<?= $pet['weight'] ?>" placeholder="email" value="age" required>
                <input type="text" name="age" value="<?= $pet['age'] ?>" placeholder="age" value="Dog" required>
                <input type="text" name="breed" value="<?= $pet['breed'] ?>" placeholder="breed" value="breed" required>
                <input type="text" name="location" value="<?= $pet['location'] ?>" placeholder="location" value="location" required>
                            <button type="submit">Update</button>
            </form>
        </section>
    </main>
            <?php
            if($_POST) {

                if(is_file($_FILES['photo']['tmp_name'])) {
                    $photo = time() . "." . pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
                } else {
                    $photo = '';
                }
                }

                $data = [
                    'name' => $_POST['name'],
                    'photo' => $photo,
                    'kind' => $_POST['kind'],
                    'weight' => $_POST['weight'],
                    'age' => $_POST['age'],
                    'breed' => $_POST['breed'],
                    'location' => $_POST['location']
                ];
                //echo var_dump($data);


                if (updatepet($conx, $data)) {
                    if (!empty($_FILES['photo']['tmp_name'])) {
                        move_uploaded_file($_FILES['photo']['tmp_name'], "../01-UI/image/" . $photo);
                    }
                    header("location: index.php");
                }
            
            ?>
        </section>
    </main>
    <script src="../../js/sweetalert2.js"></script>
    <script src="../../js/jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#upload').click(function (e) { 
                e.preventDefault()
                $('#photo').click()
                
            });
            $('#photo').change(function (e) { 
                e.preventDefault();
                let reader = new FileReader()
                reader.onload = function(event) {
                    $('#upload').attr('src', event.target.result)
                }
                reader.readAsDataURL(this.files[0])
            });
        });
    </script>
</body>

</html>