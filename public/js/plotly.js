document.addEventListener('DOMContentLoaded', () => 
{
    const tester = document.getElementById('barometerchart');

    Plotly.newPlot(barometerchart, 
    [{
        x: [1, 2, 3, 4, 5],
        y: [1, 2, 4, 8, 16]
    }], 
    { margin: { t: 0 } });

});
