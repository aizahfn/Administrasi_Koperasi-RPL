<div>

    @include('livewire.usermodal')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (session()->has('message'))
                    <h5 class="alert alert-success">{{ session('message') }}</h5>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h4>User CRUD with Bootstrap Modal
                            <input type="search" wire:model="search" class="form-control float-end mx-2" placeholder="Search..." style="width: 230px" />
                            <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#userModal">
                                Tambahkan User Baru
                            </button>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderd table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Lengkap</th>
                                    <th>No. Telepon</th>
                                    <th>Jabatan</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Alamat</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->nama_lengkap }}</td>
                                        <td>{{ $user->no_telp }}</td>
                                        <td>{{ $user->jabatan }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->password }}</td>
                                        <td>{{ $user->alamat }}</td>
                                        <td>{{ $user->jenis_kelamin }}</td>
                                        <td>{{ $user->tanggal_lahir }}</td>
                                        <td>
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#updateUserModal" wire:click="editUser({{$user->id}})" class="btn btn-primary">
                                                Edit
                                            </button>
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#deleteUserModal" wire:click="deleteUser({{$user->id}})" class="btn btn-danger">Hapus</button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">Tidak ada Entry Data!</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div>
                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
