<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riad's Portfolio</title>
    <link rel="stylesheet" href="./css/home.css">

    <link rel="preconnect" href="https://f...content-available-to-author-only...s.com">
    <link rel="preconnect" href="https://f...content-available-to-author-only...c.com" crossorigin>
    <link href="https://f...content-available-to-author-only...s.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://f...content-available-to-author-only...s.com">
    <link rel="preconnect" href="https://f...content-available-to-author-only...c.com" crossorigin>
    <link href="https://f...content-available-to-author-only...s.com/css2?family=Mogra&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://f...content-available-to-author-only...s.com">
    <link rel="preconnect" href="https://f...content-available-to-author-only...c.com" crossorigin>
    <link href="https://f...content-available-to-author-only...s.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
</head>

<body class="open-sans-normal">
    <header class="header secondary-bg">
        <nav class="">
            <h3 class="nav-title">Fur<span class="text-primary"> n' </span>Feather</h3>
            <ul>

                <li><a class="dark-2" href="">Home</a></li>
                <li><a class="dark-2" href="../layout/about.php">About</a></li>
                <li><a class="dark-2" href="../layout/pet.php">Our Pets</a></li>
                <li><a class="dark-2" href="../layout/contact.php">Contact</a></li>
                <li><a href="../layout/shop.php"><button class="btn-shop">Shop</button></a></li>
            </ul>
        </nav>
        <div class="banner-description">
            <p id="p1">A place for </p>
            <p id="p2"> you and</p>
            <p id="p3">your pet...</p>
        </div>
        <div class="banner">
            <div class="banner-content">

                <div class="msg">
                    <p class="msg1">Adopt<br><span class="msg2"> Don't Shop</p>
                </div>
                <button class="btn-primary1">Log In</button>
                <!-- <button class=""></button> -->
                <!-- <a href="./modal.php"><button onclick="openModal()" class="btn-primary2">Sign Up</button></a> -->

                <button id="openModalBtn" class="btn-primary2">Sign Up</button>

                <dialog id="myModal" class="modal">
                    <div class="modal-content">
                        <form method="dialog">
                            <button id="closeModalBtn" class="close-btn">✕</button>
                        </form>
                        <h3 class="modal-title">As</h3>
                        <div class="btn3">
                            <a href="../admin/view/registration.php"><button class="btn-shop">Admin</button></a><br>
                            <a href="../vet/view/registration.php"><button class="btn-shop">Veterinarian</button></a><br>
                            <a href="../layout/shop.php"><button class="btn-shop">Customer</button></a>
                        </div>
                    </div>
                </dialog>

                <script src="./js/modal.js"></script>
            </div>

        </div>
    </header>
    <main>

    </main>
    <footer>

    </footer>
</body>

</html>