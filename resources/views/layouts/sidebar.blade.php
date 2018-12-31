<div class="col-lg-3">
    <div class="sidebar">
        <div style="background-color: white;"></div>

        <!-- Top Stories -->

        <div class="sidebar_section">
            <div class="sidebar_title_container">
                <div class="sidebar_title">Thread Terhot</div>
                
            </div>
            <div class="sidebar_section_content">

                <!-- Top Stories Slider -->
                <div class="sidebar_slider_container">
                    <div class="owl-carousel owl-theme sidebar_slider_top">

                        <!-- Top Stories Slider Item -->
                        <div class="owl-item">

                            <!-- Sidebar Post -->
                            @foreach($hotThread as $hot)
                            <div class="side_post" style="border-bottom: 1px dotted; padding-bottom: 2%;">
                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                        <div class="side_post_content">
                                            <a href="{{ url('/thread/'.$hot->id) }}">
                                                <div class="side_post_title">{{ $hot->judul }}</div>
                                            </a>
                                            <small class="post_meta">{{ $hot->userPoster->username }}<span><i class="fa fa-eye"></i> {{ $hot->totalview }}</span></small>
                                        </div>
                                    </div>
                            </div>
                            @endforeach

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- User by Reputation -->

        <div class="sidebar_section newest_videos">
            <div class="sidebar_title_container">
                <div class="sidebar_title">User Dengan Reputasi Tertinggi</div>
                
            </div>
            <div class="sidebar_section_content">

                <!-- Sidebar Slider -->
                <div class="sidebar_slider_container">
                    <div class="owl-carousel owl-theme sidebar_slider_vid">

                        <!-- Slider Item -->
                        <div class="owl-item">

                            <!-- Post -->
                            
                            <div class="side_post" style="border-bottom: 1px dotted; padding-bottom: 2%;">
                                <a href="post.html">
                                    <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                        <div class="side_post_content">
                                            <div class="side_post_title">
                                                <table class="table">
                                                    <tbody>
                                                        @foreach($topRep as $rep)
                                                        <tr>
                                                            <td>
                                                                <a href="{{ url('/profil/'.$rep->id) }}">
                                                                    {{ $rep->username }}
                                                                </a>
                                                            </td>
                                                            <td>
                                                                {{ $rep->reputasi }}
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>