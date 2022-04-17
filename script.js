function validate() {
  let name = document.getElementById("name").value;
  let email = document.getElementById("email").value;
  let re = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

  if (name == ""){
    document.getElementById("result").innerHTML = "Name cannot be empty";
  }
  if (name.length>30) {
    document.getElementById("result").innerHTML = "The name cannot be more than 30 characters.";
  }

  if (re.test(email)) {
    document.getElementById("result").innerHTML = "Email is valid";
    return true;
  } else {
    document.getElementById("result").innerHTML = "Email is not valid";
    return false;
  }

  function phone() {
    let phone = document.getElementById("phone").value;
    let re2 = /^[7-9][0-9]{9}$/;

    if (re2.test(phone)) {
      document.getElementById("result").innerHTML = "Phone is valid";
      return true;
    } else {
      document.getElementById("result").innerHTML = "Phone is valid";
      return false;
    }
  }
}
