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
                {{-- <div class="row gx-4 mb-2">
                    <div class="col-auto">
                        <div class="avatar avatar-xl position-relative">
                            <img src="{{ asset('assets') }}/img/bruce-mars.jpg" alt="profile_image"
                                class="w-100 border-radius-lg shadow-sm">
                        </div>
                    </div>
                    <div class="col-auto my-auto">
                        <div class="h-100">
                            <h5 class="mb-1">
                                {{ auth()->user()->name }}
                            </h5>
                            <p class="mb-0 font-weight-normal text-sm">
                                CEO / Co-Founder
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                        <div class="nav-wrapper position-relative end-0">
                            <ul class="nav nav-pills nav-fill p-1" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1 active " data-bs-toggle="tab" href="javascript:;"
                                        role="tab" aria-selected="true">
                                        <i class="material-icons text-lg position-relative">home</i>
                                        <span class="ms-1">App</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href="javascript:;"
                                        role="tab" aria-selected="false">
                                        <i class="material-icons text-lg position-relative">email</i>
                                        <span class="ms-1">Messages</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href="javascript:;"
                                        role="tab" aria-selected="false">
                                        <i class="material-icons text-lg position-relative">settings</i>
                                        <span class="ms-1">Settings</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
                <div class="card card-plain h-100">
                    <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-md-8 d-flex align-items-center">
<<<<<<< HEAD
                                <h3 class="mb-3 ">ISI BIODATA</h3>
=======
                                <h6 class="mb-3">BIODATA</h6>
>>>>>>> 4d56dc791a5a919e3c0705cf0adf5aad46aa1eb7
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
                        <form method='POST' action='{{ route('user.store') }}'>
                            @csrf
                            <div class="row">

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control border border-2 p-2" value='{{ old('email') }}'>
                                    @error('email')
                                <p class='text-danger inputerror'>{{ $message }} </p>
                                @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Nama Lengkap</label>
                                    <input type="text" name="nama_lengkap" class="form-control border border-2 p-2" value='{{ old('nama_lengkap') }}'>
                                    @error('nama_lengkap')
                                <p class='text-danger inputerror'>{{ $message }} </p>
                                @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">No. Telepon</label>
                                    <input type="number" name="no_telp" class="form-control border border-2 p-2" value='{{ old('no_telp') }}'>
                                    @error('no_telp')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Jabatan</label>
<<<<<<< HEAD
                                    <select class="form-control border border-3 p-2" name="jabatan">
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


=======
                                    <input type="number" name="jabatan" class="form-control border border-2 p-2" value='{{ old('jabatan') }}'>
                                    @error('jabatan')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

>>>>>>> 4d56dc791a5a919e3c0705cf0adf5aad46aa1eb7
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control border border-2 p-2" value='{{ old('password') }}'>
                                    @error('password')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Jenis Kelamin</label><br>
                                    <select class="form-control border border-3 p-2" name="jenis_kelamin">
                                        <option value="pria">Pria</option>
                                        <option value="wanita">Wanita</option>
<<<<<<< HEAD
                                    </select>
=======
                                      </select>
>>>>>>> 4d56dc791a5a919e3c0705cf0adf5aad46aa1eb7
                                    @error('jenis_kelamin')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Tanggal Lahir</label>
                                    <input type="date" name="tanggal_lahir" class="form-control border border-2 p-2" value='{{ old('tanggal_lahir') }}'>
                                    @error('tanggal_lahir')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label for="floatingTextarea2">Alamat</label>
                                    <textarea class="form-control border border-2 p-2"
                                        placeholder=" Say something about your alamat" id="floatingTextarea2" name="alamat"
                                        rows="4" cols="50">{{ old('alamat') }}</textarea>
                                        @error('alamat')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
                                </div>
                            </div>
<<<<<<< HEAD
                            <div class="btn-group btn-group-lg d-flex justify-content-center" role="group" aria-label="Navigation">
                                <button type="button" class="btn bg-gradient-dark">Kembali</button>
                                <button type="button" class="btn bg-gradient-dark">Lanjut</button>
                            </div>
=======
                            <button type="submit" class="btn bg-gradient-dark">Submit</button>
>>>>>>> 4d56dc791a5a919e3c0705cf0adf5aad46aa1eb7
                        </form>

                    </div>
                </div>
            </div>

        </div>
        <x-footers.auth></x-footers.auth>
    </div>
    <x-plugins></x-plugins>

</x-layout>