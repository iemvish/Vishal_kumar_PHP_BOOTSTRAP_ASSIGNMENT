<!DOCTYPE html>
<html lang="en">

<head>
  <!-- include common css file-->
  <?php include "common/common-css.php"  ?>

  <title>bootstrap 5</title>
</head>

<body>
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa-solid fa-arrow-up-long"></i></button>
  <!-- include header file -->
  <?php include "common/header.php" ?>
  <!-- owl corosual -->
  <div class="carousel position-relative">
    <div class="owl-carousel owl-theme">
      <div class="item"><img src="assets/images/carousel-1.jpg" alt="">
        <div class="carousel-caption">
          <div class="m-auto animated-text">
            <h5 class="text-white">KEEP YOUR TEETH HEALTHY</h5>
            <h1 class="text-white mb-3">Take The Best Quality Dental Treatment</h1>
            <a href="#" class="btn btn-primary rounded-0 text-white py-md-3 px-md-5 me-3">Appointment</a>
            <a href="#" class="btn btn-danger rounded-0 text-white py-md-3 px-md-5 me-3">Contact Us</a>
          </div>
        </div>
      </div>
      <div class="item"><img src="assets/images/carousel.jpg" alt="">
        <div class="carousel-caption">
          <div class="m-auto animated-text">
            <h5 class="text-white">KEEP YOUR TEETH HEALTHY</h5>
            <h1 class="text-white mb-3">Take The Best Quality Dental Treatment</h1>
            <a href="#" class="btn btn-primary rounded-0 text-white py-md-3 px-md-5 me-3">Appointment</a>
            <a href="#" class="btn btn-danger rounded-0 text-white py-md-3 px-md-5 me-3">Contact Us</a>
          </div>
        </div>
      </div>
    </div>

    <!-- <div class="card-items">
      <div class="container">
        <div class="card-group ">
          <div class="card blue rounded-0">
            <div class="card-body p-5">
              <h5 class="text-white">Opening Hours</h5>
              <div class="d-flex justify-content-between mb-3">
                <h6 class="text-white mb-0">Mon - Fri</h6>
                <p class="mb-0 text-white"> 8:00am - 9:00pm</p>
              </div>
              <div class="d-flex justify-content-between mb-3">
                <h6 class="text-white mb-0">Mon - Fri</h6>
                <p class="mb-0 text-white"> 8:00am - 9:00pm</p>
              </div>
              <div class="d-flex justify-content-between mb-3">
                <h6 class="text-white mb-0">Mon - Fri</h6>
                <p class="mb-0 text-white"> 8:00am - 9:00pm</p>
              </div>
              <div class="">
                <a href="" class="btn btn-light rounded-1 w-100">Appointment</a>
              </div>
            </div>
          </div>
          <div class="card dark-blue">
            <div class="card-body p-5 d-flex flex-column">
              <h5 class="text-white">Search A Doctor</h5>
              <div class="d-flex flex-column">
                <div class="date mb-3" id="date" data-target-input="nearest">
                  <input type="text" class="form-control bg-light border-0 datetimepicker-input" placeholder="Appointment Date" data-target="#date" data-toggle="datetimepicker" style="height: 40px;">
                </div>
                <div class="mb-3">
                  <select class="form-select bg-light border-0 mb-2" style="height: 40px;">
                    <option selected="">Select A Service</option>
                    <option value="1">Service 1</option>
                    <option value="2">Service 2</option>
                    <option value="3">Service 3</option>
                  </select>
                </div>
                <div class="">
                  <a href="" class="btn btn-light rounded-1 w-100 ">Appointment</a>
                </div>
              </div>


            </div>
          </div>
          <div class="card orange rounded-0">
            <div class="card-body p-5">
              <h5 class="text-white">Make Appointment</h5>
              <div class="d-flex flex-column">
                <p class="text-white">Ipsum erat ipsum dolor clita rebum no rebum dolores labore, ipsum magna at eos et eos amet.</p>
                <h2 class="text-white mb-0">+012 345 6789</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <div class="container-fluid banner-bt mb-5">
        <div class="container">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
                    <div class="blue d-flex flex-column p-5" style="height: 300px;">
                        <h3 class="text-white mb-3">Opening Hours</h3>
                        <div class="d-flex justify-content-between text-white mb-3">
                            <h6 class="text-white mb-0">Mon - Fri</h6>
                            <p class="mb-0"> 8:00am - 9:00pm</p>
                        </div>
                        <div class="d-flex justify-content-between text-white mb-3">
                            <h6 class="text-white mb-0">Saturday</h6>
                            <p class="mb-0"> 8:00am - 7:00pm</p>
                        </div>
                        <div class="d-flex justify-content-between text-white mb-3">
                            <h6 class="text-white mb-0">Sunday</h6>
                            <p class="mb-0"> 8:00am - 5:00pm</p>
                        </div>
                        <a class="btn btn-light" href="">Appointment</a>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: zoomIn;">
                    <div class="dark-blue d-flex flex-column p-5" style="height: 300px;">
                        <h3 class="text-white mb-3">Search A Doctor</h3>
                        <div class="date mb-3" id="date" data-target-input="nearest">
                            <input type="text" class="form-control bg-light border-0 datetimepicker-input" placeholder="Appointment Date" data-target="#date" data-toggle="datetimepicker" style="height: 40px;">
                        </div>
                        <select class="form-select bg-light border-0 mb-3" style="height: 40px;">
                            <option selected="">Select A Service</option>
                            <option value="1">Service 1</option>
                            <option value="2">Service 2</option>
                            <option value="3">Service 3</option>
                        </select>
                        <a class="btn btn-light" href="">Search Doctor</a>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: zoomIn;">
                    <div class="orange d-flex flex-column p-5" style="height: 300px;">
                        <h3 class="text-white mb-3">Make Appointment</h3>
                        <p class="text-white">Ipsum erat ipsum dolor clita rebum no rebum dolores labore, ipsum magna at eos et eos amet.</p>
                        <h2 class="text-white mb-0">+012 345 6789</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  <?php include "common/about-main.php" ?>
  <?php include "common/services-main.php" ?>
  



  <?php include "common/common-js.php" ?>

</body>

</html>