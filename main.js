const loading = setInterval(function () {
    window.open("login/login.php", "_self")
}, 5000);

setTimeout(function(){
    clearInterval(loading)
},5000)


// JavaScript to handle logout button click
document.getElementById('logoutBtn').addEventListener('click', function() {
    location.href = 'index.php?logout=1';
});

// JavaScript to handle closing the popup
function closePopup() {
    document.getElementById('successPopup').style.display = 'none';
}
