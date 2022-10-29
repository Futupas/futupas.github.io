'use strict';

const MAX_PHONE_WIDTH = 1000;
const DEFAULT_MOBILE_TEXT_OPACITY = .7;
const userPrefersDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
const userPrefersLight = window.matchMedia && window.matchMedia('(prefers-color-scheme: light)').matches;

function map(num, frombottom, fromtop, tobottom, totop) {
    let a = num - frombottom;
    a *= (totop-tobottom)/(fromtop-frombottom);
    a += tobottom;
    return a;
}

const body = document.getElementById('body');
const photo = document.getElementById('photo');
const text = document.getElementById('text');
const textDiv = document.querySelector('#text > div');

function setTextBgOpacity(scroll, maxScroll) {
    if (document.documentElement.clientWidth < MAX_PHONE_WIDTH) {
        if (maxScroll) {
            let textbgOpacity = map(scroll, 0, maxScroll / 4, DEFAULT_MOBILE_TEXT_OPACITY, 0);
            textbgOpacity = textbgOpacity < 0 ? 0 : textbgOpacity > DEFAULT_MOBILE_TEXT_OPACITY ? DEFAULT_MOBILE_TEXT_OPACITY : textbgOpacity;
            textDiv.style.background = userPrefersLight ? 
                `rgba(238, 238, 238, ${textbgOpacity})` : 
                `rgba(17, 17, 17, ${textbgOpacity})`;
        } else {
            textDiv.style.background = userPrefersLight ? 
                `rgba(238, 238, 238, ${DEFAULT_MOBILE_TEXT_OPACITY}` : 
                `rgba(17, 17, 17, ${DEFAULT_MOBILE_TEXT_OPACITY}`;
        }
    } else {
        textDiv.style.background = 'transparent';
    }
}
function setBrowserHeaderColor() {
    const color = userPrefersLight ? '#cccccc' : '#333333';

    const tag1 = document.createElement('meta');
    tag1.setAttribute('name', 'theme-color');
    tag1.setAttribute('content', color);
    document.head.appendChild(tag1);

    const tag2 = document.createElement('meta');
    tag2.setAttribute('name', 'msapplication-navbutton-color');
    tag2.setAttribute('content', color);
    document.head.appendChild(tag2);

    const tag3 = document.createElement('meta');
    tag3.setAttribute('name', 'apple-mobile-web-app-status-bar-style');
    tag3.setAttribute('content', color);
    document.head.appendChild(tag3);
}

text.onscroll = (e) => {
    if (document.documentElement.clientWidth < MAX_PHONE_WIDTH) {
        const scroll = text.scrollTop;
        const maxScroll = document.documentElement.clientHeight;
        photo.style.top = scroll / -2 + 'px';
        const opacity = map(scroll, 0, maxScroll / 2, 1, 0);
        photo.style.opacity = (opacity > 0 ? opacity : 0);
        setTextBgOpacity(scroll, maxScroll);
    }
}
window.onresize = (e) => {
    if (document.documentElement.clientWidth < MAX_PHONE_WIDTH) {
        const scroll = text.scrollTop;
        const maxScroll = document.documentElement.clientHeight;
        photo.style.top = scroll / -2 + 'px';
        const opacity = map(scroll, 0, maxScroll / 2, 1, 0);
        photo.style.opacity = (opacity > 0 ? opacity : 0);
    } else {
        photo.style.top = '0px';
        photo.style.opacity = '1';
    }
    setTextBgOpacity();
}

window.onmousemove = (e) => {
    if (document.documentElement.clientWidth >= MAX_PHONE_WIDTH) {
        const x = e.pageX;
        const y = e.pageY;

        const bgValue = userPrefersLight ?
            `radial-gradient(circle at ${x}px ${y}px, #ffffff 0%, #cccccc 100%)` :
            `radial-gradient(circle at ${x}px ${y}px, #000000 0%, #333333 100%)`;
        body.style.background = bgValue;
    } else {
        body.style.background = userPrefersLight ? '#eeeeee' : '#111111';
    }
}

setTextBgOpacity();
setBrowserHeaderColor();
