import Chart from 'chart.js/auto';
import axios from 'axios';

const domain = window.location.origin;

axios.get(`${domain}/api/reports`)
    .then(function (response) {
        // handle success
        const labels = response.data.labels
        const first = response.data.valuesFirst
        const second = response.data.valuesSecond

        const data = {
            labels: labels,
            datasets: [
            {
                label: 'My First dataset',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                data: first,
            },
            {
                label: 'My se dataset',
                backgroundColor: 'rgb(100, 99, 132)',
                borderColor: 'rgb(100, 99, 132)',
                data: second,
            }
        ]
        };
        
        const config = {
            type: 'line',
            data: data,
            options: {}
        };
        var ctx = document.getElementById('myChart').getContext('2d');
        new Chart(
            ctx,
            config
        );
    })
    .catch(function (error) {
        // handle error
        console.log(error);
    }
);
