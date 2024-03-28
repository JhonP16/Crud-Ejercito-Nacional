document.getElementById("productForm").addEventListener("submit", function(event){
    event.preventDefault();
    // Cancela el evento si este es cancelable, sin detener el resto del funcionamiento del evento,
    // es decir, puede ser llamado de nuevo. 
    const productName = document.getElementById("productName").value;   
    const productRef = document.getElementById("productRef").value;   
    const productCant = document.getElementById("productCant").value;   
    const productPrice = document.getElementById("productPrice").value;
    
    if(productName && productRef && productCant && productPrice){
        const productTableBody = document.getElementById("productTableBody");
        const newRow = document.createElement("tr");
        newRow.innerHTML = `<td>${productName}</td><td>${productRef}</td><td>${productCant}</td><td>${productPrice}</td>`;
        productTableBody.appendChild(newRow);
        document.getElementById("productName").value = "";
        document.getElementById("productRef").value = "";
        document.getElementById("productCant").value = "";
        document.getElementById("productPrice").value = "";

    }else{
        alert("Por favor ingrese el nombre del producto, la referencia, la cantidad y el precio.");
    }
});