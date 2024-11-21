const signUpButton = document.getElementById('signUp');
// this to get signup button for the id and save it in signUpbutton
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');
// this add addEventlistern functionality to the code 
signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
	// this to activate the css 
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
