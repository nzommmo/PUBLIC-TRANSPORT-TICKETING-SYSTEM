let keywords = [
    "CUEA",
    "Bomas",
    "Rongai",
    "Maasai Lodge",
    "Tumaini",
    "congo",
    "Ngong"
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
    if(inputboxes[0].value =="Rongai" && inputboxes[1].value == "Ngong"){
    console.log("hello")


    }
    
    if (selectedValue== 48) {
        inputboxes[0].value = "Rongai";
        boardingDiv.value =  inputboxes[0].value;
        resultboxes[0].innerHTML = "";
        From.value = inputboxes[0].value;
        plate.value = "KAY 485T"

    }else if(selectedValue== 125){
        inputboxes[0].value = "Ngong";
        boardingDiv.value =  inputboxes[0].value;
        resultboxes[0].innerHTML = "";
        From.value= inputboxes[0].value;
        plate.value = "KBZ 325H"
        var rate = 20;
    }else if(selectedValue== 35){
        inputboxes[0].value = "Kasarani";
        boardingDiv.value = inputboxes[0].value;
        resultboxes[0].innerHTML = "";
        From.value= inputboxes[0].value;
        plate.value = "KBU 234P"
        var rate = 15;
    }
        



            function calcfare(){
                
                let fare = 10 * rate
                fareamount.value = fare

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
        From.value = list.innerHTML;
        boardingDiv.value =  list.innerHTML;
        
    } else if (index === 1) {
        TO.value= list.innerHTML;
        alightDiv.value =  list.innerHTML;
    }
}

let seats = document.getElementById("seatcontainer")

function bookseat(){
    seats.style.display ="block"
}

seatbook.addEventListener('click',bookseat)

document.addEventListener('DOMContentLoaded', function() {
    const seats = document.querySelectorAll('.seatbtn');
    const selectedSeatDisplay = document.getElementById('Seatno');
  
    seats.forEach(seat => {
      seat.addEventListener('click', function() {
        // Clear selected class from all seats
        seats.forEach(seat => {
          seat.classList.remove('selected');
        });
  
        // Add selected class to the clicked seat
        this.classList.add('selected');
  
        // Update the selected seat display
        selectedSeatDisplay.value =  this.textContent;
      })
    })
  })
  let qrbutton = document.getElementById("Generate")
  let webform = document.getElementById("webform")
  let qrContentInput =  document.getElementById("qr-content")
  console.log(qrContentInput)
  let qrGenerationForm = 
  document.getElementById("qr-generation-form");
  let qrCode;
   
  function generateQrCode(qrContent) {
    return new QRCode("qr-code", {
      text: qrContent,
      width: 256,
      height: 256,
      colorDark: "#000000",
      colorLight: "#ffffff",
      correctLevel: QRCode.CorrectLevel.H,
    });
  }
   
  // Event listener for form submit event
  Generate.addEventListener("click", function (event) {
    seats.style.display ="none"

    // Prevent form submission
    event.preventDefault();
    let qrContent = "Boarding Station" + ":" + From.value + "\n" +"Alighting Station" + ":" + TO.value + "\n" +
    "Fare" + ":" + fare.value;
    if (qrCode == null) {
         
      // Generate code initially
      qrCode = generateQrCode(qrContent);
    } else {
         
      // If code already generated then make 
      // again using same object
      qrCode.makeCode(qrContent);
    }
  });
  
 