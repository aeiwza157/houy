@extends('layout.master')
@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="image/ho.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="image/ho.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="image/ho.png" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"><i class="fa fa-chevron-right"></i></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <section class="result-houy pt-5 pb-5">
    <div class="row m-0 justify-content-center">
        <div class="col-sm-12 col-lg-7">
            <div class="card border-0">
                <div class="card-header text-center">
                    ผลออกรางวัลหวยรัฐบาล งวดประจำวันที่30 ธันวาคม 2563
                </div>
                <div class="card-body">
                    <div class="result-group form-inline">
                        <div class="result one">
                            <p class="p-old">ผลออกรางวัล</p>
                            <strong>803628</strong>
                        </div>
                        <div class="result two">
                            <p class="p-xg">เลขหน้า 3 ตัว</p>
                            <strong>336 804</strong>
                        </div>
                        <div class="result one">
                            <p class="p-old">เลขท้าย 3 ตัว</p>
                            <strong>921 321</strong>
                        </div>
                        <div class="result two">
                            <p class="p-xg">เลขท้าย 2 ตัว</p>
                            <strong>19</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-lg-5">
            <div class="card border-0">
                <div class="card-body" style="background-color: transparent;">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <label class="input-group-text select-before" for="inputGroupSelect02"><i class="fa fa-medal mr-2"></i> เลือกประเภทหวย</label>
                        </div>
                        <select class="custom-select select-after" id="inputGroupSelect02">
                          <option selected>หวยรัฐบาล</option>
                          <option value="1">หวยยี่กี</option>
                          <option value="2">หวยฮานอย</option>
                        </select>
                      </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <label class="input-group-text select-before" for="inputGroupSelect01"><i class="fa fa-calendar-day mr-2"></i> เลือกวันที่</label>
                        </div>
                        <select class="custom-select select-after" id="inputGroupSelect01">
                          <option selected>งวดประจำวันที่ 30 ธันวาคม 2563</option>
                          <option value="1">งวดประจำวันที่ 16 ธันวาคม 2563</option>
                          <option value="2">งวดประจำวันที่ 1 ธันวาคม 2563</option>
                        </select>
                      </div>
                </div>
            </div>
      </div>
      {{-- <div class="col-10 mt-3">
        <div class="card border-0">
            <div class="card-body" style="background-color: transparent;">
                <div class="autoplay" data-slick='{"slidesToShow": 5, "slidesToScroll": 4}'>
                    <div><img src="https://dummyimage.com/200x200/e0e0e0/5c5c5c" ></div>
                    <div><img src="https://dummyimage.com/200x200/e0e0e0/5c5c5c" ></div>
                    <div><img src="https://dummyimage.com/200x200/e0e0e0/5c5c5c" ></div>
                    <div><img src="https://dummyimage.com/200x200/e0e0e0/5c5c5c" ></div>
                    <div><img src="https://dummyimage.com/200x200/e0e0e0/5c5c5c" ></div>
                    <div><img src="https://dummyimage.com/200x200/e0e0e0/5c5c5c" ></div>
                  </div>
            </div>
        </div> --}}
      

      </div>
       
    </div>
