$(function () {
     flag3 = 0;
    $('#acc_form').submit(function () {
        var $form = $(this);
        var login = $form.find("input[name=email_entrance]").val();
        var password = $form.find("input[name=password_entrance]").val();
        var flag1 = 0;
        var flag2 = 0;
        
        $form = $(this);

        $form.find('.error1').remove()
  
        if ($form.find("input[name=email_entrance]").val() == "") {
            $form.find("input[name=email_entrance]")
                .after('<div class="error1">Введите e-mail</div>');
            flag1 = 1;
        } 
        if ($form.find("input[name=password_entrance]").val() == "") {
            $form.find("input[name=password_entrance]")
                .after('<div class="error1">Введите пароль</div>');
            flag2 = 1;
        } 

if (flag1 == 0 && flag2 == 0){
        $.ajax({
            type: "POST",
            async: false,
            url: "account_check.php",
            data: {
                login: login,
                password:password
            },
            success: function (data) {
                if (data == 1) {
                    $form.find("input[name=password_entrance]")
                        .after('<div class="error1">Пароль или email введены не верно</div>');
                    flag3 = 1;
                } else  flag3 = 0;
            }

        });
}
  
        if (flag1 == 0 && flag2 == 0 && flag3 == 0 ) {
            return true;
        }
        return false;

    });
});