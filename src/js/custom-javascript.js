// Add your JS customizations here

const menu = document.getElementById('main-nav');
document.addEventListener('scroll', function(e){
    // console.log(window.scrollY)
    if (window.scrollY > 60) {
        menu.classList.add('black');
    } else {
        menu.classList.remove('black');
    }


})




// ========= Slider for testimonials ===========

const testimonials = document.querySelectorAll('.testimonials-listing-container .listing-item-container');
let activeId = 0;
const activeClass = 'active';
testimonials[activeId].classList.add(activeClass)

function addBulletEements(){
    const bulletsBox = document.querySelector('.bullets-container-first');
    testimonials.forEach((e, i)=>{
        const bullet = document.createElement('div');
        bullet.classList.add(`bullet`);
        bullet.classList.add(`bullet-${i}`);
        bullet.addEventListener('click', loadImg)
        bulletsBox.appendChild(bullet);
    })
    activateBullet();
}
addBulletEements()

function loadImg(e) {
    const el = e.target;
    if(!el.classList.contains(activeClass)){
        const id = el.className[el.className.length - 1]
        const bullets = document.querySelectorAll('.bullets-container-first .bullet');
        console.log(id)
        bullets[activeId].classList.remove(activeClass);
        testimonials[activeId].classList.remove(activeClass);
        activeId = Number(id);
        testimonials[activeId].classList.add(activeClass);


        el.classList.add(activeClass);

        // checkArrowShow()
    }
    
}
function activateBullet(){
    const bullets = document.querySelectorAll('.bullets-container-first .bullet');
    bullets.forEach(e=>{
        if(e.classList.contains(activeClass)) {
            e.classList.remove(activeClass);
        }
    })
    bullets[activeId].classList.add(activeClass);
}
