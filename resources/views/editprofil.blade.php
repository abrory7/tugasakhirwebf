<?php $head = "Edit Profil"; ?>
@extends('layouts.base')
@section('content')
<div class="container" style="margin-top: 10%">
    <div class="section_panel d-flex flex-row align-items-center justify-content-start mb-4">
        <div class="section_title">Edit Profil</div>
    </div>
    <div class="section_content card p-4">
    <form action="{{ route('updateProfil') }}" method="POST" enctype="multipart/form-data">
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
            <div class="form-group">
                <label for="foto">Foto Profil:</label>
                <input type="file" class="form-control" id="foto" name="foto" accept="image/*">
                Foto sebelumnya:
                <br>
                <img src="{{ asset('res/images/profil/'.$editprofil->foto) }}"
                width="100px" height="100px">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $editprofil->alamat }}">
            </div>
            <div class="form-group">
                <label for="bio">Biografi:</label>
                <textarea class="form-control" id="bio" name="bio">{{ $editprofil->bio }}</textarea>
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
    CKEDITOR.replace('bio');
</script>
@stop