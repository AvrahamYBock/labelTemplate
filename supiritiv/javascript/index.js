(function () {
    var modalWrapper = document.getElementById("modalWrapper");
    var gotIt = document.getElementById("gotIt");
    var printInstructionsButton = document.getElementById("printInstructionsButton");

    gotIt.addEventListener("click", function () {
        modalWrapper.style.display = "none";
    })

    printInstructionsButton.addEventListener("click", function () {
        modalWrapper.style.display = "block";
        event.preventDefault();
    })
}());