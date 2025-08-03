
     <style>

            .footer_section {
                margin: 20px 0 0;
                background: #212121;
                padding: 20px 0 0px 0;
            }
            .footer_color {
    color: #fff;
}

.editorial_text {
    border-right: 2px solid #730101;
    padding: 0 20px;
    font-size: 15px;
}
.footer_logo {
    width: 70%;
}
.bottom-footer-section {
    background: #0f0e0e;
    padding: 15px 0;
}
.design-developed {
    text-align: right;
    padding-right: 20px;
}
     </style>

     <!--=======================
                            themeBazar_Footer_section_End
                        ==========================-->

        <footer class="footer_section footer_color">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <h4 class="editorial_text">
                            <p align="right">সম্পাদক ও প্রকাশক :- <br/> {{ $gs->prokashok }}</p>
                            {{-- <p align="right">নির্বাহী সম্পাদক : {{ $gs->sompadok }}<br/></p> --}}
                            {{-- <p align="right">বার্তা সম্পাদক : {{ $gs->barta_sompadok }}</p><p align="right"><br/></p> --}}
                        </h4>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <h4 class="editorial_text">
                            <p align="left">অফিস :- <br/>{!! $gs->adress !!} </p>
                            <p align="left">মোবাইল :- <br/>{!! $gs->phone !!}<br/></p>
                            <p align="left">ইমেইল :- <br/> {{ $gs->email }} </p>
                        </h4>
                    </div>
                    <div class="col-lg-4 col-md-4">
						     @php
								Session::has('language') ? $lid=Session::get('language') : $lid = (DB::table('languages')->where('is_default','=',1)->first()->id)
							@endphp

							@php
								$header_footer_logo = d_logo($lid);
							@endphp
                        <div class="footer_logo">
                          <a href="{{route('frontend.index')}}"> <img src="{{asset('assets/images/logo/'.$gs->footer_logo)}}" alt="{{ $gs->title }}"> </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


        <div class="bottom-footer-section footer_color">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">

                       <div class="design">
                      {!! $gs->copyright_text !!}
                       </div>

                    </div>

                    <div class="col-lg-6 col-md-6">

                       <div class="design-developed">
                        সকল কারিগরী সহযোগিতায় <a href='https://softwebsys.com/' target='_blank' title='https://softwebsys.com'>Softweb System Solution</a>
                       </div>

                    </div>

                </div>

                <a href="#" class="themesBazar_scroll"><i class="las la-level-up-alt"></i></a>
            </div>
        </div>






                                <!--=======================
                                   themeBazar_Footer_section_End
                                ==========================-->

                <!--============Footer Scroll  start==============-->
                 {{-- <div class="footer_scroll">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer_left">
                    <span> নোটিশ   </span>
                    </div>
                    <div class="footer_right rightCSS ">
                        <div>

                            <a href="#"> <i class="las la-bullseye"></i>  {{ $gs->notice_text }} </a>


                        </div><!-- End main div -->
                    </div>





                </div>
            </div>


        </div> --}}


            <!--============footer Scroll End==============-->
