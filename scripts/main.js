function hideScreen(cssTag) {
    console.log(cssTag);
    document.querySelector(cssTag).style.display = 'none';
}

function makeScreenFlex(cssTag) {
    console.log(cssTag);
    document.querySelector(cssTag).style.display = 'flex';
}

function showHome() {

    hideScreen('#aboutMe');
    hideScreen('#portfolio');
    // hideScreen('#portfolio');
    makeScreenFlex('#home');

}

function showAboutMe() {
console.log(1);
    makeScreenFlex('#aboutMe');
    hideScreen('#portfolio');
    // hideScreen('#portfolio');
    hideScreen('#home');

}

function showPortfolio() {

    hideScreen('#aboutMe');
    makeScreenFlex('#portfolio');
    // hideScreen('#portfolio');
    hideScreen('#home');

}


document.querySelector('#homebtn').addEventListener('click', showHome);
document.querySelector('#aboutmebtn').addEventListener('click', showAboutMe);
document.querySelector('#portfoliobtn').addEventListener('click', showPortfolio);