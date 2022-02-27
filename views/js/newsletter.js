$(document).ready(()=>{
console.log('hola pii');

const formNews = document.getElementById("formNews")

if(formNews){
    console.log (formNews)
    formNews.addEventListener('submit',()=>{
        console.log("has pulsado")
    })

}
})