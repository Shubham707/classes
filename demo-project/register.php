<?php require('layouts/header.php')?>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title">
     
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Register</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Appointmnet Section -->
    <section id="appointmnet" class="appointmnet section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-lg-8 mx-auto">
            <div class="booking-wrapper">
             

              <div class="booking-steps" data-aos="fade-up" data-aos-delay="300">
                <div class="step">
                  <div class="step-icon">
                    <i class="bi bi-calendar-check"></i>
                  </div>
                  <div class="step-content">
                    <h4>Select Service</h4>
                    <p>Choose the medical service you need</p>
                  </div>
                </div>
                <div class="step">
                  <div class="step-icon">
                    <i class="bi bi-clock"></i>
                  </div>
                  <div class="step-content">
                    <h4>Pick Date &amp; Time</h4>
                    <p>Select your preferred appointment slot</p>
                  </div>
                </div>
                <div class="step">
                  <div class="step-icon">
                    <i class="bi bi-person-check"></i>
                  </div>
                  <div class="step-content">
                    <h4>Confirm Details</h4>
                    <p>Provide your information and confirm</p>
                  </div>
                </div>
              </div>

              <div class="appointment-form" data-aos="fade-up" data-aos-delay="400">
                <form action="lib/registration.php" method="post" >
                  <div class="row gy-4">
                    <div class="col-md-6">
                      <input type="text" name="name" class="form-control" placeholder="Full Name" required="">
                    </div>
                    <div class="col-md-6">
                      <input type="email" name="email" class="form-control" placeholder="Email Address" required="">
                    </div>
                    <div class="col-md-6">
                      <input type="password" name="password" class="form-control" placeholder="Enter password" required="">
                    </div>
                    <div class="col-md-6">
                      <input type="tel" name="phone" class="form-control" placeholder="Phone Number" required="">
                    </div>
                    <div class="col-md-6">
                      <select name="department" class="form-select" required="">
                        <option value="">Select Department</option>
                        <option value="general">General Consultation</option>
                        <option value="cardiology">Cardiology</option>
                        <option value="neurology">Neurology</option>
                        <option value="orthopedics">Orthopedics</option>
                        <option value="pediatrics">Pediatrics</option>
                        <option value="dermatology">Dermatology</option>
                        <option value="oncology">Oncology</option>
                      </select>
                    </div>
                    <div class="col-md-6">
                      <input type="date" name="date" class="form-control" required="">
                    </div>
                    <div class="col-md-6">
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
                    <div class="col-md-6">
                      <input type="text" name="address" class="form-control" placeholder="Full Address" required="">
                    </div>
                    <div class="col-12">
                      <textarea name="message" class="form-control" rows="4"
                        placeholder="Additional notes or symptoms (optional)"></textarea>
                    </div>
                    <div class="col-12">
                    
                      <button type="submit" class="btn btn-primary">Book Appointment Now</button>
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