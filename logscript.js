function login() {
    var usern = document.getElementById('username').value;
    var pass = document.getElementById('password').value;
    if(usern.length == '' && pass.length == ''){
        alert('Username and Password Field is empty');
        return false;
    }else if(usern.length == ''){
        alert('Username cannot be Empty');
        return false;
    }else if(pass.length == ''){
        alert('Password cannot be empty');
        return false;
    }else {
        document.getElementById('signupForm').submit();
    }
}

function onSignIn(googleUser) {
    var profile = googleUser.getBasicProfile();
    console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
    console.log('Name: ' + profile.getName());
    console.log('Image URL: ' + profile.getImageUrl());
    console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
}

gapi.auth2.init({
    client_id: '752569437279-m81gn5ppqdrv112iaap5p5ufl0rdh6ii.apps.googleusercontent.com',
    redirect_uri: 'http://127.0.0.1:5500/owais.html',
    
});


console.log('Client ID:', '752569437279-m81gn5ppqdrv112iaap5p5ufl0rdh6ii.apps.googleusercontent.com');
console.log('Redirect URI:', 'http://127.0.0.1:5500/owais.html');
  
  