<?php $head = "Buat Thread Baru"; ?>
@extends('layouts.base')
@section('content')
<div class="container" style="margin-top: 10%">
    <div class="section_panel d-flex flex-row align-items-center justify-content-start mb-4">
        <div class="section_title">Buat Thread Baru</div>
    </div>
    <div class="section_content">
    <form action="{{ route('newThread') }}" method="POST">
            {{ csrf_field() }}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="form-group">
                <label for="judul">Judul:</label>
                <input type="text" class="form-control" id="judul" name="judul">
            </div>
            
            <div class="form-group">
                <label for="cat">Kategori:</label>
                <select class="form-control" id="cat" name="cat">
                    @foreach($kategori as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->namakategori }}</option>
                    @endforeach
                </select>
            </div>    
            
            <div class="form-group">
                <label for="isi">Isi:</label>
                <textarea class="form-control" id="isi" name="isi">
                </textarea>
            </div>
            <button type="submit" class="btn btn-success">SUBMIT</button>             
        </form>
    </div>
</div>
@stop
@section('script')
<script>
    $(document).ready(function()
    {
        $('#content-container').removeClass('col-lg-9');
        $('#main-content').removeClass('row row-lg-eq-height').adClass('container');
    });
    CKEDITOR.replace('isi');
</script>
@stop