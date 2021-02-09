<div class="base-url" data-baseurl="<?= base_url() ?>"></div>
<div class="id-artikel" data-idartikel="<?= $id_artikel ?>"></div>
<section id="blog" class="blog">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 entries" style="position:relative;margin:0 auto;">
        <article class="entry entry-single" data-aos="fade-up">
          <div class="entry-img">
            <img src="<?= base_url('templates/front/') ?>assets/img/blog-1.jpg" alt="" id="foto-artikel" class="img-fluid">
          </div>
          <h2 id="judul-artikel" class="entry-title"></h2>
          <div class="entry-meta">
            <ul>
              <li class="d-flex align-items-center"><i class="icofont-user"></i>
                <a href="#" id="author-artikel"></a>
              </li>
              <li class="d-flex align-items-center">
                <i class="icofont-wall-clock"></i> 
                <a href="#" id="tgl-artikel"></a>
              </li>
            </ul>
          </div>
          <div id="isi-artikel" class="entry-content"></div>
          <div class="entry-footer clearfix">
            <div class="float-left">
              <i class="icofont-folder"></i>
              <ul class="cats">
                <li><a href="#">Informasi</a></li>
              </ul>

              <i class="icofont-tags"></i>
              <ul class="tags">
                <li><a href="#"><?= $keywords ?></a></li>
              </ul>
            </div>
            <div class="float-right share">
              <a href="#" title="Share on Twitter" id="share-twitter" target="_blank"><i class="icofont-twitter"></i></a>
              <a href="#" title="Share on Facebook" id="share-facebook" target="_blank"><i class="icofont-facebook"></i></a>
              <a href="#" title="Share on Instagram" id="share-wa" target="_blank" data-action="share/whatsapp/share"><i class="icofont-whatsapp"></i></a>
            </div>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>