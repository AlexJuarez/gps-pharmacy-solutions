async function require(target) {
    console.log(`Loading ${target}`);

    const loaded = new Set();

    let res, rej;
    const promise = new Promise((resolve, reject) => {
        res = resolve;
        rej = reject;
     }).catch((err) => {
        console.error(`Error loading ${target}:`, err);
     });

    function require(target) {
        const scripts = document.querySelectorAll('script[src]');
        for (const script of scripts) {
            if (loaded.has(script.src))
                continue;


            if (script.readyState === 'complete')
                loaded.add(script.src);

            if (script.src.toLowerCase().includes(target.toLowerCase()) && window[target] != null) {
                console.log(`${target} script loaded successfully:`, script.src);
                res(window[target]);
                return;
            }
        }

        if (window.readyState === 'complete') {
            rej(new Error(`Failed to load ${target} script`));
            return;
        }
    }


    document.addEventListener('DOMContentLoaded', () => {
        require(target);
    }, { once: true });

    document.addEventListener('readystatechange', (event) => {
        require(target);
    });

    return promise;
}

window.require = require;
