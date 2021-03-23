var selectedRow = null;

function onFormSubmit(){
    if(validate()){
        var formData= readFormData();
        if(selectedRow == null){
            insertNewRecord(formData);
        }
        else {
            updateRecord(formData);
        }
        resetForm();
    }
}

function readFormData(){
    var formData ={};
    formData["nom"] = document.getElementById("nom").value;
    formData["prenom"] = document.getElementById("prenom").value;
    formData["adresse"] = document.getElementById("adresse").value;
    return formData;
}

function insertNewRecord(data){
    var table = document.getElementById("list").getElementsByTagName("tbody")[0];
    var newRow = table.insertRow(table.length);
    cell1 = newRow.insertCell(0);
    cell1.innerHTML = data.nom;
    cell2 = newRow.insertCell(1);
    cell2.innerHTML = data.prenom;
    cell3 = newRow.insertCell(2);
    cell3.innerHTML = data.adresse;
    cell4 = newRow.insertCell(3);
    cell4.innerHTML = `<a onClick="onEdit(this)">Edit</a>
                        <a onClick="onDelete(this)">Delete</a>`;
}

function resetForm(){
    document.getElementById('nom').value="";
    document.getElementById('prenom').value="";
    document.getElementById('adresse').value="";
    selectedRow = null;
}
function onEdit(td){
    selectedRow = td.parentElement.parentElement;
    document.getElementById('nom').value=selectedRow.cells[0].innerHTML;
    document.getElementById('prenom').value=selectedRow.cells[1].innerHTML;
    document.getElementById('adresse').value=selectedRow.cells[2].innerHTML;
}
function updateRecord(formData){
    selectedRow.cells[0].innerHTML = formData.nom;
    selectedRow.cells[1].innerHTML = formData.prenom;
    selectedRow.cells[2].innerHTML = formData.adresse;
}

function onDelete(td){
    if(confirm('Voulez-vous vraiment supprimmer cette ligne?')){
        row = td.parentElement.parentElement;
        document.getElementById("list").deleteRow(row.rowIndex);
        resetForm();
    }
}

function validate(){
    isValid= true;
    if(document.getElementById('nom').value == ""){
        isValid= false;
        document.getElementById("nomValidationError").classList.remove('hide');
    }
    else{
        isValid=true;
        if(!document.getElementById("nomValidationError").classList.contains('hide')){
            document.getElementById("nomValidationError").classList.add('hide')
        }
    }
    return isValid;
}