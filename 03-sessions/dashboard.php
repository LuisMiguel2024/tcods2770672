<?php
    require "config/app.php";
    require "config/database.php";

    $user = getuser($conx, $_SESSION['uid']);

if(!isset($_SESSION['uid'])) {
    $_SESSION['error'] = "Please Login first to access dashboard.";
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="<?php echo URLCSS . "/master.css" ?>">
    <style>
        div.menu {
            background-color: #0077B6;
            display: flex;
            flex-direction: column;
            gap: 2rem;
            align-items: center;
            position: absolute;
            top: -1000px;
            opacity: 0;
            left: 0;
            z-index: 999;
            justify-content: center;
            width: 100%;
            transition: all 0.5s ease-in;
            min-height: 100vh;

            a:is(:link, :visited) {
                border: 1px solid #fff;
                color: #fff;
                font-size: 2rem;
                padding: 10px 20px;
                text-decoration: none;
            }
        } 

        a.closem {
            position: absolute;
            top: 44px;
            right: 0px;
        }
        nav {
            color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1rem;
            img {
                border: 2px solid #fff;
                border-radius: 60%;
                object-fit: cover;
                width: 200px;
            }

            h4, h5 {
                margin: 0;
            }
            a.closes {
                border: 2px solid #fff;
            }
        }

        div.menu.open {
            animation: openmenu 0.5s ease-in 1 forwards;
        }
        div.menu.close {
            animation: closemenu 0.5s ease-in 1 forwards;
        }
        @keyframes openmenu {
            0% {
                top: -1000px;
                opacity: 0;
            }
            100% {
                top: 0;
                opacity: 1;
            }
        }
        @keyframes closemenu {
            0% {
                top: 0px;
                opacity: 1;
            }
            100% {
                top: -1000px;
                opacity: 0;
            }
        }
    </style>
</head>
<body>
    <div class="menu">
        <a href="javascript:;" class="closem">X</a>
        <nav>
            <img src="<?= URLIMGS."/".$user['photo']?>" alt="Photo">
            <h4><?php echo $user['fullname'] ?></h4>
            <h5><?php echo $user['role'] ?></h5>
            <a class="closes" href="close.php">Close Sesion</a>
        </nav>
    </div>
<main>
<header class="nav level-0">
            <a href="#">
                <img src="<?php echo URLIMGS . "/ico-back.svg" ?>" alt="Back">
            </a>
            <img src="<?php echo URLIMGS . "/Vector.svg" ?>" alt="Logo">
            <a href="javascript:;" class="mburger">
                <img src="<?php echo URLIMGS . "/mburger.svg" ?>" alt="Menu Burger">
            </a>
        </header>

        <?php if ($_SESSION['urole'] == 'Admin'): ?>

        <section class="dashboard">
            <h1>Dashboard</h1>
            <menu>
                <ul>
                    <li>
                        <a href="#">
                            <img src="<?php echo URLIMGS . "/ico-users.svg" ?>"  alt="users">
                                <span>Module User</span>
                        </a>
                    </li>
                    <li>
                        <a href="3">
                            <img src="<?php echo URLIMGS . "/ico-pets.svg" ?>"  alt="pets">
                            <span>Module Pets</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?php echo URLIMGS . "/ico-adopt.svg" ?>"  alt="adoptions">
                            <span>Module Adoptions</span>
                        </a>
                    </li>
                </ul>
            </menu>
        </section>
        <?php elseif ($_SESSION['urole'] == 'Customer'): ?>
            <section class="dashboard">
            <h1>Dashboard</h1>
            <menu>
                <ul>
                    <li>
                    <a href="#">
                            <img src="<?php echo URLIMGS . "/ico-adopt.svg" ?>"  alt="adoptions">
                            <span>Module Adoptions</span>
                        </a>
                    </li>
                </ul>
            </menu>
        </section>
        <?php endif ?>
    </main>
    <script src="<?php echo URLJS . "/sweetalert2.js" ?>"></script>
    <script src="<?php echo URLJS . "/jquery-3.7.1.min.js" ?>"></script>
    <script>
        $(document).ready(function () {

            $('body').on('click', '.mburger', function () {
                $('.menu').addClass('open')
            })
            $('body').on('click', '.closem', function () {
                $('.menu').addClass('close')
                setTimeout(() => {
                    $('.menu').removeClass('open')
                    $('.menu').removeClass('close')
                }, 1000)
                });

            <?php if(isset($_SESSION['msg'])): ?>
                Swal.fire({
                    position: "top-end",
                    title: "Congratulations!",
                    text: "<?php echo $_SESSION['msg'] ?>",
                    icon: "success",
                    showConfirmButton: false,
                    timer: 5000
                })
                <?php unset($_SESSION['msg']) ?>
            <?php endif ?>
        })
    </script>
</body>
</html>