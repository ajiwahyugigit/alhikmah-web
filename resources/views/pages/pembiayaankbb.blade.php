@extends('layouts.app')

@section('content')
        
    <section>
        <div class="container">
            <div class="row mt-5">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <h1>Pembiyaan KBB</h2>
                    <h5 class="mb-3">(Kendaraan Bermotor Barokah)</h5>
                    <p>adalah merupakan fasilitas pembiyaan untuk pembelian kendaraan bermotor</p>
                    <h5 class="mt-3">Akad</h5>
                    <p>Akad yang digunakan adalah akad yang berbasis jual beli (Murabahah)</p>
                    <h5>Keunggulan dan Manfaat</h5>

                    <ul>
                        <li>Membatu anggota dalam memiliki kendaraan bermotor dengan mudah dan barokah</li>
                        <li>Bisa memilih kendaraan sesuai dengan keinginan</li>
                        <li>Nilai angsuran tetap samapai berakhirnya fasilitas pembiyaan KBB</li>
                        <li>Kendaraan di cover asuransi Syariah (Kehilangan dan kerusakan diatas 75%)</li>
                        <li>Terbebas dari Haram</li>
                    </ul>
                </div>
                <div class="col-10 col-sm-12 col-md-6 col-lg-6">
                    <img src="{{url('alhikmah/assets/images/motor.png')}}" alt="" height="410px">
                </div>
            </div>
        </div>
    </section>

@endsection