</section>
<section class="about" style="">
    <div class="row pt-5 m-0">
        <div class="col-sm-12 col-lg-6 content-about">
        <div class="full-with-inner">
            <h1 style="color:#4a4949;">หวยออนไลน์ เว็บแทงหวย เล่นง่าย</h1>
                <p><strong>หวยออนไลน์</strong> ซื้อง่าย โอนเงินไว ซื้อหวยออนไลน์ด้วยระบบใหม่ที่มาพร้อมความทันสมัย   <strong>เล่นหวย แทงหวยออนไลน์ ที่นี่จ่ายสูงสุด</strong>
                ให้ส่วนลดเยอะ logohouy.com รวมเว็บหวยออนไลน์ มีทุกประเภท 
                <a href="#" class="linkcontent" title="หวยรัฐบาล หวยใต้ดิน">หวยรัฐบาล หวยไทย หวยใต้ดิน</a>
                มีให้เลือกแทงมากมายหลายแบบ หวยลาว ที่มีให้เล่นทุกวันพุธ 
                <a href="#" class="linkcontent">หวยฮานอย</a>
                หวยเวียดนาม 
                <a href="#" class="linkcontent" title="หวยจับยี่กี">หวยยี่กี</a> หวยมาเลย์ หวยหุ้นไทย หวยหุ้นต่างประเทศ
                มีให้เล่นทุกวัน หน้าเว็บรองรับการใช้งานบนทุกอุปกรณ์ ทำงานบนระบบ Cloud Server ที่การันตีไม่มีล่มแน่นอน ปลอดภัยชัวร์ 1,000,000%</p><p><br></p><p><br></p><p>  </p>

                <h2 style="color:#4a4949;">เล่นหวยออนไลน์ที่นี่ หวยครบ มั่นคง ปลอดภัย100%</h2>
                <p><a href="#"  class="linkcontent">logohouy</a> เว็บหวยที่ดีที่สุด รับแทงหวย ซื้อหวยออนไลน์ มีความมั่นคงทางการเงิน  จ่ายสูง ส่วนลดเยอะ    เลือกแทงได้ 2 รูปแบบ แบบรับส่วนลด และแบบไม่รับส่วนลดแต่จะได้อัตราจ่ายที่สูงกว่า  สามารถแทงได้ทุกที่ ทุกอุปกรณ์ 
                แทงหวยบนมือถือ  สะดวกและรวดเร็ว เปิดรับแทงแต่วันที่ 10และ25 ของทุกเดือน ปิดรับแทง 15.30 น. ของวันที่หวยออก มาพร้อมอัตราการจ่ายสูงสุดถึงบาทละ 900/130  บาท    ส่วนลดเยอะ 30%   550/70 <strong>แทงหวยไม่มีขั้นต่ำ</strong> 1 บาท ก็สามารถแทงได้  ไม่มีเลขอั้น ตรวจหวย ดูผลหวยล่าสุดได้ที่น่าเว็บไซต์ อัพเดตรวดเร็วแม่นยำ
                มีทีมงานบริการทุกวัน ฝากถอนรวดเร็ว 24 ชั่วโมง</p>
                <style>
                .linkcontent{color:#b1acb0;}
                </style>
        </div>
        <a class="btn btn-blue cycle-btn">สมัครสมาชิก</a> <a class="btn btn-blue cycle-btn">แทงหวยออนใลน์</a>
    </div>
    <div class="col-sm-12 col-lg-6 text-center">
                <img  src="image/about_right.jpg" class="m-auto img-border img-responsive">
    </div>
    </div>
</section>
<section class="houy-slide">
    <div class="row m-0 justify-content-center">
        <div class="col-sm-12 col-lg-10">
            <div class="multiple-items text-center">
                <div>
                    <img src="image/25630911115254.jpg" width="91%">
                    <div class="form-inline text-center m-auto">
                        <a class="btn btn-warning ml-3 btn-width-res">แทงหวย</a>
                        <a class="btn btn-danger btn-width-res">อัตราจ่าย</a>
                    </div>
                </div>
                <div>
                    <img src="image/25630912085224.jpg" width="91%">
                    <div class="form-inline text-center m-auto">
                        <a class="btn btn-warning ml-3 btn-width-res">แทงหวย</a>
                        <a class="btn btn-danger btn-width-res">อัตราจ่าย</a>
                    </div>
                </div>
                <div>
                    <img src="image/25631029142936.jpg" width="91%">
                    <div class="form-inline text-center m-auto">
                        <a class="btn btn-warning ml-3 btn-width-res">แทงหวย</a>
                        <a class="btn btn-danger btn-width-res">อัตราจ่าย</a>
                    </div>
                </div>
                <div>
                    <img src="image/25630911115254.jpg" width="91%">
                    <div class="form-inline text-center m-auto">
                        <a class="btn btn-warning ml-3 btn-width-res">แทงหวย</a>
                        <a class="btn btn-danger btn-width-res">อัตราจ่าย</a>
                    </div>
                </div>
                <div>
                    <img src="image/25630912085224.jpg" width="91%">
                    <div class="form-inline text-center m-auto">
                        <a class="btn btn-warning ml-3 btn-width-res">แทงหวย</a>
                        <a class="btn btn-danger btn-width-res">อัตราจ่าย</a>
                    </div>
                </div>
                <div>
                    <img src="image/25631029142936.jpg" width="91%">
                    <div class="form-inline text-center m-auto">
                        <a class="btn btn-warning ml-3 btn-width-res">แทงหวย</a>
                        <a class="btn btn-danger btn-width-res">อัตราจ่าย</a>
                    </div>
                </div>
              </div>
        </div>
    </div>
</section>
<section class="article p-5">
    <div class="row m-0">
    <div class="col-sm-12  col-lg-6">
        <div class="form-inline mb-5 text-center">
            <h2 class="header-h2">บทความแนะนำ</h2>
        </div>
        <div class="row m-0">
            <div class="col-sm-12 p-0 col-lg-6">
                <img src="https://images.ssslotto.com/News/25631228124650.jpg" class="w-100 mb-2">
                <strong >หญิง ธิติกานต์ มาแก้บน "ไอ้ส้มฉุน" คอหวยไม่พลาด "เลขเด็ด" ปลายประทัด</strong>
                <div class="form-inline text-muted">
                    <span><i class="fa fa-eye mr-2"></i> 30</span>
                    <span class="badge badge-warning ml-2">แนะนำ</span>
                    <span class="ml-auto"><i class="fa fa-history mr-2"></i>  30 ธันวาคม 2563</span>
                    <span class="ml-2" style="color: blue;"><i class="fab fa-facebook mr-2"></i>  แชร์</span>

                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                 <div class="form-group ">
                     <div class="mini-article">
                      <img src="https://images.ssslotto.com/News/25631229135238.jpg" width="50%">   
                      <div class="content">
                        ฝันเห็น "พญานาค" สร้างฐานองค์พระ เลขเด็ดโผล่ คอหวยลุ้นรวยส่งท้ายปี <br>
                        <span class="badge badge-warning ml-2">แนะนำ</span>
                        <small class="ml-auto"><i class="fa fa-history mr-2"></i>  30 ธันวาคม 2563</small>
                      </div>
                    </div>                     
                  </div>
                  <div class="form-group ">
                    <div class="mini-article">
                     <img src="https://images.ssslotto.com/News/25631229134444.jpg" width="50%">   
                     <div class="content">
                        คุณตาดวงเฮงกระซิบเลขเด็ด "อ่างน้ำมนต์ฤๅษีเณร" หวังรวยส่งท้ายไปด้วยกัน <br>
                       <span class="badge badge-warning ml-2">แนะนำ</span>
                       <small class="ml-auto"><i class="fa fa-history mr-2"></i>  30 ธันวาคม 2563</small>
                     </div>
                   </div>                     
                 </div>
                <a class="btn btn-warning w-100">อ่านต่อทั้งหมด</a>

            </div>
        </div>
    </div>
    <div class="col-sm-12 col-lg-6">
        <div class="form-inline mb-5 text-center">
            <h2 class="header-h2">ปัญหาที่พบบ่อย Q & A</h2>
        </div>
        <ul class="list-group">
            <li class="list-group-item"><i class="fa mr-2 fa-question-circle"></i> สามารถเติมเงินผ่านช่องทางไหนได้บ้าง ?</li>
            <li class="list-group-item"><i class="fa mr-2 fa-question-circle"></i> มีหวยประเภทไหนบ้าง อัตรายจ่ายเท่าไหร่ ?</li>
            <li class="list-group-item"><i class="fa mr-2 fa-question-circle"></i> ฝากเงินแล้วเงินไม่เข้า ทำยังไงต่อ ?</li>
            <li class="list-group-item"><i class="fa mr-2 fa-question-circle"></i> เกิดปัญหา การถอนเงินล่าช้า</li>
            <li class="list-group-item"><i class="fa mr-2 fa-question-circle"></i> ถอนเงินขั้นต่ำเท่าไหร่ และฝากขั้นต่ำเท่าไหร่ ?</li>
          </ul>
    </div>
</div>
</section>
@endsection

@section('script')
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $('.multiple-items').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 4
        });
    </script>
@endsection