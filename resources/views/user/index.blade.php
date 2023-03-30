<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data user</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">TES LARAVEL</h3>
                    <h5 class="text-center"></h5>         
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('user.create') }}" class="btn btn-md btn-success mb-3">TAMBAH users</a>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">id_berkas</th>
                                <th scope="col">role</th>
                                <th scope="col">nama_lengkap</th>
                                <th scope="col">no_telp</th>
                                <th scope="col">jabatan</th>
                                <th scope="col">email</th>
                                <th scope="col">password</th>
                                <th scope="col">alamat</th>
                                <th scope="col">jenis_kelamin</th>
                                <th scope="col">tanggal_lahir</th>
                                <th scope="col">AKSI</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($user as $users)
                                <tr>
                                    {{-- <td class="text-center">
                                        <img src="{{ asset('/storage/user/'.$users->image) }}" class="rounded" style="width: 150px">
                                    </td> --}}
                                    <td>{{ $users->id_berkas }}</td>
                                    <td>{{ $users->role }}</td>
                                    <td>{{ $users->nama_lengkap }}</td>
                                    <td>{{ $users->no_telp }}</td>
                                    <td>{{ $users->jabatan }}</td>
                                    <td>{{ $users->email }}</td>
                                    <td>{{ $users->password }}</td>
                                    <td>{{ $users->alamat }}</td>
                                    <td>{{ $users->jenis_kelamin }}</td>
                                    <td>{{ $users->tanggal_lahir }}</td>
                                    {{-- <td>{!! $users->content !!}</td> --}}
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('user.destroy', $users->id) }}" method="post">
                                            <a href="{{ route('user.show', $users->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                            <a href="{{ route('user.edit', $users->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data users belum Tersedia.
                                  </div>
                              @endforelse
                            </tbody>
                          </table>  
                          {{ $user->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        @if(session()->has('success'))
        
            toastr.success('{{ session('success') }}', 'BERHASIL!'); 

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
        @endif
    </script>

</body>
</html>