<?php
    include('./config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PresSale</title>
    <link rel="shortcut icon" href="./assets/icons/sales.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/font/stylesheet.css">
    <link rel="stylesheet" href="./assets/icons/css/all.min.css">
    <link rel="stylesheet" href="./styles/style.css">

</head>

<body>
    <!-- navbar -->
    <nav class="navbar">
        <input type="checkbox" name="check" id="check">
        <label for="check" class="checkBtn">
            <i class="fas fa-bars och"></i>
            <i class="fas fa-close yop dNone"></i>
        </label>
        <a href="#" class="logo"><span class="cBlue">P</span>res<span class="cBlue">S</span>ale</a>
        <ul>
            <li><a href="#home" class="active linkItem">Home</a></li>
            <li><a href="#about " class="linkItem">About</a></li>
            <li><a href="#post " class="linkItem">Post</a></li>
            <li><a href="#contact " class="linkItem">Contact</a></li>
            <li><a href="#" class="btn signIn linkItem"  >Login</a></li>
        </ul>
    </nav>
    <section id="register">
        <form action="" class="registration">
            <i class="fa fa-close iconX"></i>
            <div class="itemInput">
                <label for="username">username</label>
                <input type="text" name="username" id="username">
            </div>
            <div class="itemInput">
                <label for="password">password</label>
                <input type="password" name="password" id="password">
            </div>
            <div class="itemInput">
                <input type="submit" value="Kirish" href="#" class="btn signIn" style="color: var(--dark); background-color: var(--blue);"/>

            </div>
        </form>
    </section>
    <section id="home">
        <span class="shape"></span>
        <span class="shape shape1"></span>
        <div>
            <h1><span class="bgColor">Presentation sale</span></h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum voluptatem optio repellendus excepturi
                provident, reprehenderit ad deleniti assumenda repellat nobis nisi.
            </p>
            <a href="#" class="btn signIn">Boshlash</a>
        </div>

    </section>
    <section id="about">
        <span class="shape"></span>
        <h3 class="header"><span class="bgColor">About</span> Us</h3>
        <div class="container">
            <div class="result grid-flow" data-spacing="large">
                <h1 class="rTitle">
                    All posts
                </h1>
                <p class="rScore">
                    <span>12</span> of 12
                </p>
                <div class="grid-flow">
                    <p class="rRank">Posts</p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incid.
                    </p>
                </div>
            </div>
            <div class="summary">
                <h2 class="rTitle">Batafsil</h2>
                <div class="grid-flow">
                    <div class="sumItem" data-item-type="accept-1">
                        <div class="flex-group">

                            <i class="fa fa-blog"></i>
                            <h3 class="sumItemTitle">
                                Eng oxirgi
                            </h3>
                            <p class="sumScore">
                                <span>6</span> / 100
                            </p>
                        </div>
                    </div>
                    <div class="sumItem" data-item-type="accept-2">
                        <div class="flex-group">

                            <i class="fa fa-blog"></i>
                            <h3 class="sumItemTitle">
                                Eng oxirgi
                            </h3>
                            <p class="sumScore">
                                <span>6</span> / 100
                            </p>
                        </div>
                    </div>
                    <div class="sumItem" data-item-type="accept-3">
                        <div class="flex-group">

                            <i class="fa fa-blog"></i>
                            <h3 class="sumItemTitle">
                                Eng oxirgi
                            </h3>
                            <p class="sumScore">
                                <span>6</span> / 100
                            </p>
                        </div>
                    </div>
                    <div class="sumItem" data-item-type="accept-3">
                        <div class="flex-group">

                            <i class="fa fa-blog"></i>
                            <h3 class="sumItemTitle">
                                Eng oxirgi
                            </h3>
                            <p class="sumScore">
                                <span>6</span> / 100
                            </p>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btnBlock">Davom etish</a>
            </div>
        </div>
    </section>
    <section id="post">
        <h1 class="header">
            <span class="bgColor">Posts</span>
        </h1>
        <div class="card_group">
            <div class="card">
                <div class="box">
                    <div class="content">
                        <h3>ONE CARD</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercita.
                        </p>
                        <a href="#" class="btn">Batafsil</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <div class="content">
                        <h3>TWO CARD</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercita.
                        </p>
                        <a href="#" class="btn">Batafsil</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <div class="content">
                        <h3>TWO CARD</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercita.
                        </p>
                        <a href="#" class="btn ">Batafsil</a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section id="contact">
        <span class="shape"></span>
        <h3 class="header"><span class="bgColor">Contact</span></h3>
        <div class="wrapper">
            <form action="">
                <div class="itemInput">
                    <label for="email">email</label>
                    <input type="email" name="email" id="email" placeholder="Email">
                </div>
                <div class="itemInput">
                    <label for="name">Full name</label>
                    <input type="text" name="name" id="name" placeholder="Full name">
                </div>
                <div class="itemInput">
                    <label for="mess">Message</label>
                    <textarea name="mess" id="mess" cols="20" rows="5" placeholder="Message"></textarea>
                </div>    
                <a href="index.html#contact" class="btn">Junatish</a>
            </form>
            <div class="formContent">
                <h3 class="cBlue">
                    Contact us
                </h3>
                <box class="formUl">
                    <img src="./assets/images/about.png" alt="">
                </box>
            </div>
        </div>
        <footer class="footer">
            <div class="wrapper">
                <div>
                    Muallif: <span class="bgColor">@Anodra</span>
                </div>
                <div class="social">
                    <a href="#" ><i class=" icon fa-brands fa-telegram"></i></a>
                    <a href="#"><i class=" icon fa-brands fa-square-instagram"></i></a>
                    <a href="#" ><i class=" icon fa-brands fa-facebook"></i></i></a>
                    <a href="#" ><i class=" icon fa-brands fa-github"></i></a>
                </div>
            </div>
        </footer>
    </section>

    <script src="./assets/icons/js/all.min.js"></script>
    <script src="./js/main.js"></script>
</body>

</html>