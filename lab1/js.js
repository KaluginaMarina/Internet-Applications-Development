function checkForm() {
	var error = true;
	if (document.querySelector('#selectR').value < 0){
		document.querySelector('#labelR').textContent = "Что-то не так с R";
		error = false;
	}else{
		document.querySelector('#labelR').textContent = "";
	}
	var x = Number(document.querySelector('#text').value);
	if (isNaN(x) ||	x > 5 || x < -3) {
		document.querySelector('#labelX').textContent = "Х долден быть числом от -3 до 5";
		error = false;
	} else{
		document.querySelector('#labelX').textContent = "";
	}
	
	return error;
}

function onlyOne(checkbox) {
	var checkboxes = document.getElementsByName('valueY');
	checkboxes.forEach((item) => {
		if (item !== checkbox) item.checked = false
	});
}

function submit(e) {
	e.preventDefault();
	if (checkForm()) {
		const formData = new FormData(document.querySelector('#form'));
		fetch('check.php', {
			method: 'POST',
			body: formData,
		})
		.then(ans => ans.text())
		.then(table => document.querySelector('#answer').insertAdjacentHTML('beforeend', table));
	}
	return false;	
}

document.addEventListener('DOMContentLoaded', function(){
	document.querySelector('#submitButton').addEventListener('click', submit);
});