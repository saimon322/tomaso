// DOM content load
$(() => {
    document.querySelector('.hamburger').addEventListener('click', () => {
        console.log(111111);
        document.getElementsByClassName('hamburger').classList.toggle("main--main-bg");
        this.classList.add('close');
    });
    document.querySelector('.menu-item-has-children a svg').addEventListener('click', (e) => {
        e.preventDefault()
    });

    document.querySelector('.menu-item-has-children a svg').accordion();
})
