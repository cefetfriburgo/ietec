


let criaOpcoes = (tamRelativo, habilitaLegenda, titulo) => {
  return {
    maintainAspectRatio: tamRelativo, //false
    legend: { display: habilitaLegenda }, //false
    title: {
      display: true,
      text: titulo //titulo
    }
  }
}

const criaGrafico = (url, opcoes, seletorContainerHTML, tipoGrafico, criaOptFunc) => {
  let xhttp = new XMLHttpRequest();
  
  const carregaData = (respostaServidor) => {
    let data = {}
    data.labels = respostaServidor.labels
    data.datasets = []
    objDataset = {}
    
    objDataset.label = respostaServidor.datasets[0].label
    objDataset.backgroundColor = respostaServidor.datasets[0].backgroundColor
    objDataset.data = respostaServidor.datasets[0].data
    
    data.datasets.push(objDataset)
    return data
  }
  
  const carregaGrafico = (containerId, tipoGraf, dados, opcoes) => {
    const elemHTML = document.querySelector(containerId)
    new Chart(elemHTML, {type: tipoGraf,data: dados, options: opcoes});
  }
  
  xhttp.onreadystatechange = function() {
    if(this.readyState==4 && this.status==200) {
      let respostaServidor = JSON.parse(this.responseText);
      let data = carregaData(respostaServidor)
      console.log(opcoes)
      carregaGrafico(seletorContainerHTML, tipoGrafico, data, opcoes)
    }
  }
  
  xhttp.open('GET', url, false);
  xhttp.send();

}

//cria grafico de setor
criaGrafico('/dashboard/listSetor'
            , criaOpcoes(false, false, 'Empresas por Setor')
            ,"#bar-chart", "bar")


criaGrafico('/dashboard/maisUtilizadas', 
            criaOpcoes(false, true, 'Mais utilizadas')
            ,"#barSmallChart", "bar")

criaGrafico('/dashboard/populacao'
          , criaOpcoes(false, true, 'População (mi)')
            , "#pizzaSmall", "pie")
  
            /*
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
  */
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
      labels: ["JS", "PHP", "CPP", "CSS", "HTML"],
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