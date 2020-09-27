const navcontent = document.querySelector('.navContent');
const thongke = document.querySelector('#thongke');
const quanlythuoc = document.querySelector('#quanlythuoc');
const quanlynhanvien = document.querySelector('#quanlynhanvien');
const quanlyvatlieu = document.querySelector('#quanlyvatlieu');
thongke.addEventListener('click', () => {
    navcontent.innerHTML = `<?php include_once "./thongkeAll.php";?> `;
    let draw = () => {
        const chartMain = document.querySelector('.mainChart_items');
        let chartItems = [6020, 8050, 8674, 7580, 4905, 5807, 8235, 5658, 7897, 2345, 8857, 7463];
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
    draw();
})
quanlythuoc.addEventListener('click', () => {
    navcontent.innerHTML = `<?php include_once "./quanlythuoc.php";?>`;
})
quanlynhanvien.addEventListener('click', () => {
    navcontent.innerHTML = `<?php include_once "./quanlynhanvien.php";?>`;
})
quanlyvatlieu.addEventListener('click', () => {
    navcontent.innerHTML = `<?php include_once "./quanlyvatlieu.php";?>`;
})

test();