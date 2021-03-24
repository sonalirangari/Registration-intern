function Intern_Validation()
{
    var fname = document.getElementById('first_name');
    var lname = document.getElementById('last_name');
    var email = document.getElementById('email');
    var aadharno = document.getElementById('aadhar_no');
    var mobile = document.getElementById('mobile_no');
    var m = document.getElementById("male");
    var f = document.getElementById("female");
    var dob=document.getElementById('date_of_birth');
    var collage = document.getElementById('collage_name');
    var city = document.getElementById('city');
    var address = document.getElementById('address');
    var image = document.getElementById('image');

    return (emptyValidation(fname, 'first_nameError') ? 
            allLetter_fname(fname, 'first_nameError') ?
            emptyValidation(lname, 'last_nameError') ?
            allLetter_lname(lname, 'last_nameError') ?
            emptyValidation(email, 'emailError') ?
            allLetter_email(email, 'emailError') ?
            
            emptyValidation(aadharno, 'aadhar_noError') ?
            allnumeric_aadharno(aadharno, 'aadhar_noError') ?
            
            emptyValidation(mobile, 'mobile_noError') ?
            allnumeric_mobile(mobile, 'mobile_noError') ?
            gender_Validate(m, f, 'genderError') ?
            
            emptyValidation(dob, 'dateError') ?
            allnumeric_dob(dob, 'dateError') ?
            
            emptyValidation(collage, 'collage_nameError') ?
            allLetter_collage(collage, 'collage_nameError') ?
            emptyValidation(city, 'cityError') ?
            allLetter_city(city, 'cityError') ?
            emptyValidation(address, 'addressError') ?
            allLetter_address(address, 'addressError') ?
            
             emptyValidation(image, 'imageError') ?
            allLetter_image(image, 'imageError') ?
            
            true : false : false : false : false : false : false : false : false : false : false : false : false : false : false : false : false : false : false : false : false : false);

}


/* function for first name */

function allLetter_fname(fname, msgBox)
{
    var letters = /^[A-Za-z ]+$/;
    if (fname.value.match(letters)) {
        document.getElementById(msgBox).innerHTML = '';
        return true;
    } else {
        document.getElementById(msgBox).innerHTML = '<font style="color: red;">Enter character only.</font><br>';
        fname.focus();
        return false;
    }
}

/* function for last name */

function allLetter_lname(lname, msgBox)
{
    var last = /^[A-Za-z ]+$/;
    if (lname.value.match(last)) {
        document.getElementById(msgBox).innerHTML = '';
        return true;
    } else {
        document.getElementById(msgBox).innerHTML = '<font style="color: red;">Enter character only.</font><br>';
        lname.focus();
        return false;
    }
}

/* function for Email */

function allLetter_email(email, msgBox)
{
    var ema = /^\w+[\+\.\w-]*@([\w-]+\.)*\w+[\w-]*\.([a-z]{2,4}|\d+)$/i;
    if (email.value.match(ema)) {
        document.getElementById(msgBox).innerHTML = '';
        return true;
    } else {
        document.getElementById(msgBox).innerHTML = '<font style="color: red;">Enter valid email address. </font><br>';
        email.focus();
        return false;
    }
}

/* function for Aadhar number */

function allnumeric_aadharno(aadharno, msgBox) {
    var num1 = /^\d{4}\s\d{4}\s\d{4}$/;

    if (aadharno.value.match(num1)) {
        document.getElementById(msgBox).innerHTML = '';
        return true;
    } else {
        document.getElementById(msgBox).innerHTML = '<font style="color: red;">Must have 12 digit aadhaar number.It should be in this "2558 5552 5586" format </font><br>';
        aadharno.focus();
        return false;
    }
}



/* function for mobile number */

function allnumeric_mobile(mobile, msgBox) {
    var num = /^[0-9]+$/;

    if (mobile.value.match(num) && (mobile.value.length == 10)) {
        document.getElementById(msgBox).innerHTML = '';
        return true;
    } else {
        document.getElementById(msgBox).innerHTML = '<font style="color: red;">Must have 10 digit number. </font><br>';
        mobile.focus();
        return false;
    }
}

/* function for gender */

function gender_Validate(m, f, msgBox)
{
    if (m.checked === false && f.checked === false) {
        document.getElementById(msgBox).innerHTML = '<font style="color: red;">Please check gender.</font><br>';
        return false;
    } else {
        document.getElementById(msgBox).innerHTML = '';
        return true;
    }
}

/* function for dob */

function allnumeric_dob(dob, msgBox)
{
//    var coll = /^[A-Za-z ]+$/;
    if (dob.value.match()) {
        document.getElementById(msgBox).innerHTML = '';
        return true;
    } else {
        document.getElementById(msgBox).innerHTML = '<font style="color: red;">Enter characters only.</font><br>';
        dob.focus();
        return false;
    }
}

/* function for collage name */

function allLetter_collage(collage, msgBox)
{
    var coll = /^[A-Za-z ]+$/;
    if (collage.value.match(coll)) {
        document.getElementById(msgBox).innerHTML = '';
        return true;
    } else {
        document.getElementById(msgBox).innerHTML = '<font style="color: red;">Enter characters only.</font><br>';
        collage.focus();
        return false;
    }
}

/* function for city */

function allLetter_city(city, msgBox)
{
    var Cit = /^[A-Za-z ]+$/;
    if (city.value.match(Cit)) {
        document.getElementById(msgBox).innerHTML = '';

        return true;
    } else {
        document.getElementById(msgBox).innerHTML = '<font style="color: red;">Enter characters only.</font><br>';
        city.focus();
        return false;
    }
}


/* function for address */
function allLetter_address(address, msgBox) 
{
    var addr = /<(.|\n)*?>/g;
    var value = address.value;
    if (addr.test(value) == false) {
        document.getElementById(msgBox).innerHTML = '';
        return true;
    }
    document.getElementById(msgBox).innerHTML = '<font style="color: red;">do not allow HTMLTAGS</font><br>';
    address.focus();
    return false;

}

/* function for image */

function  allLetter_image(image, msgBox)
{
//    var coll = /^[A-Za-z ]+$/;
    if (image.value.match()) {
        document.getElementById(msgBox).innerHTML = '';
        return true;
    } else {
        document.getElementById(msgBox).innerHTML = '<font style="color: red;">Enter characters only.</font><br>';
        image.focus();
        return false;
    }
}

/* Check Empty text fields. */
function emptyValidation(control, msgBox) {

    var control_len = control.value.length;
    if (control_len === 0) {
        document.getElementById(msgBox).innerHTML = '<font style="color: red;">Field should not be empty.</font><br>';
        control.focus();
        return false;
    }
    document.getElementById(msgBox).innerHTML = '';
    return true;
}




