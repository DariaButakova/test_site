$(function () {
    $('#pas_form').submit(function () {
        var $form = $(this);  
        var flag1 = 0;
        var flag2 = 0;
        var flag3 = 0;
        st = new RegExp('[^a-zA-Z0-9_-]');
        $form = $(this);
var password1 = $form.find("input[name=password1]").val();
    var password2 = $form.find("input[name=password2]").val()
        $form.find('.error1').remove()

        if (password1 == "") {
            $form.find("input[name=password1]")
                .after('<div class="error1">Введите пароль</div>');
            flag1 = 1;
        } else if (st.test(password1)){
            $form.find("input[name=password1]")
                .after('<div class="error1">Введены некорректные символы</div>');
            flag1 = 1;
        } else if (password1.length<5){
            $form.find("input[name=password1]")
                .after('<div class="error1">Введен короткий пароль(менее 5 символов)</div>');
            flag1 = 1;
        }

        if ( password2== "") {
            $form.find("input[name=password2]")
                .after('<div class="error1">Повторите пароль</div>');
            flag2 = 1;
        }
        
        
        if (flag1 == 0 && flag2 == 0 ){
        if ($form.find("input[name=password2]").val() != $form.find("input[name=password1]").val()) {
            $form.find("input[name=password2]")
                .after('<div class="error1">Пароли не совпадают</div>');
            flag3 = 1;
        }

        }
        
        if (flag1 == 0 && flag2 == 0 && flag3 == 0) {
            
            
            return true;
        }
        return false;

    });
});