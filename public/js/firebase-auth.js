(function() {
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyBzVc5fYjlTZN8jzdj9Z_ZkomZx-07VWQw",
    authDomain: "boole-chat.firebaseapp.com",
    databaseURL: "https://boole-chat.firebaseio.com",
    projectId: "boole-chat",
    storageBucket: "boole-chat.appspot.com",
    messagingSenderId: "430993175800"
  };
  firebase.initializeApp(config);

  const inputEmail = document.getElementById('email');
  const inputPass = document.getElementById('password');
  const loginForm = document.getElementById('loginform');

  //Add login event
  loginForm.addEventListener('click', e => {
    const email = inputEmail.value;
    const pass = inputPass.value;

    // firebase.auth().createUserWithEmailAndPassword(email, pass).catch(function(error) {
    //
    //   // Handle Errors here.
    //   var errorCode = error.code;
    //   var errorMessage = error.message;
    // });

    firebase.auth().setPersistence(firebase.auth.Auth.Persistence.SESSION).then(function() {
      // Existing and future Auth states are now persisted in the current
      // session only. Closing the window would clear any existing state even
      // if a user forgets to sign out.
      // ...
      // New sign-in will be persisted with session persistence.
      return firebase.auth().createUserWithEmailAndPassword(email, pass);
    }).catch(function(error) {
      // Handle Errors here.
      var errorCode = error.code;
      var errorMessage = error.message;
    });

  });

}());
