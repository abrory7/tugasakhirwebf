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
                <img src="{{ asset('res/images/post_2.jpg')}}" class="class-img-top">
                <div class="card-body">
                    <div class="card-title card-title-small"><a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</a></div>
                    <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
                </div>
            </div>
            <!-- Small Card With Image -->
            <div class="card card_small_with_image grid-item" style="margin: 7px;">
                <img src="{{ asset('res/images/post_2.jpg')}}" class="class-img-top">
                <div class="card-body">
                    <div class="card-title card-title-small"><a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</a></div>
                    <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
                </div>
            </div>
            <!-- Small Card With Image -->
            <div class="card card_small_with_image grid-item" style="margin: 7px;">
                <img src="{{ asset('res/images/post_2.jpg')}}" class="class-img-top">
                <div class="card-body">
                    <div class="card-title card-title-small"><a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</a></div>
                    <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
                </div>
            </div>
            <!-- Small Card With Image -->
            <div class="card card_small_with_image grid-item" style="margin: 7px;">
                <img src="{{ asset('res/images/post_2.jpg')}}" class="class-img-top">
                <div class="card-body">
                    <div class="card-title card-title-small"><a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</a></div>
                    <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
                </div>
            </div>
            <!-- Small Card With Image -->
            <div class="card card_small_with_image grid-item" style="margin: 7px;">
                <img src="{{ asset('res/images/post_2.jpg')}}" class="class-img-top">
                <div class="card-body">
                    <div class="card-title card-title-small"><a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</a></div>
                    <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
                </div>
            </div>
            <!-- Small Card With Image -->
            <div class="card card_small_with_image grid-item" style="margin: 7px;">
                <img src="{{ asset('res/images/post_2.jpg')}}" class="class-img-top">
                <div class="card-body">
                    <div class="card-title card-title-small"><a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</a></div>
                    <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
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