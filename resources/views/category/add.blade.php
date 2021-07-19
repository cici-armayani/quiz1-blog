@extends('layouts.app') 

 @section('content') 
 
    <div class="container"> 
 
        <h3>Tambah Data Category</h3>  
        <form action="{{ url('/category') }}"> 
            @csrf 
            <div class="form-group">
                <label for="">ID</label>
                <input type="text" name="id" class="form-control">
            </div>
            <div class="form-group">
                <label for="">NAMA</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="">TEXT</label>
                <textarea name="text" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="SIMPAN" class="btn btn-primary">
            </div>
    </div> 

 @endsection 