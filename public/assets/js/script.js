const toggler = document.querySelector(".toggler-btn");
const closeBtn = document.querySelector(".close-btn");

toggler.addEventListener("click", function() {
    const sidebar = document.querySelector("#sidebar");
    sidebar.classList.toggle("collapsed");
    toggler.classList.toggle("rotate");
});

closeBtn.addEventListener("click", function() {
    const sidebar = document.querySelector("#sidebar");
    sidebar.classList.remove("collapsed");
    toggler.classList.remove("rotate");
});
