<?php $head = "@$profil->username"; ?>
<?php use Carbon\Carbon;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ $head }} | ULM FORUM</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Demo project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('res/styles/bootstrap4/bootstrap.min.css') }}">
    <link href="{{ asset('res/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('res/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('res/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('res/plugins/OwlCarousel2-2.2.1/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('res/plugins/jquery.mb.YTPlayer-3.1.12/jquery.mb.YTPlayer.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('res/styles/main_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('res/styles/responsive.css') }}">
    <link rel="shortcut icon" type="image/jpg" href="{{ asset('res/images/favicon.jpg') }}"/>
    <script src="{{ asset('res/ckeditor/ckeditor.js') }}" ></script>
</head>
<body>

    <div class="super_container">

        <!-- Header -->
        
        @include('layouts.header')
        
        <!-- Home -->

        
        
        <!-- Page Content -->

        <div class="page_content">
            <div class="container">
                <div id="main-content" class="container">
                    <!-- Main Content -->
                    <div id="content-container">
                        <div class="main_content">
                            <div class="container" style="margin-top: 10%">
                                <div class="section_panel d-flex flex-row align-items-center justify-content-start mb-4">
                                    <table width="100%" style="border: none;">
                                        <tr>
                                            <td>
                                                <div class="section_title">{{ $profil->nama }} (&commat;{{ $profil->username }})</div>
                                            </td>
                                            <td align="right">
                                                @guest
                                                @else
                                                    @if(Auth::user()->id != $profil->id)
                                                    @else
                                                        <a href="{{ url('/profil/'.$profil->id.'/edit') }}" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Profil</a>
                                                    @endif
                                                    @if(Auth::user()->userlevel_id == '1' && $profil->userlevel_id != '2' && $profil->id != '1')
                                                        <form id="naik-jabatan" action="{{ route('naikjabatan') }}" method="POST" style="display: INLINE;">
                                                            @csrf
                                                            @method('PUT')
                                                            <input type="hidden" id="id" name="id" value="{{ $profil->id }}">
                                                            <input type="hidden" id="newuserlevel" name="newuserlevel" value="2">
                                                            <button type="submit" class="btn btn-success" onclick="return confirm('Apakah anda yakin ingin membuat user ini menjadi Moderator?')">
                                                                <i class="fa fa-thumbs-up"></i> Pilih Menjadi Moderator
                                                            </button>
                                                        </form>
                                                    @elseif($profil->userlevel_id == '2')
                                                        <form id="turun-jabatan" action="{{ route('turunjabatan') }}" method="POST" style="display: inline;">
                                                            @csrf
                                                            @method('PUT')
                                                            <input type="hidden" id="id" name="id" value="{{ $profil->id }}">
                                                            <input type="hidden" id="newuserlevel" name="newuserlevel" value="3">
                                                            <button type="submit" class="btn btn-warning" onclick="return confirm('Apakah anda yakin ingin menghilangkan status Moderator user ini?')">
                                                                <i class="fa fa-times"></i> Hilangkan Status Moderator
                                                            </button>
                                                        </form>
                                                    @endif
                                                @endif
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="section_content card">
                                    <img src="{{ asset('res/images/profil/'.$profil->foto) }}" width="204.8px" height="204.8px"
                                    style="padding: 0 0 1% 1%; border: 0; border-radius: 5px;">
                                    <table class="table">
                                        <col width="20%"/>
                                        <col width="80%"/>
                                        <tr>
                                            <td>
                                                <h4>Jenis Kelamin:</h4>
                                            </td>
                                            <td>
                                                <h4>{{ $profil->jeniskelamin }}</h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h4>Alamat:</h4>
                                            </td>
                                            <td>
                                                <h4>{{ $profil->alamat }}</h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h4>Biografi:</h4>
                                            </td>
                                            <td>
                                                <h6>{!! $profil->bio !!}</h6>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="footer" style="margin-top: 10%">
            <div class="container">
                <div class="row row-lg-eq-height">
                    <div class="col-lg-12 order-lg-1 order-2">
                        <div class="footer_content">
                            <div class="footer_logo"><a href="{{route('index') }}">ULM Forum</a></div>
                            <div class="footer_social">
                                <ul>
                                    <li class="footer_social_facebook"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li class="footer_social_twitter"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li class="footer_social_pinterest"><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    <li class="footer_social_vimeo"><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                                    <li class="footer_social_instagram"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li class="footer_social_google"><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    
    @include('layouts.script')
</body>
</html>