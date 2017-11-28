// Une fonction par formulaire

function checkRegisterForm(form){
  var correctName = checkName(form.name);
  var correctEmail = checkEmail(form.email);
  var correctPass = checkPass(form.password1);
  var matchPass = checkMatchPass(form.password1, form.password2)
  if(correctName && correctEmail && correctPass && matchPass){
    return true;
  }
  else{
    alert('Veuillez remplir tous les champs correctement');
    return false;
  }
}

function checkLogInForm(form){
  var correctEmail = checkEmail(form.email);
  if (correctEmail){
    return true;
  }
  else {
    alert('Veuillez remplir tous les champs correctement');
    return false;
  }
}

function checkAddImageForm(form){
  var correctTitle = checkTitle(form.imageTitle);
  if (correctTitle){
    return true;
  }
  else {
    alert('Veuillez remplir tous les champs correctement');
    return false;
  }
}

//------------------------------------------------------------------------------------------------------
function checkName(name){
  var regex2 = /^[a-zA-z0-9]+$/;
  if (name.value.length < 3 || name.value.length > 20){
    highlight(name);
    document.getElementById('nameError').innerHTML = "Votre nom doit compter entre 3 et 20 caractères";
    return false;
  }
  else if (!regex2.test(name.value)) {
    highlight(name);
    document.getElementById('nameError').innerHTML = "N'utilisez que des chiffres et des lettres";
    return false;
  }
  else {
    return true;
  }
}

function checkEmail(email){
  var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
  if(!regex.test(email.value)){
    highlight(email);
    document.getElementById('emailError').innerHTML = "Cette adresse n'est pas valide";
    return false;
  }
  else {
    return true;
  }
}

function checkPass(pass){
  if(pass.value.length < 3){
    highlight(pass);
    document.getElementById('pass1Error').innerHTML = "Votre mot de passe doit compter au moins 3 caractères";
    return false;
  }
  else {
    return true;
  }
}

function checkMatchPass(pass1, pass2){
  var pass1 = document.getElementById(pass1).value;
  var pass2 = document.getElementById(pass2).value;
  if(pass1 != pass2){
    document.getElementById('pass2Error').innerHTML = "Les deux mots de passe ne sont pas identiques";
    return false;
  }
    else {
      return true;
    }
}

function checkTitle(title){
  var regex2 = /^[a-zA-z0-9]+$/;
  if (!regex2.test(title.value)) {
    highlight(title);
    document.getElementById('titleError').innerHTML = "Titre incorrect (n'utilisez que des chiffres et des lettres)";
    return false;
  }
  else {
    return true;
  }
}

function highlight(field){
  field.style.color = 'red';
  field.style.fontWeight = 'bold';
}
