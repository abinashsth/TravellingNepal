
function validateform(){  
    var Username =document.myform.Username.value;  
    var Password=document.myform.Password.value;  
      
    if (Username==null || Username==""){  
      alert("Name can't be blank");  
      return false;  
    }else if(Password.length<6){  
      alert("Password must be at least 6 characters long.");  
      return false;  
      }  
    }  