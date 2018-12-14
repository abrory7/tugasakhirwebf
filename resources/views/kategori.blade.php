<?php $head = "kategori"; ?>
@extends('layouts.base')
@section('content')
<div class="container" style="margin-top: 7%">
	<div class="section_panel d-flex flex-row align-items-center justify-content-start">
		<div class="section_title">Semua Kategori</div>
	</div>
	<div class="section_content">
		<div class="row clearfix">
            <!-- Small Card With Image -->
            <div class="card card_small_with_image grid-item" style="margin: 7px;">
                <img src="{{ asset('res/images/supr.png')}}" style="width: 263px; height: 184px;">
                <div class="card-body">
                    <div class="card-title card-title-small text-center"><a href="post.html">SUPERNATURAL</a></div>
                </div>
            </div>
            <!-- Small Card With Image -->
            <div class="card card_small_with_image grid-item" style="margin: 7px;">
                <img src="{{ asset('res/images/post_2.jpg')}}" class="class-img-top">
                <div class="card-body">
                    <div class="card-title card-title-small text-center"><a href="post.html">POLITIK</a></div>
                </div>
            </div>
            <!-- Small Card With Image -->
            <div class="card card_small_with_image grid-item" style="margin: 7px;">
                <img src="{{ asset('res/images/post_2.jpg')}}" class="class-img-top">
                <div class="card-body">
                    <div class="card-title card-title-small text-center"><a href="post.html">ENTERTAINMENT</a></div>
                </div>
            </div>
            <!-- Small Card With Image -->
            <div class="card card_small_with_image grid-item" style="margin: 7px;">
                <img src="{{ asset('res/images/post_2.jpg')}}" class="class-img-top">
                <div class="card-body">
                    <div class="card-title card-title-small text-center"><a href="post.html">ANIMAL & PET</a></div>
                </div>
            </div>
            <!-- Small Card With Image -->
            <div class="card card_small_with_image grid-item" style="margin: 7px;">
                <img src="{{ asset('res/images/post_2.jpg')}}" class="class-img-top">
                <div class="card-body">
                    <div class="card-title card-title-small text-center"><a href="post.html">LOUNGE</a></div>
                </div>
            </div>
            <!-- Small Card With Image -->
            <div class="card card_small_with_image grid-item" style="margin: 7px;">
                <img src="{{ asset('res/images/post_2.jpg')}}" class="class-img-top">
                <div class="card-body">
                    <div class="card-title card-title-small text-center"><a href="post.html">GAMES</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
@section('script')
<script>
    $(document).ready(function()
    {
        $('#content-container').removeClass('col-lg-9');
    });
</script>
@stop