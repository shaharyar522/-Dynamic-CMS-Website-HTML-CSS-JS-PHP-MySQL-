document.addEventListener("DOMContentLoaded", function () {
    const sliderTrack = document.querySelector(".slider-track");
    const images = document.querySelectorAll(".slider-track img");
    const dotsContainer = document.createElement("div");
    dotsContainer.className = "slider-dots";
    document.querySelector(".slider-container").appendChild(dotsContainer);

    let index = 0;
    const totalImages = images.length / 2; // Avoid duplication issues

    for (let i = 0; i < totalImages; i++) {
        const dot = document.createElement("div");
        dot.className = "dot";
        dot.addEventListener("click", () => moveSlider(i));
        dotsContainer.appendChild(dot);
    }

    function updateDots() {
        document.querySelectorAll(".dot").forEach((dot, i) => {
            dot.classList.toggle("active", i === index);
        });
    }

    function moveSlider(newIndex) {
        index = newIndex;
        const offset = -index * 100;
        sliderTrack.style.transform = `translateX(${offset}vw)`;
        updateDots();
    }

    setInterval(() => moveSlider((index + 1) % totalImages), 5000); // Auto-slide every 5 seconds
    updateDots();
});


