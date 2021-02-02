

<link rel="stylesheet" href="style.css">



<form name="myform" onsubmit="return validation()">
	<label>kota</label>
	<input type="text" name="kota" maxlength="10">

	<div id="error"></div>

	<input type="submit" value="SUBMIT">
</form>



<script>
      var kota=document.forms['myform']['kota'];
      var errors=document.getElementById('error');
      function validation()
      {
          if(kota.value=='')
          {
            errors.innerHTML="tidak boleh kosong";
            errors.style.display="block";
            return false;
          }
          else if(kota.value.length<5)
          {
            errors.innerHTML="min  5 kara";
            errors.style.display="block";
            return false;
          }
		  else if(telp.value.length>14)
          {
			alert("max 14 kara");
            errors.innerHTML="max 14 kara";
            errors.style.display="block";
            return false;
          }
          return true;
      }
</script>