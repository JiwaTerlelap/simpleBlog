<?php include 'layout/header.php';?>
  
  <!-- START: section -->
  <section class="probootstrap-intro" style="background-image: url(<?php echo base_url()?>assets/frontend/img/1.jpg);" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-md-7 probootstrap-intro-text">
          <h1 class="probootstrap-animate" data-animate-effect="fadeIn">Tentang saya ?</h1>
        </div>
      </div>
    </div>
    <span class="probootstrap-animate"><a class="probootstrap-scroll-down js-next" href="#next-section">Scroll down <i class="icon-chevron-down"></i></a></span>
  </section>
  <!-- END: section -->
  <main>
    <section id="next-section" class="probootstrap-section">
      <div class="container">
        <div class="row mb40">
          <?php foreach($about as $row){?>
          <div class="col-md-6">
            <h2 class="mt0"><?php echo $row->judul ?></h2>
            <p><?php echo $row->isi ?>.</p>
          </div>
          <?php }?>
          <div class="col-md-6">
            <h3 class="mt0">jQuery</h3>
            <div class="progress">
              <div class="progress-bar progress-bar-s2" data-percent="30"></div>
            </div>
            <h3>HTML5</h3>
            <div class="progress">
              <div class="progress-bar progress-bar-s2" data-percent="100"></div>
            </div>
            <h3>CSS3</h3>
            <div class="progress">
              <div class="progress-bar progress-bar-s2" data-percent="60"></div>
            </div>
            <h3>Codeigniter</h3>
            <div class="progress">
              <div class="progress-bar progress-bar-s2" data-percent="30"></div>
            </div>
              <h3>javascript</h3>
            <div class="progress">
              <div class="progress-bar progress-bar-s2" data-percent="30"></div>
            </div>
              <h3>php</h3>
            <div class="progress">
              <div class="progress-bar progress-bar-s2" data-percent="40"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php include 'layout/footer.php';?>