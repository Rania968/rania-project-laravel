document.getElementById('loginForm').addEventListener('submit', function(event){
    event.preventDefault();
    
    const correctUsername = 'imut';
    const correctPassword = 'imut';
    
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    
    if(username === correctUsername && password === correctPassword){
        alert("login berhasil");
        window.location.href = 'index.blade.php';
    }else{
        alert("username atau password tidak sesuai");
    }
    
    });