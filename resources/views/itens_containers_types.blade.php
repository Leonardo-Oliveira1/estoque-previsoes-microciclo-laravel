@extends('smallLayouts.core')

@section('modal')
@include('smallLayouts.modals.itemContainer')
@endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <br>
    <center>
        <h1>Tipos de recipientes</h1>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
            + Registrar novo recipiente
        </button>
    </center>
    <br>
    <br>

    <div class="row">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Ações</th>
                        <th>Tipo de recipiente</th>
                        <th>Adicionado por</th>
                        <th>Data de registro</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($containers as $container)
                    <tr>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>Deletar</a>
                                </div>
                            </div>
                        </td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i>{{ $container->name }}</td>
                        <td>{{ $container->add_by }}</td>
                        <td>{{ date('d/m/Y', strtotime($container->created_at)) }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection