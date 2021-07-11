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
//animate
var animate = ScrollReveal();

animate.reveal(".ppl", {
  delay: 1000,
  origin: "left",
  duration: 1500,
  distance: "100px",
});

animate.reveal(".plc", {
  delay: 1200,
  origin: "left",
  duration: 1500,
  distance: "100px",
});

animate.reveal(".foo", {
  delay: 1400,
  origin: "left",
  duration: 1500,
  distance: "100px",
});

animate.reveal(".ins", {
  delay: 1600,
  origin: "left",
  duration: 1500,
  distance: "100px",
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

animate.reveal(".cu", {
  delay: 0,
  origin: "bottom",
  duration: 1500,
  distance: "150px",
});
