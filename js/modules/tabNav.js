export default function initTabNav() {

    const tabMenu = document.querySelectorAll('.js-tabmenu li');
    const tabContent = document.querySelectorAll('.js-tabcontent section');


    if(tabMenu.length && tabContent.length){
        tabContent[0].classList.add('ativo');

        function ativaTab(index){
            tabContent.forEach((section) => {
                section.classList.remove('ativo')
            });
            tabContent[index].classList.add('ativo')
        }
    
    
        tabMenu.forEach((itemMenu, index) => {
            itemMenu.addEventListener('click', () => {
                ativaTab(index)
            });
        });

    }

    
    function ativaImg(i) {
        const img = document.querySelectorAll('.grid-lista li img')

        img.forEach((itemImg) => {
            itemImg.classList.remove('ativado')
        });
        img[i].classList.add('ativado')
    }

    

    tabMenu.forEach((item, i) => {
        item.addEventListener('click', () => {
            ativaImg(i)
        })
    })
}