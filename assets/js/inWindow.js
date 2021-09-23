var winSize;

function getWindowSize() {
            var winW,WinH = 0;
            if (document.body && document.body.offsetWidth) {
                winW = document.body.offsetWidth;
                winH = document.body.offsetHeight;
            }
            if (document.compatMode == 'CSS1Compat' &&
                document.documentElement &&
                document.documentElement.offsetWidth) {
                winW = document.documentElement.offsetWidth;
                winH = document.documentElement.offsetHeight;
            }
            if (window.innerWidth && window.innerHeight) {
                winW = window.innerWidth;
                winH = window.innerHeight;
            }
            return {w:winW, h:winH};
        }

winSize = getWindowSize();    

function inView(element) {
                var box = element.getBoundingClientRect();
                if ((box.bottom < 0) || (box.top > winSize.h)){
                    return false;
                }
                return true;
}