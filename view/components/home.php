<?php
include("../controller/IndexController.php");

$indexFunctions = new IndexController();

$makes  = $indexFunctions->getMakes();
$models = $indexFunctions->getModels();
$years  = $indexFunctions->getYears();

?>
<!-- Hero Section Begin -->
<section class="hero spad set-bg" data-setbg="../images/scrambler.jpg">
        <div class="container">
            <div class="row">
                <!-- <div class="col-lg-7">
                    <div class="hero__text">
                        <div class="hero__text__title">
                            <span>FIND YOUR DREAM CAR</span>
                            <h2>Porsche Cayenne S</h2>
                        </div>
                        <div class="hero__text__price">
                            <div class="car-model">Model 2019</div>
                            <h2>$399<span>/Month</span></h2>
                        </div>
                        <a href="#" class="primary-btn"><img src="../images/wheel.png" alt=""> Test Drive</a>
                        <a href="#" class="primary-btn more-btn">Learn More</a>
                    </div>
                </div> -->
                <div class="col-lg-5">
                    <div class="hero__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Find Motorcycle</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="hero__tab__form">
                                    <h2>Find Your Motorcycle</h2>
                                    <form action="index.php?sk=3" method="POST">
                                        <div class="select-list">
                                            <div class="select-list-item">
                                                <p class="text-center">Select Brand</p>
                                                <select name="features[make]">
                                                    <option value="">Select Brand</option>
                                                    <?php foreach($makes as $make){ ?>
                                                    <option value="<?php echo donusumleriGeriDondur($make["make"]); ?>"><?php echo donusumleriGeriDondur($make["make"]); ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>

                                            
                                            <div class="select-list-item">
                                                <p class="text-center">Select Model</p>
                                                <select name="features[model]">
                                                    <option value="">Select Model</option>
                                                    <?php foreach($models as $model){ ?>
                                                    <option value="<?php echo donusumleriGeriDondur($model["model"]); ?>"><?php echo donusumleriGeriDondur($model["model"]); ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>

                                            <div class="select-list-item mx-auto">
                                                <p class="text-center">Select Year</p>
                                                <select name="features[year]">
                                                    <option value="">Select Year</option>
                                                    <?php foreach($years as $year){ ?>
                                                    <option value="<?php echo donusumleriGeriDondur($year["year"]); ?>"><?php echo donusumleriGeriDondur($year["year"]); ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>

                                        </div>
                                        <button type="submit" class="site-btn">Searching</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Services Section Begin -->
    <section class="services spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Our Services</span>
                        <h2>What We Offers</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="services__item">
                        <img src="../images/services/services-1.png" alt="">
                        <h5>Rental A Cars</h5>
                        <p>Consectetur adipiscing elit incididunt ut labore et dolore magna aliqua. Risus commodo
                            viverra maecenas.</p>
                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="services__item">
                        <img src="../images/services/services-2.png" alt="">
                        <h5>Buying A Cars</h5>
                        <p>Consectetur adipiscing elit incididunt ut labore et dolore magna aliqua. Risus commodo
                            viverra maecenas.</p>
                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="services__item">
                        <img src="../images/services/services-3.png" alt="">
                        <h5>Car Maintenance</h5>
                        <p>Consectetur adipiscing elit incididunt ut labore et dolore magna aliqua. Risus commodo
                            viverra maecenas.</p>
                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="services__item">
                        <img src="../images/services/services-4.png" alt="">
                        <h5>Support 24/7</h5>
                        <p>Consectetur adipiscing elit incididunt ut labore et dolore magna aliqua. Risus commodo
                            viverra maecenas.</p>
                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Feature Section Begin -->
    <section class="feature spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="feature__text">
                        <div class="section-title">
                            <span>Our Feature</span>
                            <h2>We Are a Trusted Name In Auto</h2>
                        </div>
                        <div class="feature__text__desc">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                                viverra maecenas accumsan lacus vel facilisis.</p>
                        </div>
                        <div class="feature__text__btn">
                            <a href="#" class="primary-btn">About Us</a>
                            <a href="#" class="primary-btn partner-btn">Our Partners</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-4">
                    <div class="row">
                        <div class="col-lg-6 col-md-4 col-6">
                            <div class="feature__item">
                                <div class="feature__item__icon">
                                    <img src="../images/feature/feature-1.png" alt="">
                                </div>
                                <h6>Engine</h6>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 col-6">
                            <div class="feature__item">
                                <div class="feature__item__icon">
                                    <img src="../images/feature/feature-2.png" alt="">
                                </div>
                                <h6>Turbo</h6>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 col-6">
                            <div class="feature__item">
                                <div class="feature__item__icon">
                                    <img src="../images/feature/feature-3.png" alt="">
                                </div>
                                <h6>Colling</h6>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 col-6">
                            <div class="feature__item">
                                <div class="feature__item__icon">
                                    <img src="../images/feature/feature-4.png" alt="">
                                </div>
                                <h6>Suspension</h6>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 col-6">
                            <div class="feature__item">
                                <div class="feature__item__icon">
                                    <img src="../images/feature/feature-5.png" alt="">
                                </div>
                                <h6>Electrical</h6>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 col-6">
                            <div class="feature__item">
                                <div class="feature__item__icon">
                                    <img src="../images/feature/feature-6.png" alt="">
                                </div>
                                <h6>Brakes</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Section End -->

    <!-- Car Section Begin -->
    <section class="car spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Our Car</span>
                        <h2>Best Vehicle Offers</h2>
                    </div>
                    <ul class="filter__controls">
                        <li class="active" data-filter="*">Most Researched</li>
                        <li data-filter=".sale">Latest on sale</li>
                    </ul>
                </div>
            </div>
            <div class="row car-filter">
                <div class="col-lg-3 col-md-4 col-sm-6 mix">
                    <div class="car__item">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="../images/cars/car-1.jpg" alt="">
                            <img src="../images/cars/car-8.jpg" alt="">
                            <img src="../images/cars/car-6.jpg" alt="">
                            <img src="../images/cars/car-3.jpg" alt="">
                        </div>
                        <div class="car__item__text">
                            <div class="car__item__text__inner">
                                <div class="label-date">2016</div>
                                <h5><a href="#">Porsche cayenne turbo s</a></h5>
                                <ul>
                                    <li><span>35,000</span> mi</li>
                                    <li>Auto</li>
                                    <li><span>700</span> hp</li>
                                </ul>
                            </div>
                            <div class="car__item__price">
                                <span class="car-option">For Rent</span>
                                <h6>$218<span>/Month</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix sale">
                    <div class="car__item">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="../images/cars/car-2.jpg" alt="">
                            <img src="../images/cars/car-8.jpg" alt="">
                            <img src="../images/cars/car-6.jpg" alt="">
                            <img src="../images/cars/car-4.jpg" alt="">
                        </div>
                        <div class="car__item__text">
                            <div class="car__item__text__inner">
                                <div class="label-date">2020</div>
                                <h5><a href="#">Toyota camry asv50l-jeteku</a></h5>
                                <ul>
                                    <li><span>35,000</span> mi</li>
                                    <li>Auto</li>
                                    <li><span>700</span> hp</li>
                                </ul>
                            </div>
                            <div class="car__item__price">
                                <span class="car-option sale">For Sale</span>
                                <h6>$73,900</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix">
                    <div class="car__item">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="../images/cars/car-3.jpg" alt="">
                            <img src="../images/cars/car-8.jpg" alt="">
                            <img src="../images/cars/car-6.jpg" alt="">
                            <img src="../images/cars/car-5.jpg" alt="">
                        </div>
                        <div class="car__item__text">
                            <div class="car__item__text__inner">
                                <div class="label-date">2017</div>
                                <h5><a href="#">Bmw s1000rr 2019 m</a></h5>
                                <ul>
                                    <li><span>35,000</span> mi</li>
                                    <li>Auto</li>
                                    <li><span>700</span> hp</li>
                                </ul>
                            </div>
                            <div class="car__item__price">
                                <span class="car-option">For Rent</span>
                                <h6>$299<span>/Month</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix sale">
                    <div class="car__item">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="../images/cars/car-4.jpg" alt="">
                            <img src="../images/cars/car-8.jpg" alt="">
                            <img src="../images/cars/car-2.jpg" alt="">
                            <img src="../images/cars/car-1.jpg" alt="">
                        </div>
                        <div class="car__item__text">
                            <div class="car__item__text__inner">
                                <div class="label-date">2019</div>
                                <h5><a href="#">Lamborghini huracan evo</a></h5>
                                <ul>
                                    <li><span>35,000</span> mi</li>
                                    <li>Auto</li>
                                    <li><span>700</span> hp</li>
                                </ul>
                            </div>
                            <div class="car__item__price">
                                <span class="car-option sale">For Sale</span>
                                <h6>$120,000</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix">
                    <div class="car__item">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="../images/cars/car-5.jpg" alt="">
                            <img src="../images/cars/car-8.jpg" alt="">
                            <img src="../images/cars/car-7.jpg" alt="">
                            <img src="../images/cars/car-2.jpg" alt="">
                        </div>
                        <div class="car__item__text">
                            <div class="car__item__text__inner">
                                <div class="label-date">2018</div>
                                <h5><a href="#">Audi q8 2020</a></h5>
                                <ul>
                                    <li><span>35,000</span> mi</li>
                                    <li>Auto</li>
                                    <li><span>700</span> hp</li>
                                </ul>
                            </div>
                            <div class="car__item__price">
                                <span class="car-option">For Rent</span>
                                <h6>$319<span>/Month</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix sale">
                    <div class="car__item">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="../images/cars/car-6.jpg" alt="">
                            <img src="../images/cars/car-8.jpg" alt="">
                            <img src="../images/cars/car-3.jpg" alt="">
                            <img src="../images/cars/car-1.jpg" alt="">
                        </div>
                        <div class="car__item__text">
                            <div class="car__item__text__inner">
                                <div class="label-date">2016</div>
                                <h5><a href="#">Mustang shelby gt500</a></h5>
                                <ul>
                                    <li><span>35,000</span> mi</li>
                                    <li>Auto</li>
                                    <li><span>700</span> hp</li>
                                </ul>
                            </div>
                            <div class="car__item__price">
                                <span class="car-option sale">For Sale</span>
                                <h6>$730,900</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix">
                    <div class="car__item">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="../images/cars/car-7.jpg" alt="">
                            <img src="../images/cars/car-2.jpg" alt="">
                            <img src="../images/cars/car-4.jpg" alt="">
                            <img src="../images/cars/car-1.jpg" alt="">
                        </div>
                        <div class="car__item__text">
                            <div class="car__item__text__inner">
                                <div class="label-date">2020</div>
                                <h5><a href="#">Lamborghini aventador A90</a></h5>
                                <ul>
                                    <li><span>35,000</span> mi</li>
                                    <li>Auto</li>
                                    <li><span>700</span> hp</li>
                                </ul>
                            </div>
                            <div class="car__item__price">
                                <span class="car-option">For Rent</span>
                                <h6>$422<span>/Month</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix">
                    <div class="car__item">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="../images/cars/car-8.jpg" alt="">
                            <img src="../images/cars/car-3.jpg" alt="">
                            <img src="../images/cars/car-5.jpg" alt="">
                            <img src="../images/cars/car-2.jpg" alt="">
                        </div>
                        <div class="car__item__text">
                            <div class="car__item__text__inner">
                                <div class="label-date">2017</div>
                                <h5><a href="#">Porsche cayenne turbo s</a></h5>
                                <ul>
                                    <li><span>35,000</span> mi</li>
                                    <li>Auto</li>
                                    <li><span>700</span> hp</li>
                                </ul>
                            </div>
                            <div class="car__item__price">
                                <span class="car-option">For Rent</span>
                                <h6>$322<span>/Month</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Car Section End -->

    <!-- Cta Begin -->
    <div class="cta">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="cta__item set-bg" data-setbg="../images/cta/cta-1.jpg">
                        <h4>Do You Want To Buy A Car</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="cta__item set-bg" data-setbg="../images/cta/cta-2.jpg">
                        <h4>Do You Want To Rent A Car</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cta End -->