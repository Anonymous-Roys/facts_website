const text = "I am Bernard Cobbah";
const typingSpeed = 100; // Adjust this value to control typing speed
const caretBlinkSpeed = 500; // Adjust this value to control caret blink speed

const typingContainer = document.getElementById("typing-text");
let charIndex = 0;

function typeText() {
  if (charIndex < text.length) {
    typingContainer.innerHTML += text.charAt(charIndex);
    charIndex++;
    setTimeout(typeText, typingSpeed);
  } else {
    setTimeout(eraseText, 1000);
  }
}

function eraseText() {
  if (charIndex > 0) {
    typingContainer.innerHTML = text.substring(0, charIndex - 1);
    charIndex--;
    setTimeout(eraseText, typingSpeed / 2);
  } else {
    setTimeout(typeText, 500);
  }
}

typeText();
setInterval(() => {
  const caret = document.getElementById("caret");
  caret.style.display = (caret.style.display === "none") ? "inline" : "none";
}, caretBlinkSpeed);

async function f() {
 let result = 'new!';
 let promise = new Promise((resolve, reject) => {
 setTimeout(() => resolve('done!'), 1000);
 });
result = await promise;
console.log(result);
}

f();


var p = new Promise((resolve, reject) => {
reject(Error('Promise Fails!'))
})
p.catch(error => console.log(error.message))
p.catch(error => console.log(error.message))



const myPromise = () => Promise.resolve('I have resolved!');

function firstFunction() {
 myPromise().then(res => console.log(res));
 console.log('second');
}

async function secondFunction() {
 console.log(await myPromise());
 console.log('second');
}

firstFunction();
secondFunction();



const firstPromise = new Promise((res, rej) => {
 setTimeout(res, 500, 'one');
});

const secondPromise = new Promise((res, rej) => {
 setTimeout(res, 100, 'two');
});
Promise.race([firstPromise, secondPromise]).then(res => console.log(res));