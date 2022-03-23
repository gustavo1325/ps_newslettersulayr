class ajaxfech{
    
    constructor(url){
       this.url=url;
       this.result=[];
    }

    fechSend(url){
        const fetchPromise = fetch(url)
            .then(response => response.json())
            .catch(error => console.error('Error:', error))
            .then(result => {console.log('Success:', result)
                               for(var key in result ){
                                   this.result[key] = result[key]
                               }
                                
                            })
           
          
          
    }
}