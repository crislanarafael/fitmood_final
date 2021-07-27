window.cardio = 0;
window.strength = 0;
window.balance = 0;
window.flexibility = 0;



function getWorkout()
{
    var workout = document.getElementById("workout-select");
    var value = workout.options[workout.selectedIndex].value;
    if(value == "cardio"){
        cardio += 1;
    }
    if(value == "strength"){
        strength += 1;
    }
    if(value == "balance"){
        balance += 1;
    }
    if(value == "flexibility"){
        flexibility += 1;
    }
    var data = [{
    values: [cardio, strength, balance, flexibility],
    labels: ['Cardio', 'Strength', 'Balance', 'Flexibility'],
    type: 'pie'
    }];

    var layout = {
    height: 400,
    width: 500
    };

    Plotly.newPlot('myDiv', data, layout);
    

}

function summarizeData(){
    alert("Workout Summary: \r\n" + cardio.toString() + " days of cardio \r\n"
    
    + strength.toString() + " days of strength training \r\n" +
    balance.toString() + " days of balance training \r\n" +
    flexibility.toString() + " days of flexibility training");
}

function saveData() {
    $.post("savedata.php",
    {
        name: $("#userName").val(),
        amount: aGlobalVariable,
        times: '1,2,3,4,5,6,7'
    }
    );
}



