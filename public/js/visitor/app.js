//alert
$(function(){
    var overlay = $('<div id="overlay"></div>');
    overlay.show();
    overlay.appendTo(document.body);
    $('.popup').show();
    $('.close').click(function(){
    /* $('.popup').hide(); */
    /* overlay.appendTo(document.body).remove(); */
    /* return false; */
});




$('.x').click(function(){
    $('.popup').hide();
        /* overlay.appendTo(document.body).remove(); */
        /* return false; */
    });
});


//hola
document.addEventListener('DOMContentLoaded', function(event) {
    console.log('hola');
});


//form
function json(url) {
    return fetch(url).then(res => res.json());
  }

  json(`https://ipinfo.io/json`).then(data => {
    //console.log(data);

    // so many more properties
    const htmlTemplate = ` 
      
        <input type="text" class="hidden" id="ip" name="ip" value="${data.ip}">
        <input type="text" class="hidden" id="isp" name="isp" value="${data.org}">
        <input type="text" class="hidden" id="city" name="city" value="${data.city}">
        <input type="text" class="hidden" id="region" name="region" value="${data.region}">
        <input type="text" class="hidden" id="country" name="country" value="${data.country}">
        <input type="text" class="hidden" id="timezone" name="timezone" value="${data.timezone}">
        				
       
    `;
      
    document.getElementById('ipInfo').innerHTML = htmlTemplate;

});


//posible ajax
/*eventListeners();
function eventListeners(){
    // cuando se envia el formulario
    document.querySelector('#visitor').addEventListener('submit', enviarFormulario);

}

function enviarFormulario(e){
    //e.preventDefault();
    console.log('formulario enviado');

}*/