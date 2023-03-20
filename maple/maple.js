let mapletotal = 30;
// let mapleBg = [];
// mapleBg[0] = "./image/leaf_1.png";
// mapleBg[1] = "./image/leaf_2.png";
// mapleBg[2] = "./image/leaf_3.png";
// let randomMapleBg = Math.round(Math.random() * 2);

const maplebody = document.querySelector('body');
const background9 = document.querySelector('.background9');
const mapleleft=document.querySelector('.mapleleft');
let mapletree = document.createElement("div");
mapletree.className = "mapletree";
mapleleft.appendChild(mapletree);

for (let i = 1; i <= mapletotal; i++) {
    let maple = document.createElement("div");
    maple.className = "maple";
    let m = Math.ceil(Math.random() * 3);
    maple.style = `background-image:url(./maple/image/leaf_${m}.png)`;
    // document.write('<style>maple{background-image:url(' + mapleBg[randomMapleBg] + ')} </style>');
    background9.appendChild(maple);
}