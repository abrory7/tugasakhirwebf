<?php use Carbon\Carbon;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ $thread->judul }} | ULM Forum</title>
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
                <div id="main-content" class="row-lg-eq-height">
                    <!-- Main Content -->
                    <div id="content-container">
                        <div class="section_panel d-flex flex-row align-items-center justify-content-start" style="margin-top: 5%">
                            <table width="100%" style="border: none;">
                                <tr>
                                    <td>
                                    <div class="section_title">
                                        <i class="fa fa-home"></i> <a href="{{ route('index') }}">Home</a> &gt;&nbsp;
                                                                    {{ $thread->threadKategori->namakategori }} &gt;&nbsp;
                                                                    {{ $thread->judul }}
                                    </div>
                                    </td>
                                    <td align="right">
                                        @guest
                                        @else
                                            @if (Auth::user()->userlevel_id == '1' || Auth::user()->userlevel_id == '2' || Auth::user()->id == $thread->userPoster->id)
                                                <form action="{{ route('hapusThread', $thread->id) }}" method="post" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus thread ini?')">
                                                        <i class="fa fa-trash"></i> Hapus Thread</button>
                                                </form>
                                            @else
                                            @endif
                                            <a href="{{ url('/thread/'.$thread->id.'/reply') }}" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Balas Thread</a>
                                            @if (Auth::user()->userlevel_id == '1' || Auth::user()->userlevel_id == '2' || Auth::user()->id == $thread->userPoster->id)
                                                <a href="{{ url('/thread/'.$thread->id.'/edit') }}" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i> Edit Thread</a>
                                            @else
                                            @endif
                                        @endif
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <?php $head = $thread->judul; ?><!-- Title tab thread -->
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link" data-toggle="collapse" href="#onePost">
                                        #1 Thread Starter - {{ \Carbon\Carbon::parse($thread->created_at)->format('j F Y H:i:s') }}
                                    </a>
                                </div>
                                <div id="onePost" class="collapse show" data-parent="#accordion">
                                    <div class="card-body" style="padding: 0;">
                                            <div class="card" style="margin-top: 0; border: 0; border-radius: 7px; background-color: #ffffff; color: black;">
                                                <table width="auto">
                                                    <tbody>
                                                        <tr>
                                                            <td width="193.8px" style="vertical-align: top; text-align: left; padding-left: 1%; background-color: azure; border:0; border-radius: 7px;">
                                                                <img src="{{ asset('res/images/profil/'.$thread->userPoster->foto) }}" 
                                                                width="128px" height="128px" style="margin: 10px 0 0 0;">
                                                                <br>
                                                                <a href="{{ url('/profil/'.$thread->userPoster->id) }}" >
                                                                    {{ $thread->userPoster->username }}
                                                                </a>
                                                                <br>
                                                                Since: {{ \Carbon\Carbon::parse($thread->userPoster->created_at)->format('F Y') }}
                                                                <br>
                                                                Post: {{ $thread->userPoster->totalpost }}
                                                                <br>
                                                                Rep: {{ $thread->userPoster->reputasi }}
                                                                <br>
                                                                @guest
                                                                @else
                                                                @if(Auth::user()->id != $thread->userPoster->id)
                                                                <form action="{{ route('turunreputasi', $thread->userPoster->id) }}" method="post" style="display: inline;">
                                                                    @csrf
                                                                    @method('put')
                                                                    <input type="hidden" id="threadID" name="threadID" value="{{ $thread->id }}">
                                                                    <button class="btn btn-danger" onclick="return confirm('Apa anda yakin ingin mengurangi reputasi user ini?')">
                                                                        <i class="fa fa-thumbs-down"></i></button>
                                                                </form>
                                                                <form action="{{ route('tambahreputasi', $thread->userPoster->id) }}" method="post" style="display: inline;">
                                                                    @csrf
                                                                    @method('put')
                                                                    <input type="hidden" id="threadID" name="threadID" value="{{ $thread->id }}">
                                                                    <button class="btn btn-success" onclick="return confirm('Apa anda yakin ingin menambahkan reputasi user ini?')">
                                                                        <i class="fa fa-thumbs-up"></i></button>
                                                                </form>
                                                                @endif
                                                                @endif
                                                            </td>
                                                            <td width="927px" style="padding: 11.5px 0 11.5px 20px;">
                                                                <h2>{{ $thread->judul }}</h2>
                                                                <hr>
                                                                {!! $thread->isi !!}
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php $no = 2; ?>
                        @foreach($reply as $komentar)
                        <div class="card" style="border: 0; border-radius: 7px;">
                            <table width="auto">
                                <tbody>
                                    <col width="193px"/>
                                    <col width="947px"/>
                                    <tr>
                                        <td colspan="2" style="background-color: aqua; border: 0; border-radius: 7px 7px 0 0; padding-left: 8.95px;">
                                            <table>
                                                <col width="193px"/>
                                                <col width="920px"/>
                                                <tr>
                                                    <td>
                                                        #{{ (($reply->currentPage()-1) * $reply->perPage()) + $no++ }}
                                                        &nbsp;
                                                        {{ \Carbon\Carbon::parse($komentar->created_at)->format('d-m-Y H:i:s') }}
                                                    </td>
                                                    <td align="right">
                                                        @guest
                                                        @elseif(Auth::user()->id == $komentar->userReply->id)
                                                        <a href="{{ url('/thread/'.$thread->id.'/editReply/'.$komentar->id) }}" class="btn btn-secondary">
                                                            <i class="fa fa-reply"></i> Edit Reply
                                                        </a>
                                                        @endif
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: top; text-align: left; padding-left: 8.95px; background-color: azure; border:0; border-radius: 7px;">
                                             <img src="{{ asset('res/images/profil/'.$thread->userPoster->foto) }}" 
                                            width="128px" height="128px" style="margin: 10px 0 0 0;">
                                            <br>
                                            <a href="{{ url('/profil/'.$komentar->userReply->id) }}">
                                                {{ $komentar->userReply->username }}
                                            </a>
                                            <br>
                                            Since: {{ \Carbon\Carbon::parse($komentar->userReply->created_at)->format('F Y') }}
                                            <br>
                                            Post: {{ $komentar->userReply->totalpost }}
                                            <br>
                                            Rep: {{ $komentar->userReply->reputasi }}
                                            <br>
                                            @guest
                                            @else
                                                @if(Auth::user()->id != $komentar->userReply->id)
                                                <form action="{{ route('turunreputasi', $komentar->userReply->id) }}" method="post" style="display: inline;">
                                                    @csrf
                                                    @method('put')
                                                    <input type="hidden" id="threadID" name="threadID" value="{{ $thread->id }}">
                                                    <button class="btn btn-danger" onclick="return confirm('Apa anda yakin ingin mengurangi reputasi user ini?');">
                                                        <i class="fa fa-thumbs-down"></i></button>
                                                </form>
                                                <form action="{{ route('tambahreputasi', $komentar->userReply->id) }}" method="post" style="display: inline;">
                                                    @csrf
                                                    @method('put')
                                                    <input type="hidden" id="threadID" name="threadID" value="{{ $thread->id }}">
                                                    <button class="btn btn-success" onclick="return confirm('Apakah anda yakin ingin menambahkan reputasi user ini?');">
                                                        <i class="fa fa-thumbs-up"></i></button>
                                                </form>
                                                @endif
                                            @endif
                                        </td>
                                        <td style="padding: 11.5px 0 11.5px 0">
                                            <div style="padding-left: 20px">
                                                {!! $komentar->komentar !!}
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        @endforeach
                        <br>{{ $reply->links() }}
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
                            <div class="footer_logo"><a href="{{ route('index') }}">ULM Forum</a></div>
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
    
    <script src="{{ asset('res/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('res/styles/bootstrap4/popper.js') }}"></script>
    <script src="{{ asset('res/styles/bootstrap4/bootstrap.min.js') }}"></script>
    <script src="{{ asset('res/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
    <script src="{{ asset('res/plugins/jquery.mb.YTPlayer-3.1.12/jquery.mb.YTPlayer.js') }}"></script>
    <script src="{{ asset('res/plugins/easing/easing.js') }}"></script>
    <script src="{{ asset('res/plugins/masonry/masonry.js') }}"></script>
    <script src="{{ asset('res/plugins/masonry/images_loaded.js') }}"></script>
    <script src="{{ asset('res/js/custom.js') }}"></script>
</body>
</html>
            