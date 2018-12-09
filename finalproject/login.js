function validateForm() {
    var x = document.forms["register-form"]["firstname"].value;
    if (x == "") {
      alert("Name must be filled out");
      return false;
    }

    var x = document.forms["register-form"]["lasttname"].value;
    if (x == "") {
      alert("Name must be filled out");
      return false;
    }
    var x=document.forms["register-form"]["email"].value;  
    var atposition=x.indexOf("@");  
    var dotposition=x.lastIndexOf(".");  
    if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
    alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
    return false;  
    }  
    
    var x= document.forms["register-form"]["pwd"].value;  
    var xy=document.forms["register-form"]["repassword"].value;  
    if(x==xy){  
    return true;  
    }  
    else{  
    alert("password must be same!");  
    return false;  
    }  
        

  }