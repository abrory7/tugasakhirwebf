<?php $head = "Tentang Forum"; ?>
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
<div class="container" style="margin-top: 80px">
	<div class="section_panel d-flex flex-row align-items-center justify-content-start">
		<div class="section_title">About</div>
	</div>
	<div class="section_content">
		<div class="row clearfix card p-4">
            <h1>Tentang Forum ini</h1>
            <h4>
                Saya Taufiq Abrory, mengucapkan terimakasih kepada teman-teman yang telah membantu saya membangun projek situs ini.<br>
                Situs forum ini dibuat untuk memenuhi tugas akhir mata kuliah Web Framework.<br>
                Tentu saja situs forum ini masih jauh dari kata sempurna, maka dari itu saya mengharapkan kritik maupun saran kepada pengunjung tentang situs ini.
            </h4>
        </div>
    </div>
</div>
@stop
@section('script')
<script>
    $(document).ready(function()
    {
        $('#content-container').removeClass('col-lg-9');
        $('#about').addClass('active');
    });
</script>
@stop