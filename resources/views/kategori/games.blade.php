<?php $head = "Games"; ?>
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
			@foreach($thread as $tampil)
			<div class="card">
				<div class="card-body">
				<div class="card-title"><a href="{{ url('/thread/'.$tampil->id)}}"><h4>{{ $tampil->judul }}</h4></a></div>
					<hr>
				<small><a href="#">{{ $tampil->userPoster->username }}</a>&nbsp;-&nbsp;<span>{{ $tampil->created_at }}</span></small>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
@stop