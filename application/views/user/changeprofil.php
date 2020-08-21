<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light ddn-bg-gradient">
    <div class="container p-1">
        <img src="<?= base_url('assets/'); ?>/user/images/logo.png" alt="" style="width: 34px; height: auto;">
        <a href="<?= base_url('user'); ?>" class="btn float-right bg-primary btn-sm text-white"><strong><i class="fas fa-home mr-1"></i>Home</strong></a>
    </div>
</nav>

<section class="mt-5">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-12">
                <div class="block-heading">
                    <h2>UBAH PROFIL</h2>
                </div>
                <p class="lead">WEB Persuratan desa cinunuk berfungsi untuk mempermudah warga cinunuk dalam pembuatan surat, dengan mudah,cepat dan efisien.</p>
            </div>
        </div>
    </div>
</section>

<!-- Jenis Surat -->
<section id="jenis" class="content-section text-center">
    <div class="container">
        <div class="block-heading">
            <h2>JENIS SURAT</h2>
            <p>pilih jenis surat yang akan anda ajukan</p>
        </div>
        <div class="card-deck">

            <div class="card pt-4">
                <img src="<?= base_url('assets/'); ?>/user/images/page.svg" alt="" style="width: 65px; margin-left: auto; margin-right: auto;">
                <div class="card-body">
                    <h5 class="card-title">SURAT N1</h5>
                    <hr>
                    <a href="#" class="btn btn-primary">AJUKAN</a>
                </div>
            </div>
            <div class="card pt-4">
                <img src="images/page.svg" alt="" style="width: 65px; margin-left: auto; margin-right: auto;">
                <div class="card-body">
                    <h5 class="card-title">SURAT N4</h5>
                    <hr>
                    <a href="#" class="btn btn-primary">AJUKAN</a>
                </div>
            </div>
            <div class="card pt-4">
                <img src="images/page.svg" alt="" style="width: 65px; margin-left: auto; margin-right: auto;">
                <div class="card-body">
                    <h5 class="card-title">SURAT N5</h5>
                    <hr>
                    <a href="#" class="btn btn-primary">AJUKAN</a>
                </div>
            </div>

        </div>
    </div>
    </div>
</section>

<!-- Riwayat Pengajuan -->
<section id="riwayat" class="content-section">
    <div class="container">
        <div class="block-heading">
            <h2>RIWAYAT PENGAJUAN</h2>
            <p>Pengajuan yang telah anda ajukan</p>
        </div>
    </div>
    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Surat Yang diajukan</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Surat N1</td>
                    <td>02/08/2020</td>
                    <td><span class="badge badge-success">diterima</span></td>
                    <td>
                        <button class="btn btn-sm bg-primary mr-2 text-white"><i class="fas fa-search-plus"></i> Detail</button>
                        <button class="btn btn-sm bg-danger text-white"><i class="far fa-times-circle"></i> Batalkan</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Surat N4</td>
                    <td>02/08/2020</td>
                    <td><span class="badge badge-warning text-white">pending</span></td>
                    <td>
                        <button class="btn btn-sm bg-primary mr-2 text-white"><i class="fas fa-search-plus"></i> Detail</button>
                        <button class="btn btn-sm bg-danger text-white"><i class="far fa-times-circle"></i> Batalkan</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Surat N5</td>
                    <td>02/08/2020</td>
                    <td><span class="badge badge-danger">dibatalkan</span></td>
                    <td>
                        <button class="btn btn-sm bg-primary mr-2 text-white"><i class="fas fa-search-plus"></i> Detail</button>
                        <button class="btn btn-sm bg-danger text-white"><i class="far fa-times-circle"></i> Batalkan</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
<!-- <section class="content-section text-center" id="Portfolio">
    <div class="container">
      <div class="block-heading">
        <h2>Portfolio</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      </div>
      <div class="portfolio-wrapper clearfix">
        <a class="each-portfolio" data-fancybox="gallery" href="images/p-two.jpeg">
          <div class="content hover-cont-wrap">
            <div class="content-overlay"></div>
            <img class="content-image" src="images/p-two.jpeg">
            <div class="content-details fadeIn-bottom">
              <h5 class="p-title">Title</h5>
              <p class="p-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <span class="zoom"><i class="fa fa-search-plus"></i></span>
            </div>
          </div>
        </a>
        <a class="each-portfolio" data-fancybox="gallery" href="images/p-three.jpeg">
          <div class="content hover-cont-wrap">
            <div class="content-overlay"></div>
            <img class="content-image" src="images/p-three.jpeg">
            <div class="content-details fadeIn-bottom">
              <h5 class="p-title">Title</h5>
              <p class="p-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <span class="zoom"><i class="fa fa-search-plus"></i></span>
            </div>
          </div>
        </a>
        <a class="each-portfolio" data-fancybox="gallery" href="images/p-four.jpeg">
          <div class="content hover-cont-wrap">
            <div class="content-overlay"></div>
            <img class="content-image" src="images/p-four.jpeg">
            <div class="content-details fadeIn-bottom">
              <h5 class="p-title">Title</h5>
              <p class="p-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <span class="zoom"><i class="fa fa-search-plus"></i></span>
            </div>
          </div>
        </a>
        <a class="each-portfolio" data-fancybox="gallery" href="images/p-five.jpeg">
          <div class="content hover-cont-wrap">
            <div class="content-overlay"></div>
            <img class="content-image" src="images/p-five.jpeg">
            <div class="content-details fadeIn-bottom">
              <h5 class="p-title">Title</h5>
              <p class="p-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <span class="zoom"><i class="fa fa-search-plus"></i></span>
            </div>
          </div>
        </a>
        <a class="each-portfolio" data-fancybox="gallery" href="images/p-six.jpeg">
          <div class="content hover-cont-wrap">
            <div class="content-overlay"></div>
            <img class="content-image" src="images/p-six.jpeg">
            <div class="content-details fadeIn-bottom">
              <h5 class="p-title">Title</h5>
              <p class="p-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <span class="zoom"><i class="fa fa-search-plus"></i></span>
            </div>
          </div>
        </a>
        <a class="each-portfolio" data-fancybox="gallery" href="images/p-three.jpeg">
          <div class="content hover-cont-wrap">
            <div class="content-overlay"></div>
            <img class="content-image" src="images/p-three.jpeg">
            <div class="content-details fadeIn-bottom">
              <h5 class="p-title">Title</h5>
              <p class="p-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <span class="zoom"><i class="fa fa-search-plus"></i></span>
            </div>
          </div>
        </a>
      </div>
    </div>
  </section>

  <-- TESTIMONIALS -->
