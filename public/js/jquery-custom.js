jQuery(document).ready(function(e) {
    "use strict";
    var t = e(window).width();
    
    e(".tlt").textillate({
        selector: ".header-texts",
        loop: true,
        minDisplayTime: 6e3,
        initialDelay: 0,
        autoStart: true,
        "in": {
            effect: "flipInX",
            delayScale: 1.8,
            delay: 45,
            sync: false,
            shuffle: false,
            reverse: false
        },
        out: {
            effect: "bounceOut",
            delayScale: 1.8,
            delay: 45,
            sync: false,
            shuffle: false,
            reverse: true
        }
    });
    
});