var loading = setInterval(function(){
window.open("login/login.html","_self")
},5000)

setTimeout(function(){
    clearInterval(loading)
},5000)