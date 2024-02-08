function load(){
    window.open("login/login.html","_blank")

}
load()

var timeout = setTimeout(function(){
    window.open("login/login.html")
},5000)
clearTimeout(timeout)