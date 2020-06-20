$('select[value]').each(function () {
    $(this).val($(this).attr('value'));
});
var behavior = function (val) {
    return val.replace(/\D/g, '').length === 11 ? '(00) 0 0000-0000' : '(00) 0000-00009';
},
    options = {
        onKeyPress: function (val, e, field, options) {
            field.mask(behavior.apply({}, arguments), options);
        }
    };

$('#telefone').mask(behavior, options);