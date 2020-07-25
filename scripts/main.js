function hideScreen(cssTag) {
    document.querySelector(cssTag).style.display = 'none';
}

function makeScreenFlex(cssTag) {
    document.querySelector(cssTag).style.display = 'flex';
}

function showHome() {

    hideScreen('#aboutMe');
    hideScreen('#portfolio');
    hideScreen('#contactMe');
    makeScreenFlex('#home');

}

function showAboutMe() {

    makeScreenFlex('#aboutMe');
    hideScreen('#portfolio');
    hideScreen('#contactMe');
    hideScreen('#home');

}

function showPortfolio() {

    hideScreen('#aboutMe');
    makeScreenFlex('#portfolio');
    hideScreen('#contactMe');
    hideScreen('#home');

}

function showContactMe() {

    hideScreen('#aboutMe');
    makeScreenFlex('#contactMe');
    hideScreen('#portfolio');
    hideScreen('#home');

}

document.querySelector('#homebtn').addEventListener('click', showHome);
document.querySelector('#logo').addEventListener('click', showHome);
document.querySelector('#aboutmebtn').addEventListener('click', showAboutMe);
document.querySelector('#portfoliobtn').addEventListener('click', showPortfolio);
document.querySelector('#contactMebtn').addEventListener('click', showContactMe);