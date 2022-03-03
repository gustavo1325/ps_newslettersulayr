const formNews = document.getElementById("formNews")

if(formNews){
    const fetchPromise = fetch('modules/psnewslettersulayr/src/ajaxResponde.php')
            .then(response => response.json())
            .catch(error => console.error('Error:', error))
            .then(result => {console.log('Success:', result)
                                console.log(result.errorEmail)
                            });
           
          
          }