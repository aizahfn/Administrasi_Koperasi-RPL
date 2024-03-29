<x-layout bodyClass="g-sidenav-show bg-gray-200">

    <x-navbars.sidebar activePage="user-profile"></x-navbars.sidebar>
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage='User Profile'></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid px-2 px-md-4">
            <div class="page-header min-height-300 border-radius-xl mt-4"
                style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
                <span class="mask  bg-gradient-primary  opacity-6"></span>
            </div>
            <div class="card card-body mx-3 mx-md-4 mt-n6">

                <div class="card card-plain h-100">
                    <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-md-8 d-flex align-items-center">
                                <h3 class="mb-3 ">REVIEW BIODATA</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        @if (session('status'))
                        <div class="row">
                            <div class="alert alert-success alert-dismissible text-white" role="alert">
                                <span class="text-sm">{{ Session::get('status') }}</span>
                                <button type="button" class="btn-close text-lg py-3 opacity-10"
                                    data-bs-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        @endif
                        @if (Session::has('demo'))
                                <div class="row">
                                    <div class="alert alert-danger alert-dismissible text-white" role="alert">
                                        <span class="text-sm">{{ Session::get('demo') }}</span>
                                        <button type="button" class="btn-close text-lg py-3 opacity-10"
                                            data-bs-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                </div>
                        @endif
                        <form method='POST' action='{{ route('pages.pendaftaran.postCreateStepThree') }}'>
                            @csrf
                            <div class="row">

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control border border-2 p-2" value='{{ $user->email }}' readonly>
                                    @error('email')
                                <p class='text-danger inputerror'>{{ $message }} </p>
                                @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Nama Lengkap</label>
                                    <input type="text" name="nama_lengkap" class="form-control border border-2 p-2" value='{{ $user->nama_lengkap }}' readonly>
                                    @error('nama_lengkap')
                                <p class='text-danger inputerror'>{{ $message }} </p>
                                @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">No. Telepon</label>
                                    <input type="number" name="no_telp" class="form-control border border-2 p-2" value='{{ $user->no_telp }}' readonly>
                                    @error('no_telp')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Jabatan</label>
                                    <select class="form-control border border-3 p-2" name="jabatan" readonly>
                                        @forelse (App\Models\Lowongan::all() as $lowongan)
                                            <option value="{{ $lowongan->id }}">{{ $lowongan->nama_lowongan }}</option>
                                        @empty
                                            <option value="">Tidak ada lowongan</option>
                                        @endforelse
                                    </select>
                                    @error('jabatan')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>


                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control border border-2 p-2" value='{{ $user->password }}' readonly>
                                    @error('password')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Jenis Kelamin</label><br>
                                    <select class="form-control border border-3 p-2" name="jenis_kelamin" readonly>
                                        <option value="pria">Pria</option>
                                        <option value="wanita">Wanita</option>
                                    </select>
                                    @error('jenis_kelamin')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Tanggal Lahir</label>
                                    <input type="date" name="tanggal_lahir" class="form-control border border-2 p-2" value='{{ $user->tanggal_lahir }}' readonly>
                                    @error('tanggal_lahir')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label for="floatingTextarea2">Alamat</label>
                                    <textarea class="form-control border border-2 p-2"
                                        placeholder=" Say something about your alamat" id="floatingTextarea2" name="alamat"
                                        rows="4" cols="50" readonly>{{ $user->alamat }}</textarea>
                                        @error('alamat')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
                                </div>
                            </div>
                            <div class="btn-group btn-group-lg d-flex justify-content-center" role="group" aria-label="Navigation">
                                <a href="{{ route('pages.pendaftaran.berkas', compact(['user', 'berkas'])) }}" type="button" class="btn bg-gradient-dark">Kembali</a>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn bg-gradient-dark" data-bs-toggle="modal" data-bs-target="#konfirmasi">
                                    Lanjut
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="konfirmasi" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="konfirmasiLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                        <div class="modal-content">

                                            <div class="modal-header text-center">
                                                <h3 class="modal-title font-weight-normal" id="konfirmasiLabel">Peringatan!</h3>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <div class="modal-body text-center">
                                                <div>
                                                    <img src="{{ asset('assets/img/warning.png') }}" alt="" width="100px">
                                                </div>
                                                <b>Apakah anda yakin data yang anda isi sudah benar?</b><br>
                                                Data yang sudah diisi tidak dapat diubah kembali.
                                            </div>
                                            <div class="modal-footer btn-group btn-group d-flex justify-content-center">
                                                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn bg-gradient-primary">OK</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>
        <x-footers.auth></x-footers.auth>
    </div>
    <x-plugins></x-plugins>

</x-layout>
