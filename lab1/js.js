function checkForm() {
	return true;
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