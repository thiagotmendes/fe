<?php /* template name: Home */ ?> 
<?php get_header() ?>
  <section class="banner">
    <img src="<?php echo get_template_directory_uri() ?>/images/banner.jpg" alt="" class="img-responsive" />
  </section>

  <main>
    <img src="<?php echo get_template_directory_uri() ?>/images/exposicao.jpg" alt="" class="img-responsive" />
    <img src="<?php echo get_template_directory_uri() ?>/images/publico.jpg" alt="" class="img-responsive" />
    <!-- sessao comercial/vantagens -->
    <section class="comercial-vantagens">
      <div class="container">
        <img src="<?php echo get_template_directory_uri() ?>/images/vantagens.jpg" alt="" class="img-responsive" />
        <img src="<?php echo get_template_directory_uri() ?>/images/comercial.jpg" alt="" class="img-responsive" />
      </div>

    </section>
    <!-- /sessao comercial/vantagens -->
    <img src="<?php echo get_template_directory_uri() ?>/images/acoes.jpg" alt="" class="img-responsive" />
    <img src="<?php echo get_template_directory_uri() ?>/images/cases2.jpg" alt="" class="img-responsive" />

    <!-- SESSÃO DE CONTATO -->
    <section id="contato" class="captar">
      <div class="container">
        <h2 class="titulo-section titulo-contato"> Seja um <span class="consumidores"> lojista </span> na feirashop </h2>
        <div class="row">
          <div class="row">
            <div class="col-md-6">
              <div class="">
                <img src="<?php echo get_template_directory_uri() ?>/images/feirashop.jpg" alt="" class="img-responsive" />
              </div>
              <div class="row">
                <div class="col-md-6">
                  <p><a href="https://www.feirashop.com.br/" target="_blank" class="social-icons">
                    <i class="fa fa-globe" aria-hidden="true"></i> feirashop.com.br
                  </a></p>
                  <p><a href="https://www.facebook.com/Feirashop" target="_blank" class="social-icons">
                    <i class="fa fa-facebook-square" aria-hidden="true"></i> /feirashop
                  </a></p>
                  <p><a href="https://www.instagram.com/feirashop_online" target="_blank" class="social-icons">
                    <i class="fa fa-instagram" aria-hidden="true"></i> /feirashop_online
                  </a></p>
                </div>
                <div class="col-md-6">
                  <p><span class="social"> <i class="fa fa-whatsapp" aria-hidden="true"></i> 99540.0618</span></p>
                  <p><span class="social"> <i class="fa fa-mobile" aria-hidden="true"></i> 3272.5008</span></p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="box-formulario">
                <?php echo do_shortcode('[contact-form-7 id="14" title="Formulário de contato 1"]') ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /SESSÃO DE CONTATO -->
  </main>

<?php get_footer() ?>
