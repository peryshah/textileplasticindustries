
gsap.from(".image-container", {
        ease: Expo.easeInOut,
        width: "0%",
        duration: 2,
        stagger: 1,
        opacity: 0
})

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