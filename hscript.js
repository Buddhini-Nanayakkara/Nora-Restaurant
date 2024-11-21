document.addEventListener("DOMContentLoaded", function () {
    const tableBody = document.querySelector("#paymentTable tbody");

    // Fetch payment history data from the server or another source
    fetch("your_api_endpoint")
        .then(response => response.json())
        .then(data => {
            // Clear existing rows
            tableBody.innerHTML = "";

            // Populate payment history table with fetched data
            data.forEach(payment => {
                const row = tableBody.insertRow();
                row.insertCell(0).textContent = payment.date;
                row.insertCell(1).textContent = `$${payment.amount.toFixed(2)}`;
                row.insertCell(2).textContent = payment.description;
            });
        })
        .catch(error => console.error("Error fetching payment data:", error));
});
