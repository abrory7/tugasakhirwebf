<?php $head = "Edit Thread"; ?>
@extends('layouts.base')
@section('content')
<div class="container" style="margin-top: 10%">
    <div class="section_panel d-flex flex-row align-items-center justify-content-start mb-4">
        <div class="section_title">Edit Thread</div>
    </div>
    <div class="section_content">
    <form action="{{ route('editThread') }}" method="POST">
            @csrf
            @method('PUT')
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <input type="hidden" value="{{ $isitrit->id }}" name="idpost" id="idpost">
            <div class="form-group">
                <label for="judul">Judul:</label>
                <input type="text" class="form-control" id="judul" name="judul" value="{{ $isitrit->judul }}">
            </div> 
            
            <div class="form-group">
                <label for="isi">Isi:</label>
                <textarea class="form-control" id="isi" name="isi">
                    {!! $isitrit->isi !!}
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