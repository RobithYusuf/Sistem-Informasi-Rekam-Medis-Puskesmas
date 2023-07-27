<div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="editProfileModalLabel"><strong>Edit Profil</strong></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('update_profile_dokter') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="foto_profil">Foto Profil Sekarang</label>
                            <br>
                            @if (Auth::user()->foto_profil)
                            <img src="{{ asset('storage/FotoDokter/'.Auth::user()->foto_profil) }}" alt="User Image" style="width: 100px; height: 100px; object-fit: cover; margin-left: 15px;">
                            @else
                            <img src="{{ asset('images/default_foto_profil.jpeg') }}" alt="User Image" style="width: 100px; height: 100px; object-fit: cover;">
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="foto_profil">Ganti Foto Profil Baru</label>
                            <input type="file" class="form-control-file" id="foto_profil" name="foto_profil" style="height: 100px;">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" class="form-control" id="username" name="" autocomplete="username" value="{{ Auth::user()->username }}" disabled>
                        <small id="usernameHelp" class="form-text text-muted">Username lama</small>
                    </div>
                    <div class="form-group">
                        <label for="username">Username Baru (Opsional)</label>
                        <input type="text" class="form-control" id="username" placeholder="Masukan Username Baru" name="username" autocomplete="username">
                        <small id="usernameHelp" class="form-text text-muted">Masukkan username baru jika ingin mengubah!</small>
                    </div>

                    <div class="form-group">
                        <label for="new_password">Input Password Baru (Opsional)</label>
                        <input type="password" class="form-control" id="new_password" placeholder="Masukan Password Baru" name="new_password" autocomplete="new-password">
                        <small id="usernameHelp" class="form-text text-muted">Masukan Password baru jika ingin ubah!</small>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>