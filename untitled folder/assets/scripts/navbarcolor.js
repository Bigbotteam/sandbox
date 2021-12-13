
const pageurl = window.location.pathname
console.log(pageurl)
if (pageurl === '/about/') {
    console.log('about')
    document.querySelector('.aboutdse').classList.add('activeUrl')
}
else if(pageurl ==='/features/') {
    console.log('features')
    document.querySelector('.featuresdse').classList.add('activeUrl')
}
else if(pageurl ==='/contact/') {
    console.log('contact')
    document.querySelector('.contactdse').classList.add('activeUrl')
}
else if(pageurl ==='/resources/') {
    document.querySelector('.resourcesdse').classList.add('activeUrl')
}
else if(pageurl ==='/quiz/') {
    document.querySelector('.resourcesdse').classList.add('activeUrl')
}
else if(pageurl ==='/quiz/individual/') {
    document.querySelector('.resourcesdse').classList.add('activeUrl')
}
else if(pageurl ==='/quiz/couples/') {
    document.querySelector('.resourcesdse').classList.add('activeUrl')
}
else if(pageurl ==='/quiz/individual/') {
    console.log('reasources')
    document.querySelector('.resourcesdse').classList.add('activeUrl')
}
else if(pageurl ==='/quiz/couple/') {
    console.log('reasources')
    document.querySelector('.resourcesdse').classList.add('activeUrl')
}
else if(pageurl ==='/quiz/') {
    console.log('reasources')
    document.querySelector('.resourcesdse').classList.add('activeUrl')
}

else{
    console.log('non')
}
