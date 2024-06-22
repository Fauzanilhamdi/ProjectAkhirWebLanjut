@extends('layout.master')

@section('title', 'jadwal hadir')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Jadwal Hadir</h1>
            </div>

            <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <h4>Jadwal Hadir</h4>
                        <form action="/create" method="POST">
                            <div class="row">
                                <div class="col-sm-6" style="text-align: right">
                                    <a href="kehadiran/create" class="btn btn-warning btn-sm">Tambah Mahasiswa</a>
                                </div>

                            </div>

                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-stripeed">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NPM</th>
                                <th>NAMA</th>
                                <th>MATA KULIAH</th>
                                <th>TANGGAL</th>
                                <th>HADIR/TIDAK HADIR</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>121212</td>
                                <td>JOKO</td>
                                <td>KRIPTO</td>
                                <td>10-05-2001</td>
                                <td>TIDAK MASUK</td>
                                <td>
                                    <button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
                                    <button class="btn btn-sm btn-warning"><i class="fa fa-trash"></i></button>

                                </td>
                                </form>

                            </tr>
                        </tbody>
                    </table>


                </div>
            </div>
    </div>
    </div>
    </section>



@endsection
