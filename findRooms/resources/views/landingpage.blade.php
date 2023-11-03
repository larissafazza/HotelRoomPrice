@extends('layouts.app')

@section('content')


<div id="shows" class="agenda">
    <h1 class="title">hotéis disponíveis nos dias {{ aqui}}</h1> 
    <hr class="divisoria-white">
    <div class="eventos">
        <div class="evento">
            <div class="data">
                <div class="data-content">
                    <h2>28</h2>
                    <p>outubro</p>
                </div>
            </div>
            <div class="info">
                <div class="detail-info">
                    <h2>OUTRO EU VOZ E VIOLÃO NO BONA</h2>
                    <p>Sábado, às 21h</p>
                    <p id="local"><i class="fa-solid fa-location-dot"></i>SÃO PAULO | BONA CASA DE MÚSICA</p>
                </div>
                <a href="https://www.eventim.com.br/event/outroeu-voz-e-violao-no-bona-bona-casa-de-musica-17524274/?affiliate=DEZ"
                    class="button" target="_blank">Ingressos</a>
            </div>
        </div>
        <div class="evento">
            <div class="data">
                <div class="data-content">
                    <h2>28</h2>
                    <p>outubro</p>
                </div>
            </div>
            <div class="info">
                <div class="detail-info">
                    <h2>OUTROEU VOZ E VIOLÃO NO BONA - SESSÃO EXTRA!</h2>
                    <p>Sábado, às 18h</p>
                    <p id="local"><i class="fa-solid fa-location-dot"></i>SÃO PAULO | BONA CASA DE MÚSICA</p>
                </div>
                <a href="https://www.eventim.com.br/event/outroeu-voz-e-violao-no-bona-bona-casa-de-musica-17587613/?affiliate=DEZ"
                    class="button" target="_blank">Ingressos</a>
            </div>
        </div>
    </div>
</div>

@endsection