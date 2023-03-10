import Chart from "chart.js/auto";
import axios from 'axios';

const ctx = document.getElementById("myChart").getContext("2d");
const myChart = new Chart(ctx, {
    type: "line",
    data: {
        labels: ["月", "火曜", "水曜", "木曜", "金曜", "土曜", "日曜"],
        datasets: [
            {
                label: "data 1",
                //data: コントローラから取得,
                borderColor: "rgb(75, 192, 192)",
                backgroundColor: "rgba(75, 192, 192, 0.5)",
            },
        ],
    },
});

// Laravelのチャートデータ取得処理の呼び出し
axios
    .get("/chart-get")
    .then((response) => {
        // Chartの更新
        myChart.data.datasets[0].data = response.data;
        myChart.update();
    })
    .catch(() => {
        alert("失敗しました");
    });
