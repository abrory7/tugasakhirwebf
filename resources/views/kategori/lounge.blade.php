<?php $head = "Lounge"; ?>
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
					<div class="section_title">Lounge</div>
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
			@foreach($thread as $tampil)
			<div class="card">
				<div class="card-body">
				<div class="card-title"><a href="{{ url('/thread/'.$tampil->id)}}"><h4>{{ $tampil->judul }}</h4></a></div>
					<hr>
					<small><a href="#">{{ $tampil->userPoster->username }}</a>&nbsp;-&nbsp;<span>{{ \Carbon\Carbon::parse($tampil->created_at)->format('d-m-Y H:i:s') }}</span>&nbsp;-&nbsp;<i class="fa fa-eye"></i> {{ $tampil->totalview }}</small>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
@stop