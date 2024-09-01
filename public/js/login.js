document.getElementById('loginForm').addEventListener('submit', function(e) {
    e.preventDefault();

    let user = document.getElementById('user').value;
    let password = document.getElementById('password').value;

    if (!user || !password) {
        alert('Username and password are required.');
        return;
    }

    let tokenElement = document.querySelector('meta[name="csrf-token"]');
    let token = tokenElement ? tokenElement.getAttribute('content') : null;

    fetch('/login', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': token 
        },
        body: JSON.stringify({ user: user, password: password })
    })
    .then(response => {
        if (response.status === 200) {
            return response.json();
        } else if (response.status === 401) {
            throw new Error('Invalid credentials');
        } else {
            throw new Error('Unexpected error occurred');
        }
    })
    .then(data => {
        window.location.href = data.redirect;
    })
    .catch(error => {
        alert(error.message);
    });
});
