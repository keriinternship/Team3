
const thongketuan = document.querySelector('#thongketuan');
const chartThang = [6020, 8050, 8674, 7580, 4905, 5807, 8235, 5658, 7897, 2345, 8857, 7463];
const chartQuy = [6020, 8050, 8674, 7580];
const chartTuan = [6020, 8050, 8674, 7580, 4905, 5807, 8235];
const tuan = document.querySelector('#tuan');
const thang = document.querySelector('#thang');
let chartItems = [6020, 8050, 8674, 7580, 4905, 5807, 8235];
const quy = document.querySelector('#quy');
const chartMain = document.querySelector('.mainChart_items');
function drawChart(chart){
    chartItems.forEach((value, index) => {
        let height_item = (value * 100 / 10000) * 6;
        // tạo thẻ div là các cột của biểu đồ
        let mainChart_item_chart = document.createElement('div');
        mainChart_item_chart.classList.add('mainChart_item-chart');
        // tạo thẻ span chứa giá trị của các giá trị tiền hiển thị
        let cost = document.createElement('span');
        cost.classList.add('cost');
        // tạo thẻ span chứa giá trị à các tháng của năm
        let month = document.createElement('span');
        month.classList.add('mainChart_item-chart_before');
        month.innerText = index + 1;
        cost.innerText = value;
        mainChart_item_chart.appendChild(cost);
        mainChart_item_chart.appendChild(month);
        mainChart_item_chart.setAttribute('style', `height:${height_item}px`);
        chartMain.appendChild(mainChart_item_chart);
    });
}
function removeChart(chartMain){
    while(chartMain.firstChild){
        chartMain.removeChild(chartMain.firstChild);
    }
}
tuan.addEventListener('click', () => {
    chartItems = [...chartTuan];
    removeChart(chartMain);
    drawChart();
});
thang.addEventListener('click', () => {
    chartItems = [...chartThang];
    removeChart(chartMain);
    drawChart();
});
quy.addEventListener('click', () => {
    chartItems = [...chartQuy];
    removeChart(chartMain);
    drawChart();
})

window.onload = () => {
    drawChart();
}