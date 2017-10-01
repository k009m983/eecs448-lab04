function reset()
{
  location.reload();
}
function validate(form)
{
  var username = form.username.value;
  var password = form.password.value;
  var shipping = form.shipping.value;
  var item1 = form.item1.value;
  var item2 = form.item2.value;
  var item3 = form.item3.value;

  if(username == "" || username == null)
  {
    alert("Username cannot be empty");
  }
  else if(!validateEmail(username))
  {
    alert("Username must be in the form something@something_else.com");
  }
  else if(password == "" || password == null)
  {
    alert("Password cannot be empty");
  }
  else if(shipping == "" || shipping ==null)
  {
    alert("You MUST pick a shipping method");
  }
  else if(item1 == "" || item1 == null || item2 == "" || item2 == null || item3 == "" || item3 == null)
  {
    alert("Quantity amounts cannot be empty");
  }
  else if(item1 < 0 || item2 < 0 || item3 < 0)
  {
    alert("Quantity amounts cannot be negative");
  }
  else
  {
    submit(form);
  }
}
function submit(form)
{
  var request = new XMLHttpRequest();
      request.onreadystatechange = function ()
      {
          if (request.readyState === XMLHttpRequest.DONE)
          {
              if (request.status === 200)
              {

              }
              else
              {

              }
          }
      };
      params = "username=" + form.username.value + "&password=" + form.password.value + "&shipping=" + form.shipping.value + "&item1=" + form.item1.value + "&item2=" + form.item2.value + "&item3=" + form.item3.value;
      request.open("POST", "customerBackend.php", true);
      request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

      window.location = ('customerBackend.php?' + params);

}
//validateEmail was taken from:
//https://stackoverflow.com/questions/46155/how-to-validate-email-address-in-javascript
//on 9/29/2017
//from user: Squirtle
function validateEmail(email)
{
  var re = /\S+@\S+\.\S+/;
  return re.test(email);
}
