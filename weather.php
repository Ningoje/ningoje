<!-- weather find by city -->
<h2 class="page-header text-center">weather</h2>

<!-- textfiled to enter city -->
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <input type="text" id="city" class="form-control" placeholder="Enter city name">
    </div>
    <div class="col-md-4">
        <!-- button to search -->

        <button id="searchW" class="btn btn-primary" onclick="fetchData()">Search</button>
    </div>

</div>
<!-- card to display weather -->
<div class="card weather-card m-2 p-2">
    <div class="row m-3 p-3">
        <div class="col-md-2"></div>
        <div class="col-md-8" id="weather-results">
            <!-- info -->
            <p class="text-center">Enter city name to get weather information</p>


        </div>
        <div class="col-md-2">

        </div>
    </div>

</div>
<!-- use php to fetch -->
<script>

    const url = 'https://api.api-ninjas.com/v1/weather?city=';
    const api_key = 'pVu+077nJZLR5aSU3rT4Uw==Mjk3lCw4PETJptdl';
    //use ajax to fetch data
    async function fetchData() {
        //show loading
        document.getElementById('weather-results').innerHTML = modal_content
        const city = document.getElementById('city').value;
        //get counntry
        const country = await fetch('https://api.api-ninjas.com/v1/city?name=' + city, {
            headers: { 'X-Api-Key': api_key },
        })
            .then(res => res.json())
            .then(data => data[0].country);
        $.ajax({
            method: 'GET',
            url: 'https://api.api-ninjas.com/v1/weather?city=' + city,
            headers: { 'X-Api-Key': api_key },
            contentType: 'application/json',
            success: function (result) {
                //set icon
                $('#icon').attr('src', `https://flagsapi.com/${country}/flat/64.png`);
                src_ = `https://flagsapi.com/${country}/flat/64.png`
                document.getElementById('weather-results').innerHTML = `
       <div class="card m-2 p-2" style="width: 18rem;">
       <img src="${src_}" class="card-img-top" alt="${country}">
         <div class="card-body text-center">
            <h5 class="card-title">${city}</h5>
            <p class="card-text">Temperature: ${result.temp}°C</p>
            <p class="card-text">Feels like: ${result.feels_like}°C</p>
            <p class="card-text">Humidity: ${result.humidity}%</p>
            <p class="card-text">Min Temperature: ${result.min_temp}°C</p>
            <p class="card-text">Max Temperature: ${result.max_temp}°C</p>
            <p class="card-text">Wind Speed: ${result.wind_speed}km/h</p>
            <p class="card-text">Wind Degrees: ${result.wind_degrees}°</p>
            <p class="card-text">Sunrise: ${result.sunrise}</p>
            <p class="card-text">Sunset: ${result.sunset}</p>
        </div>
    </div>
       `;
            },
            error: function ajaxError(jqXHR) {
                console.error('Error: ', jqXHR.responseText);
            }
        });
    }
</script>
<!-- 



 {"cloud_pct":100,"temp":22,"feels_like":22,"humidity":75,"min_temp":22,"max_temp":22,"wind_speed":1.93,"wind_degrees":99,"sunrise":1699240151,"sunset":1699283811}
  -->