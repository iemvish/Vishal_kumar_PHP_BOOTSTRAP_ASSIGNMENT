<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "common/common-css.php"  ?>
    <title>Document</title>
</head>

<body>
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa-solid fa-angle-up"></i></button>

    <!-- include header file-->
    <?php include "common/header.php" ?>
    <section class="portfolio-banner banner-before">
        <div class=" position-relative">
            <h1 class="banner-heading text-white text-capitalize">portfolio</h1>
        </div>
    </section>

    <section class="main-section ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-block text-center">
                        <strong class="text-capatilize pb-3">our work</strong>
                        <h2>Some of our past work that we like</h2>
                        <span class="bottom-border m-auto mb-4 mt-3"></span>
                        <p>Distinctively grow go forward manufactured products and optimal networks. Enthusiastically disseminate user-centric outsourcing revolutionary</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="portfolio-contact">
    <section class="contact-form"  id="contact-form">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="form-data px-5">
            <div class="row">
              <div class="col-sm-12">
                <div class="heading mb-3 mt-5">
                  <h4 class="text-capitalize">ready to get started?</h4>
                </div>
              </div>
              <form action="">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="contact-form">
                      <input type="text" class="form-control  " id="exampleFormControlInput1" placeholder="Enter name">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="contact-form">
                      <input type="email" class="form-control  " id="exampleFormControlInput1"
                        placeholder="Enter Email">
                    </div>

                  </div>
                  <div class="col-sm-12">
                    <div class="contact-form">
                      <input type="number" class="form-control " id="exampleFormControlInput1"
                        placeholder="Enter Phone No">

                    </div>

                  </div>
                  <div class="col-sm-12">
                    <div class="contact-form">
                      <select class="form-control form-control-lg" aria-label="Default select example">
                        <option selected>Choose services</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </div>

                  </div>
                  <div class="col-sm-12">
                    <div class="contact-form">
                    <select class="form-control form-control-lg" aria-label="Default select example">
                        <option selected>How did you find us?</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </div>

                  </div>

                  <div class="col-sm-12">
                    <div class="contact-form">
                      <div class="form-floating">
                        <textarea class="form-control " placeholder="Leave a comment here" id="floatingTextarea2"
                          style="height: 60px"></textarea>
                        <label for="floatingTextarea2">Message</label>
                      </div>
                    </div>

                  </div>

                  <div class="col-sm-12 mb-5">
                    <button type="button" class="btn btn-primary text-capitalize px-4">send message</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-6 px-4">
          <div class="contact-address">
            <h2>Looking to Grow Your Business?</h2>
            <p>We helped lots of businesses in building their brand, we can do the same for you. Contact today!</p>
            <button type="button" class="btn btn-outline-primary text-capitalize mb-2">get directions <i class="fa-solid fa-arrow-right"></i></button>
            <hr>
            <div class="row">
              <div class="col-sm-12">
                <div class="text-content">
                    <h5 class="text-capitalize mb-4">contact us</h5>
                    <ul class="mb-5">
                    <li><a href="">3181 Sector 37-D,</a></li>
                    <li><a href="">Chandigarh, 160036</a></li>
                    </ul>
                    <ul>
                    <li><a href=""> <span>Phone:</span>+91-708-708-7356</a></li>
                    <li><a href=""> <span>Email:</span>info@edifyingvoyages.comChandigarh, 160036</a></li>
                    </ul>
                </div>
            </div>
          </div>

        </div>
      </div>
  </section>

    </section>

   



    <!-- include footer file-->
    <?php include "common/footer.php" ?>

    <?php include "common/common-js.php" ?>
</body>

</html>