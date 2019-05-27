$(document).ready(function(){  

    function total(){debugger
        var sum = 0;      
        $('.price').each(function() {debugger
            sum += Number($(this).text());
            $('#total').text(sum);
            $('#estimatedTotal').text(sum);           
        });
    }
    
    total();

    $('#apply').on('click',function(){debugger;
        url = document.URL;
        var code = $('#code').val();
        $.ajax({
            type: "POST",
            cache: false,
            
            url: url + '/checkCode',
            data: {
                _token: csrf,
                code: code,
            },
            success: function (response) {debugger
                if(response!= ""){
                    $('#pormotionCode').text(code);
                    var discount = response.discount_percentage;
                    var total = $('#total').text();
                    var totalDiscount = ((discount/100)*total).toFixed(2);
                    var estimatedTotal = (total - totalDiscount).toFixed(2);
                    $('#pormotionCodeValue').text(totalDiscount);
                    $('#estimatedTotal').text(estimatedTotal)

                }
                else{
                    // total();
                    var sum = 0;      
                    $('.price').each(function() {debugger
                        sum += Number($(this).text());
                        $('#total').text(sum);
                        $('#estimatedTotal').text(sum);           
                    });
                    $('#pormotionCode').text('NOT');
                    $('#pormotionCodeValue').text('0');
                    alert('invalid promocode');
                   
                }
                
            }
        });
    });

    (function () {
        var previous;
        $(".quantity").on('focus', function () {debugger
            // Store the current value on focus and on change
            previous = this.value;
        }).change(function() {debugger
            // Do something with the previous value after the change
            $('#pormotionCode').text('NOT');
            $('#pormotionCodeValue').text('0');
            $('#code').val('');      
            var price = $($(this).parent().parent().parent().children()[3]).find('.price').text();
            var perQuantityPrice = price/previous;
            var quantity = $(this).val();	
            totalQuantityPrice = perQuantityPrice*quantity;
            $($(this).parent().parent().parent().children()[3]).find('.price').text(totalQuantityPrice);
    
            // Make sure the previous value is updated
            previous = this.value;
            total();
        });
        
    })();

    $.ajax({
        type: "POST",
        cache: false,
        datatype:"json",
        url: url + '/checkPrice',
        data: {
            _token: csrf,
        },
        success: function (response) {debugger
            if(response!= ""){
                var data = JSON.parse(response);

            }
            
        }
    });

});
