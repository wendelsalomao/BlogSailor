<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Blog - Sailor</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Sailor - v4.7.0
  * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">Sailor</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.html">Inicio</a></li>
              
          <li><a href="blog.html" class="active">Blog</a></li>
          <li><a href="index.html" class="getstarted">Olá <?php echo $_SESSION['usuarioNome'];?></a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>

  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Blog</h2>
          <ol>
            <li>Blog</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">Veja quais são as áreas de TI que têm mais chances de emprego</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">John Doe</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">25 de janeiro de 2021</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">129 Comentarios</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  A Associação Catarinense de Tecnologia (ACATE) revelou um estudo que mapeou os profissionais de TI e as competências mais demandados pelo mercado de trabalho. De acordo com o projeto, só no estado de Santa Catarina, as companhias da base tecnológica abrirão 16,6 mil vagas até 2023, e mais da metade são para desenvolvedores de software, os também conhecidos como DEVs.
                  As funções mais procuradas são: desenvolvedores Full Stack (22,63%), Back-end (18,43%) e Front-end (12,48%); analista de serviço e suporte de TI acabou aparecendo em 4° lugar (7,42%)
                </p>
                <div class="read-more">
                  <a href="https://www.tecmundo.com.br/mercado/223946-veja-areas-ti-possuem-chances-emprego.htm">Ler Mais</a>
                </div>
              </div>

            </article><!-- End blog entry -->

            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/blog/blog-2.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">Quer trabalhar com tecnologia? Veja a média salarial e habilidades pedidas</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">John Doe</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">21 de janeiro de 2021</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="https://www.tecmundo.com.br/mercado/219725-quer-trabalhar-tecnologia-veja-media-salarial-habilidades-pedidas.htm">114 Comentarios</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  Desde o início da pandemia, uma das maiores preocupações da população é em relação ao desemprego. Entre dezembro de 2020 e fevereiro de 2021, por exemplo, o país bateu um recorde histórico e contava com 14,4 milhões de pessoas em busca de emprego, segundo IBGE.
                  Seguindo na direção contrária, o mercado de tecnologia cresce cada vez mais todos os anos. De acordo com uma pesquisa realizada pela GeekHunter, empresa de recrutamento, o número de vagas ofertadas em 2020 na área de tecnologia no Brasil cresceu 310%, em comparação ao ano anterior
                </p>
                <div class="read-more">
                  <a href="blog-single.html">Ler Mais</a>
                </div>
              </div>

            </article><!-- End blog entry -->

            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/blog/blog-3.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">Google anuncia programa gratuito para mulheres da área de tecnologia.</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">John Doe</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">17 de janeiro de 2021</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">121 Comentarios</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  O Google lançou nesta terça-feira (22) a nova edição do programa gratuito Cresça com o Google, voltada para as mulheres que querem desenvolver suas carreiras na área de tecnologia. O treinamento contará com a presença de especialistas da big tech e com as convidadas Mariana Pezarini, COO da PrograMaria; Camila Achutti, fundadora e CEO da MasterTech; e Silvana Bahia, codiretora da Olabi e coordenadora da PretaLab.
                  Serão discutidas as oportunidades e os desafios enfrentados por elas ao longo da carreira. O objetivo é aumentar o número de mulheres na área de tecnologia, que, atualmente, é um segmento predominantemente masculino. “Trabalhar pela diversidade nas tecnologias é um caminho para construirmos futuros mais inclusivos e socialmente mais justos. Se a tecnologia media nossas escolhas, nossos gostos e pauta nossas ações, é fundamental que tenhamos uma multiplicidade de olhares, visões de mundo e cultura nessa produção tecnológica", diz Silvana Bahia, do Olab.
                </p>
                <div class="read-more">
                  <a href="blog-single.html">Ler Mais</a>
                </div>
              </div>

            </article><!-- End blog entry -->

            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/blog/blog-4.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">Nubank abre vagas de trainee para a área de produtos digitais.</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">Thiago Widller</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">13 de Janeiro 2021</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comentarios</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  O Nubank recebe, até a próxima sexta-feira (30), inscrições para o programa de formação de Associate Product Managers (APM), cujo funcionamento se assemelha a um programa de trainee convencional. As vagas são destinadas às pessoas em início de carreira ou em transição para outra área profissional.
                  Com duração de 12 meses, o Nubank APM objetiva treinar profissionais para atuar no desenvolvimento de produtos dentro da fintech, incluindo formação teórica e prática em áreas como design, tecnologia e negócio, associadas à criação de produtos digitais.
                  Na parte teórica, serão ministrados conteúdos de fundamentos, enquanto a prática tem duas rotações de área, proporcionando ao trainee Nubank uma experiência completa. Ao final, o participante poderá assumir desafios variados na função de Product Manager, buscando a melhor sinergia entre os segmentos pelos quais passou.
                </p>
                <div class="read-more">
                  <a href="https://www.tecmundo.com.br/mercado/216241-nubank-abre-vagas-trainee-area-produtos-digitais.htm">Ler Mais</a>
                </div>
              </div>

            </article><!-- End blog entry -->

            <div class="blog-pagination">
              <ul class="justify-content-center">
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
              </ul>
            </div>

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

              <h3 class="sidebar-title">Procurar</h3>
              <div class="sidebar-item search-form">
                <form action="">
                  <input type="text">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->

              <h3 class="sidebar-title">Categories</h3>
              <div class="sidebar-item categories">
                <ul>
                  <li><a href="#">Geral <span>(25)</span></a></li>
                  <li><a href="#">Estilo de vida <span>(12)</span></a></li>
                  <li><a href="#">Esportes <span>(5)</span></a></li>
                  <li><a href="#">Design <span>(22)</span></a></li>
                  <li><a href="#">Criatividade <span>(8)</span></a></li>
                  <li><a href="#">Educação <span>(14)</span></a></li>
                </ul>
              </div><!-- End sidebar categories-->

              <h3 class="sidebar-title">Ultimos Posts</h3>
              <div class="sidebar-item recent-posts">
                <div class="post-item clearfix">
                  <img src="assets/img/blog/blog-recent-1.jpg" alt="">
                  <h4><a href="blog-single.html">Quer trabalhar com tecnologia? Veja a média salarial e habilidades pedidas</a></h4>
                  <time datetime="2020-01-01">28 de Janeiro 2021</time>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/blog/blog-recent-2.jpg" alt="">
                  <h4><a href="blog-single.html">Quer trabalhar com tecnologia? Veja a média salarial e habilidades pedidas</a></h4>
                  <time datetime="2020-01-01">24 de Janeiro 2021</time>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/blog/blog-recent-3.jpg" alt="">
                  <h4><a href="blog-single.html">Google anuncia programa gratuito para mulheres da área de tecnologia</a></h4>
                  <time datetime="2020-01-01">21 de Janeiro 2021</time>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/blog/blog-recent-4.jpg" alt="">
                  <h4><a href="blog-single.html">Nubank abre vagas de trainee para a área de produtos digitais</a></h4>
                  <time datetime="2020-01-01">19 de Janeiro 2021</time>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/blog/blog-recent-5.jpg" alt="">
                  <h4><a href="blog-single.html">Como ganhar dinheiro mesmo sendo feio.</a></h4>
                  <time datetime="2020-01-01">15 de Janeiro 2021</time>
                </div>

              </div><!-- End sidebar recent posts-->

              <h3 class="sidebar-title">Tags</h3>
              <div class="sidebar-item tags">
                <ul>
                  <li><a href="#">Aplicativos</a></li>
                  <li><a href="#">TI</a></li>
                  <li><a href="#">Negocios</a></li>
                  <li><a href="#">Mac</a></li>
                  <li><a href="#">Design</a></li>
                  <li><a href="#">Profissão</a></li>
                  <li><a href="#">Criatividade</a></li>
                  <li><a href="#">Studio</a></li>
                  <li><a href="#">Smart fit </a></li>
                  <li><a href="#">Programação</a></li>
                  <li><a href="#">Marketing</a></li>
                </ul>
              </div><!-- End sidebar tags-->

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Sailor</h3>
              <p>
                viaduto do cha, 007 <br>
                em baixo da ponte, BR<br><br>

                <strong>Telefone:</strong> 6060-6070<br>
                <strong>Email:</strong> contato.blogsalor@janela.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>
              Principais conteudos
            </h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Inicio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Sobre nós</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Serviços</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Termos de serviço</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Politica de Privacidade</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nossos Serviços</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Tecnologias</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Beleza</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Saude</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>nossa Newsletter</h4>
            <p>Escreva aqui qual tema gostaria que fosse abordado neste blog</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Inscrever-se">
            </form>

          </div>

        </div>
      </div>
    </div>

   
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>