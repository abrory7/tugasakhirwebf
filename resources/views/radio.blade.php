<?php $head = "Radio"; ?>
@extends('layouts.base')
@section('content')
<div class="container" style="margin-top: 10%">
    <div class="section_panel d-flex flex-row align-items-center justify-content-start mb-4">
		<div class="section_title">Streaming Radio Indonesia</div>
	</div>
    <div class="section-content">
        <h4>Banjarmasin</h4>
        <iframe src="https://tunein.com/embed/player/s190145/" style="width:100%; height:100px;" scrolling="no" frameborder="no"></iframe>
        <iframe src="https://tunein.com/embed/player/s134104/" style="width:100%; height:100px;" scrolling="no" frameborder="no"></iframe>
        <iframe src="https://tunein.com/embed/player/s189811/" style="width:100%; height:100px;" scrolling="no" frameborder="no"></iframe>
        <h4>Samarinda</h4>
        <iframe src="https://tunein.com/embed/player/s268235/" style="width:100%; height:100px;" scrolling="no" frameborder="no"></iframe>
        <iframe src="https://tunein.com/embed/player/s183838/" style="width:100%; height:100px;" scrolling="no" frameborder="no"></iframe>
        <h4>Pontianak</h4>
        <iframe src="https://tunein.com/embed/player/s203054/" style="width:100%; height:100px;" scrolling="no" frameborder="no"></iframe>
        <iframe src="https://tunein.com/embed/player/s121298/" style="width:100%; height:100px;" scrolling="no" frameborder="no"></iframe>
    </div>
</div>
@stop
@section('script')
<script>
    $(document).ready(function()
    {
        $('#radio').addClass('active');
    });
</script>
@stop