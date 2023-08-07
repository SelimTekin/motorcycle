<div class="col-lg-3">
                <div class="car__sidebar">
                    <div class="car__search">
                        <h5>Brand Search</h5>
                        <form action="index.php?sk=3" method="POST">
                            <input type="text" name="make" placeholder="BRAND...">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="car__filter">
                        <h5 class="text-center"> Filter</h5>
                        <form action="index.php?sk=3" method="POST">
                            <select name="features[make]">
                                <option value="">Select Make</option>
                            <?php foreach($makes as $make){ ?>
                                <option value="<?php echo donusumleriGeriDondur($make["make"]); ?>"><?php echo donusumleriGeriDondur($make["make"]); ?></option>
                            <?php } ?>
                            </select>
                            <select name="features[model]">
                                <option value="">Select Model</option>
                                <?php foreach($models as $model){ ?>
                                    <option value="<?php echo donusumleriGeriDondur($model["model"]); ?>"><?php echo donusumleriGeriDondur($model["model"]); ?></option>
                                <?php } ?>
                            </select>
                            <select name="features[year]">
                                <option value="">Year</option>
                                <?php foreach($years as $year){ ?>
                                    <option value="<?php echo donusumleriGeriDondur($year["year"]); ?>"><?php echo donusumleriGeriDondur($year["year"]); ?></option>
                                <?php } ?>
                            </select>
                            <select name="features[type]">
                                <option value="">Type</option>
                                <?php foreach($types as $type){ ?>
                                    <option value="<?php echo donusumleriGeriDondur($type["type"]); ?>"><?php echo donusumleriGeriDondur($type["type"]); ?></option>
                                <?php } ?>
                            </select>
                            <select name="features[transmission]">
                                <option value="">Transmisson</option>
                                <?php foreach($transmissions as $transmission){ ?>
                                    <option value="<?php echo donusumleriGeriDondur($transmission["transmission"]); ?>"><?php echo donusumleriGeriDondur($transmission["transmission"]); ?></option>
                                <?php } ?>
                            </select>
                            <select name="features[cooling]">
                                <option value="">Cooling</option>
                                <?php foreach($coolings as $cooling){ ?>
                                    <option value="<?php echo donusumleriGeriDondur($cooling["cooling"]); ?>"><?php echo donusumleriGeriDondur($cooling["cooling"]); ?></option>
                                <?php } ?>
                            </select>

                            <select name="features[starter]">
                                <option value="">Starter</option>
                                <?php foreach($starters as $starter){ ?>
                                    <option value="<?php echo donusumleriGeriDondur($starter["starter"]); ?>"><?php echo donusumleriGeriDondur($starter["starter"]); ?></option>
                                <?php } ?>
                            </select>

                            <div class="car__filter__btn">
                                <button type="submit" class="site-btn">Filter</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>