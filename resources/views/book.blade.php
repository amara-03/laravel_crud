@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="container">
    <div class="justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Pengelolaan Buku') }}</div>
                <div class="card-body">
                    <table id="table-data" class="table table-borderer">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>JUDUL</th>
                                <th>PENULIS</th>
                                <th>TAHUN</th>
                                <th>PENERBIT</th>
                                <th>COVER</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        @php $no = 1 @endphp
                        @foreach ($book as $book)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $book->judul }}</td>
                            <td>{{ $book->penulis }}</td>
                            <td>{{ $book->tahun }}</td>
                            <td>{{ $book->penerbit }}</td>
                            <td>@if($book->cover !== null)
                            <img src="{{ asset('storage/cover_buku/'.$book->cover") }}" width="100px"/>
                            @else
                            [Gambar tidak tersedia]
                            @endif
                            </td>
                            <td></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

    <div class="container">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">{{ _('Dashboard') }}</div>

                <div class="card-body">
                    @if($user->roles_id == 1)
                        Anda login sebagai admin
                    @else
                        Anda login sebagai user
                    @endif
                </div>
            </div>
        </div>
    </div>
@stop

@section('footer')

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
