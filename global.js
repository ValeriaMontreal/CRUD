function valider(){
	var formEnreg=document.getElementById('formEnreg');
	var num=document.getElementById('num').value;
	var name=document.getElementById('name').value;
	var director=document.getElementById('director').value;
	var category=document.getElementById('category').value;
	var duration=document.getElementById('duration').value;
	var price=document.getElementById('price').value;
	
	var numRegExp=new RegExp("^[0-9]{1,4}$");
	if(num!="" && name!="" && price!="" )
		if(numRegExp.test(num))
			formEnreg.submit();
}


