@extends('layouts.app')

@section('content')

    @foreach ($errors->all() as $error)

      <div class="alert alert-danger">{{ $error }}</div>

    @endforeach



    <div>
        <div class="header-blue" style="padding-bottom: 0px;">

            <div class="container hero" style="padding-bottom: 40px; margin-top: 0px">
                <div class="row">
                    <div class="col-12 col-lg-6 col-xl-5 offset-xl-1">
                        <h1>Bee Scanner</h1>
                        <p>O aplicatie care te ajuta sa-ti mentii/imbunatatesti startea de sanatate si aspectul fizic luand in considerare nevoile tale. </p>
                        @guest
                            <a href="{{ url('/user/login_register') }}">
                                <button class="btn btn-light btn-lg action-button" type="button">Vreau sa folosesc</button>
                            </a>
                        @endguest
                        @auth
                            <a href="{{ url('/home') }}">
                                <button class="btn btn-light btn-lg action-button" type="button" >Contul meu</button>
                            </a>
                        @endauth
                    </div>
                <div class="col-md-5 col-lg-5 offset-lg-1 offset-xl-0 d-none d-lg-block phone-holder mt-5">
                    <div class="iphone-mockup"><img src="assets/img/iphone_10_white.png" class="device">
                        <!-- <div class="screen"></div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="highlight-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Ce face?</h2>
                <p class="text-center">Te ajuta sa-ti consrtuiesti o diesta si un stil de viata in functie de nevoile tale. </p>
            </div>
            @guest
                <div class="buttons">
                    <a class="btn btn-primary" role="button" href="{{ url('/user/login_register') }}">Creare cont</a>
                    <a class="btn btn-secondary" role="button" href="{{ url('/user/login_register') }}">Autentificare</a>
                </div>
            @endguest
        </div>
    </div>

    <div class="features-boxed">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Avantaje</h2>
                <p class="text-center">Avantajele platformei BeeScanner.</p>
            </div>
            <div class="row justify-content-center features">
                <div class="col-sm-6 col-md-5 col-lg-4 item" style=" margin-bottom: 10px">
                    <div class="box" style="height: 100%;" ><i class="fa fa-map-marker icon"></i>
                        <h3 class="name">Functioneaza oriunde</h3>
                        <p class="description">Functioneaza oriunde in orice moment al zilei</p><a href="{{ url('/user/login_register') }}" class="learn-more">vreau sa folosesc »</a></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item" style=" margin-bottom: 10px">
                    <div class="box" style="height: 100%;"><i class="fa fa-clock-o icon"></i>
                        <h3 class="name">Rapid</h3>
                        <p class="description">Procesul de scanare si adaugare dureaza cateva secunde.</p><a href="{{ url('/user/login_register') }}" class="learn-more">vreau sa folosesc »</a></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item" style=" margin-bottom: 10px">
                    <div class="box" style="height: 100%;"><i class="fa fa-list-alt icon"></i>
                        <h3 class="name">Pentru tine </h3>
                        <p class="description">Aplicatia genereaza date in functie de nevoile tale.</p><a href="{{ url('/user/login_register') }}" class="learn-more">vreau sa folosesc »</a></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item" style=" margin-bottom: 10px">
                    <div class="box" style="height: 100%;"><i class="fa fa-leaf icon"></i>
                        <h3 class="name">Recomandari </h3>
                        <p class="description">Aplicatia iti sugereaza produse naturale si sanatoase.</p><a href="{{ url('/user/login_register') }}" class="learn-more">vreau sa folosesc »</a></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item" style=" margin-bottom: 10px">
                    <div class="box" style="height: 100%;"><i class="far fa-chart-bar icon"></i>
                        <h3 class="name">Statistici </h3>
                        <p class="description">Poti vedea evolutia ta si ce ar trebui sa schimbi la stilul tau de viata.</p><a href="{{ url('/user/login_register') }}" class="learn-more">vreau sa folosesc »</a></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item"style=" margin-bottom: 10px">
                    <div class="box" style="height: 100%;"><i class="fa fa-phone icon"></i>
                        <h3 class="name">Responsive</h3>
                        <p class="description">Aplicatia este disponibila pe orice dispozitiv indiferent de marimea acestuia.</p><a href="{{ url('/user/login_register') }}" class="learn-more">vreau sa folosesc »</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-clean">
        <form method="POST" action="{{ url('/contact_us') }}">
        @csrf
            <h2 class="text-center">Contacteaza-ne</h2>
            <div class="form-group">
                <input class="form-control" type="text" name="name" placeholder="Nume" required>
            </div>
            <div class="form-group">
                <input class="form-control" type="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <textarea class="form-control" rows="14" name="message" placeholder="Mesaj" required></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Trimite </button>
            </div>
        </form>
    </div>

@endsection
