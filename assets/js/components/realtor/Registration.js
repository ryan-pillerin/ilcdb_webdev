
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
        if ( data.status == 1 ) {
            // Prompt the user
            var myModal = new bootstrap.Modal(document.getElementById('registrationmodal'), {
                keyboard: false
            });
            myModal.show();
        } else if (data.status == 0) {
            // prompt email, phone, and username if they are already existed.
            let elementTextEmail = document.getElementById('txtEmail');
            let elementTextPhone = document.getElementById('txtPhone');
            let elementTextUsername = document.getElementById('txtUsername');

            let elementTextEmailFeedback = document.getElementById('emailInvalidFeedback');
            let elementTextPhoneFeedback = document.getElementById('phoneInvalidFeedback');
            let elementTextUsernameFeedback = document.getElementById('usernameInvalidFeedback');

            elementTextEmail.classList.remove('is-invalid');
            elementTextPhone.classList.remove('is-invalid');
            elementTextUsername.classList.remove('is-invalid');
            data.messages.map((validateditem) => {
                if ( validateditem.type == 'email' ) {
                    elementTextEmail.classList.add('is-invalid');
                    elementTextEmailFeedback.innerHTML = validateditem.message;
                }
                
                if ( validateditem.type == 'phone' ) {
                    elementTextPhone.classList.add('is-invalid');
                    elementTextPhoneFeedback.innerHTML = validateditem.message;
                }

                if ( validateditem.type == 'username' ) {
                    elementTextUsername.classList.add('is-invalid');
                    elementTextUsernameFeedback.innerHTML = validateditem.message;
                }
            });
        }
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