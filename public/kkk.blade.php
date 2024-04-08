<thead class="text-center">
    <tr>
      <th scope="col">no</th>
      <th scope="col">email</th>
      <th scope="col">nama</th>
      <th scope="col">lokasi</th>
      <th scope="col">jenis_permasalahan</th>
      <th scope="col">deskripsi_permasalahan</th>
      <th scope="col">bukti_permasalahan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody class="text-center">

      @foreach ($users as $key => $user)
      <tr>
          <td> {{$key+1}} </td>
          <td>{{$user->email}}</td>
          <td>{{$user->nama}}</td>
          <td>{{$user->lokasi}}</td>
          <td>{{$user->jenis_permasalahan}}</td>
          <td>{{$user->deskripsi_permasalahan}}</td>
          <th>
              <img src="{{ asset('storage/images/bukti/'.$user->bukti_permasalahan)}}" class="rounded" width="
              130">
          </th>
          <td>
              <a href="{{route('user.edit', $user->id)}}" style="text-decoration:none" class="btn btn-primary">Edit</a>
              <form method="post" action="{{route ('user.destroy',[$user->id])}}"
                onsubmit="return confirm('apakah data akan di hapus')">
              @csrf
              @method('delete')
                <button class="btn btn-danger" data-id={{$user->id}}>Delete</button>
      </tr>
{{-- @foreach ($kegiatan as $key => $kegiatans)
            <tr>
                <td></td>
                <td> {{$key+1}} </td>
                <td> {{$kegiatans->tanggal}} </td>
                <td>
                    <img src="{{asset('storage/images/kegiatan/' .$kegiatans->foto)}}" class="img-responsive" style="max-width: 50px; max-height:50px">
                </td>
                <td> {{$kegiatans->deskripsi}} </td>
                <td> {{$kegiatans->is_active == '0' ? 'aktif' : 'tidak aktif'}} </td>
                <td>
                    <a href=" {{route('kegiatan.edit', $kegiatans->id)}} " class="btn btn-success btn-sm">Edit</a>
                    <form method="POST" action="{{route('kegiatan.destroy',[$kegiatans->id])}}"
                        onsubmit="return confirm('Apakah Data Akan DiHapus?')">
                        @csrf
                        @method('delete')
                            <button class="btn btn-danger" data-id={{$kegiatans->id}} >Delete</button>
                          </form>
                </td>
        @endforeach
    </tbody>               --}}
    <form method="post" action="{{ route('user.store') }}" enctype="multipart/form-data">
        @csrf
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
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
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
