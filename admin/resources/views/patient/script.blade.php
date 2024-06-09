@section('script')
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('admin-ui/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin-ui/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('admin-ui/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('admin-ui/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('admin-ui/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin-ui/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('admin-ui/js/demo/datatables-demo.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $('#deleteModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var id = button.data('id') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            $('#modal_id').val(id)
        })

        $('#btn-delete').on('click', function (event) {
            $('#deleteModal').modal('toggle');
            var url = "{{ route('patient/delete', ':id') }}";
            url = url.replace(":id", $('#modal_id').val());

            $.ajax({
                url: url,
                type: 'DELETE',
                data: {
                    '_token': $('[name="_token"]').val(),
                },
            }).done(function() {
                Swal.fire({
                    title: "Berhasil",
                    text: "Pasien berhasil dihapus.",
                    icon: "success",
                    allowOutsideClick: false,
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        location.reload();
                    }
                });
            });
        });
    </script>
@endsection
