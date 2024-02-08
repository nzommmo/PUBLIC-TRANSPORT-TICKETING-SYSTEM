let keywords = [
    "CUEA",
    "Bomas",
    "Rongai",
    "Maasai Lodge",
    "Tumaini",
    "congo",
    "Rogo"
];

const resultboxes = document.querySelectorAll(".resultbox");
const inputboxes = document.querySelectorAll(".input");
const routesSelect = document.getElementById("Routenumber");
const boardingDiv = document.getElementById("BusFrom");
const alightDiv = document.getElementById("BusTo");
const plate = document.getElementById("plateno")
const fareamount  = document.getElementById("fare")

inputboxes.forEach((inputbox, index) => {
    inputbox.addEventListener('keyup', function () {
        let result = [];
        let input = inputbox.value;

        if (input.length) {
            result = keywords.filter((keyword) => {
                return keyword.toLowerCase().includes(input.toLowerCase());
            });
        }

        display(result, index);
        if (!result.length) {
            resultboxes[index].innerHTML = "";
        }
    });
});

routesSelect.addEventListener('change', function() {
    let selectedValue = routesSelect.value;
    
    if (selectedValue== 48) {
        inputboxes[0].value = "Rongai";
        boardingDiv.innerHTML = "Boarding: " + inputboxes[0].value;
        resultboxes[0].innerHTML = "";
        From.innerHTML = inputboxes[0].value;
        plate.innerHTML = "KAY 485T"
        let rate = 20;

    }else if(selectedValue== 125){
        inputboxes[0].value = "Ngong";
        boardingDiv.innerHTML = "Boarding: " + inputboxes[0].value;
        resultboxes[0].innerHTML = "";
        From.innerHTML = inputboxes[0].value;
        plate.innerHTML = "KBZ 325H"
        let rate = 20;
    }
        



            function calcfare(){
                
                fare = 0.5 * rate
                fareamount.innerHTML = fare

            }
            calcfare()
            
        
    
});

function display(result, index) {
    const content = result.map((list) => {
        return "<li onclick=selectInput(this," + index + ")>" + list + "</li>";
    });

    resultboxes[index].innerHTML = "<ul>" + content.join('') + "</ul>";
}

function selectInput(list, index) {
    inputboxes[index].value = list.innerHTML;
    resultboxes[index].innerHTML = "";
    if (index === 0) {
        From.innerHTML = list.innerHTML;
        boardingDiv.innerHTML = "Boarding: " + list.innerHTML;
        if (list.innerHTML.toLowerCase() === "rongai") {
            // Display "Welcome" when "Rongai" is selected
            console.log("Welcome");
        }
    } else if (index === 1) {
        TO.innerHTML = list.innerHTML;
        alightDiv.innerHTML = "Alight: " + list.innerHTML;
    }
}


