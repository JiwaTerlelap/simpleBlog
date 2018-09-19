<?php include 'layout/header.php';?>
  
  <!-- START: section -->
  <section class="probootstrap-intro" style="background-image: url(<?php echo base_url()?>assets/frontend/img/1.jpg);" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-md-7 probootstrap-intro-text">
          <h1 class="probootstrap-animate" data-animate-effect="fadeIn">Welcome to my Blog . </h1>
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
            <?php foreach($profile as $row){?>
            <h2 class="mt0"><?php echo $row->judul ?></h2>  
            <p><?php echo $row->isi ?></p>
            <?php } ?>
          </div>
          <div class="col-md-6">
            <h2 class="mt0">Qoutes di Hari ini ?</h2>
            <ul class="probootstrap-steps">
              <?php foreach($qoutes as $row){?>
              <li>
                <span class="number"><i><?php echo $row->id ?></i></span> 
                <span class="text"><?php echo $row->isi ?></span>
              </li>
              <?php } ?>
            </ul>
          </div>
        </div>
        <!-- END row -->
      </div>
    </section>
    <section class="probootstrap-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center mb50">
            <h2 class="mt0">Catatan blog</h2>
          </div>
        </div>
        <div class="row">
          <?php foreach($blogs as $row){?>
          <div class="col-md-6">
            <p><img src="<?php echo base_url()?>assets/foto/blog/<?php echo $row->foto ?>" class="img-responsive"></p>
            <h3 class="mt0"><a href="<?php echo base_url()?>detail/baca/<?php echo $row->slug_blog?>/" class="hover-reverse"><?php echo $row->judul?></a></h3>
            <p class="text-mute mb40"><?php echo $row->tanggal_upp?> &bull; <i class="icon-user"></i>&nbsp; <?php echo $row->user ?></p>
          </div>
          <?php } ?>
          <div class="col-md-6">
            <ul class="probootstrap-blog-list">
              <?php foreach($blog as $row){?>
              <li>
                <a href="<?php echo base_url()?>detail/baca/<?php echo $row->slug_blog?>/">
                  <figure class="probootstrap-image"><img src="<?php echo base_url()?>assets/foto/blog/<?php echo $row->foto ?>" class="img-responsive"></figure>
                  <div class="probootstrap-text">
                    <h3 class="mt0 mb10"><?php echo $row->judul?></h3>
                    <p class="text-mute mb20"><?php echo $row->tanggal_upp?> &bull; <i class="icon-user"></i> &nbsp;<?php echo $row->user ?></p>
                  </div>
                </a>
              </li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php include 'layout/footer.php';?>