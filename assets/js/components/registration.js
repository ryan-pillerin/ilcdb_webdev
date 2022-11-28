
const Registration = () => {

    // var users = [];
    // Local database
    let _users = [];

    const addUsers = (firstname, middlename, lastname, email) => {
        // Mutation
        _users.push({
            firstname: firstname,
            middlename: middlename,
            lastname: lastname,
            email: email
        });
    };

    const getUsers = () => {
        return _users;
    };

    const searchUsersByLastName = (lastname) => {
        /**
         * 0 - 2 = 3 arrays
         * 0, 1, 2 (count = 3)
         */
        for(let index = 0; index < _users.length; index+=1) {
            if ( _users[index].lastname === lastname ) {
                return _users[index];
            }
        }
        return null;
    }

    /**
     * Event Listener
     */
    const eventListner = () => {
        let btnAddUserEvent = document.getElementById('btnAddUser');

        // Click event add users.
        btnAddUserEvent.addEventListener('click', function(e) {
            //addUsers(txtFirstname.value, txtMiddlename.value, txtLastname.value, txtEmail.value); 
            //displayUsers();
            e.preventDefault();
            _saveUsersToDatabase();
        });
    }

    const displayUsers = () => {       
        let htmlData = ``;
        _users.map(item => {
            htmlData += `
                <tr>
                    <td>${item.lastname}, ${item.firstname} ${item.middlename}</td>
                    <td>${item.email}</td>
                </tr>
            `;
        });

        let displayUser = document.getElementById('displayUsers');
        displayUser.innerHTML = htmlData;
    }

    /**
     * Ajax Request for Registration
     */
    const _saveUsersToDatabase = async () => {
        
        let txtFirstname = document.getElementById('txtFirstName');
        let txtMiddlename = document.getElementById('txtMiddleName');
        let txtLastname = document.getElementById('txtLastName');
        let txtEmail = document.getElementById('txtEmail');
        let txtAddress = document.getElementById('txtAddress');
        let txtUsername = document.getElementById('txtUsername');
        let txtPassword = document.getElementById('txtPassword');
        let emailErrorMessage = document.getElementById('emailErrorMessage');

        const formData = new FormData();

        formData.append('firstname', txtFirstname.value);
        formData.append('middlename', txtMiddlename.value);
        formData.append('lastname', txtLastname.value);
        formData.append('email', txtEmail.value);
        formData.append('address', txtAddress.value);
        formData.append('username', txtUsername.value);
        formData.append('password', txtPassword.value);

        // Validate the form
        let isFirstNameValid = validateForm(txtFirstname);
        let isMiddleNameValid = validateForm(txtMiddlename);
        let isLastNameValid = validateForm(txtLastname);
        let isEmailValid = validateForm(txtEmail);
        let isAddressValid = validateForm(txtAddress);
        let isUsernameValid = validateForm(txtUsername);
        let isPasswordValid = validateForm(txtPassword);

        if ( isFirstNameValid && isMiddleNameValid && isAddressValid && isLastNameValid && isEmailValid && isUsernameValid && isPasswordValid ) {
            let result = await fetch('./app/registration.php', {
                method: 'POST',
                body: formData
            });

            let data = await result.text();
            let results = JSON.parse(data); // JSON.parse(json_data) - counterpart for json_decode
            // JSON.stringify([1, 2, 3, 4]); - counterpart for json_encode in javascript
            let jsonstring = '{0: 1, 1: 2, 2: 3}';

            console.log(results);
            if ( results[0].code == -1 ) {
                txtEmail.classList.add('is-invalid');
                emailErrorMessage.innerHTML = 'The email address is not a valid email.';
            } else {
                txtEmail.classList.remove('is-invalid');
                txtEmail.classList.add('is-valid');
            }
        }
    }

    const validateForm = (formObject) => {
        if ( formObject.value == '' ) {
            formObject.classList.add('is-invalid');
            formObject.classList.remove('is-valid')
            return false;
        } else {
            formObject.classList.remove('is-invalid');
            formObject.classList.add('is-valid')
            return true;
        }
    }

    return {       
        addUsers,
        getUsers,
        searchUsersByLastName,
        eventListner,
        displayUsers
    };
    
}

export default Registration;