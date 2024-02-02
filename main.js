window.onload = function () {
  // Fetch and display all PDFs when the page loads
  fetchPDFs("");

  // Event listener for the dropdown selection
  document
    .getElementById("level-select")
    .addEventListener("change", function () {
      // Fetch and display PDFs based on the selected level
      fetchPDFs(this.value);
    });
};

function fetchPDFs(level) {
  // Fetch PDF data from the server
  fetch("get_pdfs.php?sheet_level=" + level)
    .then((response) => response.json())
    .then((pdfs) => {
      const list = document.getElementById("pdf-list");
      list.innerHTML = ""; // Clear existing content

      // Iterate over each PDF and append its details to the list
       pdfs.forEach((pdf) => {
         const item = document.createElement("div");
         item.classList.add("col-lg-4", "col-md-6", "col-12");
         item.innerHTML = `
            <div class="card mb-4 bg-light">
                <img src="/img/${pdf.sheet_image}" class="card-img-top" alt="Thumbnail">
                <div class="card-body">
                    <h5 class="card-title">${pdf.sheet_title}</h5>
                    <p class="card-text">${pdf.sheet_description}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="${pdf.sheet_url}" class="btn btn-primary" download>Download</a>
                        <span class="badge badge-pill badge-secondary custom-badge">${pdf.sheet_level}</span>
                    </div>
                </div>
            </div>
        `;
         list.appendChild(item);
       });
    });
}
