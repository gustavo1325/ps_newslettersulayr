$(document).ready(()=>{
//ajax for messages error
const formNews = document.getElementById("formNews")

if(formNews){
    const fetchPromise = fetch('modules/psnewslettersulayr/src/ajaxResponde.php')
            .then(response => response.json())
            .catch(error => console.error('Error:', error))
            .then(result => {console.log('Success:', result)
                                console.log(result.errorEmail)
                            });
           
          
          }
    formNews.addEventListener('submit',()=>{
        console.log("has pulsado")
        
        //then(response => response.json())
        //.then(data => console.log(data));
    })


})