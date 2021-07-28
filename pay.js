function pay(){
	if((check_ccNum()==true)&&
	(check_expDate()==true) &&
	(check_cvv()==true)){ 
		return true;
	}
	else{
		return false;
	}
}

		
		
function check_ccNum(){
	let ccNum = document.getElementById("ccNum").value;
	const patt = /^(?:5[1-5][0-9]{14})$/;
	if(ccNum.match(patt)) return true;
	else alert("Incorrect Credit card number.");
	return false;
	}
		
		
function check_expDate(){
	let month = document.getElementById("expMonth").value;
	let year = document.getElementById("expYear").value;
					
	let expiryDate = new Date();
	let today = new Date();
					
	expiryDate.setFullYear(year, month-1);
					
	const patt1 = /^(?:[0-9]{1,2})$/;
	const patt2 = /^(?:[0-9]{4})$/;
					
	if(expiryDate > today)  return true;
	else alert("Your card has expired.");
	return false;
		}
		
		
function check_cvv(){
	let secCode = document.getElementById("secCode").value;
	const patt = /^(?:[0-9]{3,4})$/;
	if(secCode.match(patt))  return true;
	else alert("Wrong CVV.");
	return false;
	}
