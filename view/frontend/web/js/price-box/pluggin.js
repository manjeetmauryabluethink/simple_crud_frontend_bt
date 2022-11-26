define(function () {
    'use strict';

    return function (target) { 
        // modify target
        var reloadPrice = target.reloadPrice;
        target.reloadPrice = function() {
          alert("hello");
        };
        return target;
    };
});