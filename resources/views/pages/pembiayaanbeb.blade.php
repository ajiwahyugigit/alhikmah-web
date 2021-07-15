@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <div class="row mt-5">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <h2>Pembiyaan BEB</h2>
                    <h5 class="mb-3">(Barang Elektronik Barokah)</h5>

                    <p>Adalah fasilitas pembiayaan yang diajukan untuk pembelian barang elektronik</p>
                    <h5>Akad</h5>
                    <p>akad yang digunakan adalah akad yang berbasis jual beli (Murabahah)</p>
                    <h5>Keunggulan dan Manfaat</h5>

                    <ul>
                        <li>Membantu anggota dalam memiliki barang elektronik dengan mudah dan Barokah</li>
                        <li>Bisa memilih barang elektronik sesuai dengan keinginan</li>
                        <li>Nilai angsuran tetap samapai berakhirnya fasilitas pembiayaan</li>
                        <li>Terbebas dari Haram</li>
                    </ul>
                </div>
                <div class="col-10 col-sm-12 col-md-6 col-lg-6">
                    <img src="{{url('alhikmah/assets/images/phone.png')}}" alt="" height="410px">
                </div>
            </div>
        </div>
    </section>
@endsection