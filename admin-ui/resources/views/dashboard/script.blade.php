
@section('script')
    {{-- script start --}}
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('admin-ui/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin-ui/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('admin-ui/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('admin-ui/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('admin-ui/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('admin-ui/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('admin-ui/js/demo/chart-pie-demo.js') }}"></script>
    {{-- script end --}}
@endsection
