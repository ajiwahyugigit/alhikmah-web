@extends('layouts.app')


@section('content')
<section>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 text-center">
          <h2>Formulir Pendaftaran</h2>
          <a href="" class="btn btn-success px-5 mt-3">Informasi Data Diri</a>
        </div>
        <div class="col-8 mt-5">
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Lengkap</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>

          <div class="row">
            <div class="col-5">
              <div class="form-group">
                <label for="exampleInputEmail1">Jenis Kelamin</label> <br>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="customRadioInline1" name="customRadioInline" class="custom-control-input">
                  <label class="custom-control-label" for="customRadioInline1">Laki-Laki</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="customRadioInline2" name="customRadioInline" class="custom-control-input">
                  <label class="custom-control-label" for="customRadioInline2">Perempuan</label>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="exampleInputEmail1">Kepercayaan</label>

                <div class="row">
                  <div class="col">
                    
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck1">
                      <label class="custom-control-label" for="customCheck1">Islam</label>
                    </div>

                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck2">
                      <label class="custom-control-label" for="customCheck2">Budha</label>
                    </div>
                  </div>

                  <div class="col">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck3">
                      <label class="custom-control-label" for="customCheck3">Hindu</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck4">
                      <label class="custom-control-label" for="customCheck4">Katholik</label>
                    </div>
                  </div>

                  <div class="col">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck5">
                      <label class="custom-control-label" for="customCheck5">Protestan</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck6">
                      <label class="custom-control-label" for="customCheck6">Konghucu</label>
                    </div>
                  </div>

                  <div class="col">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck7">
                      <label class="custom-control-label" for="customCheck7">Lainnya</label>
                    </div>
                  </div>


                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Nomor KTP</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Upload KTP</label>
            <input type="file" class="form-control ktp" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Upload Foto Selfie dengan KTP</label>
            <input type="file" class="form-control selfie" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Upload Foto Tanda Tangan</label>
            <input type="file" class="form-control ttd" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Masa Berlaku</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Kewarganegaraan</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>

          <div class="row">
            <div class="col">
              <div class="form-group">
                <label for="exampleInputEmail1">Tempat</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
            </div>
            <div class="col">
              <label for="exampleInputEmail1">Tanggal Lahir</label>
              <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Alamat Sesuai Domisili</label>
             <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            <small>Kelurahan, kecamatan, Kotamadya/Kabupaten, Kode Pos</small>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">No. Telepon/Handphone</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Alamat Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          
          <div class="row">
            
            <div class="col">
              <div class="form-group">
                <label for="exampleInputEmail1">Status Tempat Tinggal</label>

                <div class="row">
                  <div class="col-6">
                    
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck8">
                      <label class="custom-control-label" for="customCheck8">Milik Sendiri</label>
                    </div>

                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck9">
                      <label class="custom-control-label" for="customCheck9">Rumah Dinas</label>
                    </div>
                  </div>

                  <div class="col">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck10">
                      <label class="custom-control-label" for="customCheck10">Milik Orang Tua</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck11">
                      <label class="custom-control-label" for="customCheck11">Kontrak</label>
                    </div>
                  </div>

                  <div class="col">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck5">
                      <label class="custom-control-label" for="customCheck5">Lainnya</label>
                    </div>
                  </div>


                </div>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="exampleInputEmail1">Pendidikan Terakhir</label>

                <div class="row">
                  <div class="col">
                    
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck12">
                      <label class="custom-control-label" for="customCheck12">SD</label>
                    </div>

                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck13">
                      <label class="custom-control-label" for="customCheck13">SMP</label>
                    </div>
                  </div>

                  <div class="col">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck14">
                      <label class="custom-control-label" for="customCheck14">SMA</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck15">
                      <label class="custom-control-label" for="customCheck15">Akademi</label>
                    </div>
                  </div>

                  <div class="col">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck16">
                      <label class="custom-control-label" for="customCheck16">S1</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck17">
                      <label class="custom-control-label" for="customCheck17">S2</label>
                    </div>
                  </div>

                  <div class="col">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck18">
                      <label class="custom-control-label" for="customCheck18">S3</label>
                    </div>
                  </div>


                </div>
              </div>
            </div>
          </div>

          <div class="row">
            
            <div class="col-8">
              <div class="form-group">
                <label for="exampleInputEmail1">Status Perkawinan</label>

                <div class="row">
                  <div class="col">
                    
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck19">
                      <label class="custom-control-label" for="customCheck19">Menikah</label>
                    </div>
                  </div>
                  <div class="col">

                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck20">
                      <label class="custom-control-label" for="customCheck20">Belum Menikah</label>
                    </div>
                  </div>

                  <div class="col">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck21">
                      <label class="custom-control-label" for="customCheck21">Duda/Janda</label>
                    </div>
                    
                  </div>


                </div>
              </div>
            </div>
            
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Tanggungan</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <small>Jumlah keluarga yang ditanggungkan</small>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Nama Ibu Kandung</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Nama Ahli Waris</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>

          
          <div class="row">
            
            <div class="col-10">
              <div class="form-group">
                <label for="exampleInputEmail1">Hubungan Ahli Waris</label>

                <div class="row">
                  <div class="col">
                    
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck22">
                      <label class="custom-control-label" for="customCheck22">Suami/istri</label>
                    </div>
                  </div>
                  <div class="col">

                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck23">
                      <label class="custom-control-label" for="customCheck23">Anak</label>
                    </div>
                  </div>

                  <div class="col">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck24">
                      <label class="custom-control-label" for="customCheck24">Orang Tua</label>
                    </div>
                  </div>

                  <div class="col">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck25">
                      <label class="custom-control-label" for="customCheck24">Lainnya</label>
                    </div>
                  </div>


                </div>
              </div>
            </div>
            
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">NPWP</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>

        </div>

        <div class="col-12 text-center">
          <a href="" class="btn btn-success px-5 mt-3">Informasi Pekerjaan</a>
        </div>
        

        
        <div class="col-8">

          <div class="row">
            
            <div class="col-12 mt-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Pekerjaan</label>

                <div class="row">
                  <div class="col">
                    
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="1">
                      <label class="custom-control-label" for="1">Pelajar</label>
                    </div>

                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="2">
                      <label class="custom-control-label" for="2">Guru</label>
                    </div>


                  </div>
                  <div class="col">

                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="3">
                      <label class="custom-control-label" for="3">Pengusaha</label>
                    </div>

                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="4">
                      <label class="custom-control-label" for="4">PNS</label>
                    </div>

                  </div>

                  <div class="col">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="5">
                      <label class="custom-control-label" for="5">Swasta</label>
                    </div>

                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="6">
                      <label class="custom-control-label" for="6">TNI/Porli</label>
                    </div>
                  </div>

                  <div class="col">

                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="7">
                      <label class="custom-control-label" for="7">Pensiunan</label>
                    </div>

                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="8">
                      <label class="custom-control-label" for="8">Ibu Rumah Tangga</label>
                    </div>

                  </div>


                </div>
              </div>
            </div>
            
          </div>

          <div class="form-group mt-3">
            <label for="exampleInputEmail1">Nama Perusahaan</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Alamat Perusahaan</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">No. Telpon/Handphone</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Devisi/Jabatan/Bagian</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">NIK</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Badan Usaha</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>

          <div class="row">
            <div class="col">
              <div class="form-group">
                <label for="exampleInputEmail1">Lama Bekerja</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="exampleInputEmail1">Lama Usaha</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
            </div>
          </div>

          <div class="row">
            
            <div class="col-12">
              <div class="form-group">
                <label for="exampleInputEmail1">Penghasilan Pokok Pertahun </label>

                <div class="row">
                  <div class="col-6">
                    
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="10">
                      <label class="custom-control-label" for="10">< Rp. 50.000.000</label>
                    </div>

                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="11">
                      <label class="custom-control-label" for="11">< Rp. 250.000.000 S/d Rp.500.000.000</label>
                    </div>
                  </div>
                  <div class="col-">

                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="12">
                      <label class="custom-control-label" for="12">< Rp. 50.000.000</label>
                    </div>

                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="13">
                      <label class="custom-control-label" for="13">< Rp. 100.000.000</label>
                    </div>


                  </div>

                  <div class="col">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="14">
                      <label class="custom-control-label" for="14">< Rp. 100.000.000</label>
                    </div>

                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="15">
                      <label class="custom-control-label" for="15">< Rp. 250.000.000</label>
                    </div>
                  </div>

                  <div class="col mt-2">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="16">
                      <label class="custom-control-label" for="16">< Rp. 1.000.000.000</label>
                    </div>
                  </div>


                </div>
              </div>
            </div>
            
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Sumber Penghasilan Tambahan</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>

          <div class="row">
            
            <div class="col-12">
              <div class="form-group">
                <label for="exampleInputEmail1">Penghasilan Tambahan Pertahun </label>

                <div class="row">
                  <div class="col-6">
                    
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="20">
                      <label class="custom-control-label" for="20">< Rp. 50.000.000</label>
                    </div>

                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="11">
                      <label class="custom-control-label" for="11">< Rp. 250.000.000 S/d Rp.500.000.000</label>
                    </div>
                  </div>
                  <div class="col-">

                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="21">
                      <label class="custom-control-label" for="21">< Rp. 50.000.000</label>
                    </div>

                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="22">
                      <label class="custom-control-label" for="22">< Rp. 100.000.000</label>
                    </div>


                  </div>

                  <div class="col">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="23">
                      <label class="custom-control-label" for="23">< Rp. 100.000.000</label>
                    </div>

                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="24">
                      <label class="custom-control-label" for="24">< Rp. 250.000.000</label>
                    </div>
                  </div>

                  <div class="col mt-2">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="25">
                      <label class="custom-control-label" for="25">< Rp. 1.000.000.000</label>
                    </div>
                  </div>


                </div>
              </div>
            </div>
            
          </div>

        </div>

        
      </div>
    </div>
  </section>

  <section class="syarat">
    <div class="container">
      <div class="row justify-content-center mt-4">
        <div class="col-8 my-5">
          <span>Dengan ini Saya Menyatakan</span>
          <p>
            Bersedia memenuhi semua ketentuan yang tertera dalam anggaran dasar, anggaran rumah tangga, peraturan khusus dan kebijakan-kebijakan lainnya yang terdapat di Koprasi Al Hikmah Syariah.
          </p>

          <span>Seluruh data formulir wajib diisi dengan Lengkap dan benar</span>
          <p>
            Simpanan pokok sebesar Rp.100.000,00 <br>
            Simpanan wajib sebesar Rp.25.000,00 <br>
            
            Dapat disetor langsung ke Koprasi Al Hikmah Syariah atau transfer bank melalui :
            <ul>
              <li>Bank BSI Cabang Tanah Abang a/n Koprasi Al Hikmah Syariah no. rek 001801002362302</li>
              <li>Bukti transfer dapat diemailkan ke alamat : admin@alhikmahsyariah.com, up bagian admin keanggotaan dengan menyertakan formulir pendaftaran</li>
            </ul> 
          </p>

          <div class="form-group mt-4 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Saya Setuju dengan syarat dan ketentuan yang berlaku</label>
          </div>

          <button class="btn btn-success px-5">
            Submit
          </button>


        </div>
      </div>
    </div>
  </section>
@endsection