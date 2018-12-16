<?php $head = "Supernatural"; ?>
@extends('layouts.base')
@section('content')
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
					<div class="section_title">Thread Terpopuler</div>
				</td>
				<td align="right">
					<a href="{{ route('buatPost') }}" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Buat Thread</a>
				</td>
			</tr>
        </table>
	</div>
	<div class="section_content">
		<div class="clearfix">

			<!-- Largest Card With Image -->
			<div class="card">
				<!-- <img class="card-img-top" src="{{ asset('res/images/post_1.jpg') }}" alt="https://unsplash.com/@cjtagupa"> -->
				<div class="card-body">
					<div class="card-title"><a href="post.html"><h4>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h4></a></div>
					<hr>
					<small><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span><span class="tag bg-secondary text-white">testasdasdasdsadas</span></small>
				</div>
			</div>
			<!-- Largest Card With Image -->
			<div class="card">
				<!-- <img class="card-img-top" src="{{ asset('res/images/post_1.jpg') }}" alt="https://unsplash.com/@cjtagupa"> -->
				<div class="card-body">
					<div class="card-title"><a href="post.html"><h4>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h4></a></div>
					<hr>
					<small><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span><span class="tag bg-secondary text-white">testasdasdasdsadas</span></small>
				</div>
			</div>
			<!-- Largest Card With Image -->
			<div class="card">
				<!-- <img class="card-img-top" src="{{ asset('res/images/post_1.jpg') }}" alt="https://unsplash.com/@cjtagupa"> -->
				<div class="card-body">
					<div class="card-title"><a href="post.html"><h4>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h4></a></div>
					<hr>
					<small><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span><span class="tag bg-secondary text-white">testasdasdasdsadas</span></small>
				</div>
			</div>
			<!-- Largest Card With Image -->
			<div class="card">
				<!-- <img class="card-img-top" src="{{ asset('res/images/post_1.jpg') }}" alt="https://unsplash.com/@cjtagupa"> -->
				<div class="card-body">
					<div class="card-title"><a href="post.html"><h4>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h4></a></div>
					<hr>
					<small><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span><span class="tag bg-secondary text-white">testasdasdasdsadas</span></small>
				</div>
			</div>
		</div>
	</div>
</div>
@stop