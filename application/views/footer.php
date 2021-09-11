<footer class="footer mt-auto footer-light">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 small">Copyright &#xA9; FEBRI063 2020</div>
                            <div class="col-md-6 text-md-right small">
                                <a href="#!">Privacy Policy</a>
                                &#xB7;
                                <a href="#!">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="<?= base_url()?>sbadmin/code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="<?= base_url()?>sbadmin/stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" ></script>
        <script src="<?= base_url()?>sbadmin/themes.startbootstrap.com/sb-admin-pro/js/scripts.js"></script>
        <script src="<?= base_url()?>sbadmin/cdn.jsdelivr.net/momentjs/latest/moment.min.js" ></script>
        <script src="<?= base_url()?>sbadmin/jquery.js"></script>
        <!-- <script src="<?= base_url()?>sbadmin/themes.startbootstrap.com/sb-admin-pro.js"></script> -->
        </body>
		<script type="text/javascript">
		 function prosesLogout(){
        $.ajax({
            url : '<?= base_url('login/logout'); ?>',
            method : "get",
            dataType : "json",
            data : $('#form_login').serialize(),
            success : (respon)=>{
                console.log(respon);
                if(respon.status){
                    location.reload();
                }else{
                    location.reload();
                }
            }

        })
    }
		 function prosesLogin(){
        $.ajax({
            url : '<?= base_url('login/proses'); ?>',
            method : "post",
            dataType : "json",
            data : $('#form_login').serialize(),
            success : (respon)=>{
                console.log(respon);
                if(respon.status){
                    location.reload();
                }else{
                    $('#notif').html('<div class="alert alert-warning" role="alert">Email / Password Salah</div>');
                }
            }

        })
    }
  
  $('#pay-button').click(function (event) {
	event.preventDefault();
	// $(this).attr("disabled", "disabled");
  var order_id = $('#order_id').val();
	var total_bayar = $('#total_bayar').val();
  $.ajax({
	url: '<?=site_url()?>/snap/token',
	data : {
		order_id : order_id, 
		total_bayar: total_bayar
	},
	method : "POST",
	cache: false,

	success: function(data) {
	  //location = data;

	//   console.log('token = '+data);
	  
	//   var resultType = document.getElementById('result-type');
	//   var resultData = document.getElementById('result-data');

	//   function changeResult(type,data){
	// 	$("#result-type").val(type);
	// 	$("#result-data").val(JSON.stringify(data));
	// 	//resultType.innerHTML = type;
	// 	//resultData.innerHTML = JSON.stringify(data);
	//   }

	  snap.pay(data, {
		
		onSuccess: function(result){
			alert("Pembayaran Sukses");
		  location.reload();
		},
		onPending: function(result){
			alert("Silahkan Selesaikan Transaksi");
		  location.reload();
		},
		onError: function(result){
			alert ("Transaksi Gagal");
			location.reload();
		},
		onClose: function(result){
			alert ("Transaksi Gagal!, Silahkan Ulangi Pembayaran");
			location.reload();
		}
		
	  });
	}
  });
});
</script>
<!-- Mirrored from themes.startbootstrap.com/sb-admin-pro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Oct 2020 10:49:55 GMT -->
</html>