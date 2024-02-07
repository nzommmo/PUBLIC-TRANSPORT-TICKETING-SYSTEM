
/*
function search(){
    let stationsearch = document.getElementById("stationsearch")

var filter = stationsearch.value.toLowerCase()
var dropdown = document.getElementById("station")
var options = dropdown.getElementsByTagName("option")
for (var i = 0;i < options.length; i++ ){
    var optiontext = options[i].textContent.toLowerCase()
    if(optiontext.indexOf(filter)>-1) {
        options[i].style.display =''
    }else{
        options[i].style.display ="none"
    }
 }
 dropdown.classList.add("show")


}

stationsearch.addEventListener("input",search)
*/

 let keywords= [
    "CUEA",
    "Bomas",
    "Rongai",
    "Maasai Lodge",
    "Tumaini"

 ];

 const resultbox = document.querySelector(".resultbox");
 const inputbox = document.getElementById("inputbox")

 inputbox.onkeyup = function(){
    let result = []
    let input = inputbox.value
    if (input.length){
        result = keywords.filter((keyword)=>{
           return keyword.toLowerCase().includes(input.toLowerCase())
        })
        console.log(result)
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
}
const Routenumber  = document.getElementById("Routenumber")
const searchinput =  document.getElementById("search")
const route = Routenumber.value

function checkinput(){
    if (Routenumber.value == 125){
        searchinput.value ="Rongai"        
    }else if(Routenumber.value == 48) {
        searchinput.value == "CUEA"
    }
    else{
        searchinput.value =""
    }

}
checkinput()

function clear(){
    searchinput.value = ""
    Routenumber.value = ""
}

//addEventListener("click",clear)