/*
* -------------------------------------
* FILTERING
* Note : using Isotope library
* -------------------------------------
*/

if (document.querySelector('#timeline')) {

    // Isotope initialization
    const iso = new Isotope('#listing-events', {
        itemSelector: '.event',
        layoutMode: 'vertical'
    });

    // Filters
    let filters = {};

    document.querySelector('.filters').addEventListener('change', (e) => {
        let selected = e.target;
        let filterGroup = selected.getAttribute('name');

        // Fill the filters object
        filters[filterGroup] = `.${e.target.value}`;

        // Concat filters object's values
        let filterValue = concatValues(filters);

        // Render
        iso.arrange({
            filter: filterValue
        })
    });

}

/*
* -------------------------------------
* UTILITIES
* -------------------------------------
*/

// Concatenation of object's properties values
let concatValues = (obj) => {
    let value = '';

    for (let prop in obj) {
        value += obj[prop];
    }
    return value;
};
