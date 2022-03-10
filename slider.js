/*
    Code I proudly copied and pasted from w3schools
    Don't ask me what it does
*/
var slider = document.getElementById("price");
var output = document.getElementById("demo");
output.innerHTML = slider.value; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
slider.oninput = function () {
	output.innerHTML = this.value;
};
