# Weather website

A work on weather using APIs, a CSS framework and cookies / sessions

### Must have

- [x] Call at least once an API *- I used Open Weather Map*
- [x] Use cookies and/or sessions *- I used sessions*
- [x] Have at least two pages *- index.php & weather.php*
- [x] Use a front CSS framework *- I choose Bootstrap*
- [x] Responsive

### Installation

```
cd weather
npm install

cd weather
gulp

```

### Features

## index.php & weather.php

- Search for a city weather (forms)

## weather.php

- Get Open weather API city weather informations (weather main description & detail description - city name - main, max & min temperature - time & day - weather icons - humidity - Wind speed - pressure)
- Display main weather info of a city (city name - weather - temperature main, maw & min - day)
- Display a weather overview of the day
- Dropdown of specific informations (humidity - wind speed - pressure)
- Data formatting (temperature, wind speed & humidity rounded to a whole number - date display in hours or in day)
- Add mutiple weather cards
- Delete a weather card
- Keep weather cards generated displayed by the user with sessions
- Keep in cache previous cities weather infos