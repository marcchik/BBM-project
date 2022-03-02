
   <footer class="footer">
      <div class="footer__top-wrap">
         <div class="container">
            <div class="footer__inner">
               <div class="footer__top">
                  <div class="footer__logo-wrap">
                     <a href="#" class="footer__top-logo"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" alt="БММ" class="footer__top-logo-img">БММ</a>
                     <div class="footer__top-address">г. Москва, ул. Никольская, 12</div>
                  </div>
                  <div class="footer__top-center">
                     <div class="footer__top-center-contacts">
                        <a href="#" class="footer__top-center-contacts-link">Контакты</a>
                        <a href="tel:88004442233" class="footer__top-center-contacts-tel">8 800 444 22 33</a>
                        <div class="footer__top-center-contacts-mail">bmm@inbox.ru </div>
                        <div class="footer__top-center-contacts-messangers">
                           <a href="#" class="footer__top-center-contacts-messangers-whatsapp"><img src="<?=SITE_TEMPLATE_PATH?>/img/icons/Whatsapp.svg" alt=""></a>
                           <a href="#" class="footer__top-center-contacts-messangers-telegram"><img src="<?=SITE_TEMPLATE_PATH?>/img/icons/telegram.svg" alt=""></a>
                        </div>
                     </div>
                     <div class="footer__top-center-nav">
                        <a href="#" class="footer__top-center-nav-main">Навигация</a>
                        <a href="#" class="footer__top-center-nav-dop">О компании</a>
                        <a href="#" class="footer__top-center-nav-dop">БММ-Развилка</a>
                        <a href="#" class="footer__top-center-nav-dop">БММ-Битца</a>
                     </div>
                  </div>
                  <div class="footer__top-services">
                     <a href="#" class="footer__top-services-main">Услуги</a>
                     <a href="#" class="footer__top-services-dop"><img src="<?=SITE_TEMPLATE_PATH?>/img/icons/mail.svg" alt="" class="footer__top-services-dop-img1"> Аренда площадей на продуктовой базе</a>
                     <a href="#" class="footer__top-services-dop"><img src="<?=SITE_TEMPLATE_PATH?>/img/icons/fish.svg" alt="" class="footer__top-services-dop-img2"> Аренда рефрижераторов для хранения продуктов</a>
                     <a href="#" class="footer__top-services-dop"><img src="<?=SITE_TEMPLATE_PATH?>/img/icons/car.svg" alt="" class="footer__top-services-dop-img3"> Стоянка для большегрузного транспорта</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="footer__bottom-wrap">
         <div class="container">
            <div class="footer__bottom-inner">
               <div class="footer__bottom-text">Cкладские помещения под ваши нужды</div>
            <div class="footer__bottom-text">2021</div>
            <div class="footer__bottom-right">
               <div class="footer__bottom-right-text">Разработано</div>
               <div class="footer__bottom-right-img">
                  <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/label.png" alt="">
               </div>
               <div class="footer__bottom-right-name">Request <span>Design</span></div>
            </div>
            </div>
         </div>
      </div>
   </footer> 
   



<div class="modal__bg">
   <div class="modal">
      <div class="modal__left">
         <div class="modal__left-title">Оставьте заявку</div>
         <div class="modal__left-subtitle">Заполните форму обратной связи </div>
         <div class="modal__left-img">
            <img src="<?=SITE_TEMPLATE_PATH?>/img/modal.jpg" alt="">
         </div>
      </div>
      <div class="modal__right">
         <form action="#" class="modal__right-form">
            <label class="modal__right-form-label">
               <input type="text" class="modal__right-form-input" placeholder="ФИО">
            </label>
            <label class="modal__right-form-label">
               <input type="tel" class="modal__right-form-input" placeholder="Телефон">
            </label>
            <label class="modal__right-form-label">
               <input type="email" class="modal__right-form-input" placeholder="E-mail">
            </label>
            <label class="modal__right-form-label">
               <textarea name="text" class="modal__right-form-textarea" placeholder="Комментарий"></textarea>
            </label>
            <button class="modal__right-form-btn btn-link open__modal-btn">Отправить</button>
         </form>
      </div>
      <div class="close__modal">
         <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/close.svg" alt="" class="desc">
         <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/close2.svg" alt="" class="mobile">
      </div>
   </div>
</div>

<div class="modal__bg-btn">
   <div class="modal__btn">
      <div class="modal__btn-ok">
         <div class="modal__btn-ok-img">
            <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/ok.png" alt="">
         </div>
         <div class="modal__btn-ok-title">Спасибо!</div>
         <div class="modal__btn-ok-text">Наши специалисты свяжутся с вами</div>

      </div>
      <div class="close__modal-btn">
         <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/close.svg" alt="" class="desc">
         <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/close2.svg" alt="" class="mobile">
      </div>
   </div>
</div>

<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/swiper-bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script defer src="<?=SITE_TEMPLATE_PATH?>/js/main.js"></script>
</body>
</html>