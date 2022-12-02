
const Login = () => {

    let formLogin = document.forms[0];

    const _loginAuthentication = async () => {
        let elementLoginFeedback = document.getElementById('loginFeedback');

        let result = await fetch('./app/realtor/login/login.php', {
            method: 'POST',
            body: new FormData(formLogin)
        });

        let response = await result.text();
        let data = JSON.parse(response);

        // If status = 1, authenticed, else status = -1, authentication failed
        elementLoginFeedback.classList.add('d-none');
        if ( data.status == 1) {
            window.location = './';
        } else {
            console.log(data.body.message);
            elementLoginFeedback.classList.remove('d-none');
        }
    }

    const _eventListener = () => {
        let elementFormLogin = document.getElementById('formLogin');

        elementFormLogin.addEventListener('submit', function(e) {
            e.preventDefault();
            _loginAuthentication();
        });
    }

    const init = () => {
        _eventListener();
    }

    return {
        init
    }
}

export default Login;