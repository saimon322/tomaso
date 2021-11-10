// DOM content load
$(() => {
    document.querySelector('.hamburger').addEventListener('click', () => {
        console.log(111111);
        document.getElementsByClassName('hamburger').classList.toggle("main--main-bg");
        this.classList.add('close');
    });
})
