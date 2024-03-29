// File#: _1_preloader

(function () {
    setTimeout(function () {
        var preloader = document.getElementById('loader');

        if (preloader) {
            if (!preloader.classList.contains('done')) {
                preloader.classList.add('done');

                setTimeout(() => {
                    preloader.remove();
                }, 500);
            }
        }
    }, 500);
})();
