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
    <section class="section news">
        <div class="section-header">Новости клиники</div>
    </section>
<div class="hr-line"></div>
    <section class="section testimonials">
        <div class="section-header">Отзывы о клинике</div>
    </section>
<div class="hr-line"></div>
    <section class="section contacts">
        <div class="section-header">Контакты</div>
    </section>

</div>
@endsection
