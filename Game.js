function isTrue() {
for (i = 0; i < 5; i++) 
if (this == cont.children[i]) 
if (Questions[CurQuest].correct == i) 
trueQuestions++;
begin();
}
function begin() {
CurQuest++;
if (CurQuest >= questLen) {
fin();
return;
}
qst.innerText = Questions[CurQuest].text;
for (i = 1; i < 5; i++) 
cont.children[i].innerText = Questions[CurQuest].options[i - 1];
}
function fin() {

for (i = 0; i < 5; i++) 

cont.removeChild(cont.children[0]);

const h1 = document.createElement("h1");
h1.innerText = "Правильных ответов " + trueQuestions + "/2";
cont.appendChild(h1);}
const cont = document.getElementById("container");

const qst = document.getElementById("question");

let CurQuest = -1;
let trueQuestions = 0;
const questLen = Questions.length;

for (i = 0; i < 4; i++) {
const option = document.createElement("div");
option.classList.add("panel");
option.classList.add("panel--option");
option.addEventListener("click", isTrue);
cont.appendChild(option);
}
begin();