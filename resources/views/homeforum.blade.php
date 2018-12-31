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
		<table width="100%" style="border: none;">
			<tr>
				<td>
					<div class="section_title">Thread Terbaru</div>
				</td>
				<td align="right">
					@if(Auth::check())
					<a href="{{ route('buatPost') }}" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Buat Thread</a>
					@endif
				</td>
			</tr>
		</table>
	</div>
	<div class="section_content">
		<div class="clearfix">

			<!-- Largest Card With Image -->
			@foreach($latestThread as $latest)
			<div class="card">
				<!-- <img class="card-img-top" src="{{ asset('res/images/post_1.jpg') }}" alt="https://unsplash.com/@cjtagupa"> -->
				<div class="card-body">
				<div class="card-title"><a href="{{ url('/thread/'.$latest->id) }}"><h4>{{ $latest->judul }}</h4></a></div>
					<hr>
				<small>
					<a href="{{ url('/profil/'.$latest->userPoster->id) }}">{{ $latest->userPoster->username }}</a>
					&nbsp;<span>{{ $latest->created_at }}</span>
					&nbsp;<span><i class="fa fa-eye"></i> {{ $latest->totalview }}</span>
					&nbsp;<span class="tag bg-secondary text-white">{{ $latest->threadKategori->namakategori }}</span>
				</small>
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