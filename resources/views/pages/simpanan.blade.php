@extends('layouts.app')

@section('content')
<section>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <h1>Simpanan</h2>
                <p>Simpanan umum syariah yang setoran dan penarikanya dapat dilakukan setiap saat sesuai kebutuhan anggota</p>
                <h5>Akad</h5>
                <p>Tabungan diakad bedasarkan prinsip syariah Mudharabah Muthalaqah. dengan nisbah <b>30% Anggota : 70% KSPPS Al Hikmah </b></p>
                <h5>Keunggulan dan Manfaat</h5>

                <ul>
                    <li>Aman dan Transparan</li>
                    <li>Bebas Maysir, Gharar, Riba & Bathil</li>
                    <li>Transaksi mudah dan sesuai Syariah Islam</li>
                    <li>Bagi hasil menguntungkan dan halal.</li>
                    <li>Tanpa biaya administrasi bulanan</li>
                    <li>Ikut membantu sesama ummat (ta'awun)</li>
                </ul>
            </div>
            <div class="col-10 col-sm-12 col-md-6 col-lg-6">
                <img src="{{url('alhikmah/assets/images/micheile-henderson-SoT4-mZhyhE-unsplash 1.png')}}" alt="" height="410px">
            </div>
        </div>
    </div>
</section>
@endsection