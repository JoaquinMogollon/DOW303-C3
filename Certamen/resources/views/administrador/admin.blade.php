@extends('layouts.master')

@section('contenido-principal')

<div class="row">
    <div class="order-last order-lg-first">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>N° de la Propuesta</th>
                    <th>Alumno</th>
                    <th>Nombre Propuesta</th>
                    <th>Detalle de la Propuesta</th>
                    <th>Estado</th>
                    <th>Cambiar Estado</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="align-middle">1</td>
                    <td class="align-middle">Matias Castillo - Matias Arancibia</td>
                    <td class="align-middle">Gestor de cotizacion</td>
                    <td class="align-middle"><p>rada rada - koko koko - rada rada- koko koko ko</p></td>
                    <td class="text-center" style="width: 1rem">
                        <span data-bs-toggle="tooltip">
                            <button type="button" class="btn bt-sm btn-secondary pb-0">
                                <span class="material-icons">Esperando</span>
                            </button>
                        </span>
                    </td>
                    <td class="text-center" style="width: 1rem">
                        <button type="button" class="btn bt-sm btn-success pb-0">
                            <span class="material-icons">Aceptado</span>
                        </button>
                        <button type="button" class="btn bt-sm btn-danger pb-0">
                            <span class="material-icons">Rechazado</span>
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