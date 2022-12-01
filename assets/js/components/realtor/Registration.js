
const Registration = () => {

    const formRegistrationData = document.forms[0];

    const _saveUserToDatabase = async () => {
        // Server Request
        let result = await fetch('./app/realtor/registration/adduser.php', {
            method: 'POST',
            body: new FormData(formRegistrationData)
        });

        let response = await result.text();
        let data = JSON.parse(response);
        console.log(data);
    }

    const _eventListener = () => {
        let elementRegistrationForm = document.getElementById('registration_form');

        elementRegistrationForm.addEventListener('submit', function(e) {
            e.preventDefault();
            // Add Users to the Database
            _saveUserToDatabase();
        });
    }

    const init = () => {
        //console.log(document.forms);
        _eventListener();
    }

    return {
        init
    }
}

export default Registration;