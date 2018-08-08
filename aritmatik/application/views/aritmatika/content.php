<div class="container">
	<div class="row">
		<div class="col-md-6">
				<form method="POST" id="form1">
				  <div class="form-group">
				    <label for="angka1">Masukkkan Angka Pertama : </label>
				    <input type="number" class="form-control" id="angka1" name="angka1" placeholder="Masukkan Angka Pertama">
				    <small id="eAngka1" class="form-text text-muted" style="color: red;display: none">Mohon untuk memasukkan input berupa angka</small>
				  </div>
				  <div class="form-group">
				    <label for="angka2">Masukkkan Angka Kedua : </label>
				    <input type="number" class="form-control" id="angka2" name="angka2" placeholder="Masukkan Angka Kedua">
				    <small id="eAngka2" class="form-text text-muted" style="color: red;display: none">Mohon untuk memasukkan input berupa angka</small>
				  </div>
				  <div class="form-group">
				    <label for="angka2">Aritmatika : </label>
				    <select id="aritmatika" name="aritmatika" class="form-control">
				    	<option value="+">+</option>
				    	<option value="-">-</option>
				    	<option value="*">*</option>
				    	<option value="/">/</option>
				    </select>
				  </div>
				  <button type="submit" class="btn btn-primary btn_submit" name="submit" value="+" ><b>Count</b></button>
				</form>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-4">
			<div class="well">
			  	<b>
			  		<center>
			  			Hasil
			  		</center>
			  	</b>
			  	<br>
			  	<label id="hasil"></label><br>
			  	<label id="terbilang"></label>
			</div>
		</div>
	</div>
</div>



<script>
 $(function(){
 	function kosong()
 	{
    	eAngka1.style.display='none';
    	eAngka2.style.display='none';
 	}
	$(".btn_submit").click(function(e){
	  	kosong();
	  	var angka1=$('#angka1').val();
	  	var angka2=$('#angka2').val();
	  	
	    if (!angka1){
    		eAngka1.style.display='block';
    	}
    	if (!angka2){
    		eAngka2.style.display='block';
    	}
    	if (!!angka1 && !!angka2){
	    	$.ajax({
		       url:'<?php echo site_url('aritmatika/hitung') ?>',
		       type: 'POST',
		       data: $("#form1").serialize(),
		       success: function(result){
		           data=result.split("||");
						$("#terbilang").text(data[0]);
						$("#hasil").text(data[1]);
						responsiveVoice.speak(data[1],"Indonesian Male");
		       },
		       error: function(){
		           alert("Gagal")
		       }
	   	});
    }
   e.preventDefault();
 });
});
</script>