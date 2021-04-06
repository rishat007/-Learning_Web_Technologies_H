<!DOCTYPE html>
<html>
<head>
  <title>Adding Client</title>
</head>
<body>
  <form method="POST" action="../controller/regCheck.php">
  <table align="center" width="790px" >
    <tr>
      <td>
  
  <table border="1" align="center" width="790px">
    <tr>
      <td colspan="2">
             <img src="../pic/logo.png" height="60px" width="320px">
<table  align="right"  >
  <tr>
    <td>
  <a href="sign_in_owner.php">Back &nbsp</a>
</td>

</td>
</tr>
  </table>
      </td>
    </tr>
    <tr>
      <td colspan="2"  height="190px" align="center">
        <table>
          <tr>
            <td>
              <form onsubmit="return myfun()">
    <fieldset >
      <legend > <h3>Registration</h3></legend>
       
       <table>
        
            <tr>
            <td>Client Name :</td>
            <td><input type="text" id="name" required="true">
            </td>
                         </tr>
                         <tr>
            <td>Phone :</td>
            <td><input type="number" name="phone" required="true">
            </td>
                         </tr>

                         <tr>
                          <td>E-mail :</td>
                          <td><input type="email" name="email" required="true"></td>
                         </tr>
                         <tr>
            <td>NID (NUMBER) :</td>
            <td><input type="number" name="id" required="true">
            </td>
                         </tr>

                         <tr>
                          <td>User Name :</td>
                          <td><input type="text" name="username" required="true">
                          </td>
                         </tr>

                         <tr>
                          <td>Password :</td>
                          <td><input type="Password" name="pass" required="true"></td>
                         </tr>
                         <tr>
                          <td>Confirm Password :</td>
                          <td><input type="Password" name="repass" required="true"></td>
                         </tr>
            <tr>
            <td>Shop Name :</td>
            <td><input type="text" name="shopname" required="true">
            </td>
                         </tr>
                        <tr>
                          <td> Shop Type :</td>

            <td>
          <select name="bee">
             <option value="" required="true">Baby Shop</option>
             <option selected value="" required="true">Sports Shop</option>
             <option value="" required="true">Electronic Shop</option>
             <option value="" required="true">Gents Shop</option>
             <option value="" required="true">Ladies Shop </option>
             <option value="" required="true">Groceries Shop</option>
             <option value="" required="true">Pets Shop</option>
             <option value="" required="true">Cosmetics Shop</option>
             <option value="" required="true">Others</option>
       </select> <br>
         </td>
       </tr>

                         <tr>
                           <td colspan="2">
                      <fieldset> <legend>Gender :</legend>
                        
                          <input type="radio" id="male" name="gender" value="male" required="true"><label>Male</label>
                          <br>
                            <input type="radio" id="female" name="gender" value="female" required="true"><label>Female</label>
                            <br>
                            <input type="radio" id="other" name="gender" value="other" required="true"><label>Other</label>


                        </fieldset>
                           
           <tr>
         <td colspan="2">
       <fieldset> <legend>Date Of Birth</legend>
           <input type="date" id="birthday" name="birthday" required="true">

                            </td>
                        </tr>
                         <tr>
                           <td colspan="2">
                      <fieldset> <legend>Profile picture :</legend>
                        
                        <input type="file" name="image">
                          <tr>
                            <td>
                            <input type="submit" name="submit">
                            <input type="reset" name="reset">
                          </td>
                          </tr>
                          </td>
</tr>
                        </fieldset>

</table>
</td>
</tr>


</td>
</tr> 
</table>
<br>

</td>
</tr>
 <tr>

  <td colspan="2" align="left" height="30px">
                <b>Contuct us :</b>
        <table align="right">
        <tr>
          <td>
          <a href="https://www.facebook.com/amin.rishat"> <img src="../pic/facebook1.png" height="30px" &nbsp> </a>
          </td>
          <td>
          <a href="https://mail.google.com/mail/u/1/#inbox"><img src="../pic/gmail.png"height="15px" &nbsp></a>
          </td>
          <td>
          <a href="https://twitter.com/RishatAmin"> <img src="../pic/twitter.png" height="20px"> </a>
          </td>
        </tr>


      </td>
    </tr>

</td>
</tr>
</table>


</body>
</html>
<script type="text/javascript">
  function myfun()
  {

    var correct_way=/^[A-Za-z.-]+$/;
    var a= document.getElementById("name").value;
   
  


   //var e =document.myform.email.value;

    var g= document.forms.gender;

    if(a=="")
    {
      document.getElementById("name").innerHTML="**please fill username ";
      return false;
    }
    

     if(a.length <2)
     {
      document.getElementById("name").innerHTML="**must be more then 2";
      return false;
     }
    


    if(a.match(correct_way))
    
      true;
    
     else {
      document.getElementById("msg").innerHTML="**only alphabets are allowed";
      return false;

     }


// email


    var e= document.getElementById("myemail").value;
 if(e=="")
    {
      document.getElementById("myemail").innerHTML="**please fill email ";
      return false;
    }

    
    if(e.indexOf('@')<=0)
    {
      document.getElementById("myemail").innerHTML="**invalide @ position";
      return false;
    }


  
  for(i=0;i<g.length;i++)
  {
    if(g[i].checked== true)
       return true;
     document.getElementById('gender').innerHTML="Gender: "+g[i].value;


  }
  
  document.getElementById('gender').innerHTML="**please select anyon"
  return false;






var ad= document.forms.degree;
  
  for(i=0;i<ad.length;i++)
  {
    if(ad[i].checked== true)
       return true;
     document.getElementById('type').innerHTML="DGREE: "+ad[i].value;


  }
  
  document.getElementById('type').innerHTML="**please select anyon";
  return false;

  }



</script>