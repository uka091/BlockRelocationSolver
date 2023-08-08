const express = require('express');
const { exec } = require('child_process');
const { spawn } = require('child_process');
const app = express();
const port = 3000;


/*
childProcess.on('close', (code) => {
  console.log(`Child process exited with code ${code}`);
});
*/

app.get('/', (req, res) => {

  const executablePath = "..\\restricted-distinct-1.3\\rbrp_bb.exe";
  const arg1 = "..\\restricted-distinct-1.3\\dada\\Zhu_dataset\\3-10-28\\10101.txt";
  const childProcess = spawn(executablePath, [arg1]);

  let layout=[];
  let steps=[]

  childProcess.stdout.on('data', (data) => {
    //console.log(`Output: ${data}`);
    const stringData= data.toString()
    const splitano= stringData.split("++++++++")
    let splitano2=[]
    retriveRegex= /Retrieve (\d*)/gm
    reloactionRegex = /Relocation \d+: \[ *(\d*)] (\d+)->(\d+)/gms
    for (let i =0; i < splitano.length; i++){
      splitano2.push(splitano[i].split("--------"))
    }
    //console.log(splitano2)
  
    for (let i =1; i < splitano2.length; i++){
      for (let j =0; j < splitano2[i].length; j++){
        console.log(splitano2[i][j]+i+"__________"+j)
        let match = retriveRegex.exec(splitano2[i][j])
        if(match!==null){console.log("retrive : "+match[1])
        }
        else{
          let match2 = reloactionRegex.exec(splitano2[i][j])
          
          console.log(match2+" "+ i +" "+j)
          if(match2!==null){console.log("block : "+match2[1]+" from : "+match2[2]+" to : "+match2[3])}else{console.log(reloactionRegex.exec(splitano2[i][j]))}
        }
      
    
      }
    
    }

    console.log(reloactionRegex.exec(splitano2[6][1]))
  
    /*
    //console.log( splitano[0].split(":")[0].split(" ")[3])

    const layoutRegex = /\[ *(\d*)\]/g; 

    var matches = [];
    let match;
    for (let i = 0; i < parseInt(splitano[0].split(":")[0].split(" ")[3]); i++) {
      
    while ((match = layoutRegex.exec(splitano[0].split(":")[i+1])) !== null) {
      matches.push(match[1]);
    }

    layout.push(matches)
    matches = [];
    } 
  //console.log(layout); //layout dobar

  const stepRegex = /Retrieve (\d+).*?Relocation \d+: \[ *(\d*)] (\d+)->(\d+)/gms;
const test=2
  match = stepRegex.exec(splitano[test])
  steps.push({retrive:match[1],relocation:{block:match[2], from:match[3], to:match[4]}})

  console.log(steps)
  console.log(splitano[test])
*/
  });
  
  /*
  childProcess.stderr.on('data', (data) => {
    console.error(`Error: ${data}`);
  });
  */

  



//layout ide 1 2 3 ne 3 2 1
  const tosend = {
    layout : [
      [8,22,4,9,21,15,19,16,17,18],
      [10,3,12,6,25,27,20,14,23,26],
      [28,11,5,2,1,13,24]
    ],
    steps:[
      {retrive:2,relocation:{block:11, from:2, to:6}},
      {retrive:1,relocation:{block:5, from:3, to:4}},
      {retrive:0,relocation:{block:12, from:3, to:9}},
      {retrive:4,relocation:{block:28, from:1, to:3}},
      {retrive:0,relocation:{block:10, from:1, to:6}},
      {retrive:7,relocation:{block:27, from:6, to:3}},
      {retrive:2,relocation:{block:23, from:9, to:3}},
      {retrive:1,relocation:{block:26, from:10, to:9}},
      {retrive:1,relocation:{block:24, from:7, to:9}},
      {retrive:0,relocation:{block:20, from:7, to:5}},
      {retrive:8,relocation:{}},
    ]
  }
  res.json(tosend);
});

app.listen(port, () => {
  console.log(`Server is listening on port ${port}`);
});