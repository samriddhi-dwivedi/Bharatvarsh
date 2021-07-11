// Wrap every letter in a span

var textWrapper = document.querySelector(".ml6 .letters");
textWrapper.innerHTML = textWrapper.textContent.replace(
  /\S/g,
  "<span class='letter'>$&</span>"
);

anime
  .timeline({ loop: true })
  .add({
    targets: ".ml6 .letter",
    translateY: ["1.1em", 0],
    translateZ: 0,
    duration: 1000,
    delay: (el, i) => 50 * i,
  })
  .add({
    targets: ".ml6",
    opacity: 0,
    duration: 0,
    easing: "easeOutExpo",
    delay: 1000,
  });

var animate = ScrollReveal();

animate.reveal(".author", {
  delay: 0,
  origin: "left",
  duration: 1500,
  distance: "100px",
});

animate.reveal(".read", {
  delay: 0,
  origin: "right",
  duration: 1500,
  distance: "100px",
});

ScrollReveal().reveal(".imgg", {
  rotate: {
    x: 500,
    z: 500,
  },
});

animate.reveal(".conntt", {
  delay: 0,
  origin: "left",
  duration: 2500,
  distance: "100px",
});

animate.reveal(".lcs", {
  delay: 0,
  origin: "bottom",
  duration: 2500,
  distance: "100px",
});

animate.reveal(".comment-tab", {
  delay: 0,
  origin: "left",
  duration: 2500,
  distance: "1000px",
});

//profile

animate.reveal(".padding", {
  delay: 1000,
});

animate.reveal(".m-b-25", {
  delay: 1500,
  origin: "left",
  duration: 1500,
  distance: "100px",
});

animate.reveal(".m-b-20", {
  delay: 1500,
});

animate.reveal(".nm", {
  delay: 2000,
  origin: "top",
  duration: 1500,
  distance: "100px",
});

animate.reveal(".nm1", {
  delay: 2500,
  origin: "right",
  duration: 1500,
  distance: "100px",
});

animate.reveal(".nm2", {
  delay: 3000,
  origin: "left",
  duration: 1500,
  distance: "100px",
});

animate.reveal(".nm3", {
  delay: 3500,
  origin: "bottom",
  duration: 1500,
  distance: "100px",
});

//category
animate.reveal(".cov", {
  delay: 500,
  origin: "left",
  duration: 1500,
  distance: "700px",
});

animate.reveal(".pl-md-5", {
  delay: 0,
  origin: "left",
  duration: 1500,
  distance: "100px",
});

ScrollReveal().reveal(".abt-1", {
  rotate: {
    x: 500,
    z: 500,
  },
});

animate.reveal(".abt-2", {
  delay: 0,
  origin: "right",
  duration: 1500,
  distance: "100px",
});

animate.reveal(".pre", {
  delay: 0,
  origin: "left",
  duration: 1500,
  distance: "100px",
});

animate.reveal(".nex", {
  delay: 0,
  origin: "right",
  duration: 1500,
  distance: "100px",
});

animate.reveal(".ccc", {
  delay: 0,
  origin: "left",
  duration: 1500,
  distance: "150px",
});

animate.reveal(".cu", {
  delay: 0,
  origin: "bottom",
  duration: 1500,
  distance: "150px",
});
