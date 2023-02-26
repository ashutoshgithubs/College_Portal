$(document).ready(function () {

});



var ctx = document.getElementById("myChart4").getContext("2d");

var myChart = new Chart(ctx, {
  type: "line",
  data: {
    labels: [
      "January",
      "February",
      "March",
      "April",
      "May",
      "jun",
      "July",
      "August",
      "September",
      "October",
      "November",
      "December",
    ],
    datasets: [
      {
        // label: '# of Votes',

        data: [1345, 19, 56, 4, 56, 54, 45, 345, 456, 767, 554, 456],
        backgroundColor: "rgba(240, 202, 24, 0.7)",
        borderColor: "rgba(255, 99, 132, 1)",
        borderWidth: 1,
      },
    ],
  },
  options: {
    responsive: true,
  
    legend: {
      display: false,
      position: "bottom", // top left bottom right
      align: "end", // start end center
      labels: {
        fontColor: "red",
        fontSize: 16,
        boxWidth: 20,
      },
    },
    // Configure ToolTips
    tooltips: {
      enabled: true, // Enable/Disable ToolTip By Default Its True
      backgroundColor: "rgba(247, 202, 24, 1)", // Set Tooltip Background Color
      titleFontFamily: "Comic Sans MS", // Set Tooltip Title Font Family
      titleFontSize: 30, // Set Tooltip Font Size
      titleAlign: "center",
      titleSpacing: 3,
      titleMarginBottom: 20,
      // bodyFontFamily: "Comic Sans MS",
      bodyFontSize: 20,
      // bodyFontStyle: "italic",
      bodyFontColor: "black",
      bodyAlign: "center",
      bodySpacing: 2,
    },

    
  },
});
