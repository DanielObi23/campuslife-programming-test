import { createIcons, icons } from "lucide";

createIcons({ icons });

document.addEventListener("DOMContentLoaded", () => {
    const searchInput = document.getElementById("searchInput");

    searchInput.addEventListener("keyup", () => {
        const query = searchInput.value.toLowerCase();

        document.querySelectorAll(".card").forEach((card) => {
            const text = card.innerText.toLowerCase();

            card.style.display = text.includes(query) ? "" : "none";
        });
    });
});
