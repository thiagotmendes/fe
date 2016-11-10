<?php /* template name: Home */ ?>
<?php get_header() ?>
  <section class="banner">
    <?php echo do_shortcode('[metaslider id=15]') ?>
  </section>

  <main>
    <section id="garantia" class="garantia">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="<?php echo get_template_directory_uri() ?>/images/garanta.png" class="img-responsive marg-bottom" alt="Garanta a melhor exposição para seu produto" />
            <p class="texto-superior">
              Nos espaços comerciais de Merchandising da Feira Shop Você tem acesso imediato a milhares de consumidores,
              fica próximo do seu público alvo e desenvolve um relacionamento de confiança, duradouro com o consumidor final.
            </p>
            <p class="texto-superior">
              Esta proximidade e relação de confiança é o que sua empresa precisa para divulgar e garantir resultados eficazes.
            </p>
          </div>
          <div class="col-md-6">
            <img src="<?php echo get_template_directory_uri() ?>/images/fluxo-garanta.png" alt="Custo baixo com alto impacto de vendas" class="img-responsive" />
          </div>
        </div>
      </div>
    </section>

    <section id="nosso-publico" class="nosso-publico">

      <div class="container">
        <div class="row marg-bottom">
          <div class="col-md-4">
            <img src="<?php echo get_template_directory_uri() ?>/images/nossopublico.png" alt="Nosso publico" class="img-responsive img-title" />
          </div>
          <div class="col-md-4">
            <img src="<?php echo get_template_directory_uri() ?>/images/feminino.png" alt="Público 95% Feminino" class="img-responsive" />
          </div>
          <div class="col-md-4">
            <img src="<?php echo get_template_directory_uri() ?>/images/chart2.png" alt="Faixa etária" class="img-cem" />
          </div>
        </div>
        <div class="row">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <img src="<?php echo get_template_directory_uri() ?>/images/gra.png" alt="Grau de instrução" class="img-cem" />
              </div>
              <div class="col-md-4 col-md-offset-2">
                <img src="<?php echo get_template_directory_uri() ?>/images/chart1.png" alt="Classe social" class="img-cem" />
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- sessao comercial/vantagens -->
    <section id="vantagens" class="comercial-vantagens">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <img src="<?php echo get_template_directory_uri() ?>/images/vantagens.png" alt="Vantagens Feira Shop" class="img-responsive" />
          </div>
          <div class="col-md-4">
            <div class="row marg-bottom">
              <div class="col-md-3">
                <img src="<?php echo get_template_directory_uri() ?>/images/4.png" alt="" class="" />
              </div>
              <div class="col-md-9">
                Mais de <strong>1,5 milhão</strong> de visitas de comsumidores/mês - Gerando visibilidade e oportunidades de negócio.
              </div>
            </div>
            <div class="row marg-bottom">
              <div class="col-md-3">
                <img src="<?php echo get_template_directory_uri() ?>/images/3.png" alt="" class="" />
              </div>
              <div class="col-md-9">
                <strong>Maior organização comercial</strong> no ramo de feiras de Minas Gerais.
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <img src="<?php echo get_template_directory_uri() ?>/images/5.png" alt="" class="" />
              </div>
              <div class="col-md-9">
                <strong>Custo baixo</strong> com alto impacto de vendas.
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="row marg-bottom">
              <div class="col-md-3">
                <img src="<?php echo get_template_directory_uri() ?>/images/1.png" alt="" class="" />
              </div>
              <div class="col-md-9">
                <strong> Custo x Beneficio </strong> melhor relação de custo por audiência do público-alvo
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <img src="<?php echo get_template_directory_uri() ?>/images/2.png" alt="" class="" />
              </div>
              <div class="col-md-9">
                <strong>Oraganização comercial</strong> com o maior número de consumidores em BH.
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="centro-comercial" class="comercial-vantagens">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <img src="<?php echo get_template_directory_uri() ?>/images/centros_titulo.png" alt="Centros comerciais" class="img-responsive" />
            <div class="centroscomerciais">
              <p>Centro - Avenida Afonso Pena, 744</p>
              <p>Centro - Rua dos Carijós, 577</p>
              <p>Centro - Rua Rio de Janeiro, 305</p>
              <p>Centro - Rua Rio de Janeiro, 788</p>
              <p>Centro - Rua Rio de Janeiro, 882</p>
              <p>Centro - São Paulo, 815</p>
              <p>Savassi - Avenida Cristóvão Colombo, 287</p>
              <p>Centro - Av. Augusto de Lima, 1400</p>
              <p>Barreiro - Av. Visconde de Ibituruna, 380</p>
              <p>Venda Nova - Rua Padre Pedro Pinto, 1.154</p>
              <p>Contagem - Avenida João César de Oliveira, 2.600</p>
            </div>
          </div>
          <div class="col-md-8">
            <img src="<?php echo get_template_directory_uri() ?>/images/mapa.png" alt="Melhores centros comerciais" class="img-responsive" />
          </div>
        </div>
      </div>
    </section>
    <!-- /sessao comercial/vantagens -->
    <section id="acoes" class="acoes">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="<?php echo get_template_directory_uri() ?>/images/title-acoes.png" alt="" class="img-responsive" />
          </div>
          <div class="col-md-6">
            <p class="texto-superior titulo-menor">Banner, Paineis de Lona</p>
            <p class="texto-superior">
              A cobertura é 100% do fluxo, proporcionando múltiplos impactos aos consumidores
              que observam a mídia várias vezes durante a visita à Feira Shop.
            </p>
            <p class="texto-superior titulo-menor"> Mídia  na sacola da Feira Shop </p>
            <p class="texto-superior">
              Nas mãos das consumidoras Feira Shop a sacola é um moderno veículo de comunicação que aumenta a visibilidade da marca.
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <p class="texto-superior titulo-menor"> Ações de sampling  </p>
            <p class="texto-superior">
              Distribuição de publicidade, amostras ou brindes na mão do consumidor.
              Esta é a forma mais eficaz de promover seus produtos e serviços.
            </p>
            <p class="texto-superior titulo-menor"> Quiosques Temporários  </p>
            <p class="texto-superior">
              O ponto de venda é o principal local de contato da marca com o consumidor,
              conquistando novos clientes e fidelizando os já existentes
            </p>
          </div>
          <div class="col-md-6">
            <img src="<?php echo get_template_directory_uri() ?>/images/entre-outras.png" alt="Entre outras possibilidades, pois temos flexibilidade para personalizar o espaço à sua necessidade" class="img-responsive" />
          </div>
        </div>
      </div>
    </section>

    <section id="cases" class="acoes">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="<?php echo get_template_directory_uri() ?>/images/cases-sucesso.png" alt="" class="img-responsive" />
            <p class="texto-superior">
              Com espaços para atender vários segmentos do mercado, a Feira Shop é a melhor opção para captação e negócios imediatos.
              Conheça algumas empresas que investiram nesta oportunidade.
            </p>
          </div>
          <div class="col-md-6">
            <?php echo do_shortcode('[metaslider id=20]') ?>
          </div>
        </div>
      </div>
    </section>

    <!-- SESSÃO DE CONTATO -->
    <section id="contato" class="captar">
      <div class="container">
        <h2 class="titulo-section titulo-contato"> Entre em <span class="consumidores"> Contato </span> </h2>
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
