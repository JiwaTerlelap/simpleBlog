<?php include 'layout/header.php';?>
  
  <!-- START: section -->
  <section class="probootstrap-intro" style="background-image: url(<?php echo base_url()?>assets/frontend/img/1.jpg);" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-md-7 probootstrap-intro-text">
          <h1 class="probootstrap-animate" data-animate-effect="fadeIn">Blog</h1>
          <p class="watch-intro probootstrap-animate">Welcome to my blog </p>
        </div>
      </div>
    </div>
    <span class="probootstrap-animate"><a class="probootstrap-scroll-down js-next" href="#next-section">Scroll down <i class="icon-chevron-down"></i></a></span>
  </section>
  <!-- END: section -->
  <main>
    <section id="next-section" class="probootstrap-section">
      <div class="container">
        <div class="row mb4">
          <?php foreach($blog as $row){?>
          <div class="col-md-6">
            <div class="probootstrap-hentry mb30">
              <p><a href="<?php echo base_url()?>assets/foto/blog/<?php echo $row->foto ?>" class="image-popup"><img src="<?php echo base_url()?>assets/foto/blog/<?php echo $row->foto ?>" class="img-responsive"></a></p>
              <h3 class="mt0"><a href="<?php echo base_url()?>home/baca_blog/<?php echo $row->slug_blog?>" class="hover-reverse"><?php echo $row->judul?></a></h3>
              <p class="text-mute"><?php echo $row->tanggal_upp?>&bull; <i class="icon-user"></i>&nbsp; <?php echo $row->user ?></p>
            </div>
          </div>
          <?php } ?>
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <a href="<?php echo base_url()?>home/blog_all" role="button" class="btn btn-ghost btn-lg btn-block">Load More...</a>
          </div>
        </div>
      </div>
    </section>

  </main>
  <?php include 'layout/footer.php';?>