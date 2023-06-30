@extends('layouts.master')

@section('contenido-principal')

<div class="row">
    <div class="order-last order-lg-first">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>N° de Imagen</th>
                    <th>Titulo</th>
                    <th>Vista previa de la Imagen</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="align-middle">1</td>
                    <td class="align-middle">1era imagen web</td>
                    <td class="align-middle">N/A</td>
                    <td class="text-center" style="width: 1rem">
                        <span data-bs-toggle="tooltip">
                            <button type="button" class="btn bt-sm btn-secondary pb-0">
                                <span class="material-icons">Publica</span>
                            </button>
                        </span>
                    </td>
                    <td class="text-center" style="width: 1rem">
                        <button type="button" class="btn bt-sm btn-danger pb-0">
                            <span class="material-icons">Eliminar</span>
                        </button>
                        <button type="button" class="btn bt-sm btn-warning pb-0">
                            <span class="material-icons">Modificar</span>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection