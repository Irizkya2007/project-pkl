<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Link Bootstrap -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="{{asset('js/bootstrap.bundle.min.js')}}" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <nav class="navbar bg-light">
        <div class="container-fluid">
            <a class="navbar-brand ms-3">Table E-Tiketing</a>
          </div>
        </nav>
    <div class="content-body">
        <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card text-center mt-2 bg-light">
                    <div class="card-body">
                        <div class="table-responsive">
                        <table class="table mt-2 table-hover table-bordered">
                            <thead class="text-center">
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Nama Petugas</th>
                                <th scope="col">Nomor Etiket</th>
                                <th scope="col">Diagnosa</th>
                                <th scope="col">Kategori Permasalahan</th>
                                <th scope="col">Solusi</th>
                                <th scope="col">Lanjutan</th>
                                <th scope="col">Aksi</th>
                              </tr>
                            </thead>
                            <tbody class="text-center table-group-divider">

                                @foreach ($admins as $key => $admin)
                                <tr>
                                    <td> {{$key+1}} </td>
                                    <td>{{$admin->tanggal}}</td>
                                    <td>{{$admin->nama_petugas}}</td>
                                    <td>{{$admin->nomor_etiket}}</td>
                                    <td>{{$admin->diagnosa}}</td>
                                    <td>{{$admin->kategori_permasalahan}}</td>
                                    <td>{{$admin->solusi}}</td>
                                    <td>{{$admin->lanjutan}}</td>
                                    <td>
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <a href="{{route('admin.edit', $admin->id)}}" style="text-decoration:none" class="btn btn-success">Kirim</a>
                                        <form method="post" action="{{route ('admin.destroy',[$admin->id])}}"
                                          onsubmit="return confirm('apakah data akan di hapus')">
                                        @csrf
                                        @method('delete')
                                          <button class="btn btn-danger" data-id={{$admin->id}}>Delete</button>
                                </tr>
                                @endforeach
                            </tbody>
                          </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</body>
</html>
