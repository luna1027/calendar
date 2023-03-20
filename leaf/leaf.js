let leaftotal = 30;
const leafbody = document.querySelector('body');
const background11 = document.querySelector('.background11');

for (let i = 1; i <= leaftotal; i++) {
    let leaf = document.createElement("div");
    leaf.className = "leaf";
    background11.appendChild(leaf);
}