function getRandomColor(){
    var letters = '0123456789ABCDEF';
    var color = '#';
    for (var i = 0; i < 6; i++){
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color+'60';
}

    window.onload = function(){
        var rows = document.getElementsByClassName('table__row');
        var month = [];
        var values = [];
        var colors = [];
    for (var i = 0; i < rows.length; i++){
        var cell = rows[i].getElementsByClassName('table__cell')

        month.push(cell[0].innerHTML);
        values.push(cell[1].innerHTML);
        colors.push(getRandomColor())

        if (i == 80)
            break;
    }
    console.log(colors)

    var ctx = document.getElementById("myChart");
    var myChart = new Chart(ctx, {
     type: 'bar',
        data: {
        labels: month,
        datasets: [{
            label: 'Курс Фунта',
            data: values,
            backgroundColor: getRandomColor(),
            borderColor: getRandomColor(),
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
}