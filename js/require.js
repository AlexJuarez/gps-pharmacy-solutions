const loaded = new Set();

(async function require(target) {
    console.log(`Loading ${target}`);


    let res, rej;
    const promise = new Promise((resolve, reject) => {
        res = resolve;
        rej = reject;
     }).catch((err) => {
        console.error(`Error loading ${target}:`, err);
     });


    function load(script) {
        return new Promise((res, rej) => {
            if (script.tagName !== 'script') {
                rej('Invalid script tag');
            } else if (loaded.has(script.src)) {
                res(script);
            } else {
                script.addEventListener('onload', () => {
                    loaded.add(script.src);
                    res(script);
                }, { once: true, onerror: () => {
                    rej(`Failed to load ${script.src}`);
                });
            }
        });
    }

    function require(target) {
        const scripts = document.querySelectorAll('script[src]');
        for (const script of scripts) {
            load(script).then((script) => {
                if (window[target] != null) {
                    console.log(`${target} script loaded successfully:`, script.src);
                    res(window[target]);
                }
            }).catch((err) => {
                console.error(`Error loading ${target} script:`, err);
            });
        }

    }

    function handleDomChange(records, observer) {
        for (const record of records) {
            if (record.type === 'childList') {
                record.addedNodes
                    .filter(s => s.tagName === 'script' && !loaded.has(s.src))
                    .forEach((s) => {
                        require();
                    });
            }
        }
    }


    const observer = new MutationObserver()

    document.addEventListener('DOMContentLoaded', () => {
        require(target);
    }, { once: true });

    document.addEventListener('readystatechange', () => {
        require(target);
    });

    return promise;
})()

window.require = require;
