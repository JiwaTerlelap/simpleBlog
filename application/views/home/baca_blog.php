<?php include 'layout/header.php';?>
  
  <!-- START: section -->
  <section class="probootstrap-intro" style="background-image: url(<?php echo base_url()?>assets/frontend/img/1.jpg);" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-md-7 probootstrap-intro-text">
          <h1 class="probootstrap-animate" data-animate-effect="fadeIn">Baca blog</h1>
        </div>
      </div>
    </div>
    <span class="probootstrap-animate"><a class="probootstrap-scroll-down js-next" >Scroll down <i class="icon-chevron-down"></i></a></span>
  </section>
  <!-- END: section -->
  <main>
    <section id="next-section" class="probootstrap-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p><a href="<?php echo base_url()?>/assets/foto/blog/<?php echo $baca->foto ?>" class="image-popup"><img src="<?php echo base_url()?>/assets/foto/blog/<?php echo $baca->foto ?>"  class="img-responsive"></a></p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
          <h2 class="mt0"><?php echo $baca->judul ?></h2>
          <p><?php echo $baca->isi ?></p>

          <div class="row">
            <div class="col-md-4">
              <p class="text-mute"><?php echo $baca->tanggal_upp ?>&bull; <i class="icon-user"></i>&nbsp; <?php echo $baca->user ?></p>
            </div>
          </div>
          <div class="row">
                <h4>Tinggalkan Komentar :</h4>
          </div>
        <div class="fb-comments" data-href="http://localhost/myblog/home/baca_blog" data-width="100%" data-numposts="5"></div>
        </div>
        </div>
      </div>
    </section>
  </main>
 <?php include 'layout/footer.php';?>