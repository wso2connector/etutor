// JavaScript Document

 function calculateUserTimeZoneOffset() {
var myDate = new Date();
var offset = (-1) * myDate.getTimezoneOffset() / 60;
return offset;
}
function addHint(inputObject, hintImageURL) {
if (inputObject.val() == '') {
inputObject.css('background', "url('" + hintImageURL + "') no-repeat 10px 3px");
}
}
function removeHint() {
$('.form-hint').css('display', 'none');
}
function showMessage(message) {
if ($('#spanMessage').size() == 0) {
$('<span id="spanMessage"></span>').insertAfter('#btnLogin');
}
$('#spanMessage').html(message);
}
function validateLogin() {
var isEmptyPasswordAllowed = false;
if ($('#user_name').val() == '') {
showMessage('Username cannot be empty');
return false;
}
if (!isEmptyPasswordAllowed) {
if ($('#password').val() == '') {
showMessage('Password cannot be empty');
return false;
}
}
return true;
}
$(document).ready(function() {
/*Set a delay to compatible with chrome browser*/
setTimeout(checkSavedUsernames,100);
$('#user_name').focus(function() {
removeHint();
});
$('#password').focus(function() {
removeHint();
});
$('.form-hint').click(function(){
removeHint();
$('#user_name').focus();
});
$('#hdnUserTimeZoneOffset').val(calculateUserTimeZoneOffset().toString());
$('#frmLogin').submit(validateLogin);
});
function checkSavedUsernames(){
if ($('#user_name').val() != '') {
removeHint();
}
}
if (window.top.location.href != location.href) {
window.top.location.href = location.href;
} 

