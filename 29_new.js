// $(document).ready(function () {
//     let divWidth = $('#sliderBoard').width();
//     let imgCount = $('#content li').length;

//     $('#content').width(divWidth * imgCount); //ul的寬度
//     $('#content li').width(divWidth); //li的寬度

//     for (let i = 0; i < imgCount; i++) {
//         $('#contentButton').append('<li></li>');
//     }
//     $('#contentButton li:nth-child(1)').addClass('clickMe');

//     let index;
//     $('#contentButton li').click(function () {
//         index = $(this).index();

//         $('#content').animate({
//             left: divWidth * index * -1,
//         });

//         $(this).addClass('clickMe');
//         $('#contentButton li').not(this).removeClass('clickMe');
//     });
// });


let divWidth = document.querySelector('#sliderBoard');
let imgCount = document.querySelectorAll('#content>li');
let contentButton = document.querySelector('#contentButton');
let content = document.querySelector('#content');

content.style.width = `${divWidth.offsetWidth * imgCount.length}px`;
imgCount.forEach((e) => {
    e.style.width = `${divWidth.offsetWidth}px`;
});

for (let x = 0; x < imgCount.length; x++) {
    let node = document.createElement("li");
    contentButton.appendChild(node);
}

contentButton.querySelector('li:nth-child(1)').classList.add('clickMe');
let clickLi = document.querySelectorAll('#contentButton>li');

let active = 0;
let total = imgCount.length;
let rate = 50;
let set = null;

clickLi.forEach((e, a) => {
    e.addEventListener('click', () => {
        Roll(-a * divWidth.offsetWidth);
        rate = 50;
    });
});

function Roll(range) {
    clearInterval(content.set);
    let speed = content.offsetLeft < range ? rate : (0 - rate);
    content.set = setInterval(function () {
        content.style.left = content.offsetLeft + speed + "px";
        let leave = range - content.offsetLeft;
        if (Math.abs(leave) <= Math.abs(speed)) {
            clearInterval(content.set);
            content.style.left = range + "px";
        }
    }, 10);
}