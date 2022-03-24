
$(document).ready(()=>{

//+++++++++++++++++++++++ I'm sending the form datas for ajax +++++++++++++ 
const name = 'nameNewsletter',
      mail = 'emailNewsletter', 
      privacitat= 'politicsNewsletter', 
    clickButton = document.getElementById("formNews")

//this object have the class key 
    let dataInput = {
        name,
        mail,
        privacitat,
        getValueInput(inputValueForm){
            let inputValue = document.getElementById(inputValueForm).value; 
            //console.log(inputValue)
            return inputValue
        }
    }

  //this object  contains the form vaule input to send to ajax 
   valueInput= {
    nameValue:'',
    mailValue:'',
    boxPrivacitatVaule:''
  }
  
  
  clickButton.addEventListener('submit', (event)=>{
    event.preventDefault();
    valueInput.mailValue = dataInput.getValueInput(mail)
    valueInput.nameValue = dataInput.getValueInput(name)
    valueInput.boxPrivacitatVaule = dataInput.getValueInput(privacitat)
    
    ajaxNews()                           
  });

  const ajaxNews = () =>{
    jQuery.ajax({
      url:'modules/psnewslettersulayr/src/ajaxResponde.php',
      type: 'post',
      data: {'email':valueInput.mailValue},
      dataType: 'html',
      error: function (_error){
        console.error(_error)
      },
      success: function(_html){
        console.log("hola manuel")
        console.log(_html)
        
      }
    })
  }
 
  
    
})