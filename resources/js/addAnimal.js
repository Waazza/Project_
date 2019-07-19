$(function () {
    let typeCheck = document.getElementById('type');

        typeCheck.addEventListener('input', function(){
            let type = typeCheck.value;
            let dogDisplay = document.getElementById('dogRace');
            let catDisplay = document.getElementById('catRace');
            let nacDisplay = document.getElementById('nacRace');
            if (type == 1){
                dogDisplay.style.display = 'flex';
                catDisplay.style.display = 'none';
                nacDisplay.style.display = 'none';
            }else if(type == 2){
                catDisplay.style.display = 'flex';
                dogDisplay.style.display = 'none';
                nacDisplay.style.display = 'none';
            }else if(type == 3){
                nacDisplay.style.display = 'flex';
                dogDisplay.style.display = 'none';
                catDisplay.style.display = 'none';
            }
        });

        let tatooCheck = document.getElementsByName('checkTatoo');

        tatooCheck[0].addEventListener('click', function(){
            let tatooInput = document.getElementById('tatooInput');
            tatooInput.style.display = 'flex';
        });

        tatooCheck[1].addEventListener('click', function(){
            let tatooInput = document.getElementById('tatooInput');
            tatooInput.style.display = 'none';
        });
});
