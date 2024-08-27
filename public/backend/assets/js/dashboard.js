$(function () {


  // =====================================
  // Pendaftar
  // =====================================
   var options = {
       series: [
           {
               name: "Pendaftar",
               data: counts,
           },
       ],
       chart: {
           height: 350,
           type: "bar",
       },
       plotOptions: {
           bar: {
               borderRadius: 10,
               dataLabels: {
                   position: "top", // top, center, bottom
               },
           },
       },
       dataLabels: {
           enabled: true,
           formatter: function (val) {
               return val;
           },
           offsetY: -20,
           style: {
               fontSize: "12px",
               colors: ["#304758"],
           },
       },

       xaxis: {
           categories: months,
           position: "top",
           axisBorder: {
               show: false,
           },
           axisTicks: {
               show: false,
           },
           crosshairs: {
               fill: {
                   type: "gradient",
                   gradient: {
                       colorFrom: "#D8E3F0",
                       colorTo: "#BED1E6",
                       stops: [0, 100],
                       opacityFrom: 0.4,
                       opacityTo: 0.5,
                   },
               },
           },
           tooltip: {
               enabled: true,
           },
       },
       yaxis: {
           axisBorder: {
               show: false,
           },
           axisTicks: {
               show: false,
           },
           labels: {
               show: false,
               formatter: function (val) {
                   return val;
               },
           },
       },
       title: {
           text: "Pendaftaran Peserta Baru",
           floating: true,
           offsetY: 330,
           align: "center",
           style: {
               color: "#444",
           },
       },
   };

   var chart = new ApexCharts(document.querySelector("#chart"), options);
   chart.render();

  // =====================================
  // Gender Students
  // =====================================
  var breakup = {
      color: "#adb5bd",
      series: genders,
      labels: ["Laki-laki", "Perempuan"],
      chart: {
          width: 180,
          type: "donut",
          fontFamily: "Plus Jakarta Sans', sans-serif",
          foreColor: "#adb0bb",
      },
      plotOptions: {
          pie: {
              startAngle: 0,
              endAngle: 360,
              donut: {
                  size: "50%",
              },
          },
      },
      stroke: {
          show: false,
      },

      dataLabels: {
          enabled: false,
      },

      legend: {
          show: false,
      },
      colors: ["#5D87FF", "#13DEB9"],

      responsive: [
          {
              breakpoint: 991,
              options: {
                  chart: {
                      width: 150,
                  },
              },
          },
      ],
      tooltip: {
          theme: "dark",
          fillSeriesColor: false,
      },
  };

  var chart = new ApexCharts(document.querySelector("#student"), breakup);
  chart.render();
})
