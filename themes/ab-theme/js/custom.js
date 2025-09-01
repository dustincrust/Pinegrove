jQuery.noConflict();

(function($){

  $.fn.extend({ 
    rotaterator: function(options) {

      var defaults = {
        fadeSpeed: 500,
        pauseSpeed: 100,
        child:null
      };
      
      var options = $.extend(defaults, options);

      return this.each(function() {
        var o =options;
        var obj = $(this);                
        var items = $(obj.children(), obj);

        items.each(function() {$(this).hide();})
        if(!o.child){
          var next = $(obj).children(':first');
        }else{
          var next = o.child;
        }
        $(next).fadeIn(o.fadeSpeed, function() {
          $(next).delay(o.pauseSpeed).fadeOut(o.fadeSpeed, function() {
            var next = $(this).next();
            if (next.length == 0){
              next = $(obj).children(':first');
            }
            $(obj).rotaterator({child : next, fadeSpeed : o.fadeSpeed, pauseSpeed : o.pauseSpeed});
          })
        });
      });
    }
  });

  $('#wpforms-447-field_1-container').each(function(i) {
    $(this).prepend('<i class="fas fa-envelope icon-env"></i>')
})

$('#next_nav').click(function () {
  $( "#nav" ).animate({
    scrollLeft: '+=230px'
  });
});
$('#prev_nav').click(function () {
  $( "#nav" ).animate({
    scrollLeft: '-=230px'
  });
});

$('#next_nav_mt').click(function () {
  $( "#nav_mt" ).animate({
    scrollLeft: '+=230px'
  });
});
$('#prev_nav_mt').click(function () {
  $( "#nav_mt" ).animate({
    scrollLeft: '-=230px'
  });
});
  
})(jQuery);

function search_terms() { 
  let input = document.getElementById('searchbar').value 
  input=input.toLowerCase(); 
  let x = document.getElementsByClassName('terms'); 
  for (i = 0; i < x.length; i++) {  
      if (!x[i].innerHTML.toLowerCase().includes(input)) { 
          x[i].style.display="none"; 
      } 
      else { 
          x[i].style.display="";                  
      } 
  } 
} 


//This bit calls the function that jquery is extended with above an the div called rotate

jQuery(document).ready(function() {
  jQuery('#rotate').rotaterator({fadeSpeed:1000, pauseSpeed:1000});
  
});

// document.getElementById('submit').onclick = function() {
//   let selected = [];
//   for (let option of document.getElementById('situation').options) {
//     if (option.selected) {
//       console.log('option:', option.data-value1)
//       // selected.push(option.value);
//     }
//   }
//   // alert(selected);
// }
// let selected = []

// document.getElementById('situation-form').onsubmit = function () {
//   console.log('submitted');

//   if (($(this).find(':selected').data('value1')) !== undefined) {
//     selected.push($(this).find(':selected').data('value1'));
//   }
//   if (($(this).find(':selected').data('value2')) !== undefined) {
//     selected.push($(this).find(':selected').data('value2'));
//   }
//   console.log('selected', selected);
// };

window.addEventListener("DOMContentLoaded", () => {

  let lastScrollTop = 0;
  const header = document.getElementById('masthead');

  window.addEventListener('scroll', function () {
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTop > 100) {
      header.classList.add('scrolled-header');
    } else {
      header.classList.remove('scrolled-header');
    }

    if (scrollTop > lastScrollTop) {
      header.classList.add('hide-header');
    } else {
      header.classList.remove('hide-header');
    }
    lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; // For Mobile or negative scrolling
  }, false);

  function initFormValidation() {
    const currentSituation = document.getElementById('current-situation');
    const lookingFor = document.getElementById('looking-for');
    const submitButton = document.getElementById('submit');

    function checkDropdowns() {
      if (currentSituation.value !== "" && lookingFor.value !== "") {
        submitButton.disabled = false;
      } else {
        submitButton.disabled = true;
      }
    }
    if(currentSituation)
    currentSituation.addEventListener('change', checkDropdowns);
    
    if(lookingFor)
    lookingFor.addEventListener('change', checkDropdowns);
  }

  initFormValidation();

});