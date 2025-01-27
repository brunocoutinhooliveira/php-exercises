document.addEventListener("DOMContentLoaded", function () {
    Inputmask({
        alias: "numeric",
        groupSeparator: ".",
        radixPoint: ",",
        autoGroup: true,
        digits: 2,
        digitsOptional: false,
        prefix: "R$ ",
        placeholder: "0"
    }).mask("#valor_inicial");
});