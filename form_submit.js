// JavaScript Document
window.onload = function() {
// Onload event of Javascript

// Form Submitting after 
var auto_refresh = setInterval(function() {
submitform();
}, 100);
// Form submit function
function submitform() {
if (getSetValue()) // Calling validate function
{
alert('Form is submitting.....');
document.getElementById("form").submit();
}
}
// To validate form fields before submission
function getSetValue() {
	// Storing Field Values in variables
	var name = document.getElementById("name").value;
	var font_size = document.getElementById("font").value;
	
	var font_color = (document.getElementById("color_1").checked ) ? document.getElementById("color_1").value : document.getElementById("color_2").value;
	var font_bold = (document.getElementById("bold").checked ) ? 'bold' : '';
	var font_italic = (document.getElementById("italic").checked ) ? 'italic' : '';
	
	document.getElementById("output").style.fontSize =font_size+"px";
	document.getElementById("output").style.fontWeight =font_bold;
	document.getElementById("output").style.fontStyle =font_italic;
	document.getElementById("output").style.color =font_color;
	document.getElementById("output").innerHTML = name;
}
};