<!-- <section id="Testimonials" class="content-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="block-heading">
            <h2>Testimonials</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </div>
          <div id="customers-testimonials" class="owl-carousel">
            <div class="item">
              <div class="shadow-effect">
                <img class="img-circle" src="images/sarah.jpg" alt="">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
              </div>
              <div class="testimonial-name">Sarah Jenks</div>
            </div>
            <div class="item">
              <div class="shadow-effect">
                <img class="img-circle" src="images/tangelia.jpg" alt="">
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old</p>
              </div>
              <div class="testimonial-name">Tangelia Ekhoff</div>
            </div>
            <div class="item">
              <div class="shadow-effect">
                <img class="img-circle" src="images/john-doe.jpg" alt="">
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
              </div>
              <div class="testimonial-name">John Doe</div>
            </div>
            <div class="item">
              <div class="shadow-effect">
                <img class="img-circle" src="images/amy.jpg" alt="">
                <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words</p>
              </div>
              <div class="testimonial-name">Amy Tan</div>
            </div>
            <div class="item">
              <div class="shadow-effect">
                <img class="img-circle" src="images/daniel.jpg" alt="">
                <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
              </div>
              <div class="testimonial-name">Daniel Felsted</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->

<!-- END OF TESTIMONIALS -->
<!-- <section id="Contact" class="content-section">
    <div class="container">
      <div class="block-heading">
        <h2>Contact Us</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      </div>
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6">
          <div class="contact-wrapper">
            <div class="address-block border-bottom">
              <h3 class="add-title">Headquaters</h3>
              <div class="c-detail">
                <span class="c-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span><span class="c-info">&nbsp;35 Street - Cheyenne, CO 80810</span>
              </div>
              <div class="c-detail">
                <span class="c-icon"><i class="fa fa-phone" aria-hidden="true"></i></span><span class="c-info">+123 4567 898</span>
              </div>
              <div class="c-detail">
                <span class="c-icon"><i class="fa fa-envelope" aria-hidden="true"></i></span><span class="c-info">email@yourdomain.com</span>
              </div>
            </div>
            <div class="address-block">
              <h3 class="add-title">Branch</h3>
              <div class="c-detail">
                <span class="c-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span><span class="c-info">&nbsp;98 Berry - Cheyenne, CO 80810</span>
              </div>
              <div class="c-detail">
                <span class="c-icon"><i class="fa fa-phone" aria-hidden="true"></i></span><span class="c-info">+123 4567 8987</span>
              </div>
              <div class="c-detail">
                <span class="c-icon"><i class="fa fa-envelope" aria-hidden="true"></i></span><span class="c-info">email@yourdomain.com</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
          <div class="form-wrap">
            <form action="javascript:void(0)" method="post">
              <div class="fname floating-label">
                <input type="text" class="floating-input" name="full name" />
                <label for="title">First Name</label>
              </div>
              <div class="fname floating-label">
                <input type="text" class="floating-input" name="full name" />
                <label for="title">Last Name</label>
              </div>
              <div class="email floating-label">
                <input type="email" class="floating-input" name="email" />
                <label for="email">Email</label>
              </div>
              <div class="contact floating-label">
                <input type="tel" class="floating-input" name="contact" />
                <label for="email">Mobile</label>
              </div>
              <div class="company floating-label">
                <textarea type="text" class="floating-input" name="company" /></textarea>
                <label for="email">Message</label>
              </div>
              <div class="submit-btn">
                <button type="submit">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section> -->

<footer class="footer text-center">
    <div class="container">
        <!-- <ul class="list-inline">
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white mr-3" href="javascript:void(0)">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
        </li>
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white mr-3" href="javascript:void(0)">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
        </li>
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white" href="javascript:void(0)">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
        </li>
      </ul> -->
        <p class="text-muted small mb-0">Copyright © KKN UIN Bandung 2020</p>
        <p class="text-muted small mb-0">Desa Cinunuk Kec.Cileunyi Kab.Bandung</p>
    </div>
</footer>