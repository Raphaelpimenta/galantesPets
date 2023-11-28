export default function initLinkMenu (){
    const links = document.querySelectorAll('.header-menu li a');

    function ativarLink(link){
        const url = location.href;
        const href = link.href;

        if (url.includes(href)){
            link.classList.add('ativado');
        }
    }

    links.forEach(ativarLink)
}