function handleLogin() {
    event.preventDefault(); 
    
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    
    const hardcodedUsername = 'user';
    const hardcodedPassword = 'pass';
    
    if (username === 'Ghadeer' && password === 'Ghadeer@12345'||
        username === 'Ayat' && password === 'Ayat@12345'||
        username === 'Ahmad' && password === 'Ahmad@12345'||
        username === 'Maher' && password === 'Maher@12345'||
        username === 'Ghada' && password === 'Ghada@12345'
    ) {
        alert('Login successful!');
        window.location.href = 'project.html';

    } else {
        alert('Invalid username or password');
    }
}
