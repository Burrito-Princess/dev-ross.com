

function tableCreate() {
    const body = document.body,
          tbl = document.createElement('table');
    tbl.style.width = '100px';
    tbl.style.border = '1px solid black';
  
    for (let i = 0; i < 6; i++) {
      const tr = tbl.insertRow();
      for (let j = 0; j < 2; j++) {
          const td = tr.insertCell();
          td.appendChild(document.createTextNode(`hello`));
          td.style.border = '1px solid black';
        
      }
    }
    body.appendChild(tbl);
  }
  
  tableCreate();