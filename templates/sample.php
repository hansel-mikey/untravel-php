<div class="container">
            <div class="row">
                <div class="container-fluid">
                <form action=""  method="post">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 mb-4">
                            <div class="card rounded shadow">
                                <div class="card-body">
                                    <h4 class="card-title mb-3">FILTERS</h4>
                                    <div class="mb-3">
                                        <!-- This is the check-in date input -->
                                        <label for="check-in" class="form-label">Check-in</label>
                                        <input type="date" id="check-in" name="date_in" value="<?= $_GET['check_in'] ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <!-- This is the check-out date input -->
                                        <label for="check-out" class="form-label">Check-out</label>
                                        <input type="date" id="check-out" value="<?= $_GET['check_out'] ?>" name="date_out" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <h5 class="mb-2">Facilities</h5>
                                        <div class="form-check">
                                            <input class="form-check-input" name="facilities1" type="checkbox" id="f1">
                                            <label class="form-check-label" for="f1">Facility one</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="facilities2" type="checkbox" id="f2">
                                            <label class="form-check-label" for="f2">Facility two</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="facilities3" type="checkbox" id="f3">
                                            <label class="form-check-label" for="f3">Facility three</label>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <h5 class="mb-2">Guests</h5>
                                        <div class="d-flex align-items-center">
                                            <div class="me-3">
                                                <label for="adults" class="form-label">Adults</label>
                                                <input type="number" name="adults" value="<?= $_GET['adults'] ?>" id="adults" class="form-control">
                                            </div>
                                            <div>
                                                <label for="children" class="form-label">Children</label>
                                                <input type="number" name="children" id="children" value="<?= $_GET['children'] ?>" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8">
                            <!-- Room Cards  -->
                          <div class="card mb-4 border-0 shadow">
                                <div class="row g-0 p-3 align-items-center">
                                    <div class="col-md-5">
                                        <img src="hotel1.jpg" class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-5">
                                        <h5 class="mb-3">DELUXE ROOM</h5>
                                        <div class="features mb-3">
                                            <h6 class="mb-1">Features</h6>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">2 Rooms</span>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">1 Bathroom</span>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">1 Balcony</span>
                                        </div>
                                        <div class="facilities mb-3">
                                            <h6 class="mb-1">Facilities</h6>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
                                            <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2 text-center">
                                        <h6 class="mb-4">₹ 200 per night</h6>

                                            <?php if(isset($_SESSION['username']) && !empty($_SESSION['username'])) : ?>
                                                <button type="submit" class="btn btn-sm w-100 text-black custom-bg rounded-pill d-block mx-auto shadow-none mb-3">Book Now</button>
                                            <?php else : ?>
                                                <a href="login.php?redirect=rooms.php&<?php echo http_build_query($_GET); ?>" class="btn btn-sm w-100 text-black custom-bg rounded-pill d-block mx-auto shadow-none mb-3">Log in to Book</a>
                                            <?php endif; ?>
                                        </form>
                                        
                                    </div>
                                </div>
                            </div> 
                                <!-- Add similar code blocks for other room types -->
                        </div>
                    </div>
                </div>
            </div>
        </div>