{{-- Menggunakan layout induk --}}
@extends('layouts.app')

{{-- Mengatur judul halaman --}}
@section('title', 'Dashboard')

{{-- Memasukkan konten utama --}}
@section('content')

{{-- content --}}

@endsection

{{-- Push script khusus untuk chart dashboard --}}
@push('scripts')
    <script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>
    {{-- Ganti dengan script chart Anda nanti --}}
    <script>
        // Placeholder simple untuk chart area
        var ctx = document.getElementById("visualisasiDiagramKualitas");
        if(ctx) { // Cek jika elemen canvas ada
             ctx.style.display = 'block'; // Tampilkan canvas jika JS aktif
             document.querySelector('.chart-area .text-center').style.display = 'none'; // Sembunyikan placeholder
             var myLineChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ["Tugas 1", "Tugas 2", "Tugas 3", "Tugas 4", "Tugas 5"], // Label tugas
                    datasets: [{
                        label: "Nilai Rata-rata",
                        lineTension: 0.3,
                        backgroundColor: "rgba(78, 115, 223, 0.05)",
                        borderColor: "rgba(78, 115, 223, 1)",
                        pointRadius: 3,
                        pointBackgroundColor: "rgba(78, 115, 223, 1)",
                        pointBorderColor: "rgba(78, 115, 223, 1)",
                        pointHoverRadius: 3,
                        pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                        pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                        pointHitRadius: 10,
                        pointBorderWidth: 2,
                        data: [80, 85, 78, 90, 88], // Data nilai
                    }],
                },
                options: {
                    maintainAspectRatio: false,
                    layout: { padding: { left: 10, right: 25, top: 25, bottom: 0 } },
                    scales: {
                        xAxes: [{ time: { unit: 'date' }, gridLines: { display: false, drawBorder: false }, ticks: { maxTicksLimit: 7 } }],
                        yAxes: [{ ticks: { maxTicksLimit: 5, padding: 10, suggestedMin: 50, suggestedMax: 100 }, gridLines: { color: "rgb(234, 236, 244)", zeroLineColor: "rgb(234, 236, 244)", drawBorder: false, borderDash: [2], zeroLineBorderDash: [2] } }],
                    },
                    legend: { display: false },
                    tooltips: { /* Pengaturan Tooltip */ }
                }
            });
        }
    </script>
@endpush