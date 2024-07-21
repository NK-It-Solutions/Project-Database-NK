//Automatização do Slider

document.addEventListener('DOMContentLoaded', function () {
    var myCarousel = document.querySelector('#mainslider');
    var carousel = new bootstrap.Carousel(myCarousel, {
        interval: 5000,
        ride: 'carousel'
    });
});

//Fim da automatização do Slider

//Interação dos Cards do Serviços

const tabs = document.querySelectorAll('.tab-btn');

tabs.forEach(tab => tab.addEventListener('click', () => tabClicked(tab)));

const tabClicked = (tab) => {
    const contents = document.querySelectorAll('.content');
    contents.forEach(content => {
        content.classList.remove('show');
    });

    const contentId = tab.getAttribute('content-id');
    const content = document.getElementById(contentId);
    
    if (content) {
        content.classList.add('show');
    }
};

//dark mode

let trilho = document.getElementById("trilho")
let body = document.querySelector("body")

trilho.addEventListener('click', ()=>{
    trilho.classList.toggle('dark')
    body.classList.toggle('dark')
})
