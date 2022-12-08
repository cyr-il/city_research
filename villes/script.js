$(document).ready(function(){
    $('#search-city').keyup(function(){
        $('#result-search').html('');

        var city = $(this).val();

        if(city != ""){
            $.ajax({
                type: 'GET',
                url: '/villes/search_city.php',
                data: 'city=' + encodeURIComponent(city),
                success: function(data){
                    if(data != ""){
                        $('#result-search').append(data);
                    }else{
                        document.getElementById('result-search').innerHTML = "<div style='font-size: 20px; text-align: center; margin-top: 10px'>Aucune ville</div>"
                    }
                }
            });
        }
    });
});
