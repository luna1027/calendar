let snowtotal = 100;
const snowbody = document.querySelector('body');
const background12 = document.querySelector('.background12');
for (let i = 1; i <= snowtotal; i++) {
    let snow = document.createElement("div");
    snow.className = "snow";
    background12.appendChild(snow);
}