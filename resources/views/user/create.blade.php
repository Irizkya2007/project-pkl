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
                <div class="card bg-light" aria-hidden="true">
                    <form method="post" action="{{ route('user.store') }}" enctype="multipart/form-data">
                        @csrf
                        <h5 class="card-header">
                            Form E-Tiketing
                        </h5>
                        <div class="card-body">
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                                @error('email')
                                  <small>{{ $message }}</small>
                                @enderror
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="nama">

                                @error('nama')
                                  <small>{{ $message }}</small>
                                @enderror
                              </div>
                              <div class="mb-3 form-check">
                                <label for="exampleInputPassword1" class="form-label">Lokasi</label>
                                <select name="lokasi" id="lokasi" class="form-select">
                                  <option value="" selected>--pilih lokasi--</option>
                                  <option value="Gedung A lantai 1" {{old('lokasi')== 'gedung_A_lantai_1'? 'selected': null}}>Gedung A Lantai 1</option>
                                  <option value="Gedung A lantai 2" {{old('lokasi')== 'gedung_A_lantai_2'? 'selected': null}}>Gedung A Lantai 2</option>
                                  <option value="Gedung A lantai 3" {{old('lokasi')== 'gedung_A_lantai_3'? 'selected': null}}>Gedung A Lantai 3</option>
                                  <option value="Gedung A lantai 4" {{old('lokasi')== 'gedung_A_lantai_4'? 'selected': null}}>Gedung A Lantai 4</option>
                                  <option value="Gedung A lantai 5" {{old('lokasi')== 'gedung_A_lantai_5'? 'selected': null}}>Gedung A Lantai 5</option>
                                  <option value="Gedung A lantai 6" {{old('lokasi')== 'gedung_A_lantai_6'? 'selected': null}}>Gedung A Lantai 6</option>
                                  <option value="Gedung A lantai 7" {{old('lokasi')== 'gedung_A_lantai_7'? 'selected': null}}>Gedung A Lantai 7</option>
                                  <option value="Gedung B lantai 1" {{old('lokasi')== 'gedung_B_lantai_1'? 'selected': null}}>Gedung B Lantai 1</option>
                                  <option value="Gedung B lantai 2" {{old('lokasi')== 'gedung_B_lantai_2'? 'selected': null}}>Gedung B Lantai 2</option>
                                  <option value="Gedung B lantai 3" {{old('lokasi')== 'gedung_B_lantai_3'? 'selected': null}}>Gedung B Lantai 3</option>
                                  <option value="Gedung B lantai 4" {{old('lokasi')== 'gedung_B_lantai_4'? 'selected': null}}>Gedung B Lantai 4</option>
                                  <option value="Gedung B lantai 5" {{old('lokasi')== 'gedung_B_lantai_5'? 'selected': null}}>Gedung B Lantai 5</option>
                                  <option value="Gedung B lantai 6" {{old('lokasi')== 'gedung_B_lantai_6'? 'selected': null}}>Gedung B Lantai 6</option>
                                  <option value="Gedung B lantai 7" {{old('lokasi')== 'gedung_B_lantai_7'? 'selected': null}}>Gedung B Lantai 7</option>
                                  <option value="Gedung B lantai 8" {{old('lokasi')== 'gedung_B_lantai_8'? 'selected': null}}>Gedung B Lantai 8</option>
                                  <option value="Gedung B lantai 9" {{old('lokasi')== 'gedung_B_lantai_9'? 'selected': null}}>Gedung B Lantai 9</option>
                                </select>
                              @error('lokasi')
                                <small>{{ $message }}</small>
                              @enderror
                            </div>
                              <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Jenis Permasalahan</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="jenis_permasalahan">
                                @error('jenis_permasalahan')
                                  <small>{{ $message }}</small>
                                @enderror
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Deskripsi Permasalahan</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="deskripsi_permasalahan">
                                @error('deskripsi_permasalahan')
                                  <small>{{ $message }}</small>
                                @enderror
                              </div>
                              <div class="mb-3">
                                <label for="basicInput" class="form-label">Bukti Permasalahan</label>
                                <input type="file" class="form-control" name="bukti_permasalahan">
                                @error('bukti_permasalahan')
                                  <small>{{ $message }}</small>
                                @enderror

                              </div>
                              <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
