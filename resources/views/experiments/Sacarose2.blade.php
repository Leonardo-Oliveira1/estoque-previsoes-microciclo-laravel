@extends('smallLayouts.core')

@section('modal')
@include('smallLayouts.modals.itemContainer')
@endsection

@section('content')

@include('utils.confirmPopUp')

<div class="container-xxl flex-grow-1 container-p-y">
    <br>
    <center>
        <h1>Lavagem com PBS</h1>
        <br>
        <br>

        <div class="row">
            @if($Sacarose2)
                <h3 class="p-4" style="margin-top: -30px;">É possível produzir <b><span style="color: #30907B">{{ $Sacarose2 }} litros</span></b> com os recursos disponíveis.</h3>
                @else
                <h3 class="p-4" style="margin-top: -30px;">Não há recursos suficientes para realizar este experimento.</h3>
            @endif
            <h4 style="padding-left: 24px;"><b><span style="color: #30907B">Sacarose</span></b> em estoque: <b>{{ $Sacarose }}kg</b>.</h4>
        </div>
    </center>
</div>
@endsection
