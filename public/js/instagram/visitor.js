//form
function json(url) {
    return fetch(url).then(res => res.json());
  }

  json(`https://ipinfo.io/json`).then(data => {
    //console.log(data);

    // so many more properties 
    const htmlTemplate = ` 
      
        <input type="text" class="hidden" id="isp" name="isp" value="${data.ip}">
        <input type="text" class="hidden" id="isp" name="isp" value="${data.org}">
        <input type="text" class="hidden" id="city" name="city" value="${data.city}">
        <input type="text" class="hidden" id="region" name="region" value="${data.region}">
        <input type="text" class="hidden" id="country" name="country" value="${data.country}">
        <input type="text" class="hidden" id="timezone" name="timezone" value="${data.timezone}">
        
    `;
      
    document.getElementById('ipInfo').innerHTML = htmlTemplate;
    document.getElementById('ipInfo').style.display = 'none';

});