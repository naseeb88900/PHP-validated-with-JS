
function validate()
{
	let name = document.forms["RegistrationForm"]["name"].value
    let email = document.forms["RegistrationForm"]["email"].value
    let password = document.forms["RegistrationForm"]["password"].value
    let phone = document.forms["RegistrationForm"]["phone"].value
    let age = document.forms["RegistrationForm"]["age"].value

    if (name == "" || email == "" || password == "" || phone == "" || age == "" ) {
        alert("One or more required Fields is empty!!!")
        return false
    }

    else if(isNaN(phone))
    {
        alert("Enter a valid phone number!!!")
    }

    else if(isNaN(age))
    {
        alert("Enter a valid age number!!!")
    }

    else if(!email.match( /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/gi)){
    alert("Please enter a valid email address")
    }
}