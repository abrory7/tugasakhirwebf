<?php $head = "kategori"; ?>
@extends('layouts.base')
@section('content')
<style>
.boxs {
  transition: box-shadow .5s;
}
.boxs:hover {
  box-shadow: 0 0 11px rgba(33,33,33,.2); 
}
</style>
<div class="container" style="margin-top: 7%">
	<div class="section_panel d-flex flex-row align-items-center justify-content-start">
		<div class="section_title">Semua Kategori</div>
	</div>
	<div class="section_content">
		<div class="row clearfix">
            <!-- Small Card With Image -->
            <a href="{{ route('supernatural') }}">
                <div class="card card_small_with_image grid-item font-weight-bold boxs" style="margin: 7px;">
                    <img src="{{ asset('res/images/supr.png')}}" style="width: 263px; height: 184px;">
                    <div class="card-body">
                        <div class="card-title card-title-small text-center">SUPERNATURAL</div>
                    </div>
                </div>
            </a>
            <!-- Small Card With Image -->
            <a href="{{ route('politik') }}">
                <div class="card card_small_with_image grid-item font-weight-bold boxs" style="margin: 7px;">
                    <img src="{{ asset('res/images/politik.jpg')}}" style="width: 263px; height: 184px;">
                    <div class="card-body">
                        <div class="card-title card-title-small text-center">POLITIK</div>
                    </div>
                </div>
            </a>
            <!-- Small Card With Image -->
            <a href="{{ route('entertainment') }}">
                <div class="card card_small_with_image grid-item font-weight-bold boxs" style="margin: 7px;">
                    <img src="{{ asset('res/images/entertain.jpg')}}" style="width: 263px; height: 184px;">
                    <div class="card-body">
                        <div class="card-title card-title-small text-center">ENTERTAINMENT</div>
                    </div>
                </div>
            </a>
            <!-- Small Card With Image -->
            <a href="{{ route('animals') }}">
                <div class="card card_small_with_image grid-item font-weight-bold boxs" style="margin: 7px;">
                    <img src="{{ asset('res/images/pet.png')}}" style="width: 263px; height: 184px;">
                    <div class="card-body">
                        <div class="card-title card-title-small text-center">ANIMALS & PETS</div>
                    </div>
                </div>
            </a>
            <!-- Small Card With Image -->
            <a href="{{ route('lounge') }}">
                <div class="card card_small_with_image grid-item font-weight-bold boxs" style="margin: 7px;">
                    <img src="{{ asset('res/images/lounge.jpg')}}" style="width: 263px; height: 184px;">
                    <div class="card-body">
                        <div class="card-title card-title-small text-center">LOUNGE</div>
                    </div>
                </div>
            </a>
            <!-- Small Card With Image -->
            <a href="{{ route('games') }}">
                <div class="card card_small_with_image grid-item font-weight-bold boxs" style="margin: 7px;">
                    <img src="{{ asset('res/images/game.jpg')}}" style="width: 263px; height: 184px;">
                    <div class="card-body">
                        <div class="card-title card-title-small text-center">GAMES</div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
@stop
@section('script')
<script>
    $(document).ready(function()
    {
        $('#content-container').removeClass('col-lg-9');
        $('#kategori').addClass('active');
    });
</script>
@stop