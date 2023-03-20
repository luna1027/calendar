let startotal = 50;
const starbody = document.querySelector('body');
const background7 = document.querySelector('.background7');

// let starshadow = document.createElement("div");
// starshadow.className = "starshadow";
// background7.appendChild(starshadow);

for (let i = 1; i <= startotal; i++) {
    let star = document.createElement("div");
    star.className = "star";
    background7.appendChild(star);
}
