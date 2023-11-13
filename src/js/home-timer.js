'use strict'

let translations = {
    "fr": [
        "jour",
        "heure",
        "minute",
        "seconde",
        "depuis le jour du départ",
    ],

    "en": [
        "day",
        "hour",
        "minute",
        "seconde",
        "since the day of departure",
    ],
}

function displayHomeTimer() {
    let departureDate = new Date('2023-03-01T12:00:00'); // Date a verifier

    let timeDifference = departureDate.getTime() - new Date().getTime();
    let timeBeforeDeparture = "";
    
    if(timeDifference >= 1000 * 3600 * 24) { // More than 1 day
        timeBeforeDeparture = Math.trunc(timeDifference / (1000 * 3600 * 24)) + " " + translations[lang][0];
        if(Math.trunc(timeDifference / (1000 * 3600 * 24)) != 1) timeBeforeDeparture += "s";
    } else if(timeDifference >= 1000 * 3600) { // More than 1 hour
        timeBeforeDeparture = Math.trunc(timeDifference / (1000 * 3600)) + " " + translations[lang][1];
        if(Math.trunc(timeDifference / (1000 * 3600)) != 1) timeBeforeDeparture += "s";
    } else if(timeDifference >= 1000 * 60) { // More than 1 minute
        timeBeforeDeparture = Math.trunc(timeDifference / (1000 * 60)) + " " + translations[lang][2];
        if(Math.trunc(timeDifference / (1000 * 60)) != 1) timeBeforeDeparture += "s";
    } else if(timeDifference >= 1000) { // More than 1 seconde
        timeBeforeDeparture = Math.trunc(timeDifference / (1000)) + " " + translations[lang][3];
        if(Math.trunc(timeDifference / (1000)) != 1) timeBeforeDeparture += "s";
    } else if(timeDifference >= -1000) { // Departure time
        timeBeforeDeparture = "Maintenant"
        document.getElementById('departure-text').innerHTML = translations[lang][4];
    } else if(timeDifference <= -1000 * 3600 * 24) { // Lesss than 1 day
        timeBeforeDeparture = -Math.trunc(timeDifference / (1000 * 3600 * 24)) + " " + translations[lang][0];
        document.getElementById('departure-text').innerHTML = translations[lang][0];
        if(-Math.trunc(timeDifference / (1000 * 3600 * 24)) != 1) timeBeforeDeparture += "s";
    } else if(timeDifference <= -1000 * 3600) { // Less than 1 hour
        timeBeforeDeparture = -Math.trunc(timeDifference / (1000 * 3600)) + " " + translations[lang][1];
        document.getElementById('departure-text').innerHTML = translations[lang][4];
        if(-Math.trunc(timeDifference / (1000 * 3600)) != 1) timeBeforeDeparture += "s";
    } else if(timeDifference <= -1000 * 60) { // Less than 1 minute
        timeBeforeDeparture = -Math.trunc(timeDifference / (1000 * 60)) + " " + translations[lang][2];
        document.getElementById('departure-text').innerHTML = translations[lang][4];
        if(-Math.trunc(timeDifference / (1000 * 60)) != 1) timeBeforeDeparture += "s";
    } else if(timeDifference <= 1000) { // Less than 1 seconde
        timeBeforeDeparture = -Math.trunc(timeDifference / (1000)) + " " + translations[lang][3];
        document.getElementById('departure-text').innerHTML = translations[lang][4];
        if(-Math.trunc(timeDifference / (1000)) != 1) timeBeforeDeparture += "s";
    }

    document.getElementById('departure-date').innerHTML = timeBeforeDeparture;
    setInterval(displayHomeTimer, 1000);
}

window.addEventListener('load', displayHomeTimer);