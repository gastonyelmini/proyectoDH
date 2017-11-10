$(document).ready(function () {
  // Init ScrollMagic
  var controller = new ScrollMagic.Controller();
  // loop through each .project element
  $('.project').each(function(){
    // buld a scene
    var ourScene = new ScrollMagic.Scene({
      triggerElement: this,
      //duration: '90%',
      //reverse: false,
      triggerHook: 0.9
    })
    .setClassToggle(this, 'fade-in') // add class to #img-1
    // .addIndicators({
    //   name: 'fade in'
    // })
    .addTo(controller);
  });


  ///////////////
  $('.diagonal').each(function(){
    // buld a scene
    var ourScene = new ScrollMagic.Scene({
      triggerElement: this,
      //duration: '90%',
      //reverse: false,
      triggerHook: 0.9
    })
    .setClassToggle(this, 'diagonal-on') // add class to #img-1
    // .addIndicators({
    //   name: 'Diagonal On'
    // })
    .addTo(controller);
  });

  //////////////
  $('.diagonal-b').each(function(){
    // buld a scene
    var ourScene = new ScrollMagic.Scene({
      triggerElement: this,
      //duration: '90%',
      //reverse: false,
      triggerHook: 0.9
    })
    .setClassToggle(this, 'diagonal-on') // add class to #img-1
    // .addIndicators({
    //   name: 'Diagonal On'
    // })
    .addTo(controller);
  });
});
