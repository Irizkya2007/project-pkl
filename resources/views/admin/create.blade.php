<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <title>Document</title>
</head>
<body>
    <div class="app">
        <div class="main-wrapper">
            <div class="main-content">
              <div class="conteiner">
                <div class="card bg-light" aria-hidden="true">
                  <form method="post" action="{{ route('admin.store') }}">
                    @csrf
                    <h5 class="card-header">
                      Form Laporan Troubleshoot IT PUSTAKA
                    </h5>
                        <div class="card-body">
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                                <input type="date" class="form-control" id="exampleInputEmail1"  name="tanggal">
                                @error('tanggal')
                                  <small>{{ $message }}</small>
                                @enderror
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Petugas</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"  name="nama_petugas">
                                @error('nama_petugas')
                                  <small>{{ $message }}</small>
                                @enderror
                              </div>
                              <div class="mb-3 form-check">
                                <label for="exampleInputPassword1" class="form-label">Nomor E-Ticket</label>
                                <select name="nomor_etiket" id="nomor_etiket" class="form-select">
                                  <option value="" selected>--pilih--</option>
                                  <option value="Gedung A lantai 1" {{old('nomor_etiket')== 'gedung_A_lantai_1'? 'selected': null}}>Gedung A Lantai 1</option>
                                  <option value="Gedung A lantai 2" {{old('nomor_etiket')== 'gedung_A_lantai_2'? 'selected': null}}>Gedung A Lantai 2</option>
                                  <option value="Gedung A lantai 3" {{old('nomor_etiket')== 'gedung_A_lantai_3'? 'selected': null}}>Gedung A Lantai 3</option>
                                  <option value="Gedung A lantai 4" {{old('nomor_etiket')== 'gedung_A_lantai_4'? 'selected': null}}>Gedung A Lantai 4</option>
                                  <option value="Gedung A lantai 5" {{old('nomor_etiket')== 'gedung_A_lantai_5'? 'selected': null}}>Gedung A Lantai 5</option>
                                  <option value="Gedung A lantai 6" {{old('nomor_etiket')== 'gedung_A_lantai_6'? 'selected': null}}>Gedung A Lantai 6</option>
                                  <option value="Gedung A lantai 7" {{old('nomor_etiket')== 'gedung_A_lantai_7'? 'selected': null}}>Gedung A Lantai 7</option>
                                  <option value="Gedung B lantai 1" {{old('nomor_etiket')== 'gedung_B_lantai_1'? 'selected': null}}>Gedung B Lantai 1</option>
                                  <option value="Gedung B lantai 2" {{old('nomor_etiket')== 'gedung_B_lantai_2'? 'selected': null}}>Gedung B Lantai 2</option>
                                  <option value="Gedung B lantai 3" {{old('nomor_etiket')== 'gedung_B_lantai_3'? 'selected': null}}>Gedung B Lantai 3</option>
                                  <option value="Gedung B lantai 4" {{old('nomor_etiket')== 'gedung_B_lantai_4'? 'selected': null}}>Gedung B Lantai 4</option>
                                  <option value="Gedung B lantai 5" {{old('nomor_etiket')== 'gedung_B_lantai_5'? 'selected': null}}>Gedung B Lantai 5</option>
                                  <option value="Gedung B lantai 6" {{old('nomor_etiket')== 'gedung_B_lantai_6'? 'selected': null}}>Gedung B Lantai 6</option>
                                  <option value="Gedung B lantai 7" {{old('nomor_etiket')== 'gedung_B_lantai_7'? 'selected': null}}>Gedung B Lantai 7</option>
                                  <option value="Gedung B lantai 8" {{old('nomor_etiket')== 'gedung_B_lantai_8'? 'selected': null}}>Gedung B Lantai 8</option>
                                  <option value="Gedung B lantai 9" {{old('nomor_etiket')== 'gedung_B_lantai_9'? 'selected': null}}>Gedung B Lantai 9</option>
                                </select>
                              @error('nomor_etiket')
                                <small>{{ $message }}</small>
                              @enderror
                            </div>
                              <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Diagnosa</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="diagnosa">
                                @error('diagnosa')
                                  <small>{{ $message }}</small>
                                @enderror
                              </div>

                              <div class="mb-3 form-check">
                                <label for="exampleInputPassword1" class="form-label">Kategori Permasalahan</label>
                                <select name="kategori_permasalahan" id="kategori_permasalahan" class="form-select">
                                  <option value="" selected>--pilih--</option>
                                  <option value="Aplikasi" {{old('kategori_permasalahan')== 'aplikasi'? 'selected': null}}>Aplikasi</option>
                                  <option value="Jaringan" {{old('karegori_permasalahan')== 'jaringan'? 'selected': null}}>Jaringan</option>
                                </select>
                              @error('kategori_permasalahan')
                                <small>{{ $message }}</small>
                              @enderror
                            </div>

                              <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Solusi</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="solusi">
                                @error('solusi')
                                  <small>{{ $message }}</small>
                                @enderror
                              </div>

                              <div class="mb-3 form-check">
                                <label for="exampleInputPassword1" class="form-label">Lanjutan</label>
                                <select name="lanjutan" id="lanjutan" class="form-select">
                                  <option value="" selected>--pilih--</option>
                                  <option value="Sudah Dipebaiki" {{old('lanjutan')== 'sudah_diperbaiki'? 'selected': null}}>Sudah Diperbaiki</option>
                                  <option value="Perlu Ditindak Lanjutkan" {{old('lanjutan')== 'perlu_ditindak_lanjutkan'? 'selected': null}}>Perlu Ditindak Lanjutkan</option>
                                </select>
                              @error('kategori_permasalahan')
                                <small>{{ $message }}</small>
                              @enderror
                            </div>


                              </div>
                              <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                </div>
                </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</body>
</html>
