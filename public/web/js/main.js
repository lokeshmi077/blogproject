$(".digit-group")
    .find("input")
    .each(function () {
        $(this).attr("maxlength", 1);
        $(this).on("keyup", function (e) {
            var parent = $($(this).parent());

            if (e.keyCode === 8 || e.keyCode === 37) {
                var prev = parent.find("input#" + $(this).data("previous"));

                if (prev.length) {
                    $(prev).select();
                }
            } else if (
                (e.keyCode >= 48 && e.keyCode <= 57) ||
                (e.keyCode >= 65 && e.keyCode <= 90) ||
                (e.keyCode >= 96 && e.keyCode <= 105) ||
                e.keyCode === 39
            ) {
                var next = parent.find("input#" + $(this).data("next"));

                if (next.length) {
                    $(next).select();
                } else {
                    if (parent.data("autosubmit")) {
                        parent.submit();
                    }
                }
            }
        });
    });

function getIp(callback) {
    fetch("ipinfo.io/140.82.183.34?token=66e2f39b20a2bd", {
        headers: { Accept: "application/json" },
    })
        .then((resp) => resp.json())
        .catch(() => {
            return {
                country: "us",
            };
        })
        .then((resp) => callback(resp.country));
}

const phoneInputField = document.querySelector("#phone");
const phoneInput = window.intlTelInput(phoneInputField, {
    utilsScript:
        "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
});

const info = document.querySelector(".alert-info");

function process(event) {
    event.preventDefault();

    const phoneNumber = phoneInput.getNumber();

    info.style.display = "";
    info.innerHTML = `Phone number in E.164 format: <strong>${phoneNumber}</strong>`;
}

const dropArea = document.querySelector(".drop_box"),
    button = dropArea.querySelector("button"),
    dragText = dropArea.querySelector("header"),
    input = dropArea.querySelector("input");
let file;
var filename;

button.onclick = () => {
    input.click();
};

input.addEventListener("change", function (e) {
    var fileName = e.target.files[0].name;
    let filedata = `

    <h4>${fileName}</h4>
        `;
    dropArea.innerHTML = filedata;
});

// Block String Type

// otp correction

function moveToNext(input, nextId) {
    debugger;
    // Allow only numbers
    input.value = input.value.replace(/[^0-9]/g, "");

    // Move to next input if a number is entered
    if (input.value.length === 1 && nextId) {
        document.getElementById(nextId).focus();
    }
}

// Prevent pasting special characters
document.querySelectorAll(".otp input").forEach((input) => {
    debugger;
    input.addEventListener("paste", function (e) {
        e.preventDefault();
        let pastedText = (e.clipboardData || window.clipboardData)
            .getData("text")
            .replace(/[^0-9]/g, "");
        let inputs = document.querySelectorAll(".otp input");

        for (let i = 0; i < pastedText.length; i++) {
            if (inputs[i]) {
                inputs[i].value = pastedText[i];
            }
        }
    });
});


// header search select

// $("#select").select2({
// 	tags: true,
//  // dropdownParent: $('#modal), // if select in modal
// 	theme: "bootstrap",
//  });





//  index page carousel

// $("#ProductNav .ProductNav_Link").click(function() {
// 	centerLI(this, '#ProductNav');
//  });
 
 function centerLI(element, container) {
	 var $element = $(element);
	 var $container = $(container);
	 var elementWidth = $element.outerWidth();
	 var containerWidth = $container.width();
	 var elementOffset = $element.position().left;
	 var containerScrollLeft = $container.scrollLeft();
 
	 var scrollPosition = containerScrollLeft + elementOffset - (containerWidth / 2) + (elementWidth / 2);
	 
	 $container.animate({ scrollLeft: scrollPosition }, 300);
 }
 