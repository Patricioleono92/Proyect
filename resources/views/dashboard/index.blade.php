@extends('layout.dashboard')
@section('title', 'Panel Inicial')

@section('contenido_base')

<div class="overflow-x-auto">
    <table class="table">
        <thead>
            <tr>
                <th>Ubicacion</th>
                <th>Nombre del Equipo</th>
                <th>N° Serie</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Sala Tic</td>
                <td>Tecnologia de la Informacion</td>
                <td>2450003</td>
                <td>
                    <div class="badge badge-success badge-xs"></div>
                </td>
            </tr>
            <tr>
                <td>Sala Tic</td>
                <td>Tecnologia de la Informacion</td>
                <td>2450003</td>
                <td>
                    <div class="badge badge-error badge-xs"></div>
                </td>
            </tr>
            <tr>
                <td>Sala Tic</td>
                <td>Tecnologia de la Informacion</td>
                <td>2450003</td>
                <td>
                    <div class="badge badge-xs bg-green-700"></div>
                    <div class="badge badge-warning badge-xs"></div>
                    <div class="badge badge-error badge-xs"></div>
                </td>
            </tr>
            <tr>
                <td>Sala Tic</td>
                <td>Tecnologia de la Informacion</td>
                <td>2450003</td>
                <td>
                    <div class="badge badge-success badge-xs"></div>
                    <div class="badge badge-warning badge-xs"></div>
                    <div class="badge badge-xs bg-red-700"></div>
                </td>
            </tr>
            <tr>
                <td>Sala Tic</td>
                <td>Tecnologia de la Informacion</td>
                <td>2450003</td>
                <td>
                    <div class="badge badge-xs bg-green-700"></div>
                    <div class="badge badge-warning badge-xs"></div>
                    <div class="badge badge-error badge-xs"></div>
                </td>
            </tr>
            <tr>
                <td>Sala Tic</td>
                <td>Tecnologia de la Informacion</td>
                <td>2450003</td>
                <td>
                    <div class="badge badge-xs bg-green-700"></div>
                    <div class="badge badge-warning badge-xs"></div>
                    <div class="badge badge-error badge-xs"></div>
                </td>
            </tr>
        </tbody>
    </table>
</div>

@endsection