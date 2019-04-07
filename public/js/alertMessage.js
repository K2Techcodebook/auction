function successMessageFunction(message) {
    //check for messss

    $("body").xmalert({
        x: "right",
        y: "top",
        xOffset: 30,
        yOffset: 30,
        alertSpacing: 40,
        lifetime: 6000,
        fadeDelay: 0.3,
        template: "messageSuccess",
        title: "Success",
        paragraph: message
    });
}

function errorMessageFuntion(message) {
    $("body").xmalert({
        x: "right",
        y: "top",
        xOffset: 30,
        yOffset: 30,
        alertSpacing: 40,
        lifetime: 100000,
        fadeDelay: 0.3,
        template: "messageError",
        title: "6000",
        paragraph: message
    });
}
