    $(function () {
        $('#feedback_form').submit(function () {
            var flag1 = 0;
            var flag2 = 0;
            var flag3 = 0;
            var flag4 = 0;
            var $form = $(this);
            $form.find('.error').remove()
            if ($form.find("input[name=name]").val() == "") {
                $form.find("input[name=name]")
                    .after('<div class="error">Необходимо заполнить поле Имя</div>');
                flag1 = 1;
            }

            if ($form.find("input[name=email]").val() == "") {
                $form.find("input[name=email]")
                    .after('<div class="error">Не верно заполнено поле Email</div>');
                flag2 = 1;
            }
            if ($form.find("input[name=conment]").val() == "") {
                $form.find("input[name=conment]")
                    .after('<div class="error">Пожалуйста, введите сообщение</div>');
                flag3 = 1;
            }
            var state = $("input[type=checkbox]").prop("checked");
            if (!state) {
                $form.find("#check_block")
                    .after('<div class="error">Необходимо подтвердить согласие</div>');
                flag14 = 1;
            }
            if (flag1 == 1 && flag2 == 1 && flag3 == 1 && flag4 == 1) {
                $.post(
                    'send.php',
                    $form.serialize(),
                    function (msg) { 
                       alert("rfe");
                    }
                );
            }
            return false;
        });
    });