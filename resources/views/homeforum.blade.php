<?php $head = "Halaman Utama"; ?>
@extends('layouts.base')
@section('content')
<!-- Blog Section - Don't Miss -->
<style>
	.tag{
		border: 0px;
		border-radius: 14px;
		text-align: center;
		width: auto;
		padding: 1px 8px 1px 8px;
	}
</style>
<div class="blog_section">
	<div class="section_panel d-flex flex-row align-items-center justify-content-start">
		<div class="section_title">Thread Terpopuler</div>
	</div>
	<div class="section_content">
		<div class="clearfix">

			<!-- Largest Card With Image -->
			@foreach($hotThread as $hot)
			<div class="card">
				<!-- <img class="card-img-top" src="{{ asset('res/images/post_1.jpg') }}" alt="https://unsplash.com/@cjtagupa"> -->
				<div class="card-body">
				<div class="card-title"><a href="{{ url('/thread/'.$hot->id) }}"><h4>{{ $hot->judul }}</h4></a></div>
					<hr>
				<small><a href="#">{{ $hot->userPoster->username }}</a><span>{{ $hot->created_at }}</span><span class="tag bg-secondary text-white">{{ $hot->threadKategori->namakategori }}</span></small>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
@stop
@section('script')
<script>
    $(document).ready(function()
    {
        $('#home').addClass('active');
    });
</script>
@stop