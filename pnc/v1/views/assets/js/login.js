function validator(element){
    const user_id = document.getElementById('user-id');
    const password = document.getElementById('password');
    const sign_up = document.getElementById('sign-in')
    if (element == user_id){
        data = user_id.value.trim();
        if (data.length < 5 || data.includes('@') || data.length > 16){
            element.className += ' is-invalid';
            password.disabled = true;
        }else{
            element.className = 'form-control'
            password.disabled = false;
        }
    }else if(element == password){
        data = password.value.trim();
        if (data.length < 6 || data.length > 18){
            element.className += " is-invalid";
            sign_up.disabled = true;
        }else{
            sign_up.disabled = false;
            element.className = 'form-control';
        }
    }
}

function header_links_clicker(element){
    const modal = document.getElementById('headerModel');
    const modal_title = document.getElementById('headerModelTitle');
    const modal_body = document.getElementById('headerModalBody');
    modal_title.innerText = element.id;
    modal_body.innerText = element.getAttribute('data');
    let modal_element = new bootstrap.Modal(modal);
    modal_element.toggle();
}