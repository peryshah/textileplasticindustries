
let currentSlide = 0;
const slides = document.querySelectorAll('.slide');
const totalSlides = slides.length;
let autoSlideInterval;

// Function to show the current slide with animation
function showSlide(index) {
    // Hide all slides
    slides.forEach((slide) => {
        slide.classList.remove('active', 'exit');
    });

    // Show the current slide
    slides[index].classList.add('active');

    // Automatically transition to the next slide after 5 seconds
    clearInterval(autoSlideInterval);
    autoSlideInterval = setInterval(() => {
        nextSlide();
    }, 5000);
}

// Function to go to the next slide
function nextSlide() {
    // Add exit animation to the current slide
    slides[currentSlide].classList.add('exit');

    // Update the current slide index
    currentSlide = (currentSlide + 1) % totalSlides;

    // Show the next slide
    setTimeout(() => {
        showSlide(currentSlide);
    }, 500); // Wait for the exit animation to complete
}

// Function to go to the previous slide
function prevSlide() {
    // Add exit animation to the current slide
    slides[currentSlide].classList.add('exit');

    // Update the current slide index
    currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;

    // Show the previous slide
    setTimeout(() => {
        showSlide(currentSlide);
    }, 500); // Wait for the exit animation to complete
}

// Event listeners for next/previous buttons
document.querySelector('.next-btn').addEventListener('click', () => {
    nextSlide();
});

document.querySelector('.prev-btn').addEventListener('click', () => {
    prevSlide();
});

// Initialize the slider
showSlide(currentSlide);









gsap.from(".heading h1", {
        y: -100,
        duration: 1,
        delay: 1,
        opacity: 0
})
gsap.from(".heading img", {
        x: -100,
        duration: 1,
        delay: 0.5,
        opacity: 0
})
gsap.from(".navbar", {
        y: -100,
        duration: 1,
        delay: 0.5,
        opacity: 0
})
gsap.from(".quotes h1", {
        y: -100,
        duration: 1,
        delay: 1,
        opacity: 0,
        duration: 0.5,
        stagger: 1,
})
// gsap.from("#img1", {
//         x: -50,
//         duration: 1,
//         delay: 0.5,
//         opacity: 0,
//         stagger:1
// })
// gsap.from("#img2", {
//         x: -100,
//         duration: 1,
//         delay: 0.5,
//         opacity: 0,
//         stagger:1
// })
// gsap.from("#img3", {
//         x: 50,
//         duration: 1,
//         delay: 0.5,
//         opacity: 0,
//         stagger:1
// })
// gsap.from("#img4", {
//         x: 100,
//         duration: 1,
//         delay: 0.5,
//         opacity: 0,
//         stagger:1
// })