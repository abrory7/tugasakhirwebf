<!DOCTYPE html>
<html lang="en">
<head>
    <title>test</title>
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
                                        <div class="section_title">{{ $thread->judul }}</div>
                                    </td>
                                    <td align="right">
                                        <a href="{{ url('/thread/'.$thread->id.'/reply') }}" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Balas Thread</a>
                                        <a href="{{ route('buatPost') }}" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Thread</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <?php $head = $thread->judul; ?><!-- Title tab thread -->
                        <div class="card" style="border: 0; border-radius: 7px;">
                            <table width="auto">
                                <tbody>
                                    <tr>
                                        <td width="193.8px" style="vertical-align: top; text-align: left; padding-left: 1%; background-color: azure; border:0; border-radius: 7px;">
                                            {{ $thread->userPoster->username }}
                                            <br>
                                            {{ $thread->userPoster->created_at}}
                                            <br>
                                            Post: {{ $thread->userPoster->totalpost }}
                                            <br>
                                            Rep: {{ $thread->userPoster->reputasi }}
                                        </td>
                                        <td style="padding: 11.5px 0 11.5px 20px">
                                            <h2>{{ $thread->judul }} - {{ $thread->threadKategori->namakategori }}</h2>
                                            {!! $thread->isi !!}asdasd<br>s<br>a<br>s<br>d<br>f<br>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        @foreach($reply as $komentar)
                        <div class="card" style="border: 0; border-radius: 7px;">
                            <table width="auto">
                                <tbody>
                                    <tr>
                                        <td width="193.8px" style="vertical-align: top; text-align: left; padding-left: 8.95px; background-color: azure; border:0; border-radius: 7px;">
                                            {{ $komentar->userReply->username }}
                                            <br>
                                            {{ $komentar->userReply->created_at }}
                                            <br>
                                            Post: {{ $komentar->userReply->totalpost }}
                                            <br>
                                            Rep: {{ $komentar->userReply->reputasi }}
                                        </td>
                                        <td style="padding: 11.5px 0 11.5px 20px">
                                                {!! $komentar->komentar !!}
                                            <div style="border-top: 1px solid gray; margin-top: 20%">
                                                <small>{{ $komentar->created_at }}</small>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="footer" style="margin-top: 10%">
            <div class="container">
                <div class="row row-lg-eq-height">
                    <div class="col-lg-9 order-lg-1 order-2">
                        <div class="footer_content">
                            <div class="footer_logo"><a href="#">avision</a></div>
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
                    <div class="col-lg-3 order-lg-2 order-1">
                        <div class="subscribe">
                            <div class="subscribe_background"></div>
                            <div class="subscribe_content">
                                <div class="subscribe_title">Subscribe</div>
                                <form action="#">
                                    <input type="email" class="sub_input" placeholder="Your Email" required="required">
                                    <button class="sub_button">
                                        <svg version="1.1" id="link_arrow_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                width="19px" height="13px" viewBox="0 0 19 13" enable-background="new 0 0 19 13" xml:space="preserve">
                                            <polygon fill="#FFFFFF" points="12.475,0 11.061,0 17.081,6.021 0,6.021 0,7.021 17.038,7.021 11.06,13 12.474,13 18.974,6.5 "/>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    
    
</body>
</html>
            