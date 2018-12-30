<?php $head = "Buat Thread Baru"; ?>
@extends('layouts.base')
@section('content')
<div class="container" style="margin-top: 10%">
    <div class="section_panel d-flex flex-row align-items-center justify-content-start mb-4">
        <table width="100%" style="border: none;">
            <tr>
                <td>
                    <div class="section_title">{{ $profil->nama }} (&commat;{{ $profil->username }})</div>
                </td>
                <td align="right">
                    @guest
                    @else
                    <a href="{{ url('/profil/'.$profil->id.'/edit') }}" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Profil</a>
                    @endif
                </td>
            </tr>
        </table>
    </div>
    <div class="section_content card">
        <img src="{{ asset('res/images/profil/'.$profil->foto) }}" width="204.8px" height="204.8px"
        style="padding-bottom: 1%; border: 0; border-radius: 5px;">
        <table class="table">
            <col width="20%"/>
            <col width="80%"/>
            <tr>
                <td>
                    <h4>Jenis Kelamin:</h4>
                </td>
                <td>
                    <h4>{{ $profil->jeniskelamin }}</h4>
                </td>
            </tr>
            <tr>
                <td>
                    <h4>Alamat:</h4>
                </td>
                <td>
                    <h4>{{ $profil->alamat }}</h4>
                </td>
            </tr>
            <tr>
                <td>
                    <h4>Biografi:</h4>
                </td>
                <td>
                    <h6>{{ $profil->bio }}</h6>
                </td>
            </tr>
        </table>
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