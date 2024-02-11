function load(){
    window.open("login/login.html","_self")

}
load()

var timeout = setTimeout(function(){
    window.open("login/login.html")
},30000)
clearTimeout(timeout)