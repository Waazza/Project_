$(function(){
    // Ajax selection de ville -----------------------  
    $("#zipCode").on("input", function () {
        $zipCode = $("#zipCode");
        if(zipCode.value.length ==  5) {
            $.ajaxSetup({
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
            });
            $.ajax({
                type: 'POST',
                url: '/ajaxZipCode',
                data: 'zipCodeCities=' + zipCode.value,
            })
                .always(function (data) {
                    let cities = data.city;
                    for (let i = 0; i < cities.length; i++) {
                        let select = document.getElementById('selectCity');
                        let option = document.createElement('option')
                        option.classList.add('city');
                        option.setAttribute('value', cities[i].name);
                        option.text = cities[i].name;
                        select.add(option);
                    }
                });
        } else {
            $('.city').remove();
        }
    })
});
