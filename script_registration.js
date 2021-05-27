$(function () {
    flag4 = 0;
    $('#reg_form').submit(function () {
        var $form = $(this);
        var login = $form.find("input[name=email_registration]").val();
        var flag1 = 0;
        var flag2 = 0;
        var flag3 = 0;
        st = new RegExp('[^а-яА-Яa-zA-Z0-9_-]');
        st1 = new RegExp('[^a-zA-Z0-9_.@-]');
        $form = $(this);
        var name = $form.find("input[name=name_registration]").val();
        var surname=$form.find("input[name=surname_registration]").val();
        var email=$form.find("input[name=email_registration]").val();
        $form.find('.error1').remove()

        if (name== "") {
            $form.find("input[name=name_registration]")
                .after('<div class="error1">Введите имя</div>');
            flag1 = 1;
        } else if (st.test(name))
            {
                 $form.find("input[name=name_registration]")
                .after('<div class="error1">Введены некорректные символы </div>');
            flag1 = 1;  
                  }

        if (surname == "") {
            $form.find("input[name=surname_registration]")
                .after('<div class="error1">Введите фамилию</div>');
            flag2 = 1;
        }
        else if (st.test(surname))
            {
                 $form.find("input[name=surname_registration]")
                .after('<div class="error1">Введены некорректные символы </div>');
            flag2 = 1;  
                  }
        if ( email == "") {
            $form.find("input[name=email_registration]")
                .after('<div class="error1">Введите e-mail</div>');
            flag3 = 1;
        } else if (st1.test(email))
            {
                 $form.find("input[name=email_registration]")
                .after('<div class="error1">Введены некорректные символы </div>');
            flag3 = 1;  
                  }     
        else
{
        $.ajax({
            type: "POST",
            async: false,
            url: "check_login.php",
            data: {
                login: login
            },
            success: function (data) {          
                if (data == 1) {
                    flag4=1;
                    $form.find("input[name=email_registration]")
                        .after('<div class="error1">Такой e-mail уже зарегистрирован</div>');
                }
                else flag4=0;
            }

        });
   
}
        if (flag1 == 0 && flag2 == 0 && flag3 == 0 && flag4 == 0) {
            return true;
        }
        return false;

    });
});