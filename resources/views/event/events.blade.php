@extends('layouts.template')

@section('contents')

<!-- BREADCRUMB -->
<div id="breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="/">{{ trans('index.home') }}</a></li>
            <li class="active">{{ trans('index.j_c_communication') }}</li>
        </ul>
    </div>
</div>
<!-- /BREADCRUMB -->

<!-- HOME -->
<div id="home">
    <!-- container -->
    <div class="container">
        <div style="margin-top:10px"></div>
        <div class="row">
            <div class="col-md-6">
                <!-- home wrap -->
                <div class="home-wrap">
                    <!-- home slick -->
                    <div id="home-slick">
                        <!-- banner -->
                        <div class="banner banner-1" >
                            <img src="{!! asset('images/event/sub0.png') !!}" style="height:400px" alt="">

                            <hr>

                        </div>
                        <!-- /banner -->

                        <!-- banner -->
                        <div class="banner banner-1">
                            <img src="{!! asset('images/event/sub1.png') !!}"  style="height:400px" alt="">
                            <hr>

                        </div>
                        <!-- /banner -->

                        <!-- banner -->
                        <div class="banner banner-1">
                            <img src="{!! asset('images/event/sub2.png') !!}"  style="height:400px" alt="">
                            <hr>

                        </div>
                        <!-- /banner -->
                        <!-- banner -->
                        <div class="banner banner-1">
                            <img src="{!! asset('images/event/sub3.png') !!}"  style="height:400px" alt="">
                            <hr>

                        </div>
                        <!-- /banner -->
                    </div>
                    <!-- /home slick -->
                </div>
                <!-- /home wrap -->
            </div>
            <div class="col-md-6">
                <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>中国経営者の視察団が大村屋酒造場に訪れた</th>    
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                
                                <td class="price">
島田市にある地酒メーカー「大村屋酒造場」に10月17日、中国の企業視察団が工場の視察などに訪れた。<br> <br>
 訪問したのは静岡県の友好県である浙江省の経営者25名。この日は日本酒の玄米処理から、洗米／浸漬、蒸米／放冷、仕込み、発酵、瓶詰めまどまでを興味深く見学し、各工程の現場などを興味深そうにカメラに収めていった。<br> <br>
 中国経営者たちは、日本酒をお飲みになりながら、1833年に創業した、186年の歴史を持つ「大村屋酒造場」の第七代目松永孝廣社長からご講話を受けた。中国企業関係者の一人は「日本文化や日本企業経営を勉強しに来たが、松永社長の話を聞いて、なぜ大村屋のお酒がニューヨークやアメリカ全土でも愛されているかよくわかりました。」と感心していた。<br> <br>
 お酒の歴史が長いという中国紹興市。一人の経営者は「日本の醸造家に尊敬します。ここまで原材料のお米やお水にこだわって作ってきましたか。だから、若竹のお酒がおいしいですね。」とお酒を味わえながら、話していた。<br></td>
                                
                                                  
                            </tr>
                            

                        </tbody>

                    </table>
            </div>
        </div>
    </div>
    <!-- /container -->
</div>

<section>
<div class="container">
<div class="row">

            <div class="col-md-12">
                <div class="order-summary clearfix">
                    <div class="section-title">
                        <h4>{{ trans('index.recent_event') }}</h4>
                    </div>
                    
                    <table class="table table-strip">
                        <thead>

                        </thead>
                        <tbody>
                            
                            <tr>                               
                                <td style="background-color:#f6f6f6" class="col-md-7"><br><h5>中国経営者の視察団が大村屋酒造場に訪れた</h5>
                                <p>2019-10-17  島田市</p>
                                <br>
                                <p>島田市にある地酒メーカー「大村屋酒造場」に10月17日、中国の企業視察団が工場の視察などに訪れた。</p>
                                <a href="#"><B><I>More..</I></B></a>
                                </td>   
                                <td style="background-color:#f6f6f6" class="col-md-5"><img src="{!! asset('images/event/event0.png') !!}" style="height:230px;width:450px" alt=""></td>     
                                            
                            </tr>   
            
                        </tbody>

                    </table>

                    <table class="table table-strip">
                        <thead>

                        </thead>
                        <tbody>
                            
                            <tr>                               
                                <td style="background-color:#f6f6f6" class="col-md-7"><br><h5>中国浙江省企業家協会、企業家連合会秘書長が島田市市議会に訪れた</h5>
                                <p>2019-09-17  島田市</p>
                                <br>
                                <p>中国浙江省企業家協会、企業家連合会秘書長が島田市市議会に訪れた。島田市市議会長村田千鶴子、副会長杉野直樹と対談した。</p>
                                <a href="#"><B><I>More..</I></B></a>
                                </td>   
                                <td style="background-color:#f6f6f6" class="col-md-5"><img src="{!! asset('images/event/event1.png') !!}" style="height:230px;width:450px" alt=""></td>     
                                            
                            </tr>   
            
                        </tbody>

                    </table>

                </div>

            </div>


        </div>
        <!-- /row -->
</div>
</section>




@endsection