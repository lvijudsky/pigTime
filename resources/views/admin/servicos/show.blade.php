@extends('layouts.appPainel')

@section('breadcrumb')
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor">Veja mais sobre {{ $servico->nome }}!</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/servicos') }}">Serviços</a></li>
                    <li class="breadcrumb-item active">Ver Mais</li>
                </ol>
            </div>
        <div class="col-md-7 col-4 align-self-center">
            <a href="{{ url('/servicos/create') }}" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down"> Anunciar serviço</a>
        </div>
    </div>
        
@endsection

@section('content')
    <div class="row">
        <div class="col-8">
            <div class="card rounded h-100">
                <!-- HEADER CARD; TÍTULO E DESCRICAO -->
                <img class="rounded-top" src="{{ url('admin/assets/images/background/previsao-do-tempo.jpg') }}" alt="Card image cap">
                <div class="card-img-overlay d-flex" style="height:110px;">
                    {{-- TITULO --}}
                    <h2 class="card-title text-white m-b-0 dl align-self-center">{{ $servico->nome }}</h2>
                </div>
                {{-- CORPO DO CARD --}}
                <div class="card-body weather-small h-100">
                    {{-- FOTO E NOME DO USUARIO --}}
                    <div class="row d-flex m-b-20">
                        {{-- FOTO DO USUARIO --}}
                        <img src="http://localhost:8000/admin/assets/images/users/1.jpg" alt="user" class="m-l-20" style="width: 50px; border-radius: 100%;">
                        {{-- NOME DO USUARIO --}}
                        <h5 class="my-0 py-0 m-l-10 card-title align-self-center">{{ $user->nome . ' ' . $user->sobrenome }} </h5>
                    </div>
                    {{-- DESCRIÇÃO DETALHADA --}}
                    <div class="row m-l-10 m-b-10">
                        <p class="card-text">{{ $servico->descricao }}</p>
                    </div>
                {{-- FINAL CORPO DO CARD --}}
                </div>
            {{-- DATA / HORARIO / DISTANCIA / --}}
            <div class="row d-flex">
                {{-- CAMPO DATA --}}
                <div class="col-4 b-r text-center align-self-baseline">
                    {{-- DATA --}}
                    <h1 class="font-light text-info m-b-0 m-r-10"> {{ $servico->horaInicial->format('d/m') }} </h1>
                    <small>Data</small>
                </div>
                {{-- CAMPO HORAS --}}
                <div class="col-4 b-r align-self-center">
                    <div class="d-flex justify-content-center">
                        <div class="m-l-0">
                            {{-- HORARIO --}}
                            <h1 class="font-light text-info m-b-0">{{ $servico->horaInicial->format('H:i')}}<small>h</small></h1>
                            {{-- PAGAMENTO --}}
                            <small>Pagamento {{ $servico->horaFinal->diffInHours($servico->horaInicial)}} h</small>
                        </div>
                    </div>
                </div>
                {{-- DISTANCIA --}}
                <div class="col-4 text-center">
                    <h1 class="font-light m-b-0">13<small>km</small></h1>
                    <small>Distância</small>
                </div>
            {{-- FINAL DATA / HORARIO / DISTANCIA --}}
            </div>
            {{-- BOTÃO EDITAR --}}
            @if (Auth::user()->id == $servico->id_dono)
            <a class="w-100 m-t-10 btn btn-md btn-primary align-self-end" href="/servicos/{{ $servico->id }}/edit">Editar</a>
            @endif
            {{-- BOTÃO CANDIDATAR-SE --}}
            @if (Auth::user()->id != $servico->id_dono)
            <a class="w-100 m-t-10 btn btn-md btn-primary align-self-end" href="/servicos/{{ $servico->id }}/edit">Candidatar</a>
            @endif
            {{-- FINAL DO CARD --}}
            </div>
        {{-- FINAL DA COLUNA --}}
        </div>
        {{-- PERFIL ANUNCIANTE --}}
        <div class="col-4">
            <div class="card h-100">
                <img class="card-img-top" src="{{url('./admin/assets/images/background/profile-bg.jpg')}}" alt="Card image cap">
                <div class="card-block little-profile text-center">
                    <div class="pro-img"><img src="{{url('./admin/assets/images/users/4.jpg')}}" alt="user" /></div>
                    <h3 class="m-b-0">{{ $user->nome . ' ' . $user->sobrenome }}</h3>
                    <p>Web Designer &amp; Developer</p>
                    <a href="javascript:void(0)" class="m-t-10 waves-effect waves-dark btn btn-primary btn-md btn-rounded">Follow</a>
                    <div class="row text-center m-t-20">
                        <div class="col-lg-4 col-md-4 m-t-20">
                            <h3 class="m-b-0 font-light">1099</h3><small>Articles</small></div>
                        <div class="col-lg-4 col-md-4 m-t-20">
                            <h3 class="m-b-0 font-light">23,469</h3><small>Followers</small></div>
                        <div class="col-lg-4 col-md-4 m-t-20">
                            <h3 class="m-b-0 font-light">6035</h3><small>Following</small></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection