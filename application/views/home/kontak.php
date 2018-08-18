<?php include 'layout/header.php';?>
  
  <!-- START: section -->
  <section class="probootstrap-intro" style="background-image: url(<?php echo base_url()?>assets/frontend/img/1.jpg);" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-md-7 probootstrap-intro-text">
          <h1 class="probootstrap-animate" data-animate-effect="fadeIn">Kontak Me?</h1>
        </div>
      </div>
    </div>
    <span class="probootstrap-animate"><a class="probootstrap-scroll-down js-next" href="#next-section">Scroll down <i class="icon-chevron-down"></i></a></span>
  </section>
  <!-- END: section -->
  <main>
    <section id="next-section" class="probootstrap-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <form action="#" method="post" class="probootstrap-form">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="fname">First Name</label>
                    <input type="text" class="form-control" id="fname" name="fname">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="lname">Last Name</label>
                    <input type="text" class="form-control" id="lname" name="lname">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email">
              </div>
              <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject">
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea cols="30" rows="10" class="form-control" id="message" name="message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary" id="submit" name="submit" value="Send Message">
              </div>
            </form>
          </div>
          <div class="col-md-5 col-md-push-1">
            <h3 class="mt0">Hubungi saya ?</h3>
            <ul class="probootstrap-contact-info">
              <li><i class="icon-location2"></i> <span>jalan kenangan no 82</span></li>
              <li><i class="icon-mail"></i><span>hax0rtersakiti@gmail.com</span></li>
              <li><i class="icon-phone2"></i><span>085817836592</span></li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    

  </main>
  <?php include 'layout/footer.php';?>