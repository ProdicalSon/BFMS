// const { plugins } = require("chart.js");

// var btn=document.querySelector(".btn");
var myChart=document.querySelector(".myChart");
var storagePerFile=document.querySelector(".storagePerFile");
var storageChart=document.querySelector(".storage");
// btn.addEventListener("click",function(){alert("hello wolrd")});
let labels=['pdf','word','pictures','videos','other'];
let itemsdata=[11,23,11,9,7];
const data={
    labels: labels,
    datasets: [{
        data:itemsdata,
        backgroundColor: ['red','green','yellow','brown','yellow'],
        borderColor :['transparent'],
        color:['#fff']
    }
    ]
};
const config= {
    type: 'bar',
    data: data,
    options:{
        plugins:{
            legend:{
                display:false,
            },
            title:{
                display: true,
                text:'Number Of Files Stored'
            }
        }
    }
};
const chart1 = new Chart(
    myChart.getContext('2d'),
    config
);
//Storage space used
let spaceLabel=['used','remaining'];
let spaceNum=[11,88];
const storageData={
    labels: spaceLabel,
    datasets: [{
        data:spaceNum,
        backgroundColor: ['cyan','orange'],
        borderColor :['transparent'],
        color:['#fff']
    }
    ]
};
const config2= {
    type: 'doughnut',
    data: storageData,
    options:{
        plugins:{
            title:{
                display: true,
                text: "See how you have used your storage",
            }
        }
    }
};
const chart2 = new Chart(
    storageChart.getContext('2d'),
    config2
);
//Storage Per File
let filesLabels=['pdf','word','graphics','videos','other'];
let spaceFileOccupies=[5,1,6,7,1];
  const fileSpaceData={
    labels:filesLabels,
    datasets: [{
        data:spaceFileOccupies,
        backgroundColor:['yellow','green','cyan','purple','orange'],
        borderColor:['transparent']
    }]
  };
const config3= {
type:'pie',
data:fileSpaceData,
options:{
    plugins:{
        title:{
            display:true,
            text:"How Your Files Have Occupied Space"
        }
    }
}
  };
const chart3 =new Chart(
    storagePerFile,
    config3
);