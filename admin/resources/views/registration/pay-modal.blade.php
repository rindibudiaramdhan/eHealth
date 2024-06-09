<!-- Logout Modal-->
<div class="modal fade" id="payModal" tabindex="-1" role="dialog" aria-labelledby="payModal"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pembayaran Layanan</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <input type="hidden" id="pay_id" name="pay_id" readonly>
                @csrf
            </div>
            <div class="modal-body">Apakah Anda yakin akan menyelesaikan pembayaran layanan untuk pasien ini?</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Kembali</button>
                <a class="btn btn-success" href="#" id="btn-pay">Bayar</a>
            </div>
        </div>
    </div>
</div>
