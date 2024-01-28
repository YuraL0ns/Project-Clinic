<footer class="footer">
    <div class="footer-flex footer-container">
        <div class="footer-logos">
            <div class="footer-logos-flex">
                <div class="footer-logo">
                    <a href="#">
                        <img src="{{asset('template/footer/logo_white.png')}}" alt="{{env('APP_NAME')}}">
                    </a>
                </div>
                    <div class="footer-social">
                        <a href="#" class="footer-social-link">
                            <ion-icon name="logo-vk">
                            </ion-icon>
                        </a>
                        <a href="#" class="footer-social-link">
                            <ion-icon name="logo-facebook">
                            </ion-icon>
                        </a>
                        <a href="#" class="footer-social-link">
                            <ion-icon name="logo-whatsapp">
                            </ion-icon>
                        </a>
                        <a href="#" class="footer-social-link">
                            <ion-icon name="call-outline">
                            </ion-icon>
                        </a>
                    </div>

                    <div class="footer-copy">
                        &copy; 2021 clinic35.ru
                    </div>
                </div>
        </div>
        <div class="footer-links">
            <div class="footer-links-heading">Услуги</div>
            <ul>
                <li>
                    <a href="{{env('APP_URL')}}/services/adult">Взрослое отделение</a>
                </li>
                <li>
                    <a href="{{env('APP_URL')}}/services/children">Детское отделение</a>
                </li>
                <li>
                    <a href="{{env('APP_URL')}}/services/laboratoria">Стоматология</a>
                </li>
                <li>
                    <a href="{{env('APP_URL')}}/services/days-clinic">Диагностика</a>
                </li>
            </ul>
        </div>
        <div class="footer-links">
            <div class="footer-links-heading">Клиника</div>
            <ul>
                <li>
                    <a href="#">О нас</a>
                </li>
                <li>
                    <a href="#">Расписание работы врачей</a>
                </li>
                <li>
                    <a href="#">Клинический анализы</a>
                </li>
                <li>
                    <a href="#">Стационар</a>
                </li>
            </ul>
        </div>
        <div class="footer-links">
            <div class="footer-links-heading">Пациентам</div>
            <ul>
                <li>
                    <a href="#">Документация</a>
                </li>
                <li>
                    <a href="{{route('sait.news.list')}}">Новости</a>
                </li>
                <li>
                    <a href="#">Прайс</a>
                </li>
                <li>
                    <a href="#">Помощь</a>
                </li>
            </ul>
        </div>
    </div>
</footer>
