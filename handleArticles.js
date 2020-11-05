var title = document.getElementById("titleVal").innerText
var id = document.getElementById("idVal").innerText
var spc = document.getElementById("spec-cont-proc").innerText
var desc = document.getElementById("description").innerText
var classVal = document.getElementById("classVal").innerText

var titleInp = document.getElementById("title")
var idInp = document.getElementById("id")
var spcInp = document.getElementById("spc")
var descInp = document.getElementById("desc")
var classValInp = document.getElementById("class")

$('#editRecordModal').on('shown.bs.modal', function () {
    console.log("here")
    titleInp.value = title
    idInp.value = id
    spcInp.value = spc
    descInp.value = desc
    classValInp.value = classVal
})