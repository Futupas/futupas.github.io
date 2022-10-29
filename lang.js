'use strict';

const language = window.location.pathname.split('/').filter(x => x.length)[0];
window.localStorage['lang'] = lang;
