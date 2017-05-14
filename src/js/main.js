// Get all weather cards
var weather_cards = document.querySelectorAll('.weather .weather-card');

// Asign background color to weather cards in function of weather state
for(var i = 0; i < weather_cards.length; i++)
{
    if (weather_cards[i].classList.contains('Rain'))
        weather_cards[i].style.background = "#336086";    
    
    else if (weather_cards[i].classList.contains('Clouds'))
        weather_cards[i].style.background = "#50677b";
    
    else if (weather_cards[i].classList.contains('Drizzle'))
        weather_cards[i].style.background = "#557691";
    
    else if (weather_cards[i].classList.contains('Thunderstorm'))
        weather_cards[i].style.background = "#2a3741";
    
    else if (weather_cards[i].classList.contains('Snow'))
    {
        weather_cards[i].style.background = "#d9e3f2";
        weather_cards[i].style.color = "#2e2e2e";
    }   
    
    else if (weather_cards[i].classList.contains('Clear'))
        weather_cards[i].style.background = "#1ea8d1";
    
    else if (weather_cards[i].classList.contains('Atmosphere'))
        weather_cards[i].style.background = "#be935f";
    
    else if (weather_cards[i].classList.contains('Extreme'))
        weather_cards[i].style.background = "#170101";
    
    else if (weather_cards[i].classList.contains('add-card'))
        weather_cards[i].style.background = "#fefefe";
    
    else
        weather_cards[i].style.background = "#2e2e2e";
}

// Submit weather.php form on enter
function checkSubmit(event)
{
    if(event && event.keyCode == 13) {
        document.forms[0].submit();
    }
}