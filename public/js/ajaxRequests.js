window.addEventListener('load', function() {

    //Api add friend
    var users = document.querySelectorAll('.addFriend');

    console.log(users);

    users.forEach(function(value){
        // console.log(value.getAttribute('id'));
        value.addEventListener('click', function() {
            
            var app = this;
            var api = axios.get('/add-friend-axios/' + value.getAttribute('id'))
              .then(function (response) {
               
              })
              .catch(function (error) {
                console.log(error);
              })
        }); 
    });
    



});