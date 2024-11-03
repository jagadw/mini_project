@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                    <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                  </svg>{{ __(' Informasi') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{-- {{ __('Kamu berhasil masuk!') }} --}}

                    {{-- {{ __('Selamat datang ') }}
                    {{ Auth::user()->name }}
                    {{ __(' di Gudang Uyah! Aplikasi ini dirancang untuk membantu pengguna mengelola barang di gudang dengan cara yang lebih efisien dan terorganisir.
                    ') }} --}}

                    <h3 class="text-center"><u>{{ __('Dokumentasi') }}</u></h3>

                    <ol>
                
                        <li>
                
                            <strong>{{ __('Halaman Utama') }}</strong>
                
                            <ul>
                
                                <li>{{ __('Pengguna mengunjungi halaman utama aplikasi.') }}</li>
                
                                <li>{{ __('Terdapat opsi untuk Login atau Registrasi.') }}</li>
                
                            </ul>
                
                        </li>
                
                        <li>
                
                            <strong>{{ __('Registrasi Pengguna') }}</strong>
                
                            <ul>
                
                                <li>{{ __('Jika pengguna baru, maka dapat memilih untuk mendaftar.') }}</li>
                
                                <li>{{ __('Pengguna mengisi formulir registrasi (nama, email, password).') }}</li>
                
                                <li>{{ __('Setelah mengisi, pengguna mengklik tombol Daftar.') }}</li>
                
                                <li>{{ __('Sistem memvalidasi data dan menyimpan informasi pengguna ke database.') }}</li>
                
                                <li>{{ __('Pengguna diarahkan ke halaman login setelah berhasil registrasi.') }}</li>
                
                            </ul>
                
                        </li>
                
                        <li>
                
                            <strong>{{ __('Login Pengguna') }}</strong>
                
                            <ul>
                
                                <li>{{ __('Pengguna mengisi email dan password di formulir login.') }}</li>
                
                                <li>{{ __('Setelah mengisi, pengguna mengklik tombol Login.') }}</li>
                
                                <li>{{ __('Sistem akan memvalidasi.') }}</li>
                
                                <li>{{ __('Jika valid, pengguna diarahkan ke halaman dashboard.') }}</li>
                
                                <li>{{ __('Jika tidak valid, pengguna menerima pesan kesalahan.') }}</li>
                
                            </ul>
                
                        </li>

                        <li>
                
                            <strong>{{ __('Informasi') }}</strong>
                
                            <ul>
                
                                <li>{{ __('Pengguna dapat membaca dokumentasi dari aplikasi.') }}</li>
                
                            </ul>
                
                        </li>

                        <li>
                
                            <strong>{{ __('Menu Inventori') }}</strong>
                
                            <ul>
                
                                <li>{{ __('Menampilkan daftar barang dari inventori.') }}</li>
                
                                <li>{{ __('Terdapat tombol untuk Tambah Barang dan opsi untuk Mencari barang.') }}</li>
                
                                <li>{{ __('Setiap barang di daftar memiliki opsi untuk Edit dan Hapus.') }}</li>
                
                            </ul>
                
                        </li>
                
                        <li>
                
                            <strong>{{ __('Menambah barang Baru') }}</strong>
                
                            <ul>
                
                                <li>{{ __('Pengguna mengklik tombol Tambah barang.') }}</li>
                
                                <li>{{ __('Pengguna diarahkan ke formulir untuk menambahkan barang baru (nama, kategori, kuantitas, satuan).') }}</li>
                
                                <li>{{ __('Setelah mengisi, pengguna mengklik tombol Simpan.') }}</li>
                
                                <li>{{ __('Sistem menyimpan barang baru ke database dan mengarahkan kembali ke dashboard.') }}</li>
                
                            </ul>
                
                        </li>
                
                        <li>
                
                            <strong>{{ __('Melihat Daftar barang') }}</strong>
                
                            <ul>
                
                                <li>{{ __('Pengguna dapat melihat semua barang yang telah ditambahkan.') }}</li>
                
                                <li>{{ __('Daftar dapat ditampilkan dalam format tabel dengan kolom untuk nama, kategori, kuantitas, satuan dan aksi (edit/hapus).') }}</li>
                
                                <li>{{ __('Pengguna dapat menggunakan fitur pencarian untuk menemukan barang berdasarkan nama atau kategori.') }}</li>
                
                            </ul>
                
                        </li>
                
                        <li>
                
                            <strong>{{ __('Mengedit barang') }}</strong>
                
                            <ul>
                
                                <li>{{ __('Pengguna mengklik tombol Edit di sebelah barang yang ingin diubah.') }}</li>
                
                                <li>{{ __('Pengguna diarahkan ke formulir edit dengan data barang yang sudah ada.') }}</li>
                
                                <li>{{ __('Pengguna melakukan perubahan dan mengklik tombol Update.') }}</li>
                
                                <li>{{ __('Sistem memperbarui informasi barang di database dan mengarahkan kembali ke dashboard.') }}</li>
                
                            </ul>
                
                        </li>
                
                        <li>
                
                            <strong>{{ __('Menghapus barang') }}</strong>
                
                            <ul>
                
                                <li>{{ __('Pengguna mengklik tombol Hapus di sebelah barang yang ingin dihapus.') }}</li>
                
                                <li>{{ __('Sistem meminta konfirmasi untuk memastikan pengguna ingin menghapus barang tersebut.') }}</li>
                
                                <li>{{ __('Jika pengguna mengonfirmasi, sistem menghapus barang dari database dan mengarahkan kembali ke dashboard.') }}</li>
                
                            </ul>
                
                        </li>
                
                        <li>
                
                            <strong>{{ __('Pencarian dan Filter') }}</strong>
                
                            <ul>
                
                                <li>{{ __('Pengguna dapat memasukkan nama atau kategori barang di kolom pencarian untuk menemukan barang tertentu.') }}</li>
                                
                                <li>{{ __('Daftar barang akan diperbarui secara otomatis berdasarkan pencarian.') }}</li>
                
                            </ul>
                
                        </li>

                        <li>
                
                            <strong>{{ __('Email') }}</strong>
                
                            <ul>
                
                                <li>{{ __('Pengguna dapat mengirim pesan kepada developer melalui email.') }}</li>
                
                            </ul>
                
                        </li>

                        <li>
                
                            <strong>{{ __('Reset') }}</strong>
                
                            <ul>
                
                                <li>{{ __('Pengguna dapat memilih opsi Reset untuk mengganti password dari akun mereka.') }}</li>
                
                                <li>{{ __('Pengguna hanya perlu mengisi email terdaftar lalu menekan Send Password Reset Link.') }}</li>
                                <li>Dilanjutkan dengan mengisi formulir reset password, jika berhasil password pengguna akan terganti dan sistem mengarahkan kembali ke halaman utama.</li>

                            </ul>
                
                        </li>

                        <li>
                
                            <strong>{{ __('Logout') }}</strong>
                
                            <ul>
                
                                <li>{{ __('Pengguna dapat memilih opsi Logout untuk keluar dari akun mereka.') }}</li>
                
                                <li>{{ __('Sistem akan menghapus sesi pengguna dan mengarahkan kembali ke halaman utama.') }}</li>
                
                            </ul>
                
                        </li>
                
                    </ol>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
