<?php $head = "Buat Thread Baru"; ?>
@extends('layouts.base')
@section('content')
<div class="container" style="margin-top: 10%">
    <div class="section_panel d-flex flex-row align-items-center justify-content-start mb-4">
        <div class="section_title">Buat Thread Baru</div>
    </div>
    <div class="section_content">
    <form action="{{ route('updateReply') }}" method="POST">
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
            <input type="hidden" id="idThread" name="idThread" value="{{ $threadID->id }}">
            <input type="hidden" id="idReply" name="idReply" value="{{ $reply->id }}">
            <div class="form-group">
                <label for="balasan">Isi Reply:</label>
                <textarea class="form-control" id="balasan" name="balasan">
                    {!! $reply->komentar !!}
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
    CKEDITOR.replace('balasan');
</script>
@stop