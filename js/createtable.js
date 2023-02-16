let amount = 0;
$('.addfield').click(function() {
   if (amount == 0) {
      createTable();
   }
   let class_table = ".form-create-table";
   let inputNameField = "<input type='text' name='field[" + amount + "]'>";
   let type = getType();
   let option = "";
   for (let i = 0; i < type.length; i++) {
      option += "<option value = '" + type[i] + "'>" + type[i] + "</option>";
   }
   let select = "<select size='1' name='type[" + amount + "][]'>" + option + "</select>";
   let inputLengthField  = "<input type='text' name='field-length[" + amount + "]'>";
   let tr = "<tr>";
   tr += "<td>" + inputNameField + "</td>";
   tr += "<td>" + select + "</td>";
   tr += "<td>" + inputLengthField + "</td>"
   tr += "</tr>"
   $(class_table).append(tr);
   amount++;
});

function getType() {
   return [
      'INT',
      'VARCHAR',
      'DATE'
   ];
}

function createTable() {
   let table = "<table class = 'form-create-table'>";
   table += "<tr>";
   table += "<th>" + "Имя поля"+ "</th>";
   table += "<th>" + "Тип поля" + "</th>";
   table += "<th>" + "Длина поля" + "</th>";
   table += "</table>";
   $('.create-table-form-block').append(table);
}