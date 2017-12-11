$(document).ready(function () {

    //Api add friend
    if(document.querySelectorAll('.addFriend')) {
        var users = document.querySelectorAll('.addFriend');    
        
        users.forEach(function(value){
            value.addEventListener('click', function() {
                addFriend(value)
            }); 
        });
    }

    if(document.querySelectorAll('.deleteFriend')) {
        var users = document.querySelectorAll('.deleteFriend');    
        
        users.forEach(function(value){
            value.addEventListener('click', function() {
                deleteFriend(value)
            }); 
        });
    }
    

    function addFriend(value) {

        var hideClass = value.getAttribute('id')
        
        axios.get('/add-friend-axios/' + value.getAttribute('id'))
          .then(function (response) {
              if(response.data.friendAdded) {

                $('.' + hideClass).hide(500)

                $.toast({
                    heading: 'New friend added!'
                    , text: 'You will find it on friends section'
                    , position: 'top-right'
                    , loaderBg: '#fb9678'
                    , icon: 'info'
                    , hideAfter: 5000
                    , stack: 6
                })
              }
              
          })
          .catch(function (error) {
            alert(error);
          })
    }

    function deleteFriend(value) {
        var hideClass = value.getAttribute('id')
                
        axios.get('/delete-friend-axios/' + value.getAttribute('id'))
            .then(function (response) {

                if(response.data.friendDeleted) {
                    $('.' + hideClass).hide(500)

                        $.toast({
                            heading: 'Friend deleted!'
                            , text: 'This friend will no longer be available at your friends list'
                            , position: 'top-right'
                            , loaderBg: '#fb9678'
                            , icon: 'info'
                            , hideAfter: 5000
                            , stack: 6
                        })
                }
                      
                  })
            .catch(function (error) {
                alert(error);
            })
    }
    
});