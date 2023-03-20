let shootstartotal = 25;
const shootstarbody = document.querySelector('body');
const background10 = document.querySelector('.background10');

for (let i = 1; i <= shootstartotal; i++) {
    let shootstar = document.createElement("div");
    shootstar.className = "shootstar";
    background10.appendChild(shootstar);
}
