@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>EDIT DATA GOLONGAN</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('/golongan/' .$row->gol_id)}}" method="post">
                    @method('PATCH')
                    @csrf
                    <div class="mb-3">
                        <label for="">KODE</label>
                        <input type="text" name="gol_kode" class="form-control" value="{{$row->gol_kode}}">
                    </div>
                    <div class="mb-3">
                        <label for="">NAMA</label>
                        <input type="text" name="gol_nama" class="form-control" value="{{$row->gol_nama}}">
                    </div>
                    <div class="mb-3">
                        <input class="btn btn-info" type="submit" name="" id="" value="UPDATE">
                        <input type="button" class="btn btn-danger" value="BATAL" onclick="history.go(-1);" >
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection