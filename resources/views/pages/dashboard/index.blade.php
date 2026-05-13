@extends('layouts.dashboard')
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
                    <x-ui.badge color="success" size="md"></x-ui.badge>
                </td>
            </tr>
            <tr>
                <td>Sala Tic</td>
                <td>Tecnologia de la Informacion</td>
                <td>2450003</td>
                <td>
                    <x-ui.badge color="error" size="md"></x-ui.badge>
                </td>
            </tr>
        </tbody>
    </table>
</div>

@endsection