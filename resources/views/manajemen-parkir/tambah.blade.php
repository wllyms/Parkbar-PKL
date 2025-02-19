<!-- Modal -->
<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-gradient-primary">
                <h5 class="modal-title text-white" id="tambahModalLabel">Tambah Data</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <!-- Form Tambah Data -->
            <form action="{{ route('manajemen-parkir.submit') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="plat_kendaraan">Plat Kendaraan</label>
                        <input type="text" class="form-control" name="plat_kendaraan" id="plat_kendaraan" required>
                    </div>
                    <div class="form-group">
                        <label for="jenis_tarif">Tarif</label>
                        <select class="form-control" name="jenis_tarif" id="jenis_tarif">
                            @foreach ($tarif as $data)
                                <option value="{{ $data->id }}">
                                    {{ $data->jenis_tarif }} | {{ $data->kategori->nama_kategori ?? '-' }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jam_masuk">Jam Masuk</label>
                        <input type="text" class="form-control" name="jam_masuk" id="jam_masuk"
                            value="{{ $jam }}">
                    </div>
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="text" class="form-control" name="tanggal" id="tanggal"
                            value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" readonly>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
