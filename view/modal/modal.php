 <!-- MODAL ALERT MESSAGE -->
 <div id="modal_delete" class="modal fade">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content tx-size-sm">
                <div class="modal-body tx-center pd-y-20 pd-x-20">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  
                  <div></div><br>
                  <h4 class="tx-semibold mg-b-20">Konfirmasi</h4>
                  <p class="mg-b-20 mg-x-20">Apakah Anda Yakin Akan Menghapus Data Ini ..?</p>
                  <a href="#" class="btn btn-danger tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium mg-b-20" id="delete_link">Hapus</a>
                    <button type="button" class="btn btn-success tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium mg-b-20" data-dismiss="modal">Cancel</button>
                  </button>
                </div><!-- modal-body -->
              </div><!-- modal-content -->
            </div><!-- modal-dialog -->
          </div><!-- modal -->

 
<script type="text/javascript">
    function confirm_modal(delete_url)
    {
      $('#modal_delete').modal('show', {backdrop: 'static'});
      document.getElementById('delete_link').setAttribute('href' , delete_url);
    }
</script>   