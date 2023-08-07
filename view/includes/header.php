    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="./index.php"><img src="../images/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="header__nav">
                        <nav class="header__menu">
                            <ul>
                                <li class="active"><a href="index.php?sk=0">Home</a></li>
                                <li><a href="motor">Motors</a></li>
                                <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="./about.php">About Us</a></li>
                                        <!-- <li><a href="./motor-details.php">Motor Details</a></li> -->
                                        <li><a href="./index.php?sk=7">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="./index.php?sk=5">About</a></li>
                            </ul>
                        </nav>
                        <div class="header__nav__widget">
                            <div class="header__nav__widget__btn">
                                <button class="search-switch"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <span class="fa fa-bars"></span>
            </div>
        </div>
    </header>

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form" action="motor" method="POST">
                <input type="text" name="make" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->