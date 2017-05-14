// Get all weather cards
var weather_cards = document.querySelectorAll('.weather .weather-card');

// Asign background color to weather cards in function of weather state
for(var i = 0; i < weather_cards.length; i++)
{
    if (weather_cards[i].classList.contains('Rain'))
        weather_cards[i].style.background = "#336086";    
    
    else if (weather_cards[i].classList.contains('Clouds'))
        weather_cards[i].style.background = "#667a8d";
    
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

// Get add card elements
var add_card_cross = document.querySelector('.weather .add-card .add');
var add_card_form = document.querySelector('.weather .add-card .form-horizontal');

add_card_cross.addEventListener('click', function()
{
    if (add_card_cross.classList.contains('show'))
    {
        add_card_cross.classList.remove('show');
        add_card_cross.classList.add('hidden');
        
        if (add_card_form.classList.contains('hidden'))
        {
            add_card_form.classList.remove('hidden');
            add_card_form.classList.add('show');
        }
    }
});