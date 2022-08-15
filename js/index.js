
function validate()
{
    let email = document.forms["LoginForm"]["email"].value
    let password = document.forms["LoginForm"]["password"].value

    if (email == "" ) {
        alert("Email is required")
        return false
    }

    if (password == "" ) {
        alert("Password is required")
        return false
    }

   else if (email == "" || password == "" ) {
        alert("One or more required Fields is empty!!!")
        return false
    }

}