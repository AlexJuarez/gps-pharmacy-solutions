const loaded = new Set();

function require(target) {
    console.debug(`Loading ${target}`);

    let res, rej;
    const promise = new Promise((resolve, reject) => {
        res = resolve;
        rej = reject;
    }).catch((err) => {
        console.error(`Error loading ${target}:`, err);
    });

    function find(target) {
        const scripts = document.querySelectorAll('script');
        for (const script of scripts) {
            if (loaded.has(script.src) || window[target]) {
                res(window[target]);
            };
            script.addEventListener('load', (event) => {
                loaded.add(event.target.src);
                if(script.src.toLowerCase().includes(target.toLowerCase()) || window[target] != null) {
                    console.debug(`${target} script loaded successfully:`, script.src);
                    res(window[target]);
                }

                if (loaded.size === scripts.length) {
                    rej(`Failed to load ${target}`);
                }
            }, { once: true})
        }
    }

    function handleReady() {
        find(target);
    }

    if (document.readyState === 'complete') {
        find(target);
    } else {
        document.addEventListener('DOMContentLoaded', () => handleReady(), {once: true});
    }

    return promise;
}

window.require = require;
