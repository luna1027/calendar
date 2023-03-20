let rain4total = 150;

const rain4body = document.querySelector('body');
const background4 = document.querySelector('.background4');

for (let i = 1; i <= rain4total; i++) {
    let rain4 = document.createElement("div");
    rain4.className = "rain4";
    background4.appendChild(rain4);
}