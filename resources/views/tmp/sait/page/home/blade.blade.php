@extends('tmp.main.default')
@section('content')
<div class="container">

    <section class="section services">
        <div class="section-header">Услуги</div>
        <div class="services-grid">
            @foreach($razdels as $razdel)
                <div class="service-item" id="{{$razdel->id}}" style="background-image: url('template/{{$razdel->razdel_images}}')">
                    <a href="{{env('APP_URL')}}/services/{{$razdel->razdel_alias}}">{{$razdel->razdel_title}}</a>
                </div>
            @endforeach
        </div>
    </section>
<div class="hr-line"></div>
    <section class="section doctors">
        <div class="section-header">Наши специалисты</div>
        <div class="doctors-grid">
            @foreach($doctors as $doctor)
                <div class="doctor-item" id="{{$doctor->id}}">
                    <img style="width: 200px;" class="doctor-item-img" src="{{$doctor->doctor_img}}" alt="{{$doctor->second_name}} {{$doctor->first_name}} {{ $doctor->last_name }}">
                    <a class="doctor-item-link" href="{{route('sait.doctor.show', $doctor->doctor_alias)}}">{{$doctor->second_name}} {{$doctor->first_name}} {{ $doctor->last_name }}</a>
                </div>
            @endforeach
        </div>
    </section>
<div class="hr-line"></div>
    {{-- <section class="section news">
        <div class="section-header">Новости клиники</div>
        <div class="news-grid">
            @foreach($posts as $post)
                <div class="post-item" id="{{$post->id}}">
                    <a href="{{route('sait.news.info', $post->post_alias)}}">
                        <img src="{{$post->post_img}}" alt="{{$post->title}}">
                        <h4>{{$post->title}}</h4>
                    </a>
                </div>
            @endforeach
        </div>
    </section>
<div class="hr-line"></div> --}}
{{--    <section class="section testimonials">--}}
{{--        <div class="section-header">Отзывы о клинике</div>--}}
{{--    </section>--}}
{{--<div class="hr-line"></div>--}}
    <section class="section contacts">
        <div class="section-header section-header-left">Контакты</div>
        <div class="contacts-grid">
            <div class="contacts-text">

                <div class="contacts-box-items">
                    <a href="tel:89212524002">+7 (921) 252-40-02</a>
                    <a href="tel:88202302028">8 (8202) 30-20-28</a>
                    <a href="mailto: 01.pmk@mail.ru">01.pmk@mail.ru</a>
                    <a>г. Череповец, ул. Архангельская, 7Б</a>
                </div>

                <div class="contacts-box-items">
                    <a>Пн-Пт — 8:00-20:00</a>
                    <a>Сб-Вс — 9:00-15:00</a>
                </div>

            </div>
            <div class="contacts-maps">
                <div id="mymap"></div>
            </div>
        </div>
    </section>

</div>
@endsection
