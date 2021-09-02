// modal
document.querySelector(".info button").addEventListener("click", function () {
    document.querySelector("#modal").classList.remove("hide");
    document.querySelector("#modal").classList.add("show");
});

document.querySelector(".modal-cont button").addEventListener("click", function () {
    document.querySelector("#modal").classList.add("hide");
});


// $(".info button").click(function () {
//     $("#modal").removeClass().addClass("show");
// });

// $(".modal-cont button").click(function () {
//     $("#modal").addClass("hide");
// });

// Code View
document.addEventListener('DOMContentLoaded', (event) => {
    document.querySelectorAll('pre code').forEach((el) => {
        hljs.highlightElement(el);
    });
});