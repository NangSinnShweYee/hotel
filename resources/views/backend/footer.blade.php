<footer class="sticky-footer bg-white">
    <div class="container my-auto">
      <div class="copyright text-center my-auto">
        <span>Copyright &copy; Your Website 2019</span>
      </div>
    </div>
  </footer>
  <!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
    <div class="modal-footer">
      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="">
        @csrf
        <input type="submit" class="btn btn-primary" value="Logout">
      </form>
     
    </div>
  </div>
</div>
</div>

<!-- Bootstrap core JavaScript-->
<script src=" {{asset('admintemplate/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('admintemplate/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="{{asset('admintemplate/js/demo/datatables-demo.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('admintemplate/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
<script src="{{asset('admintemplate/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admintemplate/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
<!-- Custom scripts for all pages-->
<script src="{{asset('admintemplate/js/sb-admin-2.min.js')}}"></script>
<script type="text/javascript">
  $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
</body>

</html>