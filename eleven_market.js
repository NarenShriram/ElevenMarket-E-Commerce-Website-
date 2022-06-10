const card=document.querySelector('#change');
const conatiner=document.querySelector('#change1');
const search=document.querySelector('#search');
const section=document.querySelector('#change2')
card.addEventListener('mousemove', runEvent);

function runEvent(e){
    console.log(`Event type:${e.type}`);

    conatiner.style.backgroundColor=`rgb(${e.offsetX},${e.offsetY},40)`;
    search.style.backgroundColor=`rgb(${e.offsetX},${e.offsetY},40)`;
    section.style.backgroundColor=`rgb(${e.offsetX},${e.offsetY},40)`;
}

//slider
const slider=document.querySelector('.slider');
M.Slider.init(slider, {
    indicators: false,
    height:500,
    transition:500,
    interval:6000
});
