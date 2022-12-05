const track = document.querySelector('.slidetrack');
const slideses = Array.from(track.children);
const nxtbtn = document.querySelector('.rightbutton');
const prvbtn = document.querySelector('.leftbutton');
const dotnav = document.querySelector('.slideshownav');
const dots = Array.from(dotnav.children);

const slidesize = slideses[0].getBoundingClientRect().width;

// when i click left move slide to left
// when i click right move slide right
// arrange slided next one to each other

const setslideposition = (slided, index) =>{
    slided.style.left = slidesize *index +'px';
}
slideses.forEach(setslideposition);

const movetoslide = (track, currentSlide, targetslide) => {
    track.style.transform = 'translateX(-' + targetslide.style.left +')';
    currentSlide.classList.remove('currentslide');
    targetslide.classList.add('currentslide');
}

const updatedots = (currentdot, targetdot) => {
    currentdot.classList.remove('currentslide');
    targetdot.classList.add('currentslide');
}

prvbtn.addEventListener('click', e => {
    const currentSlide = track.querySelector('.currentslide');
    const prevslide = currentSlide.previousElementSibling;
    const currentdot = dotnav.querySelector('.currentslide');
    const prevdot = currentdot.previousElementSibling;
   movetoslide(track, currentSlide, prevslide);
   updatedots(currentdot, prevdot);  
});


nxtbtn.addEventListener('click', e => {
    const currentSlide = track.querySelector('.currentslide');
    const nextslide = currentSlide.nextElementSibling;
    const currentdot = dotnav.querySelector('.currentslide');
    const nextdot = currentdot.nextElementSibling;
   movetoslide(track, currentSlide, nextslide);
   updatedots(currentdot,nextdot);  
});


dotnav.addEventListener('click',e =>{
    const  targetdot = e.target.closest('button');

    if (!targetdot) return;

    const currentSlide = track.querySelector('.currentslide');
    const currentdot = dotnav.querySelector('.currentslide');
    const targetindex = dots.findIndex(dot => dot === targetdot);
    const targetslide = slideses[targetindex]; 

    movetoslide(track, currentSlide, targetslide);

    updatedots(currentdot,targetdot);
})