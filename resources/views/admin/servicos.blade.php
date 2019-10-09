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
            <div class="card">
                <!-- HEADER CARD; TÍTULO E DESCRICAO -->
                <img class="" src="{{ url('admin/assets/images/background/previsao-do-tempo.jpg') }}" alt="Card image cap">
                <div class="card-img-overlay" style="height:110px;">
                    {{-- TITULO --}}
                    <h3 class="card-title text-white m-b-0 dl">{{ $s->nome }}</h3>
                    {{-- DESCRICAO  --}}
                    <small class="card-text text-white font-light"><br>{{ Str::limit($s->descricao, $limit =45, $end = '...') }}</small>
                </div>
                {{-- CORPO DO CARD --}}
                <div class="card-body weather-small">
                    {{-- NOME DO USUARIO --}}
                    <h5 class="card-title">Nome </h5>
                    {{-- DESCRICAO DETALHADA --}}
                    <p class="card-text">{{ Str::limit($s->descricao, $limit=100, $end = '...')}}</p>
                    {{-- HORARIO / DISTANCIA / PAGAMENTO --}}
                    <div class="row">
                        <div class="col-8 b-r align-self-center">
                            <div class="d-flex">
                                <div class="display-6 text-info"><i class="far fa-clock"></i></div>
                                    <div class="m-l-20">
                                        {{-- HORARIO --}}
                                        <h1 class="font-light text-info m-b-0">{{ $s->horaInicial->format('h:i') }}<sup>h</sup></h1>
                                        {{-- PAGAMENTO --}}
                                        <small>Pagamento {{ $s->horaFinal->diffInHours($s->horaInicial)}} h</small>
                                </div>
                            </div>
                        </div>
                        {{-- DISTANCIA --}}
                        <div class="col-4 text-center">
                            <h1 class="font-light m-b-0">13<sup>KM</sup></h1>
                            <small>Distância</small>
                        </div>
                    </div>
                </div>
                <a href="/servicos/{{ $s->id }}" class="btn btn-primary">Visualizar</a>
                </div>
        </div>
        <!-- Column -->
        </div>
        @endforeach
        <!-- CARREGAR MAIS  -->
        <div class="d-flex justify-content-start">
            <a href="#" class="btn btn-primary d-flex justify-content-center">Carregar Mais</a>
        </div>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
@endsection