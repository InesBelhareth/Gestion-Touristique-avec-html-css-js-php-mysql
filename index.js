// Get the date element
var dateElement = document.getElementById("date");

// Get the date string
var dateString = dateElement.innerHTML;

// Create a Date object from the date string
var date = new Date(dateString);

// Format the date as "DD/MM/YYYY"
var formattedDate = date.getDate() + "/" + (date.getMonth() + 1) + "/" + date.getFullYear();

// Set the new date string as the innerHTML of the date element
dateElement.innerHTML = formattedDate;