"use strict";

const api_key = "f535025c19ce39e9faa9f75487e774d9";
const imageBaseURL = "https://image.tmdb.org/t/p/";

// Fetch data from a server using the 'url' and pass the result in JSON data to a 'callback' function along with an optional parameter if has 'optionalParam'

const fetchDataFromServer = function (url, callback, optionalParam) {
  fetch(url)
    .then((response) => response.json())
    .then((data) => callback(data, optionalParam));
};

export { imageBaseURL, api_key, fetchDataFromServer };
