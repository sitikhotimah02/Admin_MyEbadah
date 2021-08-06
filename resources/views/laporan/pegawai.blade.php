@extends('layout.index')

@section('title', '')

@section('content')

<nav class="navbar navbar-expand-sm bg-light">
  <div class="acc2">
  <ul class="navbar-nav">
    <li class="nav-item li2" style="background-color:#B22222;">
      <a style="color:#fff; display: inline-block; font-size: 18px;" class="nav-link" href="/mahasiswa">Mahasiswa</a>
    </li>
    <li class="nav-item li2" style="background-color:#B22222;">
      <a style="color:#fff; display: inline-block; font-size: 18px;" class="nav-link" href="/pegawai">Pegawai</a>
    </li>
    <li class="nav-item li2" style="background-color:#B22222;">
      <a style="color:#fff; display: inline-block; font-size: 18px;" class="nav-link" href="/umum">Umum</a>
    </li>
    <img class ="acc "src="{{asset('assets/images/accessories-2.png')}}">
  </ul>
</div>
</nav>

<div>
  <table class="table">
    <thead class="thead-white" style="background-color:#C0C0C0;">
      <tr>
            <th scope="col">Nik</th>
            <th scope="col">Nama</th>
            <th scope="col">Gender</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Tanggal Gabung</th>
            <th scope="co1">Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach($pegawai as $peg)
        <tr>
            <td>{{$peg->Id_Pegawai}}</td>
            <td>{{$peg->Nama_Lengkap}}</td>
            <td>{{$peg->Gender_Code}}</td>
            <td>{{$peg->Tanggal_Lahir}}</td>
            <td>{{$peg->Created_Date}}</td>
            <td>
                <a href="/pegawaihistory/{{$peg->Student_Id}}" class="btn btn-success btn-sm">History</a>
            </td>
        </tr>
      @endforeach
    </tbody>           
  </table>
</div>

@endsection

