function submit()
{
var Emailtest = false;
var Passwordtest = false;
var Email = document.getElementById("email").value;
var Password = document.getElementById("password").value;


//not working
if(Password == "")
{
  alert("There is no Password, please enter Password");
  Passwordtest = false;
}
else
{
  Passwordtest = true;
}
if(Emailtest = Emailtest.includes("@gmail.com") || Emailtest = Emailtest.includes("@ku.edu") )
{
  Emailtest = true;
}
else
{
  alert("Email is not valid")
  Emailtest = false;
}
}
