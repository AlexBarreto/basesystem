const config = {
  type: "bar",
  data: {
    labels: [
      "Jan",
      "Fev",
      "Mar",
      "Abr",
      "Mai",
      "Jun",
      "Jul",
      "Ago",
      "Set",
      "Out",
      "Nov",
      "Dez",
    ],
    datasets: [
      {
        label: "Faturamento",
        data: [10, 10, 5, 14, 20, 15, 6, 14, 8, 12],
        borderWidth: 3,
        borderColor: "#00FFFF",
        backgroundColor: "#00FFFF",
      },
      {
        label: "Despesas",
        data: [2, 4, 5, 7, 10, 5, 1, 3, 7, 21],
        borderWidth: 3,
        borderColor: "#CD5C5C",
        backgroundColor: "#CD5C5C",
      },
    ],
  },
};

const myChart = new Chart(document.getElementById("mygrafico"), config);
