function validateForm(){
    let password = document.getElementById("password").value;
    let username = document.getElementById("username").value;
    let shoes = parseInt(document.getElementById("shoes").value);
    let shirts = parseInt(document.getElementById("shirts").value);
    let pants = parseInt(document.getElementById("pants").value);
    let radios = document.getElementsByName('shipping');
    let shipping = ""
    for(i = 0; i < radios.length; i++) {
        if(radios[i].checked)
	{
            shipping += radios[i].value;
	}
    }
    let re = /\S+@\S+\.\S+/;
    let validEmail = re.test(username);
    console.log("password: " + password);
    console.log("username: " + username);
    console.log("shoes: " + shoes);
    console.log("shirts: " + shirts);
    console.log("pants: " + pants);
    console.log("validEmail:" + validEmail);
    console.log("shipping:" + shipping);

    if(!(password != "" && validEmail && shoes>=0 && shirts>=0 && pants>=0 && shipping))
    { 
       alert("username must be an email and all other fields must be filled");
       return false;
     }
    else
    {
       return true;
    }
}