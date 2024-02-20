<?php
require "config/app.php";
require "config/database.php";

$pets = getallpets($conx);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module Pets</title>
    <link rel="stylesheet" href="<?php echo URLCSS . "/master.css" ?>">
</head>

<body>
    <main>
        <header class="nav level-0">
            <a href="">
                <img src="<?php echo URLIMGS . "/back.svg" ?>" alt="back">
            </a>
            <img src="<?php echo URLIMGS . "/Vector.svg" ?>"alt="logo">
            <a href="" class="burguer">
                <img src="<?php echo URLIMGS . "/mburger.svg" ?>"  alt="menu burguer">
            </a>
        </header>
        <section class="module">
        <h1>Module pets</h1>
            <a class="add" href="add.php">
                <img src="<?php echo URLIMGS . "/ico-add.svg" ?>" width="30px" alt="Add">
                Add Pet
            </a>
            <table>
                <tbody>
                    <?php foreach($pets as $pet) : ?>
                    <tr>
                        <td>
                            <img src="<?php echo URLIMGS . "/ico-pets.svg" ?>"  alt="">
                        </td>
                        <td>
                            <span><?php echo $pet['name']?> </span>
                            <p><?php echo $pet['kind']?> </p>
                        </td>
                        <td>
                            <a href="show.html" class="show"><img src="<?php echo URLIMGS . "/ico-search.svg" ?>"  alt="show"></a>
                            <a href="edit.html" class="edit"><img src="<?php echo URLIMGS . "/ico-edit.svg" ?>"  alt="edit"></a>
                            <a href="javascript:;" class="delete"><img src="<?php echo URLIMGS . "/ico-trash.svg" ?>"  alt=""></a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </section>
    </main>
    <script src="../../js/sweetalert2.js"></script>
    <script src="../../js/jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function () {
            $('body').on('click', '.delete', function () {
                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#03045e",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                            title: "Deleted!",
                            text: "The pet has been deleted.",
                            confirmButtonColor: "#03045e",
                            icon: "success"
                        });
                    }
                });
            })
        });
    </script>
</body>

</html>