let flower = 100;
const flowerbody = document.querySelector('body');
const background3 = document.querySelector('.background3');

for (let i = 1; i <= flower; i++) {
    let flower = document.createElement("div");
    flower.className = "flower";
    background3.appendChild(flower);
}