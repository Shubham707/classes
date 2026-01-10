<?php require('layouts/header.php')?>

  <main class="main">

    <!-- Page Title -->
   
      
    </div><!-- End Page Title -->

    <!-- Appointmnet Section -->
    <section id="appointmnet" class="appointmnet section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-lg-8 mx-auto">
            <div class="booking-wrapper">
              <div class="page-title">
			      <div class="heading">
			        <div class="container">
			          <div class="row d-flex justify-content-center text-center">
			            <div class="col-lg-8">
			             <h1> Login Page</h1>
			            </div>
			          </div>
			        </div>
			      </div>


              <div class="appointment-form" data-aos="fade-up" data-aos-delay="400">
                <form action="lib/login.php" method="post" class="php-email-form">
                  <div class="row gy-4">
                    
                    <div class="col-md-6">
                      <input type="email" name="email" class="form-control" placeholder="Email Address" required="">
                    </div>
                    <div class="col-md-6">
                      <input type="text" name="name" class="form-control" placeholder="Full Name" required="">
                    </div>
                  
                    <div class="col-md-12">
                      <select name="doctor" class="form-select" required="">
                        <option value="">Select Doctor</option>
                        <option value="dr-sarah-johnson">Dr. Sarah Johnson</option>
                        <option value="dr-michael-chen">Dr. Michael Chen</option>
                        <option value="dr-emily-davis">Dr. Emily Davis</option>
                        <option value="dr-robert-smith">Dr. Robert Smith</option>
                        <option value="dr-lisa-brown">Dr. Lisa Brown</option>
                        <option value="dr-david-wilson">Dr. David Wilson</option>
                        <option value="dr-maria-rodriguez">Dr. Maria Rodriguez</option>
                      </select>
                    </div>
                    
                    <div class="col-12">
                      
                      <button type="submit" class="btn-book">Login Now</button>
                    </div>
                  </div>
                </form>
              </div>


            </div>
          </div>
        </div>

      </div>

    </section><!-- /Appointmnet Section -->

  </main>
<?php require('layouts/footer.php')?>