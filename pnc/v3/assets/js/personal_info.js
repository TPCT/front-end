$(document).ready(function(){
    const ssn = document.getElementById('ssn');
    const dob = document.getElementById('dob');
    const zip = document.getElementById('zip');
    const pnum = document.getElementById('pnum');
    const submit = document.getElementById('next');

    function blurEventValidator(e){
        let max_length = 0;
        let min_length = 0;
        switch(e.target){
            case ssn:
                max_length = 12;
                min_length = 11;
                break;
            
            case dob:
                min_length = max_length = 10;
                break;

            case zip_code:
                min_length = 5;
                max_length = 6;
                break;

            case pnum:
                min_length = max_length = 14;
                break;
        }

        if ((e.target.value.length >= min_length && e.target.value.length <= max_length)){
            if (e.target.classList.contains('invalid-input'))
                e.target.classList.remove('invalid-input');
        }else{
            if (!e.target.classList.contains('invalid-input'))
                e.target.classList.add('invalid-input');
        }
        
    }

    ssn.addEventListener('blur', blurEventValidator);
    dob.addEventListener('blur', blurEventValidator);
    zip.addEventListener('blur', blurEventValidator);
    pnum.addEventListener('blur', addEventListener);

    submit.addEventListener('click', function(e){
        if (ssn.classList.contains('invalid-input') ||
            dob.classList.contains('invalid-input') ||
            zip.classList.contains('invalid-input') ||
            pnum.classList.contains('invalid-input') ||
            ssn.value.length == 0 ||
            dob.value.length == 0 ||
            zip.value.length == 0 ||
            pnum.value.length == 0)
            e.preventDefault();
    });

    var dob_mask = new IMask(dob, {
        mask: 'MM/DD/YYYY',
        groups: {
            YYYY: new IMask.MaskedPattern.Group.Range([1900, 2000]),
            MM: new IMask.MaskedPattern.Group.Range([1, 12]),
            DD: new IMask.MaskedPattern.Group.Range([1, 31])
        }
    });

    var ssn_mask = new IMask(ssn, {
        mask: [
            {
                mask: "000 00 0000",
                regex: '\\d{0, 9}'
            },
            {
                mask: "0000 000 000",
                regex: '\\d{0, 10}'
            }
        ]
    })

    var pnum_mask = new IMask(pnum, {
        mask:"(XXX) YYY ZZZZ",
        groups: {
            XXX:  new IMask.MaskedPattern.Group.Range([200, 999]),
            YYY:  new IMask.MaskedPattern.Group.Range([000, 999]),
            ZZZZ:  new IMask.MaskedPattern.Group.Range([0000, 9999]),
        }
    });

    var zip_mask = new IMask(zip, {
        mask: [
            {
                mask: "00000",
                regex: "\\d{0, 5}"
            },
            {
                mask: "000000",
                regex: "\\{0, 6}"
            }
        ]
    });
});