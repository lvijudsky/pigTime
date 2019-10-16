@extends('layouts.appPainel')

@section('breadcrumb')
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor">Escolha um serviço e ganhe tempo!</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Serviços</li>
                </ol>
            </div>
        <div class="col-md-7 col-4 align-self-center">
            <a href="{{ url('/servicos/create') }}" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down"> Anunciar serviço</a>
        </div>
    </div>    
@endsection


@section('content')
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->

<!-- Row -->

    <div class="row">
        @foreach ($servicos as $s)
        <!-- CARD -->
        <div class="col-lg-4 col-md-4">
            <div class="card rounded">
                <!-- HEADER CARD; TÍTULO E DESCRICAO -->
                <img class="rounded-top" src="{{ url('admin/assets/images/background/previsao-do-tempo.jpg') }}" alt="Card image cap">
                <div class="card-img-overlay" style="height:110px;">
                    {{-- TITULO --}}
                    <h3 class="card-title text-white m-b-0 dl">{{ $s->nome }}</h3>
                    {{-- DESCRICAO  --}}
                    <small class="card-text text-white font-light"><br>{{ Str::limit($s->descricao, $limit =45, $end = '...') }}</small>
                </div>
                {{-- CORPO DO CARD --}}
                <div class="card-body weather-small">
                    <div class="row d-flex m-b-10">
                        {{-- FOTO DO USUARIO --}}
                        <img src="http://localhost:8000/admin/assets/images/users/1.jpg" alt="user" class="m-l-20" style="width: 50px; border-radius: 100%;">
                        {{-- NOME DO USUARIO --}}
                        <h5 class="my-0 py-0 m-l-10 card-title align-self-center">{{ $s->dono . ' ' . $s->donoSobrenome }} </h5>
                    </div>
                    {{-- DESCRICAO DETALHADA --}}
                    <p class="card-text">{{ Str::limit($s->descricao, $limit=60, $end = '...')}}</p>
                    {{-- DATA / HORARIO / DISTANCIA / --}}
                    <div class="row">
                        {{-- CAMPO DATA --}}
                        <div class="col-4 b-r text-center">
                            <h1 class="font-light text-info m-b-0 m-r-10">
                                <small>{{ $s->horaInicial->format('d/m') }}</small>
                            </h1>
                            <small>Data</small>
                        </div>
                        {{-- CAMPO HORAS --}}
                        <div class="col-4 b-r align-self-center">
                            <div class="d-flex">
                                <div class="display-6 text-info"><i class="far fa-clock"></i></div>
                                    <div class="m-l-0">
                                        {{-- HORARIO --}}
                                        <h1 class="font-light text-info m-b-0">{{ $s->horaInicial->format('H:i') }}<small>h</small></h1>
                                        {{-- PAGAMENTO --}}
                                        <small>Pagamento {{ $s->horaFinal->diffInHours($s->horaInicial)}} h</small>
                                </div>
                            </div>
                        </div>
                        {{-- DISTANCIA --}}
                        <div class="col-4 text-center">
                            <h1 class="font-light text-info m-b-0">13<small>km</small></h1>
                            <small>Distância</small>
                        </div>
                    </div>
                </div>
                <a href="/servicos/{{ $s->id }}" class="btn btn-primary">Visualizar</a>
                </div>
            </div>
            @endforeach
        <!-- Column -->
        </div>
        <!-- CARREGAR MAIS  -->
        {{-- <div class="d-flex justify-content-start">
            <a href="#" class="btn btn-primary d-flex justify-content-center">Carregar Mais</a>
        </div> --}}
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
@endsection