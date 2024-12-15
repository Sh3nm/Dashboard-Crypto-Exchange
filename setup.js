const chart = document.querySelector('#chart').getContext('2d');

new Chart(chart, {
    type: 'line',
    data: {
        labels: ['Jan', 'Feb', 'Mart', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec', 'Jan', 'Feb', 'Mart', 'Apr'],

        datasets: [
            {
                label: 'GOLD',
                data: [1880, 1915, 1959, 1895, 1836, 1807, 1765, 1710, 1660, 1632, 1768, 1822, 1928, 1881],
                borderColor: 'gold',
                borderWidth: 2
            },
            {
                label: 'ETH',
                data: [1585, 1604, 1821, 1868, 1873, 1933, 1856, 1645, 1670, 1815, 2051, 2281, 2283, 3339, 3647, 3014],
                borderColor: 'blue',
                borderWidth: 2
            },
            {
                label: 'BTC',
                data: [23125, 23130, 28473, 29252, 27216, 30472, 29232, 25937, 26962, 34650, 37712, 42272, 42580, 61193, 71332, 60666],
                borderColor: 'red',
                borderWidth: 2
            }
        ]
    },
    options: {
        responsive: true
    }
})

// show or hide sidebar //

const menuBtn = document.querySelector('#menu-btn');
const closeBtn = document.querySelector('#close-btn');
const sidebar = document.querySelector('aside');

menuBtn.addEventListener('click', () => {
    sidebar.style.display = 'block';
})
closeBtn.addEventListener('click', () => {
    sidebar.style.display = 'none';
})

// change theme //
const themeBtn = document.querySelector('.theme-btn');

themeBtn.addEventListener('click', () => {
    document.body.classList.toggle('dark-theme');

    themeBtn.querySelector('span:first-child').classList.toggle('active');
    themeBtn.querySelector('span:last-child').classList.toggle('active');
})