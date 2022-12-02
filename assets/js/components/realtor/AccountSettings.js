
const AccountSettings = () => {
    
    const elementFormAccount = document.forms[0];

    const _getUsers = async () => {
        let userInfo = JSON.parse(sessionStorage.getItem('user_info'));
        let result = await fetch('./app/realtor/registration/getusers.php?id=' + userInfo.id);
        let response = await result.text();
        let data = JSON.parse(response);
        
        // Set all the records in the form
        console.log(data);
        let elmTxtFirstname = document.getElementById('txtFirstname');
        let elmTxtMiddlename = document.getElementById('txtMiddlename');
        let elmTxtLastname = document.getElementById('txtLastname');
        let elmTxtSearch = document.getElementById('txtStreet');
        let elmCmbProvince = document.getElementById('cmbProvince');
        let elmCmbCity = document.getElementById('cmbCity');
        let elmCmbBarangay = document.getElementById('cmbBarangay');
        let elmEmail = document.getElementById('txtEmail');
        let elmPhone = document.getElementById('txtPhone');

        elmTxtFirstname.value = data[0].first_name;
        elmTxtMiddlename.value = data[0].middle_name;
        elmTxtLastname.value = data[0].last_name;
        elmTxtSearch.value = data[0].street;
        elmCmbProvince.value = data[0].province;
        elmCmbCity.value = data[0].city;
        elmCmbBarangay.value = data[0].barangay;
        elmEmail.value = data[0].email;
        elmPhone.value = data[0].phone;
    }

    const init = () => {
        _getUsers();
    }

    return {
        init
    }
}

export default AccountSettings;