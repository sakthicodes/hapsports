document.addEventListener('DOMContentLoaded', () => {
    const navbar = document.querySelector('.navbar');
    const triangleIcon = document.querySelector('.triangle');
    const bxMenuIcon = document.querySelector('.navbar-toggler-main i'); 
    const dropdownButton = document.getElementById("dropdownButton");
    const dropdownContent = document.getElementById("dropdownContent");
    const navbarToggler = document.getElementById('navbarToggler');
    const customDropdown = document.getElementById('customDropdown');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) { 
            navbar.classList.add('scrolled');
            if (triangleIcon) {
                triangleIcon.style.borderTopColor = 'white';
                bxMenuIcon.style.color = 'white';
            }
        } else {
            navbar.classList.remove('scrolled');
            if (triangleIcon) {
                triangleIcon.style.borderTopColor = 'black';
                bxMenuIcon.style.color = 'black';

            }
        }
    });
});

navbarToggler.addEventListener('click', () => {
    customDropdown.classList.toggle('show');
    });
dropdownButton.addEventListener("click", () => {
    const isExpanded = dropdownButton.getAttribute("aria-expanded") === "true";
    dropdownButton.setAttribute("aria-expanded", !isExpanded);

    if (isExpanded) {
        dropdownContent.style.animation = "slideUp 0.4s ease forwards";
        setTimeout(() => dropdownContent.classList.remove("open"), 400);
    } else {
        dropdownContent.style.animation = "slideDown 0.4s ease forwards";
        dropdownContent.classList.add("open");
    }
});