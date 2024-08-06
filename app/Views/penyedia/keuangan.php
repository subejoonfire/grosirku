<?= $this->extend('penyedia\components\header-footer') ?>
<?= $this->section('content') ?>

<body>
    <div class="container">
        <div class="sidebar-container">
            <div class="sidebar">
                <a href="/penyedia">
                    <div class="barang">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                            viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M36.8 192H603.2c20.3 0 36.8-16.5 36.8-36.8c0-7.3-2.2-14.4-6.2-20.4L558.2 21.4C549.3 8 534.4 0 518.3 0H121.7c-16 0-31 8-39.9 21.4L6.2 134.7c-4 6.1-6.2 13.2-6.2 20.4C0 175.5 16.5 192 36.8 192zM64 224V384v80c0 26.5 21.5 48 48 48H336c26.5 0 48-21.5 48-48V384 224H320V384H128V224H64zm448 0V480c0 17.7 14.3 32 32 32s32-14.3 32-32V224H512z" />
                        </svg>
                        <span>Barang Saya</span>
                    </div>
                </a>
                <a href="/penyedia/pesanan">
                    <div class="order">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                            viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M160 112c0-35.3 28.7-64 64-64s64 28.7 64 64v48H160V112zm-48 48H48c-26.5 0-48 21.5-48 48V416c0 53 43 96 96 96H352c53 0 96-43 96-96V208c0-26.5-21.5-48-48-48H336V112C336 50.1 285.9 0 224 0S112 50.1 112 112v48zm24 48a24 24 0 1 1 0 48 24 24 0 1 1 0-48zm152 24a24 24 0 1 1 48 0 24 24 0 1 1 -48 0z" />
                        </svg>
                        <span>Pesanan Saya</span>
                    </div>
                </a>
                <a href="/penyedia/keuangan">
                    <div class="finance">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                            viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V192c0-35.3-28.7-64-64-64H80c-8.8 0-16-7.2-16-16s7.2-16 16-16H448c17.7 0 32-14.3 32-32s-14.3-32-32-32H64zM416 272a32 32 0 1 1 0 64 32 32 0 1 1 0-64z" />
                        </svg>
                        <span>Keuangan</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="body-container">
            <div class="content-container">
                <div class="header-container">
                    <h2>Informasi Keuangan</h2>
                </div>
                <div class="finance-container">
                    <div class="today-income-container">
                        <h2>Akan didapatkan</h2>
                        <span>Total</span>
                        <h1>Rp0</h1>
                    </div>
                    <div class="weekly-income-container">
                        <h2>Minggu ini</h2>
                        <span>Total</span>
                        <h1>Rp0</h1>
                    </div>
                    <div class="monthly-income-container">
                        <h2>Bulan ini</h2>
                        <span>Total</span>
                        <h1>Rp0</h1>
                    </div>
                    <div class="total-income-container">
                        <h2>Total Pendapatan</h2>
                        <h1>Rp0</h1>
                    </div>
                </div>
                <div class="income-graphics">
                    <div class="income-graphics-header">
                        <h1>Grafik Pendapatan</h1>
                        <span>Pendapatan dalam perbulan</span>
                    </div>
                    <div id="chart_div" style="width: 100%; height: 500px;"></div>
                </div>
            </div>
        </div>
    </div>
</body>
<footer>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', { 'packages': ['corechart'] });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Bulan', 'Penjualan', 'Pengeluaran'],
                ['Januari', 1000, 400],
                ['Februari', 1170, 460],
                ['Maret', 660, 1120],
                ['April', 1030, 540],
                ['Mei', 2000, 850],
                ['Juni', 1250, 490],
                ['Juli', 870, 300],
                ['Agustus', 1020, 350],
                ['September', 1500, 600],
                ['Oktober', 990, 400],
                ['November', 1800, 950],
                ['Desember', 1600, 750]
            ]);

            var options = {
                hAxis: { titleTextStyle: { color: '#333' } },
                vAxis: { minValue: 0 }
            };

            var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
    </script>
</footer>

</html>