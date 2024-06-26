<footer>
    <div class="container">
      <div class="top">
        <img src="<?php echo get_template_directory_uri( )  ?>/img/logo.svg" alt="" />
        <div class="share">
          <span>Acompanhe nas redes</span>
          <ul>
            <li>
              <a href="">
                <img src="<?php echo get_template_directory_uri( )  ?>/img/youtube.svg" alt="Icon youtube" />
              </a>
            </li>
            <li>
              <a href="">
                <img src="<?php echo get_template_directory_uri( )  ?>/img/linkedin.svg" alt="Icon linkedin" />
              </a>
            </li>
            <li>
              <a href="">
                <img src="<?php echo get_template_directory_uri( )  ?>/img/facebook.svg" alt="Icon facebook" />
              </a>
            </li>
            <li>
              <a href="">
                <img src="<?php echo get_template_directory_uri( )  ?>/img/instagram.svg" alt="Icon instagram" />
              </a>
            </li>
            <li>
              <a href="">
                <img src="<?php echo get_template_directory_uri( )  ?>/img/twitter-white.svg" alt="Icon twitter" />
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="main">
        <nav>
          <div class="item">
            <strong>Produtos Neon</strong>
            <ul>
              <li><a href="">Cartão de crédito</a></li>
              <li><a href="">Cartão pré-pago</a></li>
              <li><a href="">Neon Mais</a></li>
              <li><a href="">Investimentos</a></li>
              <li><a href="">Empréstimo</a></li>
            </ul>
          </div>
          <div class="item">
            <strong>Conta digital PJ</strong>
            <ul>
              <li><a href="">Sou MEI</a></li>
              <li><a href="">Sou ME</a></li>
            </ul>
          </div>
          <div class="item">
            <strong>Blog</strong>
            <ul>
              <li><a href="">#focanodinheiro</a></li>
              <li><a href="">O poder da comunidade</a></li>
              <li><a href="">Desafio das 52 semanas</a></li>
              <li><a href="">Planilha de gastos</a></li>
            </ul>
          </div>
          <div class="item">
            <strong>Institucional</strong>
            <ul>
              <li><a href="">Conheça a Neon</a></li>
              <li><a href="">Trabalhe conosco</a></li>
              <li><a href="">Termos de uso</a></li>
              <li><a href="">Políticas de privacidade</a></li>
            </ul>
          </div>
          <div class="item">
            <strong>Ajuda</strong>
            <ul>
              <li><a href="">Ouvidoria</a></li>
              <li><a href="">Fale conosco</a></li>
            </ul>
          </div>
        </nav>

        <div class="btns">
          <button>
            <img src="<?php echo get_template_directory_uri( )  ?>/img/envelope.svg" alt="" />
            <div class="info">
              <strong>Atendimento</strong>
              <span>oi@neon.com.br (24 horas)</span>
            </div>
          </button>
          <button>
            <img src="<?php echo get_template_directory_uri( )  ?>/img/chat.svg" alt="" />
            <div class="info">
              <strong>Imprensa:</strong>
              <span>imprensa@neon.com.br</span>
            </div>
          </button>
        </div>
      </div>
      <div class="msg">
        <div class="icon">😀</div>
        <p>
          Oi! Leu até aqui? Você se preocupa com os mínimos detalhes, mesmo. A
          gente também. Por isso o time Neon está sempre trabalhando para
          fazer a conta digital perfeita para você ; ) <strong>github.com/canndidojs</strong>
        </p>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script>
    var swiper = new Swiper(".slide-depoimentos", {

      slidesPerView: 3,
      spaceBetween: 32,
      pagination: {
        el: ".s-depoimentos .top .swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        320: {
          slidesPerView: 1.3,
          spaceBetween: 16,
        },
        600: {
          slidesPerView: 2.3,
          spaceBetween: 15,
        },
        1200: {
          slidesPerView: 3,
          spaceBetween: 32,
        }
      }
    });
    AOS.init({
      duration: 1000,
      once: true
    });
  </script>

    <?php wp_footer(); ?>

</body>

</html>