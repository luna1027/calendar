let rain6total = 300;

const rain6body = document.querySelector('body');
const background6 = document.querySelector('.background6');

for (let i = 1; i <= rain6total; i++) {
    let rain6 = document.createElement("div");
    rain6.className = "rain6";
    background6.appendChild(rain6);
}