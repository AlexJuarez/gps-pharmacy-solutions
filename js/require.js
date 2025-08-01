(function() {
    const loaded = new Set();

function require(target) {
    console.log(`Loading ${target}`);

    let res, rej;
    const promise = new Promise((resolve, reject) => {
        res = resolve;
        rej = reject;
    }).catch((err) => {
        console.error(`Error loading ${target}:`, err);
    });

    async function find(target) {
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
            })
        }
    }

    const handleReady = (() => {
        find(target);
        if (document.readyState === 'complete') {
            document.removeEventListener('DOMContentLoaded', handleReady);
        }
    }).bind(this);

    if (document.readyState === 'complete') {
       handleReady()
    } else {
        document.addEventListener('DOMContentLoaded', handleReady);
    }

    promise.catch((err) => {
        console.error(`Error loading ${target}:`, err);
        rej(err);
    });

    return promise;
}

window.require = require;
})();
