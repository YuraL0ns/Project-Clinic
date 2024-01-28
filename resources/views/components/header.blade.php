<nav class="navbar">
    <div class="navbar-flex navbar-container">

        <div class="navbar-logo">
            <a href="{{route('sait.home.page')}}">
                <img src="{{asset('template/navbar/logo.png')}}" alt="{{env('APP_NAME')}}">
            </a>
        </div>

        <div class="navbar-menu">
            <ul>
                <li>
                    <a href="{{route('sait.home.services.list')}}">Услуги</a>
                </li>
                <li>
                    <a href="{{route('sait.doctor.list')}}">Специалисты</a>
                </li>
                <li>
                    <a href="#">Акции</a>
                </li>
                <li>
                    <a href="{{route('sait.news.list')}}">Новости</a>
                </li>
                <li>
                    <a href="#">Контакты</a>
                </li>
            </ul>
        </div>

        <div class="navbar-phones">
            <a href="#">+7 (921) 252-40-02</a>
            <a href="#">(8202) 30-20- 28</a>
        </div>

        <div class="navbar-buttons">
            <a class="navbar-btn" href="#">Записаться</a>
        </div>

    </div>
</nav>
