const alltTabsOnPage = [...document.querySelectorAll('[data-admiral-tabs]')]


alltTabsOnPage.forEach(tabs => {

    const init = () => {
        handleActiveTab();
    }

    const connectedTabsContent = document.querySelector(tabs.getAttribute('data-admiral-tabs'))
    const connectedTabsContentChildrens = [...connectedTabsContent.children]
    const tabsChildrens = [...tabs.children]

    const handleActiveTab = () => {
        // if (window.location.pathname != '/site/media.html') {
        //     return;
        // }

        let hash = window.location.hash.substr(1);
        let index = 0;
        if (hash.length) {
            for (const key in tabsChildrens) {
                if (hash === tabsChildrens[key].getAttribute('data-hash')) {
                    index = key;
                }
            }
        }

        tabsChildrens[index].click();
    }

    tabsChildrens.forEach((tab, index) => {
        tab.addEventListener('click', () => {
            tabsChildrens.forEach((tab, index) => {
                tab.classList.remove('admiral-active')
                 jQuery('.document-slider').slick('refresh');
            });

            tab.classList.add('admiral-active')
            tab.classList.add('fade')
            tab.classList.add('in')

            connectedTabsContentChildrens.forEach(tabContent => {
                tabContent.classList.remove('admiral-active')
                tabContent.classList.remove('fade')
                tabContent.classList.remove('in')
            })

            connectedTabsContentChildrens[index].classList.add('admiral-active')

            window.location.hash = tab.getAttribute('data-hash');
        })
    })

    window.onhashchange = function (event) {
        handleActiveTab();
    };

    init()
})