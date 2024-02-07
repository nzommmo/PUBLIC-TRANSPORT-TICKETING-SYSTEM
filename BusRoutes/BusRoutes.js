 let keywords= [
    "CUEA",
    "Bomas",
    "Rongai",
    "Maasai Lodge",
    "Tumaini",
    "congo",
    "Rogo"

 ];

 const resultbox = document.querySelector(".resultbox");
 const inputbox = document.getElementById("inputbox")
const From = document.getElementById("From")
 inputbox.onkeyup = function(){
    let result = []
    let input = inputbox.value
    if (input.length){
        result = keywords.filter((keyword)=>{
           return keyword.toLowerCase().includes(input.toLowerCase())
        })
      
    }
    display(result)
    if(!result.length){
        resultbox.innerHTML=""
    }

   

   
   
 }
 function display(result){
    const content = result.map((list)=>{
        return "<li onclick=selectInput(this)>" + list + "</li>"
    })

    
    resultbox.innerHTML = "<ul>" + content.join('') + "</ul>"
 }


function selectInput(list){
    inputbox.value = list.innerHTML
    resultbox.innerHTML =""
    From.innerHTML = list.innerHTML
    
}
