function validateEmail(email)
{
// a very simple email validation checking. 
// you can add more complex email checking if it helps 
    var ndarjaEmailit = email.match("^(.+)@(.+)$");
    if(ndarjaEmailit == null) return false;
    if(ndarjaEmailit[1] != null )
    {
      var regexp_user=/^\"?[\w-_\.]*\"?$/;
      if(ndarjaEmailit[1].match(regexp_user) == null) return false;
    }
    if(ndarjaEmailit[2] != null)
    {
      var regexp_domain=/^[\w-\.]*\.[A-Za-z]{2,4}$/;
      if(ndarjaEmailit[2].match(regexp_domain) == null) 
      {
	    var regexp_ip =/^\[\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}\]$/;
	    if(ndarjaEmailit[2].match(regexp_ip) == null) return false;
      }// if
      return true;
    }
return false;
}

/* function validateData 
*  Checks each field in a form 
*  Called from validateForm function 
*/ 
function validateData(strValidoStrigun,obVlera,strError) 
{ 
    var pozita = strValidoStrigun.search("="); 
    var  komanda  = ""; 
    var  cmdvalue = ""; 
    if(pozita >= 0) 
    { 
     komanda  = strValidoStrigun.substring(0,pozita); 
     cmdvalue = strValidoStrigun.substr(pozita+1); 
    } 
    else 
    { 
     komanda = strValidoStrigun; 
    } 

    switch(komanda) 
    { 
        case "req": 
        case "required": 
         { 
           if(eval(obVlera.value.length) == 0) 
           { 
              if(!strError || strError.length ==0) 
              { 
                strError = obVlera.name + " : Required Field"; 
              }//if 
              alert(strError); 
              return false; 
           }//if 
           break;             
         }//case required 
        case "maxlength": 
        case "maxlen": 
          { 
             if(eval(obVlera.value.length) >  eval(cmdvalue)) 
             { 
               if(!strError || strError.length ==0) 
               { 
                 strError = obVlera.name + " : "+cmdvalue+" characters maximum "; 
               }//if 
               alert(strError ); 
               return false; 
             }//if 
             break; 
          }//case maxlen 
        case "minlength": 
        case "minlen": 
           { 
             if(eval(obVlera.value.length) <  eval(cmdvalue)) 
             { 
               if(!strError || strError.length ==0) 
               { 
                 strError = obVlera.name + " : " + cmdvalue + " characters minimum  "; 
               }//if               
               alert(strError ); 
               return false;                 
             }//if 
             break; 
            }//case minlen 
        case "alnum": 
        case "alphanumeric": 
           { 
              var pozitaKarakterit = obVlera.value.search("[^A-Za-z0-9]"); 
              if(obVlera.value.length > 0 &&  pozitaKarakterit >= 0) 
              { 
               if(!strError || strError.length ==0) 
                { 
                  strError = obVlera.name+": Only alpha-numeric characters allowed "; 
                }//if 
                alert(strError + "\n [Error character position " + eval(pozitaKarakterit+1)+"]"); 
                return false; 
              }//if 
              break; 
           }//case alphanumeric 
        case "num": 
        case "numeric": 
           { 
              var pozitaKarakterit = obVlera.value.search("[^0-9]"); 
              if(obVlera.value.length > 0 &&  pozitaKarakterit >= 0) 
              { 
                if(!strError || strError.length ==0) 
                { 
                  strError = obVlera.name+": Only digits allowed "; 
                }//if               
                alert(strError + "\n [Error character position " + eval(pozitaKarakterit+1)+"]"); 
                return false; 
              }//if 
              break;               
           }//numeric 
        case "alphabetic": 
        case "alpha": 
           { 
              var pozitaKarakterit = obVlera.value.search("[^A-Za-z]"); 
              if(obVlera.value.length > 0 &&  pozitaKarakterit >= 0) 
              { 
                  if(!strError || strError.length ==0) 
                { 
                  strError = obVlera.name+": Vetem karaktere alfabetike "; 
                }//if                             
                alert(strError + "\n [Error character position " + eval(pozitaKarakterit+1)+"]"); 
                return false; 
              }//if 
              break; 
           }//alpha 
        case "email": 
          { 
               if(!validateEmail(obVlera.value)) 
               { 
                 if(!strError || strError.length ==0) 
                 { 
                    strError = obVlera.name+": Shkruani email adresen valide "; 
                 }//if                                               
                 alert(strError); 
                 return false; 
               }//if 
           break; 
          }//case email 
        case "lt": 
        case "lessthan": 
         { 
            if(isNaN(obVlera.value)) 
            { 
              alert(obVlera.name+": Duhet te jete numer "); 
              return false; 
            }//if 
            if(eval(obVlera.value) >=  eval(cmdvalue)) 
            { 
              if(!strError || strError.length ==0) 
              { 
                strError = obVlera.name + " : vlera duhet te jete me e vogel se "+ cmdvalue; 
              }//if               
              alert(strError); 
              return false;                 
             }//if             
            break; 
         }//case lessthan 
        case "gt": 
        case "greaterthan": 
         { 
            if(isNaN(obVlera.value)) 
            { 
              alert(obVlera.name+": Duhet te jete numer "); 
              return false; 
            }//if 
             if(eval(obVlera.value) <=  eval(cmdvalue)) 
             { 
               if(!strError || strError.length ==0) 
               { 
                 strError = obVlera.name + " : vlera duhet te jete me e madhe se "+ cmdvalue; 
               }//if               
               alert(strError); 
               return false;                 
             }//if             
            break; 
         }//case greaterthan 
        case "regexp": 
         { 
            if(!obVlera.value.match(cmdvalue)) 
            { 
              if(!strError || strError.length ==0) 
              { 
                strError = obVlera.name+": Karaktere jo te vlefshme "; 
              }//if                                                               
              alert(strError); 
              return false;                   
            }//if 
           break; 
         }//case regexp 
        case "dontselect": 
         { 
            if(obVlera.selectedIndex == null) 
            { 
              alert("BUG: dontselect komanda for non-select Item"); 
              return false; 
            } 
            if(obVlera.selectedIndex == eval(cmdvalue)) 
            { 
             if(!strError || strError.length ==0) 
              { 
              strError = obVlera.name+": Zgjedhni nje opcion "; 
              }//if                                                               
              alert(strError); 
              return false;                                   
             } 
             break; 
         }//case dontselect 
    }//switch 
    return true; 
} 

/* 
* function validateForm 
* the function that can be used to validate any form 
* returns false if the validation fails; true if success 
* arguments : 
*   objForma     : the form object 
*   objVekPershkrimi : an array of objects describing the validations to conduct on each 
*        input item. 
*          The array should consist of one object per input item in the order the input 
*          elements are present in the form. Each object consist of zero or more validation 
*          objects. Each of these validation object is a pair consisting of the validation 
*          descriptor string and an optional Error message. 
*/ 

function validateForm(objForma,objVekPershkrimi) 
{ 
 for(var i=0; i < objVekPershkrimi.length; i++) 
 { 
   if(objForma.elements.length <= i) 
   { 
        alert("BUG: Obj descriptor for a non existent form element"); 
        return false; 
   }//if 
   for(var j=0; j < objVekPershkrimi[i].length ;j++) 
   { 
      if(validateData(objVekPershkrimi[i][j][0], 
                 objForma[i],objVekPershkrimi[i][j][1]) == false) 
       { 
	     objForma[i].focus();
         return false; 
       }//if 
   }//for 
 }//for 
} 