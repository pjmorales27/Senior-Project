function createTable() {
  // create table element
  var table = document.createElement('table');
  
  // create table header row element
  var headerRow = document.createElement('tr');
  
  // create table header cells and add them to header row
  var headerCell1 = document.createElement('th');
  var headerCell2 = document.createElement('th');
  headerCell1.innerHTML = 'Column 1';
  headerCell2.innerHTML = 'Column 2';
  headerRow.appendChild(headerCell1);
  headerRow.appendChild(headerCell2);
  
  // add header row to table
  table.appendChild(headerRow);
  
  // create table data rows and cells and add them to table
  for (var i = 1; i <= 3; i++) {
    var row = document.createElement('tr');
    var cell1 = document.createElement('td');
    var cell2 = document.createElement('td');
    cell1.innerHTML = 'Row ' + i + ', Column 1';
    cell2.innerHTML = 'Row ' + i + ', Column 2';
    row.appendChild(cell1);
    row.appendChild(cell2);
    table.appendChild(row);
  }
  
  // add table to div
  var div = document.getElementById('myTable');
  div.appendChild(table);
}

