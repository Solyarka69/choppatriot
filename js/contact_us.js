document.getElementById('form').addEventListener('submit', function(event) {
    event.preventDefault();
    
    const name = document.getElementById('input-name').value;
    const email = document.getElementById('input-mail').value;
    const message = document.getElementById('input-message').value;
    
    if(name.trim() === '' || email.trim() === '' || message.trim() === '') {
        alert('Пожалуйста, заполните все поля данных.');
    }  
    else {
        alert('Ваша форма успешно отправлена!');
        document.getElementById('form').reset();
    }
});

function check() {
    var submit = document.getElementsByName('submit')[0];
    if (document.getElementById('input-personal-data-btn').checked) {
        alert('Подтвердите согласие на обработку ваших данных.');
        submit.disabled = '';
    }
    else {
        submit.disabled = 'disabled';
    }
}
