let overlay = document.querySelector(".overlay");
let btn = document.querySelector(".menu-icon")
overlay.addEventListener("click", function () {
    btn.click();
})
const landnav = document.querySelectorAll(".land-nav a");

// Loop On All List Items
landnav.forEach(li => {

    // Click On Every List Items
    li.addEventListener("click", (ev) => {

        // Find the <h3> element within the clicked <a>
        const h3Element = ev.target.closest('a').querySelector('h3');

        // Remove Active Class From All Childrens
        document.querySelectorAll('.land-nav h3.active').forEach(element => {
            element.classList.remove("active");
        });

        // Add Active Class On Self
        h3Element.classList.add("active");
    });

});

document.getElementById('revealBtn').addEventListener('click', function () {
    const card = document.getElementById('cardContent');
    const dimmedBg = document.getElementById('dimmedBg');
    if (card.style.display === 'none' || card.style.display === '') {
        card.style.display = 'block';
        dimmedBg.style.display = 'block'; // Show the dimmed background
    } else {
        card.style.display = 'none';;
        dimmedBg.style.display = 'none'; // Hide the dimmed background
    }
});

document.getElementById('dimmedBg').addEventListener('click', function () {
    const card = document.getElementById('cardContent');
    const dimmedBg = document.getElementById('dimmedBg');
    card.style.display = 'none';
    dimmedBg.style.display = 'none'; // Hide the dimmed background when clicking outside the card
});
