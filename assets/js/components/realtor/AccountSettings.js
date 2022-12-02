
const AccountSettings = () => {
    
    const elementFormAccount = document.forms[0];
    let userInfo = JSON.parse(sessionStorage.getItem('user_info'));

    const _getUsers = async () => {
        let result = await fetch('./app/realtor/registration/getusers.php?id=' + userInfo.id);
        let response = await result.text();
        let data = JSON.parse(response);
        
        // Set all the records in the form
        // console.log(data);
        let elmTxtFirstname = document.getElementById('txtFirstname');
        let elmTxtMiddlename = document.getElementById('txtMiddlename');
        let elmTxtLastname = document.getElementById('txtLastname');
        let elmTxtStreet = document.getElementById('txtStreet');
        let elmCmbProvince = document.getElementById('cmbProvince');
        let elmCmbCity = document.getElementById('cmbCity');
        let elmCmbBarangay = document.getElementById('cmbBarangay');
        let elmEmail = document.getElementById('txtEmail');
        let elmPhone = document.getElementById('txtPhone');
        let elmBirthDate = document.getElementById('txtBirthDate');
        let elmAge = document.getElementById('txtAge');

        elmTxtFirstname.value = data[0].first_name;
        elmTxtMiddlename.value = data[0].middle_name;
        elmTxtLastname.value = data[0].last_name;
        elmTxtStreet.value = data[0].street;
        elmCmbProvince.value = data[0].province;
        elmCmbCity.value = data[0].city;
        elmCmbBarangay.value = data[0].barangay;
        elmEmail.value = data[0].email;
        elmPhone.value = data[0].phone;
        elmBirthDate.value = data[0].birthdate;
        elmAge.value = data[0].age;
    }

    const _updateUser = async () => {
        let elmFormData = new FormData(elementFormAccount);

        elmFormData.append('id', userInfo.id);
        let result = await fetch('./app/realtor/registration/updateuser.php', {
            method: 'POST',
            body: elmFormData
        });
        let response = await result.text();
        let data = JSON.parse(response);

        if ( data.status == 1 ) {
            // Prompt the user
            var myModal = new bootstrap.Modal(document.getElementById('updateAccountConfirmation'), {
                keyboard: false
            });
            myModal.show();
        } else {
            console.log(data.message);
        }
    }

    const _eventListener = () => {
        let elmFormAccount = document.getElementById('formAccount');

        elmFormAccount.addEventListener('submit', function(e) {
            e.preventDefault();
            _updateUser();
        });
    }

    const init = () => {
        _getUsers();
        _eventListener();
    }

    return {
        init
    }
}

export default AccountSettings;