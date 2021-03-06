jQuery('#world-map-markers').vectorMap({
    map: 'world_mill_en',
    backgroundColor: '#fff',
    borderColor: '#818181',
    borderOpacity: 0.25,
    borderWidth: 1,
    zoomOnScroll: false,
    color: '#009efb',
    regionStyle: {
        initial: {
            fill: '#517EA7'
        }
    },

    markerStyle: {
        initial: {
            r: 9,
            'fill': '#fff',
            'fill-opacity': 1,
            'stroke': '#000',
            'stroke-width': 5,
            'stroke-opacity': 0.4
        },
    },
    backgroundColor: 'transparent',
    zoomButtons: false,
    zoomOnScroll: false,

    enableZoom: false,
    hoverColor: '#009efb',


    series: {
        markers: [{
                latLng: [26.51965, 29.5084],
                name: 'Egypt'
            },
            {
                latLng: [24.543333, 43.172779],
                name: 'Saudi Arabia'
            },
        ],

        regions: [{
            values: {
                EG: '#006C35',
                SA: '#006C35',
            }
        }]

    },

    hoverOpacity: null,
    normalizeFunction: 'linear',
    scaleColors: ['#b6d6ff', '#005ace'],
    selectedColor: '#c9dfaf',
    selectedRegions: [],
    showTooltip: true,
    // onRegionClick: function (element, code, region) {
    //     var message = 'You clicked "' +
    //         region +
    //         '" which has the code: ' +
    //         code.toUpperCase();

    //     alert(message);
    // },


});
