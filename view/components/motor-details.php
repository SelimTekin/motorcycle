<?php
include("../controller/SearchController.php");

$search = new SearchController();

$datas = $search->processMotorDetail();
?>
    <!-- Breadcrumb End -->
    <div class="breadcrumb-option set-bg" data-setbg="../images/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2><?php echo donusumleriGeriDondur($datas["make"]) . " " . donusumleriGeriDondur($datas["model"]); ?></h2>
                        <div class="breadcrumb__links">
                            <a href="./index.php"><i class="fa fa-home"></i> Home</a>
                            <a href="#">Mootor Listing</a>
                            <span><?php echo donusumleriGeriDondur($datas["make"]) . " " . donusumleriGeriDondur($datas["model"]); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Begin -->

    <!-- Car Details Section Begin -->
    <section class="car-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="car__details__pic">
                        <div class="car__details__pic__large">
                            <img class="car-big-img" src="../images/cars/details/cd-1.jpg" alt="">
                        </div>
                        <div class="car-thumbs">
                            <div class="car-thumbs-track car__thumb__slider owl-carousel">
                                <div class="ct" data-imgbigurl="../images/cars/details/cd-2.jpg"><img
                                        src="../images/cars/details/sm-1.jpg" alt=""></div>
                                <div class="ct" data-imgbigurl="../images/cars/details/cd-3.jpg"><img
                                        src="../images/cars/details/sm-2.jpg" alt=""></div>
                                <div class="ct" data-imgbigurl="../images/cars/details/cd-4.jpg"><img
                                        src="../images/cars/details/sm-3.jpg" alt=""></div>
                                <div class="ct" data-imgbigurl="../images/cars/details/cd-5.jpg"><img
                                        src="../images/cars/details/sm-4.jpg" alt=""></div>
                                <div class="ct" data-imgbigurl="../images/cars/details/cd-6.jpg"><img
                                        src="../images/cars/details/sm-5.jpg" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="car__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">General Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Brake Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Dimension Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-4" role="tab">Fuel Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-5" role="tab">Gear Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-6" role="tab">Motor Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-7" role="tab">Wheel Features</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="car__details__tab__info">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="car__details__tab__info__item">
                                                <h5>Features</h5>
                                                <ul>
                                                    <li><i class="fa fa-check"></i> Make</li>
                                                    <li><i class="fa fa-check"></i> Model</li>
                                                    <li><i class="fa fa-check"></i> Year</li>
                                                    <li><i class="fa fa-check"></i> Type</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="car__details__tab__info__item">
                                                <h5>Values</h5>
                                                <ul>
                                                    <li><i class="fa fa-check"></i> <?php echo empty($datas["make"]) ? "No Information" : donusumleriGeriDondur($datas["make"]); ?></li>
                                                    <li><i class="fa fa-check"></i> <?php echo empty($datas["model"]) ? "No Information" : donusumleriGeriDondur($datas["model"]); ?></li>
                                                    <li><i class="fa fa-check"></i> <?php echo empty($datas["year"]) ? "No Information" : donusumleriGeriDondur($datas["year"]); ?></li>
                                                    <li><i class="fa fa-check"></i> <?php echo empty($datas["type"]) ? "No Information" : donusumleriGeriDondur($datas["type"]); ?></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="car__details__tab__info">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="car__details__tab__info__item">
                                                <h5>Features</h5>
                                                <ul>
                                                    <li><i class="fa fa-check"></i> Front Suspension</li>
                                                    <li><i class="fa fa-check"></i> Rear Suspension</li>
                                                    <li><i class="fa fa-check"></i> Front Brakes</li>
                                                    <li><i class="fa fa-check"></i> Rear Brakes</li>
                                                    <li><i class="fa fa-check"></i> Frame</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="car__details__tab__info__item">
                                                <h5>Values</h5>
                                                <ul>
                                                    <li><i class="fa fa-check"></i> <?php echo empty($datas["front_suspension"]) ? "No Information" : donusumleriGeriDondur($datas["front_suspension"]); ?></li>
                                                    <li><i class="fa fa-check"></i> <?php echo empty($datas["rear_suspension"]) ? "No Information" : donusumleriGeriDondur($datas["rear_suspension"]); ?></li>
                                                    <li><i class="fa fa-check"></i> <?php echo empty($datas["front_brakes"]) ? "No Information" : donusumleriGeriDondur($datas["front_brakes"]); ?></li>
                                                    <li><i class="fa fa-check"></i> <?php echo empty($datas["rear_brakes"]) ? "No Information" : donusumleriGeriDondur($datas["rear_brakes"]); ?></li>
                                                    <li><i class="fa fa-check"></i> <?php echo empty($datas["frame"]) ? "No Information" : donusumleriGeriDondur($datas["frame"]); ?></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <div class="car__details__tab__info">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="car__details__tab__info__item">
                                                <h5>Features</h5>
                                                <ul>
                                                    <li><i class="fa fa-check"></i> Dry Weight</li>
                                                    <li><i class="fa fa-check"></i> Seat Weight</li>
                                                    <li><i class="fa fa-check"></i> Total Height</li>
                                                    <li><i class="fa fa-check"></i> Total Length</li>
                                                    <li><i class="fa fa-check"></i> Total Width</li>
                                                    <li><i class="fa fa-check"></i> Ground Clearance</li>
                                                    <li><i class="fa fa-check"></i> Wheel Base</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="car__details__tab__info__item">
                                                <h5>Values</h5>
                                                <ul>
                                                    <li><i class="fa fa-check"></i> <?php echo empty($datas["dry_weight"]) ? "No Information" : donusumleriGeriDondur($datas["dry_weight"]); ?></li>
                                                    <li><i class="fa fa-check"></i> <?php echo empty($datas["seat_weight"]) ? "No Information" : donusumleriGeriDondur($datas["seat_weight"]); ?></li>
                                                    <li><i class="fa fa-check"></i> <?php echo empty($datas["total_height"]) ? "No Information" : donusumleriGeriDondur($datas["total_height"]); ?></li>
                                                    <li><i class="fa fa-check"></i> <?php echo empty($datas["total_length"]) ? "No Information" : donusumleriGeriDondur($datas["total_length"]); ?></li>
                                                    <li><i class="fa fa-check"></i> <?php echo empty($datas["total_width"]) ? "No Information" : donusumleriGeriDondur($datas["total_width"]); ?></li>
                                                    <li><i class="fa fa-check"></i> <?php echo empty($datas["ground_clearance"]) ? "No Information" : donusumleriGeriDondur($datas["ground_clearance"]); ?></li>
                                                    <li><i class="fa fa-check"></i> <?php echo empty($datas["wheelbase"]) ? "No Information" : donusumleriGeriDondur($datas["wheelbase"]); ?></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-4" role="tabpanel">
                                <div class="car__details__tab__info">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="car__details__tab__info__item">
                                                <h5>Features</h5>
                                                <ul>
                                                    <li><i class="fa fa-check"></i> Fuel System</li>
                                                    <li><i class="fa fa-check"></i> Fuel Control</li>
                                                    <li><i class="fa fa-check"></i> Fuel Capacity</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="car__details__tab__info__item">
                                                <h5>Values</h5>
                                                <ul>
                                                    <li><i class="fa fa-check"></i> <?php echo empty($datas["fuel_system"]) ? "No Information" : donusumleriGeriDondur($datas["fuel_system"]); ?></li>
                                                    <li><i class="fa fa-check"></i> <?php echo empty($datas["fuel_control"]) ? "No Information" : donusumleriGeriDondur($datas["fuel_control"]); ?></li>
                                                    <li><i class="fa fa-check"></i> <?php echo empty($datas["fuel_capacity"]) ? "No Information" : donusumleriGeriDondur($datas["fuel_capacity"]); ?></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-5" role="tabpanel">
                                <div class="car__details__tab__info">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="car__details__tab__info__item">
                                                <h5>Features</h5>
                                                <ul>
                                                    <li><i class="fa fa-check"></i> Gear Box</li>
                                                    <li><i class="fa fa-check"></i> Transmission</li>
                                                    <li><i class="fa fa-check"></i> Clutch</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="car__details__tab__info__item">
                                                <h5>Values</h5>
                                                <ul>
                                                    <li><i class="fa fa-check"></i> <?php echo empty($datas["gearbox"]) ? "No Information" : donusumleriGeriDondur($datas["gearbox"]); ?></li>
                                                    <li><i class="fa fa-check"></i> <?php echo empty($datas["transmission"]) ? "No Information" : donusumleriGeriDondur($datas["transmission"]); ?></li>
                                                    <li><i class="fa fa-check"></i> <?php echo empty($datas["clutch"]) ? "No Information" : donusumleriGeriDondur($datas["clutch"]); ?></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-6" role="tabpanel">
                                <div class="car__details__tab__info">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="car__details__tab__info__item">
                                                <h5>Features</h5>
                                                <ul>
                                                    <li><i class="fa fa-check"></i> Displacement</li>
                                                    <li><i class="fa fa-check"></i> Engine</li>
                                                    <li><i class="fa fa-check"></i> Power</li>
                                                    <li><i class="fa fa-check"></i> Torque</li>
                                                    <li><i class="fa fa-check"></i> Compression</li>
                                                    <li><i class="fa fa-check"></i> Bore Stroke</li>
                                                    <li><i class="fa fa-check"></i> Valves Per Cylinder</li>
                                                    <li><i class="fa fa-check"></i> Ignition</li>
                                                    <li><i class="fa fa-check"></i> Lubrication</li>
                                                    <li><i class="fa fa-check"></i> Cooling</li>
                                                    <li><i class="fa fa-check"></i> Starter</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="car__details__tab__info__item">
                                                <h5>Values</h5>
                                                <ul>
                                                    <li><i class="fa fa-check"></i> <?php echo empty($datas["displacement"]) ? "No Information" : donusumleriGeriDondur($datas["displacement"]); ?></li>
                                                    <li><i class="fa fa-check"></i> <?php echo empty($datas["engine"]) ? "No Information" : donusumleriGeriDondur($datas["engine"]); ?></li>
                                                    <li><i class="fa fa-check"></i> <?php echo empty($datas["power"]) ? "No Information" : donusumleriGeriDondur($datas["power"]); ?></li>
                                                    <li><i class="fa fa-check"></i> <?php echo empty($datas["torque"]) ? "No Information" : donusumleriGeriDondur($datas["torque"]); ?></li>
                                                    <li><i class="fa fa-check"></i> <?php echo empty($datas["compression"]) ? "No Information" : donusumleriGeriDondur($datas["compression"]); ?></li>
                                                    <li><i class="fa fa-check"></i> <?php echo empty($datas["bore_stroke"]) ? "No Information" : donusumleriGeriDondur($datas["bore_stroke"]); ?></li>
                                                    <li><i class="fa fa-check"></i> <?php echo empty($datas["valves_per_cylinder"]) ? "No Information" : donusumleriGeriDondur($datas["valves_per_cylinder"]); ?></li>
                                                    <li><i class="fa fa-check"></i> <?php echo empty($datas["ignition"]) ? "No Information" : donusumleriGeriDondur($datas["ignition"]); ?></li>
                                                    <li><i class="fa fa-check"></i> <?php echo empty($datas["lubrication"]) ? "No Information" : donusumleriGeriDondur($datas["lubrication"]); ?></li>
                                                    <li><i class="fa fa-check"></i> <?php echo empty($datas["cooling"]) ? "No Information" : donusumleriGeriDondur($datas["cooling"]); ?></li>
                                                    <li><i class="fa fa-check"></i> <?php echo empty($datas["starter"]) ? "No Information" : donusumleriGeriDondur($datas["starter"]); ?></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-7" role="tabpanel">
                                <div class="car__details__tab__info">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="car__details__tab__info__item">
                                                <h5>Features</h5>
                                                <ul>
                                                    <li><i class="fa fa-check"></i> Front Wheel Travel</li>
                                                    <li><i class="fa fa-check"></i> Rear Wheel Travel</li>
                                                    <li><i class="fa fa-check"></i> Front Tire</li>
                                                    <li><i class="fa fa-check"></i> Rear Tire</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="car__details__tab__info__item">
                                                <h5>Values</h5>
                                                <ul>
                                                    <li><i class="fa fa-check"></i> <?php echo empty($datas["front_wheel_travel"]) ? "No Information" : donusumleriGeriDondur($datas["front_wheel_travel"]); ?></li>
                                                    <li><i class="fa fa-check"></i> <?php echo empty($datas["rear_wheel_travel"]) ? "No Information" : donusumleriGeriDondur($datas["rear_wheel_travel"]); ?></li>
                                                    <li><i class="fa fa-check"></i> <?php echo empty($datas["front_tire"]) ? "No Information" : donusumleriGeriDondur($datas["front_tire"]); ?></li>
                                                    <li><i class="fa fa-check"></i> <?php echo empty($datas["rear_tire"]) ? "No Information" : donusumleriGeriDondur($datas["rear_tire"]); ?></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Car Details Section End -->