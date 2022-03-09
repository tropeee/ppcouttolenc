@extends('layout.app_with_title')

@section('section_title')
Bienvenido
@endsection

@section('app_content')
<div class="col-12 text-center">
    <h1 class="text-center">Mis Solicitudes</h1>
    <div class="card">
        <div class="card-body">
        @if (count($data) > 0)
        <table id="aplicaciones-table" class="table dataTable">
            <thead>
                <tr>
                    <th>
                        <div class="table-header">
                            <span class="column-title">Ticket</span>
                        </div>
                    </th>
                    <th>
                        <div class="table-header">
                            <span class="column-title">Servicio</span>
                        </div>
                    </th>
                    <th>
                        <div class="table-header">
                            <span class="column-title">Recibido</span>
                        </div>
                    </th>
                    <th>
                        <div class="table-header">
                            <span class="column-title">Status</span>
                        </div>
                    </th>
                </tr>
            </thead>

            <tbody>
                @foreach ($data as $d)
                <tr>
                    @php
                    $p = $d['package'];
                    @endphp
                    <td>
                        TK-{{ str_pad($d['id'],6,'0',STR_PAD_LEFT) }}
                    </td>
                    <td>
                        {{ $d['solicitud'] }}
                    </td>
                    <td>
                        {{ substr($d['created_at'],0,10) }}
                    </td>
                    <td>
                        {{ $d['status'] }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
            <p>Por el momento no hay solicitudes</p>
        @endif
        </div>
    </div>
</div>
    
@endsection