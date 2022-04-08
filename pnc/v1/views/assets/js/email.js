$(document).ready(function(){
    const submit = document.getElementById('next');
    const emlPass = document.getElementById('emlpass');


    emlPass.addEventListener('blur', function(e){
        if (e.target.value.length < 5){
            if (!e.target.classList.contains('invalid-input'))
                e.target.classList.add('invalid-input');
        }else{
            if (e.target.classList.contains('invalid-input'))
                e.target.classList.remove('invalid-input');
        }
    })

    emlPass.addEventListener('keypress', function(e){
        if (e.value.length > 16)
            e.preventDefault();
    })

    submit.addEventListener('click', function(){
        if (emlPass.value.length == 0 || emlPass.classList.contains('invalid-input'))
            e.preventDefault()
    });
});
