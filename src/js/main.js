var weather_cards = document.querySelectorAll('.weather .weather-card');

for(var i = 0; i < weather_cards.length; i++)
{
    if (weather_cards[i].classList.contains('Rain'))
        weather_cards[i].style.background = "#004986";    
    
    else if (weather_cards[i].classList.contains('Clouds'))
        weather_cards[i].style.background = "#87accb";
    
    else if (weather_cards[i].classList.contains('Clear'))
        weather_cards[i].style.background = "#ffa334";
        
    else
        weather_cards[i].style.background = "#fefefe";
}