// GraficosPequenos
new Chart(document.getElementById("barSmallChart"), {
    type: 'bar',
    data: {
      labels: ["JS", "PHP", "HTML", "CSS", "PYTHON"],
      datasets: [
        {
          label: "Mais Utilizada",
          backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850"],
          data: [7000, 4090, 3650, 2514, 11111]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Melhor Linguagem'
      }
    }
  });
  
  
  new Chart(document.getElementById("pizzaSmall"), {
    type: 'pie',
    data: {
      labels: ["JS", "PHP", "CPP", "CSS", "HTML"],
      datasets: [{
        label: "Population (millions)",
        backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850"],
        data: [2478, 5267, 734, 784, 433]
      }]
    },
    options: {
      maintainAspectRatio: false,
  
      title: {
        display: true,
        text: 'Mais alto nível'
      }
    }
  });
  
  new Chart(document.getElementById("teiaSmall"), {
    type: 'radar',
    data: {
      labels: ["JS", "PHP", "CPP", "CSS", "HTML"],
      datasets: [
        {
          label: "1950",
          fill: true,
          backgroundColor: "rgba(179,181,198,0.2)",
          borderColor: "black",
          pointBorderColor: "#fff",
          pointBackgroundColor: "black",
          data: [8.77, 55.61, 21.69, 6.62, 6.82]
        }, {
          label: "2050",
          fill: true,
          backgroundColor: "rgba(255,99,132,0.2)",
          borderColor: "rgba(255,99,132,1)",
          pointBorderColor: "black",
          pointBackgroundColor: "rgba(255,99,132,1)",
          pointBorderColor: "black",
          data: [25.48, 54.16, 7.61, 8.06, 4.45]
        }, {
          label: "2020",
          fill: false,
          backgroundColor: "blue",
          borderColor: "yellow",
          pointBorderColor: "yellow",
          pointBackgroundColor: "red",
          pointBorderColor: "black",
          data: [70, 20, 16.3, 44, 33]
        }
      ]
    },
    options: {
      maintainAspectRatio: false,
      title: {
        display: true,
        text: 'Pizzaria escalfoni'
      }
    }
  })
  
  //Gráficos Grandes
  new Chart(document.getElementById("bar-chart"), {
    type: 'bar',
    data: {
      labels: ["Intelicia", "macrohard", "Brinnance", "NVideo", "Escafoni Pizza`s"],
      datasets: [
        {
          label: "Renda Anual",
          backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850"],
          data: [-10000000, 45709086, 3070008, 25741146, 58005200]
        }
      ]
    },
    options: {
      maintainAspectRatio: false,
      legend: { display: false },
      title: {
        display: true,
        text: 'Melhor Linguagem'
      }
    }
  });
  
  new Chart(document.getElementById("pie-chart"), {
    type: 'pie',
    data: {
      labels: ["JS", "PHP", "CPP", "CSS", "HTML"],
      datasets: [{
        label: "Population (millions)",
        backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850"],
        data: [2478, 5267, 734, 784, 433]
      }]
    },
    options: {
      maintainAspectRatio: false,
      title: {
        display: true,
        text: 'Mais alto nível'
      }
    }
  });
  
  new Chart(document.getElementById("radar-chart"), {
    type: 'radar',
    data: {
      labels: ["Pizzaria Escalfoni", "Habbob's", "Nilson Hacker", "CSS", "HTML"],
      datasets: [
        {
          label: "1950",
          fill: false,
          backgroundColor: "rgba(179,181,198,0.2)",
          borderColor: "",
          pointBorderColor: "#fff",
          pointBackgroundColor: "black",
          data: [100, 55.61, 121.69, 6.62, 6.82]
        }, {
          label: "2050",
          fill: false,
          backgroundColor: "rgba(255,99,132,0.2)",
          borderColor: "rgba(255,99,132,1)",
          pointBorderColor: "black",
          pointBackgroundColor: "rgba(255,99,132,1)",
          pointBorderColor: "black",
          data: [45.48, 54.16, 117.61, 8.06, 4.45]
        }, {
          label: "2020",
          fill: false,
          backgroundColor: "blue",
          borderColor: "yellow",
          pointBorderColor: "yellow",
          pointBackgroundColor: "red",
          pointBorderColor: "black",
          data: [70, 20, 150, 44, 10]
        }
      ]
    },
    options: {
      maintainAspectRatio: false,
      title: {
        display: true,
        text: 'Pizzaria escalfoni'
      }
    }
  });