$(document).ready(function () {

    //Api add friend
    var users = document.querySelectorAll('.addFriend');

    users.forEach(function(value){
        // console.log(value.getAttribute('id'));
        value.addEventListener('click', function() {
            
            var hideClass = value.getAttribute('id')
            
            axios.get('/add-friend-axios/' + value.getAttribute('id'))
              .then(function (response) {
                  if(response.data.friendAdded) {

                    $('.' + hideClass).hide(500)

                    $.toast({
                        heading: 'New friend added!'
                        , text: 'You will find it on friends section'
                        , position: 'top-right'
                        , loaderBg: '#ff6849'
                        , icon: 'info'
                        , hideAfter: 5000
                        , stack: 6
                    })
                  }
                  
              })
              .catch(function (error) {
                alert(error);
              })
        }); 
    });
    



});