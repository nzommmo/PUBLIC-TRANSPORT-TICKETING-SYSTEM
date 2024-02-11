function load(){
    window.open("login/login.html","_self")

}
load()

var timeout = setTimeout(function(){
    window.open("login/login.html")
},10000)
clearTimeout(timeout)