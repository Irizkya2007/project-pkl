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
                                <th scope="col">Email</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Lokasi</th>
                                <th scope="col">Jenis_permasalahan</th>
                                <th scope="col">Deskripsi_permasalahan</th>
                                <th scope="col">Bukti_permasalahan</th>
                                <th scope="col">Aksi</th>
                              </tr>
                            </thead>
                            <tbody class="text-center table-group-divider">

                                @foreach ($users as $key => $user)
                                <tr>
                                    <td> {{$key+1}} </td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->nama}}</td>
                                    <td>{{$user->lokasi}}</td>
                                    <td>{{$user->jenis_permasalahan}}</td>
                                    <td>{{$user->deskripsi_permasalahan}}</td>
                                    <th>
                                        <img src="{{ asset('storage/images/' .$user->bukti_permasalahan)}}" class="img-responsive" style="max-width: 150px; max-height: 150px">
                                    </th>
                                    <td>
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <a href="{{route('admin.create')}}" style="text-decoration:none" class="btn btn-success">Balas</a>
                                        <form method="post" action="{{route ('user.destroy',[$user->id])}}"
                                          onsubmit="return confirm('apakah data akan di hapus')">
                                        @csrf
                                        @method('delete')
                                          <button class="btn btn-danger" data-id={{$user->id}}>Delete</button>
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
