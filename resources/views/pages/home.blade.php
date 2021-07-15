@extends('layouts.app')

@section('content')
    <!-- content -->

    <div class="jumbotron jumbotron-fluid" style="margin-top: 60px;">
        <div class="container">
            <div class="row">
                <div class="col-6 col-sm-12 col-md-12">
                    <h1 class="display-1 font-weight-bold">Bergabunglah <br> Bersama <br> Kami</h1>
                </div>
            </div>
          </div>
        </div>
      </div>
        
      <!-- akhir content -->
  
      <section>
        <div class="container">
  
          <div class="row produk">
  
            <div class="col-12 col-lg-5">
              <h1 class="display-4">Produk <br> Unggulan</h1>
              <p>Produk yang kami tawarkan dapat mengisi dan menjawab atas kebutuhan masyarakat dengan produk simpan pinjam dan pembiayaan syariah yang bebas dari maysir, gharrar, dan riba.</p>
            </div>
  
            <div class="col">
              <div class="row">
                  
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 mt-3">
                  <div class="card simpanan text-left">
                    <img class="card-img-top p-3" src="{{url('alhikmah/assets/images/save-money 1.png')}}" alt="" height="130px">
                    <div class="card-body text-center">
                      <h4 class="card-title">Simpanan</h4>
                    </div>
                  </div>
                </div>
  
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 mt-3">
                  <div class="card kendaraan text-left">
                    <img class="card-img-top p-3" src="{{url('alhikmah/assets/images/motorbike 1.png')}}" alt="" height="130px">
                    <div class="card-body text-center">
                      <h4 class="card-title">Kendaraan</h4>
                    </div>
                  </div>
                </div>
  
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 mt-3">
                  <div class="card electonik text-left">
                    <img class="card-img-top p-3" src="{{url('alhikmah/assets/images/smartphone 1.png')}}" alt="" height="130px">
                    <div class="card-body text-center">
                      <h4 class="card-title">Electronik</h4>
                    </div>
                  </div>
                </div>
  
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 mt-3">
                  <div class="card ziswaf text-left">
                    <img class="card-img-top p-3" src="{{url('alhikmah/assets/images/investment 1.png')}}" alt="" height="130px">
                    <div class="card-body text-center">
                      <h4 class="card-title">ZISWAF</h4>
                    </div>
                  </div>
                </div>
  
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 mt-3">
                  <div class="card agribisnis text-left">
                    <img class="card-img-top p-3" src="{{url('alhikmah/assets/images/plant 1.png')}}" alt="" height="130px">
                    <div class="card-body text-center">
                      <h4 class="card-title">Agribisnis</h4>
                    </div>
                  </div>
                </div>
  
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 mt-3">
                  <div class="card haji text-left">
                    <img class="card-img-top p-3" src="{{url('alhikmah/assets/images/kaaba 1.png')}}" alt="" height="130px">
                    <div class="card-body text-center">
                      <h4 class="card-title">Haji & Umroh</h4>
                    </div>
                  </div>
                </div>
  
              </div>
            </div>
          </div>
  
          <div class="row banner">
            <div class="col">
              <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{url('alhikmah/assets/images/Group 5.png')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block text-left">
                      <div class="row">
                        <div class="col-8">
                          <h5 class="display-4">Buat Bisnis Anda <br> Berkembang</h5> 
                        </div>
                        <div class="col">
                          <button class="btn btn-white">Klik Disini</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{url('alhikmah/assets/images/Group 5.png')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block text-left">
                      <div class="row">
                        <div class="col-8">
                          <h5 class="display-4">Buat Bisnis Anda <br> Berkembang</h5> 
                        </div>
                        <div class="col">
                          <button class="btn btn-white">Klik Disini</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{url('alhikmah/assets/images/Group 5.png')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block text-left">
                      <div class="row">
                        <div class="col-8">
                          <h5 class="display-4">Buat Bisnis Anda <br> Berkembang</h5> 
                        </div>
                        <div class="col">
                          <button class="btn btn-white">Klik Disini</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
  
          <div class="row mt-5 tentang-kami">
            <div class="col-11 col-lg-6 col-md-11">
              <h1 class="display-1 my-2">Tentang Kami</h1>
              <p class="mt-5">Al Hikmah Syariah adalah lembaga keuangan berbadan hukum koperasi yang bergerak di bidang simpan pinjam dan pembiayaan syariah yang bertujuan untuk membantu memajukan kesejehteraan anggota pada khususnya dan masyarakat pada umumnya.</p>
            </div>
            <div class="col-5 offset-1">
              <img src="{{url('alhikmah/assets/images/Al Hikmah Portrait 1.png')}}" alt="">
            </div>
          </div>
        </div>
      </section>
@endsection