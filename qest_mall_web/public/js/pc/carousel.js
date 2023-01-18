'use strict';

{
    const next = document.getElementById('next');
    const prev = document.getElementById('prev');
    const ul = document.getElementById('carousel_ul');
    const slides = ul.children;
    let currentIndex = 0;

    function updateButtons() {
        prev.classList.remove('hidden');
        next.classList.remove('hidden');

        if (currentIndex === 0) {
            prev.classList.add('hidden');
        }
        if (currentIndex === slides.length - 1) {
            next.classList.add('hidden');
        }
    }

    function moveSlides() {
        const slideWidth = slides[0].getBoundingClientRect().width;
        ul.style.transform = `translateX(${-100 * currentIndex}%)`;
    }

    function clickNext() {
        currentIndex++;
        updateButtons();
        moveSlides();
    }

    function clickPrev() {
        currentIndex--;
        updateButtons();
        moveSlides();
    }

    updateButtons();

    next.addEventListener('click', () => {
        clickNext();
    })

    prev.addEventListener('click', () => {
        clickPrev();
    })

    window.addEventListener("load",()=> {
        console.log("load");
        timer();
    })

    function timer(){
        setTimeout(()=>{
            clickNext();
            if (currentIndex === slides.length) {
                ul.style.transform = 'translateX(0)';
                currentIndex = 0;
                updateButtons()
            }
            timer();
        },5000)
    }
}
