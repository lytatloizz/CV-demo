$(document).ready(function() {
    $('#search-input').on('keyup', function() {
        var query = $(this).val();
        if (query.length >= 3) {
            $.ajax({
                url: 'ajax.search-ajax-result',
                type: 'GET',
                data: { query: query },
                success: function(data) {
                    $('#search-result').html(data);
                },
                error: function(xhr, textStatus, errorThrown) {
                    console.log(xhr.responseText + textStatus.responseText + errorThrown.responseText);
                }
            });
        }else if(query.length == 0){
            $.ajax({
                url: 'ajax.search-ajax-show',
                type: 'GET',
                data: { query: query },
                success: function(data) {
                    $('#search-result').html(data);
                },
                error: function(xhr, textStatus, errorThrown) {
                    console.log(xhr.responseText + textStatus.responseText + errorThrown.responseText);
                }
            });
        }
    });
});
