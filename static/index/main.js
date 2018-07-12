// console.log('index----1212--------main');
define(function(require,exports,module) {
    // var title= document.getElementById('title');
    // title.innerHTML = "yes it works";
    var changeText = require('../change_text.js');
    var title = document.getElementById('title');
    title.innerHTML = changeText.text;
})