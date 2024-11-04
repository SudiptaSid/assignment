(function () {
    window.onload = function () {
        const getHeaderId = document.getElementById("navbar");
        if (getHeaderId) {
            window.addEventListener('scroll', event => {
                const height = 50;
                const {scrollTop} = event.target.scrollingElement;
                document.querySelector('#navbar').classList.toggle('sticky', scrollTop >= height);
            });
        }
        const getId = document.getElementById("backtotop");
        if (getId) {
            const topbutton = document.getElementById("backtotop");
            topbutton.onclick = function (e) {
                window.scrollTo({top: 0, behavior: "smooth"});
            };
            window.onscroll = function () {
                if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
                    topbutton.style.opacity = "1";
                } else {
                    topbutton.style.opacity = "0";
                }
            };
        }
    };
})();